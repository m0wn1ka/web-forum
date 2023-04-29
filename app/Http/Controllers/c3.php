<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\m2;


use Illuminate\Http\Request;

class c3 extends Controller
{
    public function f2(Request $r){
        $o1=new m2;
        $o1->batter=$r->batter;
        $o1->bowler=$r->bowler;
        $o1->comment=$r->comment;
        $o1->save();
        echo "posted successfully<br>";
        echo " wanna add more<br>";
        return view("admin");
    }
    public function f3(Request $r){
        $ans= DB::select("select * from m2s");
        // print_r($ans[0]->batter);
       print_r("batter-bowler-comment");
       echo "<br>";
        foreach($ans as $x){
            print_r($x->batter);
            echo "--";
            print_r($x->bowler);
            echo "--";
            print_r($x->comment);
            echo "--";
            echo "<br>";
        }
        // print_r($ans);
        return view('score');
    }
}
