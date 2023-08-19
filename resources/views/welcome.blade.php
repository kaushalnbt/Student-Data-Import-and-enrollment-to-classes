@extends('layouts.app')

@section('content')
    <h1>Welcome to Student Data Management</h1>
    <p>Click on the following links to access different pages:</p>
    <ul>
        <li><a href="{{ route('import-students') }}">Import Students</a></li>
        <li><a href="{{ route('enroll-students') }}">Enroll Students</a></li>
        <li><a href="{{ route('view-student-data') }}">View Student Data</a></li>
    </ul>
@endsection
