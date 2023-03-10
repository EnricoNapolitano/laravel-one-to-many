@extends('layouts.app')
@section('content')

@include('includes.admin.form')

<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="container">
@csrf
@method('DELETE')
    <button class="btn btn-warning mt-2" onclick="return confirm('Are you sure you want to delete this project?')"><i class="fa-solid fa-trash-can"></i></button>
</form>

@endsection