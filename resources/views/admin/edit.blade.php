@extends('layouts.admin')

@section('content')
    <div class="header">
        <h1>Edit Project</h1>
        <a href="{{ route('admin.index') }}" class="btn btn-outline">Back to List</a>
    </div>

    <div class="card">
        <form action="{{ route('admin.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Project Title</label>
                <input type="text" name="title" value="{{ $project->title }}" required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category" required>
                    <option value="web" {{ $project->category == 'web' ? 'selected' : '' }}>Web Development</option>
                    <option value="design" {{ $project->category == 'design' ? 'selected' : '' }}>Graphic Design</option>
                    <option value="print" {{ $project->category == 'print' ? 'selected' : '' }}>Print Media</option>
                </select>
            </div>

            <div class="form-group">
                <label>Description (Optional)</label>
                <textarea name="description">{{ $project->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Update Image (Current: {{ $project->image ? 'Yes' : 'No' }})</label>
                <input type="file" name="image_file">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Live Link (URL)</label>
                    <input type="url" name="link" value="{{ $project->link }}">
                </div>
                <div class="form-group">
                    <label>GitHub Link (URL)</label>
                    <input type="url" name="github_link" value="{{ $project->github_link }}">
                </div>
            </div>

            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="order" value="{{ $project->order }}">
            </div>

            <button type="submit" class="btn" style="width: 100%; justify-content: center;">Update Project</button>
        </form>
    </div>
@endsection
