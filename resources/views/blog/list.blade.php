@extends('template')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Listagem de Posts</h1>
    <ul>
    @foreach($posts as $post)
        <li><a href='#'>{{$post}}</a></li>
    @endforeach
    </ul>
@stop