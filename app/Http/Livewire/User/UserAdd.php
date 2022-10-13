<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use \App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Hash;

class UserAdd extends Component
{
    public $nama, $email, $role, $password;
    use LivewireAlert;



    protected $rules = [
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'role' => 'required',
        'password' => 'required|min:8'
    ];



    public function store()
    {
        $this->validate();

        User::Create([
            'id'    => $this->id,
            'name' => $this->nama,
            'email' => $this->email,
            'role_id' => $this->role,
            'password' => Hash::make($this->password)
        ]);

        $this->nama = "";
        $this->email = "";
        $this->role = "";
        $this->password = "";
        $this->alert('success', 'User berhasil ditambahkan', [
            'position' => 'center'
        ]);
        $this->emit('userAdd');
    }

    public function render()
    {
        return view('livewire.user.user-add');
    }
}
