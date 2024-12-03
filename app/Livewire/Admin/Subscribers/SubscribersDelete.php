<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $subscriber;

    protected $listeners = ['subscriberDelete'];

    public function subscriberDelete($id)
    {
        #fill $subscriber with the same eloquent model of the same id
        $this->subscriber = Subscriber::find($id);

        #show delete modal
        $this->dispatch('deleteModalToggle');
    }
    #----------------------------------------------------------
    public function submit()
    {
        #delete record
        $this->subscriber->delete();
        $this->reset('subscriber');

        #hide modal
        $this->dispatch('deleteModalToggle');

        #refresh subscribers data
        $this->dispatch('refreshData')->to(SubscribersData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
