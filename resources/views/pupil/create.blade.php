@extends('layouts.app')

@section('content')



    <div class='col-md-6 col-md-offset-3'>
        <h1>Add New pupil</h1>
        <hr>

        {!! Form::open(['action' => 'PupilController@store']) !!}
        @include('pupil.form', ['submitButtonText' => 'Submit'])
        {!! Form::close() !!}
    </div>
@stop