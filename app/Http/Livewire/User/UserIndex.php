<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class UserIndex extends Component
{
    protected $listeners = [
        'userAdd' => 'render',
        'confirmed',
    ];
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = "bootstrap";
    public $userId;


    public function editUser($id)
    {
        $user = User::find($id);
        $this->emitUp('editUser', $user);
    }

    public function confirm($id)
    {
        $this->userId = $id;
        $data = User::find($id);
        // dd($data);
        $this->alert('warning', 'Apakan anda yakin untuk menghapus ' . $data->name . '??', [
            'position' => 'center',
            'showConfirmButton' => 'true',
            'confirmButtonText' => 'yakin',
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'timer' => ''

        ]);
    }

    public function confirmed()
    {
        $data = User::where('id', $this->userId);
        if ($data) {
            $data->delete();
        }

        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center'
        ]);
    }



    public function render()
    {
        $users = User::latest()->paginate(5);

        // dd($users);
        return view('livewire.user.user-index', ['users' => $users]);
    }
}
