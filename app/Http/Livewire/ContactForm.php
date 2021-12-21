<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required'],
        'message' => ['required'],
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function formSubmit()
    {
        $this->validate();

        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        );

        Mail::to('info@local.com')->send(new ContactFormMailable($data));

        session()->flash('message', 'message sent successfully');

        //this is to reset the fields after email's sent
        $this->reset();
    }
}
