<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $name, $icon, $description;

    protected $listeners = ['serviceShow'];

    public function serviceShow($id)
    {
        #fill $service with the same eloquent model of the same id
        $record = Service::find($id);
        $this->name = $record->name;
        $this->icon = $record->icon;
        $this->description = $record->description;

        #show show modal
        $this->dispatch('showModalToggle');
    }

    #-------------------------------------------------
    public function render()
    {
        return view('admin.services.services-show');
    }
}
