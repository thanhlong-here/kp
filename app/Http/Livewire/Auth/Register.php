<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\User;
use Auth;
use Hash;

class Register extends Component
{

    public $password;
    public $email;
    public $name;
    public $redirect = null;
    public $ok = false;

    protected $rules = [
        'password' => 'required|min:6|max:191',
        'email'    => 'required|email|unique:users|max:191',
    ];
    public function sw()
    {
        $this->ok = false;
    }

    public function register()
    {
        if (User::whereEmail($this->email)->exists()) {
            $this->addError('email', 'email is exits');
        } else {
            $this->ok = true;
            $validatedData = $this->validate();
            Auth::login(
                User::create(
                    [
                        'name' => empty($this->name) ? $this->email : $this->name,
                        'email' => $this->email,
                        'password' => Hash::make($this->password),
                    ]
                )
            );
            return redirect($this->redirect.'?status=true');
        }
    }
    public function render()
    {
        if (empty($this->redirect))
            $this->redirect = url()->current();
        return view('livewire.auth.register');
    }
}
