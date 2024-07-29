<?php

namespace App\Livewire;

use Livewire\Component;

class ReferredFormInvitation extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.referred-form-invitation');
    }

    /* public function send_email()
    {        
        $email['email'] = $this->email;
        error_log("EMAIL DEL FORM " . $email );
        return $this->redirect('/dashboard');
        //return "send email referred";
    } */
}
