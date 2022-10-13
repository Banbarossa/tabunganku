<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use \App\Models\Student;

class StudentLayout extends Component
{
    public $listeners = [
        'showUpdate',
        'studentAdd'
    ];

    public $showForm = false;


    public function studentAdd()
    {
        $this->showForm = false;
    }


    public function showUpdate($id)
    {
        $this->showForm = true;
        $student = Student::Find($id);
        $this->emit('tampilSiswa', $student);
    }

    public function render()
    {
        return view('livewire.student.student-layout')
            ->extends('layouts.template')
            ->section('content');
    }
}
