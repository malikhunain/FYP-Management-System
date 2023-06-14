<!-- resources/views/student/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <h1>Welcome to the Student Dashboard</h1>

        <div class="dashboard-actions">
            <a href="{{ route('student.project.application.create') }}" class="btn btn-primary">Apply for Projects</a>
            <a href="{{ route('student.feedback.status') }}" class="btn btn-primary">View Feedback</a>
            <a href="{{ route('student.complaint.submit') }}" class="btn btn-primary">Submit Complaint</a>
            <a href="{{ route('student.project.upload', 1) }}" class="btn btn-primary">Upload Project Document</a>
            
        </div>

        <!-- Add any additional sections or information as needed -->
    </div>
@endsection
