<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todo extends Controller
{
    public function add(Request $r){
        $o1=new tododata;
        $o1->date=$r->date;
        $o1->task=$r->task;
        $o1->status=$r->status;
        $o1->time=$r->time;
        $o1->anything=$r->anything;
        $o1->save();
        echo "posted successfully<br>";
        echo " wanna add more<br>";
        return "done for now";
    }
}
