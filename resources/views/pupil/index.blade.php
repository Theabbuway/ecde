
@extends('layouts.app')
@section('content')
    <h1>pupil</h1>
    <div>
        @forelse($pupil as $pupil)
            <h2>
                <a href="{{ url('/pupil', $pupil->id) }}">
                    {{ $pupil->name }}
                </a>
            </h2>
            <a href="{{ route('pupil.edit', $pupil->id) }}">
                Edit pupil
            </a>
            <div class='body'>
                <pre>{{ $pupil }}</pre>
            </div>

        @empty
            <p>There are no pupils to display!</p>
        @endforelse
    </div>
@stop 