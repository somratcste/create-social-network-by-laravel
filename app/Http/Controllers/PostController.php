<?php 

namespace App\Http\Controllers; 

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostController extends Controller {

	public function getDashboard()
	{
		$posts = Post::orderBy('created_at','desc')->get();
		return view('dashboard',['posts'=> $posts]);
	}


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

	public function getDeletePost( $post_id ) 
	{
		$post = Post::where('id',$post_id)->first();
		if(Auth::user() != $post->user)
		{
			return redirect()->back();
		}
		$post->delete();
		return redirect()->route('dashboard')->with(['message' => 'Successfully Deleted !']);
	}

	public function getUpdatePost(Request $request , $id) 
	{
		$this->validate($request,[
			'body' => 'required|max:1000'
		]);
		
		$post = new Post();
		$post = Post::where('id',$id)->first();
		$post->body = $request['body'];
		$message = "There is an error !" ;
		if($request->user()->posts()->save($post))
		{
			$message = "Post Updated Successfully.";
		}
		return redirect()->route('dashboard')->with(['message'=> $message ]);
	}
}