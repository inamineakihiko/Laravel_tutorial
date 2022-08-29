<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post; // ☆追加 Postモデルをuseする

class TestController extends Controller
{
    public function index() {
        $name =  'TestController';
        $parent =  'Controller';
        $array = ['PHP','JavaScript','Ruby'];
        return view('test',compact('name','parent','array'));
    }

    public function create() {
        $data = [
            'title' => 'title1',
            'body' => 'content1'
        ];

        DB::table('posts')->insert($data);
    }

    // ☆追加
    public function create2() {
        $post = new Post();

        $post->title = 'title2';
        $post->body = 'content2';

        $post->save();
    }
}