<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Student;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use livewireAlert;
    public $search;
    public $studentId;

    protected $listeners = [
        'studentAdd' => 'render',
        'confirmed' => 'destroy',
    ];

    public function editStudent($id)
    {
        $this->showForm = true;
        $this->emit('showUpdate', $id);
    }

    public function confirm($id)
    {
        $this->studentId = $id;
        $this->alert('warning', 'Apakah anda yakin untuk menghapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'ya',
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onDismissed' => 'cancelled',
            'position' => 'center',
            'timer' => ''
        ]);
    }

    public function render()
    {
        $students = Student::where('nama', 'like', '%' . $this->search . '%')->orderBy('nama', 'asc')->paginate(5);

        // $students = Student::latest()->paginate(5);
        return view('livewire.student-index', [
            'students' => $students
        ]);
    }

    public function destroy()
    {
        $data = Student::where('id', $this->studentId);

        if ($data) {
            $data->delete();
        }

        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center'
        ]);
    }
}
