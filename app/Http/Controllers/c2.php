<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\m1;

class c2 extends Controller
{
public function f1(Request $r){
     $flag=0;
    //check whether user exists or not
    $posts = m1::all();
    foreach($posts as $post){
       if($post->name==$r->name){
        $flag=1;
        echo "user already exists";
        return view("register");
       }
    }
    
    $o1=new m1;
    $o1->name=$r->name;
    $o1->email=$r->email;
    $o1->passowrd=$r->password;
    $o1->save();
    echo 'u have successfully registerd yourself';
    
   
    //  header("Location: http://localhost/chat-radha/public/login.php");
    return view('register') ;
}
public function see(){
    $x="radha";
    $ans=DB::table('m1s')->where('name',$x)->where('email','m@gmail.com');
    
    // return DB::select("select * from m1s where email='a@gmail'"); 
    // $ans1=json_decode($ans ,true);
    // $ans2=$ans1[0];
    return (($ans));
}
public function login(Request $r){
    $n=$r->name;
    $p=$r->passowrd;
    $row=DB::table('m1s')->where('name',$n)->get('passowrd');
    
    $row1=json_decode($row,true);
    if(empty($row1)==FALSE){
    $row2=$row1[0];
    $pass=$row2['passowrd'];
    if($n=='admin'){
        if($p=='root'){
            // header('Location:/admin');
            // Route::view('/admin',"admin");
            // return view('admin','admin');
            return view("enadmin");
        }
    }
    if($pass==$p){
        echo "u have successfully logged in<br>";
        return view("enscore");
    }
    else{
        return "give valid credentials";
    }

    // return "u have logged";
    echo $pass;
    echo "<br>";
    return $p;
}
else{
    return "user does not exist";
}

}
};

