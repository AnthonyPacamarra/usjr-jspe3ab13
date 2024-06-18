@extends('layouts.app')

@section('content')
    <h1>All Colleges</h1>
    <ul>
        @foreach($colleges as $college)
            <li>{{ $college->collfullname }}
                <ul>
                    @foreach($college->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/show/college/' . $college->collid) }}" class="btn btn-secondary mb-4">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
