<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AccessLog;
use App\Models\ReportAccessLog as ReportTable;
use Illuminate\Support\Facades\DB;

class ReportAccessLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report_access_log:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = date('Y-m-d', strtotime("-1 days"));
//        $date = date('Y-m-d');
        $date_start = $date . ' 00:00:00';
        $date_end = $date . ' 23:59:59';
        $access_log = AccessLog::query()
            ->where('log_time', '>=', $date_start)
            ->where('log_time', '<=', $date_end)
            ->get();
        $video = array();
        $data = array();
        foreach($access_log as $value)
        {
            if(!in_array($value->video_id, $data))
            {
                $video[$value->video_id] = 1;
                $data[] = $value->video_id;
            }else {
                $video[$value->video_id]++;
            }
        }
        $report = ReportTable::query()
            ->where('date', $date)
            ->first();
        $update = [
            'data' => json_encode($video)
        ];
        if(empty($report))
        {
            $odm = new ReportTable();
            $update['date'] = $date;
            $odm->create($update);
        }
        else {
            DB::table('report_access_log')->update($update);
        }
        echo 'Analyze access log: Done!';
    }
}
