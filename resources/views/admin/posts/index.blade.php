@extends('template')

@section('title')
    Posts ADMIN
@endsection

@section('content')
    <h1>Posts Admin</h1>
    [ {!! Html::link(route('admin.post.create'),'+ Add') !!} ]
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>#</td>
        </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@stop