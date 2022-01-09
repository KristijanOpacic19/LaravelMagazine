@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Post</h1>
		</div>

		<div class="col-sm-12">
		@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
		@endif
		</div>

		<div class="col-sm-12">
			<div class="row">
				<form method="post" action="{{url('addpost')}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="tbl" value="{{encrypt('posts')}}">
					<div class="col-sm-9">
						<div class="form-group">	
							<input type="text" name="title" id="post_title" class="form-control" placeholder="Enter title here" required="">				
						</div>
            		<div class="form-group">	
							<input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug here" required="">				
					</div>
					<div class="form-group">	
							<input type="text" name="shortdescription" id="shortdescription" class="form-control" placeholder="Enter short description here" required="">				
					</div>						
						<div class="form-group">		
							<textarea class="form-control" name="description" rows="15"></textarea>
							<div class="col-sm-12 word-count">Word count: 0</div>
						</div>	
					</div>
					<div class="col-sm-3">
						<div class="content publish-box">
							<h4>Publish  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
							<div class="form-group">
								<button class="btn btn-default" name="status" value="Drafts">Save Draft</button>
							</div>
							<p>Status: Draft </p>
							<p>Visibility: Public </p>
							<div class="row">
								<div class="col-sm-12 main-button">
									<button class="btn btn-primary pull-right" name="status" value="Publish">Publish</button>
								</div>
							</div>	
						</div>
						
						<div class="content cat-content">
							<h4>Category  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
							@foreach($categories as $cat)
							<p><label for="{{$cat->cid}}" required=""><input type="checkbox" name="category_id[]"  value="{{$cat->cid}}"> {{$cat->title}}</label></p>
							@endforeach	
						</div>
						<div class="content featured-image">
							<h4>Featured Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
							<p><img id="output" style="max-width:100%" /></p>		
							<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" required=""></p>
							<p><label for="file" style="cursor: pointer;">Set Featured Image</label></p>						
						</div>
						<div class="form-group">
						<label for="tags">Tags</label>
						<input id="tags" type="text" class="form-control" name="tags[]" placeholder="Enter Post Tag" data-role="tagsinput">						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script>

<script>
	CKEDITOR.replace('description', { "filebrowserBrowseUrl": "ckfinder\/ckfinder.html", "filebrowserImageBrowseUrl": "ckfinder\/ckfinder.html?type=Images", "filebrowserFlashBrowseUrl": "ckfinder\/ckfinder.html?type=Flash", "filebrowserUploadUrl": "ckeditor\/ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Files", "filebrowserImageUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Images", "filebrowserFlashUploadUrl": "ckeditor\/ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Flash" });	
</script>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
	

@stop