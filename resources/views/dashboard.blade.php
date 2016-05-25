@extends('layout.master')

@section('content')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What do you want to say ? </h3></header>
			<form action="">
				<div class="form-group">
					<textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="Your Post.."></textarea>
				</div>
				<button type="button" class="btn btn-primary">Create post</button>
			</form>
		</div>
	</section>
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What other people say ........ </h3></header>
			<article class="post">
				<p>Bnagladesh is an independent Courtry. She has a great Population. Bangladesh is my motherland.</p>
			<div class="info">
				Posted by Somrat 12 Feb 2016.
			</div>
			<div class="interaction">
				<a href="">Like</a> |
				<a href="">Dislike</a> |
				<a href="">Edit</a> |
				<a href="">Delete</a>
			</div>
			</article>
			<article class="post">
				<p>Bnagladesh is an independent Courtry. She has a great Population. Bangladesh is my motherland.</p>
			<div class="info">
				Posted by Somrat 12 Feb 2016.
			</div>
			<div class="interaction">
				<a href="">Like</a> |
				<a href="">Dislike</a> |
				<a href="">Edit</a> |
				<a href="">Delete</a>
			</div>
			</article>
		</div>
	</section>
@endsection