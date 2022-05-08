<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\ReportAccessLog;
use App\Models\Video;
use Illuminate\Http\Request;

class ReportAccessLogController extends Controller
{
    public function index(Request $request)
    {
        $data = ReportAccessLog::query();
        $filter = [];
        $filter['date'] = $request->get('date');

        if($filter['date']){
            $data->where('date', $filter['date']);
        }

        $total = $data->count('date');
        $data = $data->orderBy('date', 'desc')->paginate(10);
        $params = ['total' => $total];
        $data_show = array();
        foreach($data as $item)
        {
            $value = json_decode($item->data, true);
            $ids = array();
            foreach($value as $k => $v){
                $ids[] = $k;
            }
            $names = Video::query()->select('id','name')->whereIn('id', $ids)->get();
            $i = 0;
            foreach($value as $k => $v)
            {
                $data_show[$item->date][] = [
                    $names[$i]->name => $v
                ];
                $i++;
            }
        }
        return view('cms.report_access_log.index', compact('data', 'data_show', 'filter', 'params'));
    }
}
