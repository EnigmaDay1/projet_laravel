<div class="form-group">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('completed', 'Complété:') !!}
    {!! Form::checkbox('completed') !!}
</div>

<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <input type="text" id="datepicker" name="date" value="<?php echo date('d/m/Y'); ?>" />
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>

