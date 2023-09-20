<?php

namespace App\Livewire;
use App\Models\Message;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateMessage extends Component
{
    #[Rule('required|string')]
    public $name='';
    #[Rule('required|string|email')]
    public $email='';
    #[Rule('required|string')]
    public $content='';
    public function save(){
        $this->validate();
//        dd($this->);
        Message::create($this->only(['name','email','content']));
        $this->reset();
        session()->flash('status', 'message successfully created .');
        return redirect();
    }
    public function render()
    {
        return view('livewire.create-message');
    }
}
