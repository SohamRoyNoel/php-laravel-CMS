@extends('layouts.admin')


@section('content')
    <h1>Show All users</h1>

    <table style="width:100%" class="table table-hover table-responsive">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                        <td><a href="{{route('admin.creates.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>
                            @if($user->is_active == 1)
                                {{'Online'}}
                            @else
                                {{'Offline'}}
                            @endif
                        </td>
                        <td><img height="100" width="100" src="{{$user->photo?$user->photo->path:'No Pic Uploaded'}}"> </td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach
        @endif
    </table>










@stop