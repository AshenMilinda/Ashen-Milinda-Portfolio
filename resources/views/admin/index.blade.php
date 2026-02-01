@extends('layouts.admin')

@section('content')
    <div class="header">
        <h1>Project Manager</h1>
        <div class="actions">
            <a href="{{ route('home') }}" class="btn btn-outline" target="_blank">View Site</a>
            <a href="{{ route('admin.create') }}" class="btn">Add New Project</a>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>
                        <img src="{{ $project->image ?? 'https://via.placeholder.com/50' }}" class="img-preview" alt="">
                    </td>
                    <td><strong>{{ $project->title }}</strong></td>
                    <td><span class="category-tag">{{ $project->category }}</span></td>
                    <td>{{ $project->order }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.edit', $project) }}" class="btn btn-outline"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
