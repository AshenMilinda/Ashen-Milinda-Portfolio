<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'E-Commerce Enterprise',
            'category' => 'web',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
            'link' => '#',
            'github_link' => '#',
            'order' => 1
        ]);

        \App\Models\Project::create([
            'title' => 'Minimalist Branding',
            'category' => 'design',
            'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&q=80&w=800',
            'link' => '#',
            'order' => 2
        ]);

        \App\Models\Project::create([
            'title' => 'Product Packaging',
            'category' => 'print',
            'image' => 'https://images.unsplash.com/photo-1586075010620-227613768393?auto=format&fit=crop&q=80&w=800',
            'link' => '#',
            'order' => 3
        ]);
    }
}
