<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Like;
use App\Models\ReportLike as ReportTable;
use Illuminate\Support\Facades\DB;

class ReportLike extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report_like:cron';

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
        $date = date('Y-m-d', strtotime('-3 days'));
        $date_start = $date . ' 00:00:00';
        $date_end = $date . ' 23:59:59';

        $likes = Like::query()
            ->where('created_time', '>=', $date_start)
            ->where('created_time', '<=', $date_end)
            ->get();

        $video = array();
        $data = array();
        foreach($likes as $value)
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
            DB::table('report_like')->update($update);
        }
        echo 'Analyze user\'s likes : Done!';
    }
}
