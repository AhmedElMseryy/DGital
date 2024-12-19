<?php

namespace App\Livewire\Front\Components;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        $projects = Project::all();
        $categories = Category::all();

        return view('front.components.projects-component', get_defined_vars());
    }
}
