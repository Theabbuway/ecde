@extends('layouts.app')

@section('content')
    <h1>{{ $pupil->name }}</h1>

    <div class='body'>
        <pre>{{ $pupil }}</pre>
    </div>
@stop