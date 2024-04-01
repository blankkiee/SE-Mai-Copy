<!-- incomplete pa, sample lng -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Documents</h1>
        <h3>Name: {{ $student->name }}</h3>
        <h4>Email: {{ $student->email }}</h4>

        <div class="mt-4">
            <h5>Uploaded Documents:</h5>
            <ul>
                <li>Photo: {{ $student->photo }}</li>
                <li>Grade File: {{ $student->grade_file }}</li>
                <li>Form with Pic: {{ $student->form_with_pic }}</li>
                <!-- Add more document fields as needed -->
            </ul>
        </div>

        <!-- Add HTML and CSS for document display as required -->
    </div>
@endsection
