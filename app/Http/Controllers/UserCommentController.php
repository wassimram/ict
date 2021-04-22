<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\UserComment;
class UserCommentController extends Controller
{
    public function addRecords(){
        $uComment= new UserComment;
        $uComment->add();
    }
}
