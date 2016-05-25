@extends('layout.master')

@section('title')
    Welcome ! 
@endsection

@section('content')
	@include('includes.message-block')
	<div class="row">
	    <div class="col-md-6">
	    	<h3>Sign Up</h3>
	    	<form action="{{ route('signup') }}" method="post">
				<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
				    <label for="inputEmail3">Your Email</label>
				     <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="{{Request::old('email')}}">
				 </div>    
				 <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
				    <label for="inputEmail3">Your Name</label>
				     <input type="text" class="form-control" id="inputEmail3" name="first_name" placeholder="name" value="{{Request::old('first_name')}}">
				 </div>  
				 <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
				    <label for="inputEmail3">Password</label>
				     <input type="password" class="form-control" id="inputEmail3" name="password" placeholder="password" value="{{Request::old('password')}}">
				 </div>  	
				 <button type="submit" class="btn btn-primary">Sign Up</button>	
				 <input type="hidden" name="_token" value="{{Session::token()}}">
	    	</form>
	    </div>

	    <div class="col-md-6">
	    	<h3>Log In</h3>
	    	<form action="{{ route('signin') }}" method="post">
				<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
				    <label for="inputEmail3">Your Email</label>
				     <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="{{Request::old('email')}}">
				 </div>    
				 
				 <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
				    <label for="inputEmail3">Password</label>
				     <input type="password" class="form-control" id="inputEmail3" name="password" placeholder="password" value="{{Request::old('password')}}">
				 </div>  	
				 <button type="submit" class="btn btn-primary">Log In</button>	
				 <input type="hidden" name="_token" value="{{Session::token()}}">
	    	</form>
	    </div>
	    
	</div>
@endsection