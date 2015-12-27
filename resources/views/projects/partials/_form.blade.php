<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>