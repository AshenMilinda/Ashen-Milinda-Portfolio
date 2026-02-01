<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order', 'asc')->get();
        return view('welcome', compact('projects'));
    }

    public function adminIndex()
    {
        $projects = Project::orderBy('order', 'asc')->get();
        return view('admin.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'nullable',
            'link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'integer'
        ]);

        if ($request->hasFile('image_file')) {
            $imageName = time().'.'.$request->image_file->extension();
            $request->image_file->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/'.$imageName;
        }

        Project::create($data);

        return redirect()->route('admin.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'nullable',
            'link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'integer'
        ]);

        if ($request->hasFile('image_file')) {
            $imageName = time().'.'.$request->image_file->extension();
            $request->image_file->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/'.$imageName;
        }

        $project->update($data);

        return redirect()->route('admin.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.index')->with('success', 'Project deleted successfully.');
    }
}
