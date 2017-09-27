@extends ('layouts.admin')

@section('content')

    <h1>Post</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>


    @if ($posts)

        @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td><img width="100" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" alt=""></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForhumans()}}</td>
            <td>{{$post->updated_at->diffForhumans()}}</td>
        </tr>

        @endforeach

    @endif

    </table>

@stop