<!-- Form Input -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<!-- Form Input -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textArea('content', null, ['class'=>'form-control']) !!}
</div>