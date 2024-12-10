<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service;

    protected $listeners = ['serviceDelete'];

    public function serviceDelete($id)
    {
        #fill $service with the same eloquent model of the same id
        $this->service = Service::find($id);

        #show delete modal
        $this->dispatch('deleteModalToggle');
    }
    #----------------------------------------------------------
    public function submit()
    {
        #delete record
        $this->service->delete();
        $this->reset('service');

        #hide modal
        $this->dispatch('deleteModalToggle');

        #refresh services data
        $this->dispatch('refreshData')->to(servicesData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
