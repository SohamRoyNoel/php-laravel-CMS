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
            <th></th>
        </tr>
        @if($post)
            @foreach($post as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td><img height="100" width="100" src="{{$post->photo? 'http://localhost/Goals/public/images/'.$post->photo->path:'No Pic Uploaded'}}"> </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>{{$post->body}} </td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach
        @endif


    </table>







@stop