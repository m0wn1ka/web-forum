<?php
//a controller to handle funcitons of seeing users views 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\blogpost;

use App\Models\m1;

class c4 extends Controller
{
    public function page(Request $r){//function to see the views of users
        $posts = blogpost::all();
        // echo"<center>our blog</center>"; //fetch all blog posts from DB
  
        return view('blogpage', ['data' => $posts]);
      
    
}
    public function write(Request $r){//function to push data of username ,topic,content into db
       //first verify user ,then push data
      {
        $n=$r->username;
        $p=$r->password;
        // echo $p;
        // echo $n;
        // return view("enadmin");
        $row=DB::table('m1s')->where('name',$n)->get('passowrd');
        
        $row1=json_decode($row,true);
        if(empty($row1)==FALSE){
        $row2=$row1[0];
        $pass=$row2['passowrd'];
        if($n=='admin'){
            if($p=='root'){
                echo "in admin view c4 write funciton";
                return view("enadmin");
            }
        }
        if($pass==$p){
            //here user validation is done
            $o1=new blogpost;
            $o1->user=$r->username;
            $o1->topic=$r->topic;
            $o1->content=$r->content;
            $o1->save();
            echo 'u have posted data';
            return ;
        }
        else{
            return "give valid credentials";
        }
    
    }
    else{
        return "user does not exist";
    }
    
    }
      
    }

}
