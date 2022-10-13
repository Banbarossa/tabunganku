<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminIndex extends Component
{
    public $editForm = false;
    protected $listeners = [
        'editUser',
        'userAdd'
    ];


    public function userAdd()
    {
        $this->editForm = false;
    }


    public function editUser($user)
    {
        $this->editForm = True;

        $this->emit('userToForm', $user);
    }

    public function render()
    {
        return view('livewire.admin.admin-index')
            ->extends('layouts.template')
            ->section('content');
    }
}
