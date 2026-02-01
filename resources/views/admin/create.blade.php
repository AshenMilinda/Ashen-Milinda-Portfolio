@extends('layouts.admin')

@section('content')
    <div class="header">
        <h1>Add New Project</h1>
        <a href="{{ route('admin.index') }}" class="btn btn-outline">Back to List</a>
    </div>

    <div class="card">
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Project Title</label>
                <input type="text" name="title" required placeholder="e.g. Modern E-Commerce">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category" required>
                    <option value="web">Web Development</option>
                    <option value="design">Graphic Design</option>
                    <option value="print">Print Media</option>
                </select>
            </div>

            <div class="form-group">
                <label>Description (Optional)</label>
                <textarea name="description" placeholder="Brief project summary..."></textarea>
            </div>

            <div class="form-group">
                <label>Image File (JPEG/PNG)</label>
                <input type="file" name="image_file">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Live Link (URL)</label>
                    <input type="url" name="link" placeholder="https://...">
                </div>
                <div class="form-group">
                    <label>GitHub Link (URL)</label>
                    <input type="url" name="github_link" placeholder="https://github.com/...">
                </div>
            </div>

            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="order" value="0">
            </div>

            <button type="submit" class="btn" style="width: 100%; justify-content: center;">Create Project</button>
        </form>
    </div>
@endsection
