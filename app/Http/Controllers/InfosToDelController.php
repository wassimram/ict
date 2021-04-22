<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Models\InfosToDel;
use  App\Models\UserComment;
class InfosToDelController extends Controller
{
    public function insert($arg){
        DB::insert('insert into infos_to_dels values (?, ?, ?)', ['1', '2019-5-5', '2020-6-6']);
        return view('infos', ['name' => '$name', 'title'=>'$name->name', 'email'=>'$name->email']);
    }
}
