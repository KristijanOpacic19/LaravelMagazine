@extends('backend.master')
@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Welcome to Dashboard</h2>
				<p class="welcome-text">We,ve assembled some links for you to get started.</p>
				<div class="row">
					<div class="col-sm-4">
						<h4>All Files</h4>
						<?php 
						$page = DB::table('pages')->get();
						$posts = DB::table('posts')->get();
						$categories = DB::table('categories')->get();
						$advertisements = DB::table('advertisements')->get();
						$messages = DB::table('messages')->get();
						$users = DB::table('users')->get();
						
		   				?>
						<h5>All Pages({{count($page) }})</h2>
						<h5>All Posts({{count($posts) }})</h2>
						<h5>All Categories({{count($categories) }})</h2>
						<h5>All Advertisements({{count($advertisements) }})</h2>
						<h5>All Messages({{count($messages) }})</h2>
						<h5>All Users({{count($messages) }})</h2>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>View Records</h4>
						<p><a href="{{url('/all-pages')}}"><i class="fa fa-eye"></i> View All Pages</a></p>
						<p><a href="{{url('/all-posts')}}"><i class="fa fa-eye"></i> View All Posts</a></p>
						<p><a href="{{url('/viewcategory')}}"><i class="fa fa-eye"></i> View All Categories</a></p>
						<p><a href="{{url('/all-advs')}}"><i class="fa fa-eye"></i> View All Advs</a></p>
						<p><a href="{{url('/messages')}}"><i class="fa fa-eye"></i> View All Messages</a></p>
						<p><a href="{{url('/admin/users')}}"><i class="fa fa-eye"></i> View All Users</a></p>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Add Records</h4>
						<p><a href="{{url('/add-page')}}"><i class="fa fa-plus-circle"></i> Add Pages</a></p>
						<p><a href="{{url('/all-posts')}}"><i class="fa fa-plus-circle"></i> Add Posts</a></p>
						<p><a href="{{url('/viewcategory')}}"><i class="fa fa-plus-circle"></i> Add Categories</a></p>
						<p><a href="{{url('/add-adv')}}"><i class="fa fa-plus-circle"></i> Add Advs</a></p>
						<p><a href="{{url('/contact-us')}}"><i class="fa fa-plus-circle"></i> Add Message</a></p>
						<p><a href="{{url('/admin/users/create')}}"><i class="fa fa-plus-circle"></i> Add Users</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop