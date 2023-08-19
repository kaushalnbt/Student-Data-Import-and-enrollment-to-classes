@extends('layouts.app')

@section('content')
    <h1>Import Students</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('import-students') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="excel_file">Select Excel File:</label>
            <input type="file" name="excel_file" id="excel_file" class="form-control" accept=".xlsx, .xls" required>
        </div>
        <button type="submit" class="btn btn-primary">Import Students</button>
    </form>
@endsection
