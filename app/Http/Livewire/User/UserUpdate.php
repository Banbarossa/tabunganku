<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserUpdate extends Component
{
    public $nama;
    public $email;
    public $role;
    public $password;
    public $userId;
    protected $listeners = ['userToForm'];
    use LivewireAlert;


    public function userToForm($user)
    {

        $this->userId = $user['id'];
        $this->nama = $user['name'];
        $this->email = $user['email'];
        $this->role = $user['role_id'];
    }

    public function update()
    {
        User::where('id', $this->userId)->first()->update([
            'name' => $this->nama,
            'email' => $this->email,
            'role_id' => $this->role,
            'password' => Hash::make($this->password),
        ]);
        $this->alert('success',  $this->nama . ' berhasil dirubah', [
            'position' => 'center'
        ]);
        $this->emit('userAdd');
    }
    public function render()
    {
        return view('livewire.user.user-update');
    }
}
