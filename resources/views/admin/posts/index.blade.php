@extends('template')

@section('title')
    Posts ADMIN
@endsection

@section('content')
    <h1>Posts Admin</h1>
    {!! Html::link(route('admin.post.create'),'+ Add', ['class'=>'btn btn-success']) !!}
    <br />
    <br />
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{!! Html::link(route('admin.post.edit', $post->id), $post->title) !!}</td>
            <td>
                {!! Html::link(route('admin.post.edit', $post->id), 'Edit', ['class'=>'btn btn-default']) !!}
                {!! Html::link(route('admin.post.destroy', $post->id), 'Delete', ['class'=>'btn btn-danger']) !!}
            </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@stop