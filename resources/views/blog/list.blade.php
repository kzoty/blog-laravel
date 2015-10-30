@extends('template')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Listagem de Posts</h1>
    @foreach($posts as $post)
        <hr>
        <h2>{{$post->title}}</h2>
        <h4>{{$post->content}}</h4>
        <div>
            <b>Tags: </b>
            @foreach($post->tags as $tag)
                <div class="badge">{{$tag->name}}</div>
            @endforeach
        </div>
        <h5>Comments</h5>
        @foreach($post->comments as $comment)
            <b>Name: </b> {{$comment->name}}<br />
            <b>Comment: </b> {{$comment->comment}}<br />...<br />
        @endforeach
    @endforeach
@stop