@extends('layouts.app')

@section('content')
    <h1>Enroll Students</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('enroll-students') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_id">Select Student:</label>
            <select name="student_id" id="student_id" class="form-control" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cohort_names">Select Cohorts (Hold Ctrl/Cmd to select multiple):</label>
            <select name="cohort_names[]" id="cohort_names" class="form-control" multiple required>
                @foreach ($cohorts as $cohort)
                    <option value="{{ $cohort->name }}">{{ $cohort->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enroll Students</button>
    </form>
@endsection
