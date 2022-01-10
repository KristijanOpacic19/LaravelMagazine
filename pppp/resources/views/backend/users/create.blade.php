@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i>Create User</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
			@endif
			<h3>Create User</h3>
            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
				<div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>

				<div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>

				<div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            {!! Form::close() !!}

		</div>
		<div class="col-sm-8 cat-view">
        <form method="post" action="#">
			<div class="row">
                    {{ csrf_field() }}
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="text" id="search"  class="form-control" placeholder="Search Users">
                    </div>	
         
			</div>
                <div class="content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th width="50%">Username</th>
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
                        </tbody>
                        @endforeach
                    </table>
                </div>  						

            </div>
	</div>
</div>

@stop