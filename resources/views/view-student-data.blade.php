@extends('layouts.app')

@section('content')
    <h1>Student Data</h1>
    @if ($students->isEmpty())
        <div class="alert alert-info">No students found.</div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cohorts</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            @foreach ($student->cohorts as $cohort)
                                {{ $cohort->name }},
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links() }}
    @endif
@endsection
