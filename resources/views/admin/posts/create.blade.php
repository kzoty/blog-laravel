@extends('template')

@section('title')
    Posts ADMIN
@endsection

@section('content')
    <h1>Posts Admin Create</h1>
    @if($errors->any())
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong><br />
            @foreach($errors->all() as $error)
                {{$error}}<br />
            @endforeach
        </div>
    @endif
    {!! Form::open(['route'=>'admin.post.store','method'=>'post']) !!}
        @include('admin.posts.postFields')

        <div class="form-group">
            {!! Form::label('tag', 'Tags:') !!}
            {!! Form::textArea('tags', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            {!! Html::link(route('admin.post.list'),'Cancel',['class'=>'btn btn-warning'] ) !!}
        </div>
    {!! Form::close() !!}
@stop
