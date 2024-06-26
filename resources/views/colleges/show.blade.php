@extends('layouts.app')

@section('content')
    <h1>College Details</h1>
    <p>Name: {{ $college->collfullname }}</p>
    <p>Short Name: {{ $college->collshortname }}</p>
    <h2>Departments</h2>
    <ul>
        @foreach($college->departments as $department)
            <li>{{ $department->deptfullname }}</li>
        @endforeach
    </ul>
    <h2>Programs</h2>
    <ul>
        @foreach($college->programs as $program)
            <li>{{ $program->progfullname }}</li>
        @endforeach
    </ul>
@endsection
