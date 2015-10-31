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
    {!! Form::model($post, ['route'=>'admin.post.store','mothod'=>'post']) !!}
        @include('admin.posts.postFields');

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            {!! Form::button('Cancel', ['class'=>'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
@stop