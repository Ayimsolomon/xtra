<?php
namespace App\Livewire\Auth;

use App\Livewire\Forms\RegisterForm;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Create Account')]
class Register extends Component
{
    public RegisterForm $form;

    public function register()
    {
        $this->form->store();
        return redirect()->intended('/dashboard');
    }

    public function render()
    {
        return view('components.auth.register');
    }
}