<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{

    public function index(){
        $title='Haviprasath';
        // $posts=$this->getposts();
        $posts=post::all();
        return view('index',compact('title','posts'));
    }
    // private function getposts(){
    //     return json_decode(json_encode([
    //         ['id'=>1,'content'=>'content of post 1'],
    //         ['id'=>2,'content'=>'content of post 2']
    //     ])); 
    // }
    
    public function detail($id){
        $posts=$this->getposts();
        $post=collect($posts)->firstWhere('id',$id);
        return view('detail',compact('post'));
    }
}
