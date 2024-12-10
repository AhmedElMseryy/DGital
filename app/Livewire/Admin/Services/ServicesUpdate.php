<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{

    public $service, $name, $icon, $description;

    protected $listeners = ['serviceUpdate'];

    public function serviceUpdate($id)
    {
        #fill $service with the same eloquent model of the same id
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->icon = $this->service->icon;
        $this->description = $this->service->description;
        $this->resetValidation();

        #show edit modal
        $this->dispatch('editModalToggle');
    }

    #----------------------------------------------------------
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
        $this->service->update($data);

        #hide modal
        $this->dispatch('editModalToggle');

        #refresh services data
        $this->dispatch('refreshData')->to(servicesData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.services.services-update');
    }
}
