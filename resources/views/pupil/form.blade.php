<div class='form-group'>
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<div class='form-group'>
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
    {!! Form::label('dob', 'DOB:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control']) !!}
</div>



<div class='form-group'>
    {!! Form::label('center', 'Center:') !!}
    {!! Form::text('center', null, ['class' => 'form-control']) !!}
</div>


<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>