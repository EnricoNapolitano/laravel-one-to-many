<main class="container mt-5">

    @include('includes.alerts.error')

    @if($project->exists)
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" novalidate>
    @method('PUT')
    @else
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" novalidate>
    @endif
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="title" placeholder="Write a title for your project" name="title" value="{{ old('title', $project->title) }}" minlength="5" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Project Content</label>
            <textarea class="form-control" id="content" rows="3" name="content" placeholder="Describe your project..." required> {{ old('content', $project->content) }} </textarea>
        </div>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-upload me-2"></i>{{ $project->exists ? 'Update' : 'Upload'}}</button>
    </form>

</main>