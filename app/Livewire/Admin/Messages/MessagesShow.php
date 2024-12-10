<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    public $name, $email, $subject, $message, $status;

    protected $listeners = ['messageShow'];

    public function messageShow($id)
    {
        #fill $message with the same eloquent model of the same id
        $record = Message::find($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->subject = $record->subject;
        $this->message = $record->message;
        $this->status = $record->status;

        #show show modal
        $this->dispatch('showModalToggle');
    }

    #-------------------------------------------------
    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
