<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Jantinnerezo\LivewireAlert\LivewireAlert;;

class StudentUpdate extends Component
{
    public $nama;
    public $tempat_lahir;
    public $added_by;
    public $studentId;
    use LivewireAlert;


    protected $listeners = [
        'tampilSiswa'
    ];

    public function store()
    {
        Student::where('id', $this->studentId)->update([
            'nama' => $this->nama,
            'tempat_lahir' => $this->tempat_lahir,
            'added_by' => $this->added_by,
        ]);
        $this->emit('studentAdd');
        $this->alert('success', 'data ' . $this->nama . 'berhasil diubah', [
            'position' => 'center'
        ]);
    }

    public function cancel()
    {
        $this->emit('studentAdd');
    }

    public function tampilSiswa($student)
    {
        $this->nama = $student['nama'];
        $this->tempat_lahir = $student['tempat_lahir'];
        $this->studentId = $student['id'];
    }
    public function render()
    {
        return view('livewire.student-update');
    }
}
