@extends('layouts.app')

@section('content')
    <h1>All Students</h1>
    <ul>
        @foreach($students as $student)
            <li>{{ $student->studfirstname }} {{ $student->studlastname }} 
            <a href="{{ url('/show/student/' . $student->studid) }}" class="btn btn-secondary mb-3">Show</a>
            </li>
        @endforeach
    </ul>
@endsection