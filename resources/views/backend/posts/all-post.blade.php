@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> Add New Posts <a href="{{url('add-post')}}"> <button class="btn btn-sm btn-default">Add New</button></a></h1>
    </div>
    <div class="col-sm-12">
        @if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
	    @endif
    </div>
    <div class="search-div">
     <div class="col-sm-9">
        
      <?php $data = DB::table('posts')->get();
            $pubdata =  DB::table('posts')->where('status','=','publish')->count();
      ?>
        All({{count($data) }}) | Published ({{count($data) }})

      </div>

      <div class="col-sm-3">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>
    <form method="post" action="{{url('multipledelete')}}">
    <div class="filter-div">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('posts')}}">
        <input type="hidden" name="tblid" value="{{encrypt('pid')}}">
        <div class="col-sm-2">
          <select name="bulk-action" class="form-control">
            <option value="0">Bulk Action</option>
            <option value="1">Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-7">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
    
      <div class="col-sm-3 text-right">
        {{ $posts->links() }}
      </div>
    </div>  
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th width="50%"><input type="checkbox" id="select-all"> Title</th>
              <th width="15%">Category</th>
              <th width="15%">Status</th>
              <th width="10%">Date</th>
            </tr>
          </thead>
          <tbody>
            @if(count($posts) > 0)
            @foreach($posts as $post)
            <tr>
              <td>
                <input type="checkbox" name="select-data[]" value="{{$post->pid}}"> 
                <a href="{{url('editpost')}}/{{$post->pid}}">{{$post->title}}</a>
              </td>
              <td>{{$post->category_id}}</td>
              <td>{{$post->status}}</td>
              <td>{{$post->status}} {{$post->created_at}}</td>              
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">No Posts Found.</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>

    <div class="clearfix"></div>
    </form>
    <div class="filter-div">  
      <div class="col-sm-3 col-sm-offset-6">
            {{ $posts->links() }}
      </div>
    </div>
  </div>
</div>
@stop