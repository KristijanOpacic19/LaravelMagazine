@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i>Edit Roles</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
			@endif
			<h3>Edit Roles</h3>
            {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update',$role->id]]) !!}
				<div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    <strong>Permission:</strong>
                    <br/>
                    @foreach($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                    @endforeach
                </div>
          

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            {!! Form::close() !!}

		</div>
		<div class="col-sm-8 cat-view">
        <form method="post" action="{{url('multipledelete')}}">
			<div class="row">
                    {{ csrf_field() }}
                    <input type="hidden" name="tbl" value="{{encrypt('categories')}}">
                    <input type="hidden" name="tblid" value="{{encrypt('cid')}}">
                    <div class="col-sm-3">
                        <select name="bulk-action" class="form-control">
                            <option value="0">Bulk Action</option>
                            <option value="1">Move to Trash</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-default">Apply</button>
                    </div> 
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="text" id="search"  class="form-control" placeholder="Search Roles">
                    </div>	
         
			</div>
                <div class="content">
                    <table class="table table-striped">
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
                    </table>
                </div>  						

            </div>
	</div>
</div>

@stop