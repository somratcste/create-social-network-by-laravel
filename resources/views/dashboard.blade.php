@extends('layout.master')

@section('content')
	@include('includes.message-block')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What do you want to say ? </h3></header>
			<form action="{{ route('post.create') }}" method="post">
				<div class="form-group">
					<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post.."></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Create post</button>
				<input type="hidden" name="_token" value="{{Session::token()}}">
			</form>
		</div>
	</section>
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What other people say ........ </h3></header>
			@foreach ($posts as $post)
				<article class="post">
				<p>{{$post->body}}</p>
				<div class="info">
					Posted by {{$post->user->first_name}} on {{$post->created_at}}.
				</div>
				<div class="interaction">
					<a href="">Like</a> |
					<a href="">Dislike</a> 
					@if(Auth::user() == $post->user)
						|
						<a href="#" class="edit" data-toggle="modal" data-target=".bs-example-modal-sm{{$post->id}}">Edit</a> |
						<a href="{{ route('post.delete' , ['post_id' => $post->id]) }}">Delete</a>
					@endif				
				</div>
				</article>
			@endforeach
			
		</div>
	</section>
	
	@foreach ($posts as $post)
	<div class="modal fade bs-example-modal-sm{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog">
	    <div class="modal-content">
	     <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
	      </div>
	      
	      <div class="modal-body">
	        <label for="post-body">Edit the Post</label>
	        <textarea class="form-control" name="post-body" id="post-body" rows="5">{{$post->body}}</textarea>
	      </div>
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	    </div>
	  </div>
	</div>
	@endforeach

@endsection