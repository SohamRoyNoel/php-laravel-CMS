@extends('layouts.admin')


@section('content')
    <h1>I'm from post page</h1>

    <table style="width:100%" class="table table-hover table-responsive">
        <tr>
            <th>Id</th>
            <th>user_id</th>
            <th>category_id</th>
            <th>photo_id</th>
            <th>title</th>
            <th>body</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Delete</th>
        </tr>
        @if($post)
            @foreach($post as $pos)
                <tr>
                    <td>{{$pos->id}}</td>
                    <td><a href="{{route('admin.posts.edit', $pos->id)}}">{{$pos->user->name}}</a></td>
                    <td>{{$pos->category->name}}</td>
                    <td><img height="100" width="100" src="{{$pos->photo? 'http://localhost/Goals/public/images/'.$pos->photo->path:'No Pic Uploaded'}}"> </td>
                    <td>
                        {{$pos->title}}
                    </td>
                    <td>{{$pos->body}} </td>
                    <td>{{$pos->created_at->diffForHumans()}}</td>
                    <td>{{$pos->updated_at->diffForHumans()}}</td>
                    <td>

                        {!! Form::open(['method'=>'Delete', 'action'=>['AdminPostsController@destroy', $pos->id]]) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
        @endif


    </table>







@stop