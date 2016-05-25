<?php 

namespace App\Http\Controllers; 

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
	public function postCreatePost(Request $request) {
		$this->validate($request,[
			'body' => 'required|max:1000'
		]);
		$post = new Post();
		$post->body = $request['body'];
		$message = "There is an error !" ;
		if($request->user()->posts()->save($post))
		{
			$message = "Post Created Successfully.";
		}
		return redirect()->route('dashboard')->with(['message'=> $message ]);
	}
}