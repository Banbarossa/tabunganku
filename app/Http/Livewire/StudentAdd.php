<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentAdd extends Component
{
    use LivewireAlert;
    public $nama;
    public $tempat_lahir;

    protected $rules = [
        'nama' => 'required|min:4',
        'tempat_lahir' => 'nullable'
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    // public function reset()
    // {
    //     $this->nama = "";
    //     $this->tempat_lahir = "";
    // }

    public function store()
    {
        $validatedData = $this->validate();
        $validatedData['added_by'] = Auth()->user()->name;
        Student::create($validatedData);
        $this->emit('studentAdd');
        $this->nama = "";
        $this->tempat_lahir = "";
        $this->alert('success', 'Data Berhasil ditambahkan', [
            'position' => 'center'
        ]);
    }


    public function render()
    {
        return view('livewire.student-add');
    }
}
