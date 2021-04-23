<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
//
use DB;
use App\Models\Users;
class InfosController extends BaseController
{
    public function show($args){
        //$name =DB::table('users')->where('name',$args)->first();
        $name=Users::where('name',$args)->first();
        if ($name == null){
            abort(404);
        }
        //$name=Users::where('name',$args)->firstorfail();
        //dd($name);
        //return $name->email;
        return view('infos', ['name' => $name, 'title'=>$name->name, 'email'=>$name->email]);
    }
    public function print($arg){
        return "Hi {{$arg}} from print";
    }


}
