<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $count;

    public function render()
    {
        $services = Service::take($this->count ?? 6)->get();
        return view('front.components.services-component', get_defined_vars());
    }
}
