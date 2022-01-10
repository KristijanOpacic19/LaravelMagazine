@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> Add New User <a href="{{ route('users.create') }}"> <button class="btn btn-sm btn-default">Add New User</button></a></h1>
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
        <input type="hidden" name="tbl" value="{{encrypt('users')}}">
        <input type="hidden" name="tblid" value="{{encrypt('id')}}">


    
      <div class="col-sm-3 text-right">
      {{ $data->links() }}
      </div>
    </div>  
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th width="50%"> Username</th>
              <th width="15%">Email</th>
              <th width="15%">Role</th>
              <th width="15%">Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $key => $user)
            <tr>
            <th scope="row">{{ ++$i }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
              <td>
              @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
              </td>
              <td>
              {{ $user->created_at }}
              </td>   
              <td>
              <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
              </td>
              <td>  
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}  
              </td>           
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>


    <div class="filter-div">  
      <div class="col-sm-3 col-sm-offset-6">
      {{ $data->links() }}
      </div>
    </div>
  </div>
</div>
{!! $data->render() !!}

@endsection