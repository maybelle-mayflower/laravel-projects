@extends('layouts.master')


@section('content')
@include('partials.vendor_sidebar')

@section('inner')
        <main class="col-md-9 col-xs-11 p-l-2 p-t-2">
            <a href="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-lg"></i></a>
            <hr>
	        <div class="page-header">
	            <h1>Upload Images</h1>
	        </div>

			<form action="/upload" enctype="multipart/form-data" method="post">
			{{ csrf_field() }} 
			Product name: <br>
			<input name="name" type="text"> 
			<br><br>
			Product photos (can attach more than one): <br>
			<input multiple="multiple" name="photos[]" type="file"> 
			<br><br>
			<input type="submit" value="Upload">
			</form>
		 </main>
		 @endsection
@endsection