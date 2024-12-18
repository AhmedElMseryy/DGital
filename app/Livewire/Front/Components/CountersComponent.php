<?php

namespace App\Livewire\Front\Components;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        $counters = Counter::take(4)->get();
        return view('front.components.counters-component', get_defined_vars());
    }
}
