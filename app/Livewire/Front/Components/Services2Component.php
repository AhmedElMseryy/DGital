<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class Services2Component extends Component
{
    public $count;
    public function render()
    {
        $services2 = Service::take($this->count ?? 6)->get();
        return view('front.components.services2-component', get_defined_vars());
    }
}
