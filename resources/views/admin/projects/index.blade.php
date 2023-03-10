@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="container table table-hover mt-5">
            <thead>
                <th>#id</th>
                <th>Title</th>
                <th class="text-center">Created at</th>
                <th class="text-center">Updated at</th>
                <th class="text-end">Actions</th>
            </thead>
            <tbody>
                @forelse($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td class="text-center">{{ $project->created_at }}</td>
                    <td class="text-center">{{ $project->updated_at }}</td>
                    <td class="text-end">
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="5">There aren't projects yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary"><i class="fa-solid fa-upload me-2"></i>Upload Project</a>
    </div>


@endsection