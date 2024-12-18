<?php

namespace App\Livewire\Front\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponent extends Component
{
    public function render()
    {
        $skills = Skill::take(3)->get();
        return view('front.components.skills-component', get_defined_vars());
    }
}
