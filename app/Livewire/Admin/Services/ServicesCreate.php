<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{

    public $name, $icon, $description;


    public function rules()
    {
        return [
            'name' => 'required',
            'icon' => 'required',
            'description' => 'required|string',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        #save data
        Service::create($data);
        $this->reset(['name', 'icon', 'description']);

        #hide modal
        $this->dispatch('createModalToggle');

        #refresh services data
        $this->dispatch('refreshData')->to(ServicesData::class);
    }

    public function render()
    {
        return view('admin.services.services-create');
    }
}
