<?php

namespace App\Http\Controllers\rep;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class repController extends Controller
{
    /*
    css/dtags 
    css/onlytags
    css/onlycss 
    css/dcss 
    */

    protected $css_all_path = ROOT.'/../storage/css/zixun/all.css';
    protected $html_filter_path = ROOT.'/../storage/css/zixun/zixun.html';
    public function getTest(){
        echo 'hello';
    }
    public function getCon(){
        $file = $this->html_filter_path;
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        // echo $con;
        // $patton = '/\<script\stype="text\/javascript"\s>[^\<\/script\>]\<\/script\>/';
        $patton = '/\<script\stype="text\/javascript"\s\>[^\<]+<\/script\>/';
        preg_match_all($patton, $con, $m);
        // var_dump($m[0][0]);
        $con = str_replace($m[0][0], '=========++++++++++++++++++++++++++++++===============', $con);
        // echo $con;
    }

}
