@extends('layouts.app')

@section('content')

    <div class='col-md-6 col-md-offset-3'>
        <h1>Edit </h1>

        <hr>

        {!! Form::model($pupils, ['method' => 'PATCH', 'action' => ['PupilController@update',$pupils->id]]) !!}
        @include('pupil.form', ['submitButtonText' => 'Edit '])
        {!! Form::close() !!}
    </div>
@stop