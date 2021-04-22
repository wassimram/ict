<?php

namespace App\Models;

use Database\Seeders\UserCommentSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'author_id'];

    public function add()
    {
       /* $this->comment = "Hello World 2";
        $this->author_id = "3";
        $this->save();
        $this->comment = "foo bar";
        $this->author_id = "2";
        $this->save();
        $this->comment = "foo bar";
        $this->author_id = "2";
        $this->save();*/
        /*$this->fill($data[1]);
        $this->save();
        $this->newQuery();
        $this->fill($data[0]);
        $this->save();*/
        /*$data=[['comment' => 'Hello World', 'author_id'=> '1'],
            ['comment' => 'foo bar', 'author_id'=> '2']];
        $rec =UserComment::create($data[1]);

        dd($rec);
        $rec =UserComment::create($data[0]);

        dd($rec);*/
        $seed = new UserCommentSeeder;
        $seed->run();
    }
}

