@extends('template')

@section('title')
    Posts ADMIN
@endsection

@section('content')
    <h1>Posts Edit: {{$post->title}}</h1>
    @if($errors->any())
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong><br />
            @foreach($errors->all() as $error)
                {{$error}}<br />
            @endforeach
        </div>
    @endif
    {!! Form::model($post, ['route'=>['admin.post.update', $post->id],'method'=>'put']) !!}
        @include('admin.posts.postFields')

        <div class="form-group">
            {!! Form::submit('Save Post', ['class'=>'btn btn-primary']) !!}
            {!! Html::link(route('admin.post.list'),'Cancel',['class'=>'btn btn-warning'] ) !!}
        </div>
    {!! Form::close() !!}
@stop