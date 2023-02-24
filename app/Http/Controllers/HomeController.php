<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request) {

        if($request->date) {
            $filterDate = $request->date;
        }else{
            $filterDate = date('Y-m-d');
        }

        $carbonDate = Carbon::createFromDate($filterDate);
        Carbon::setLocale('pt_BR');

        $data['date_as_string'] = $carbonDate->translatedFormat('d').' de '. ucfirst($carbonDate->translatedFormat('M'));
        $data['date_prev_button'] = $carbonDate->addDay(-1)->format('Y-m-d');
        $data['date_next_button'] = $carbonDate->addDay(2)->format('Y-m-d');

        $data['tasks'] = Task::whereDate('due_date', $filterDate)->get();

        return view('home', $data);
    }
}
