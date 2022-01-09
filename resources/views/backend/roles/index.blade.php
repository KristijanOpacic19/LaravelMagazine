@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      @can('role-create')  
      <h1><i class="fa fa-bars"></i> Add New Roles <a href="{{ route('roles.create') }}"> <button class="btn btn-sm btn-default">Add New Roles</button></a></h1>
      @endcan    
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
      </div>
      <div class="col-sm-3">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search Users">
      </div>
    </div>  
    <div class="clearfix"></div>
    <form method="post" action="#">
    <div class="filter-div">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('roles')}}">
        <input type="hidden" name="tblid" value="{{encrypt('id')}}">
    
      <div class="col-sm-3 text-right">
      {{ $roles->links() }}
      </div>
    </div>  
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
            <th width="15%">No</th>
            <th width="30%">Name</th>
            <th width="30%">Date</th>
            <th width="30">Action</th>
            <th width="15"></th>
            </tr>
          </thead>
          <tbody>
           @foreach ($roles as $key => $role)
            <tr>
            <th scope="row">{{ ++$i }}</th>
            <td>{{ $role->name }}</td>
            <td>
              {{ $role->created_at }}
              </td>   
              <td>
              <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
              </td>
              <td>  
              @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
             @endcan
              </td>
              <td>
              @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
              @endcan
              </td>           
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>


    <div class="filter-div">  
      <div class="col-sm-3 col-sm-offset-6">
      {{ $roles->links() }}
      </div>
    </div>
  </div>
</div>
{!! $roles->render() !!}

@endsection