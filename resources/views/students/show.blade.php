@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>
    <p>First Name: {{ $student->studfirstname }}</p>
    <p>Last Name: {{ $student->studlastname }}</p>
    <p>Middle Name: {{ $student->studmidname }}</p>
    <p>Year: {{ $student->studyear }}</p>
    <p>College: {{ $student->college->collfullname }}</p>
    <p>Program: {{ $student->program->progfullname }}</p>
@endsection
