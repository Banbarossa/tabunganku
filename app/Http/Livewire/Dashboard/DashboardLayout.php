<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Student;
use App\Models\Money;
use App\Models\User;
use App\Models\School;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DashboardLayout extends Component
{
    public $nama;
    public $nspp;
    public $pimpinan;
    public $alamat;
    use LivewireAlert;


    public function mount()
    {
        $data = School::where('id', 1)->first();

        $this->nama = $data['lembaga'];
        $this->nspp = $data->nspp;
        $this->pimpinan = $data->pimpinan;
        $this->alamat = $data->alamat;
    }

    public function ubahLembaga()
    {
        School::where('id', 1)->update([
            'lembaga' => $this->nama,
            'nspp' => $this->nspp,
            'pimpinan' => $this->pimpinan,
            'alamat' => $this->alamat,
        ]);
        $this->alert('success', 'data lembaga berhasil diubah', [
            'position' => 'center'
        ]);
    }
    public function render()
    {
        $student = count(Student::all());
        $admin = count(User::where('role_id', 'Admin')->get());
        $manager = count(User::where('role_id', 'Manager')->get());
        $deposit  = Money::all();
        $debet = $deposit->SUM('debet');
        $kredit = $deposit->SUM('kredit');
        $saldo = $debet - $kredit;
        $lembaga = School::where('id', 1)->first();


        return view('livewire.dashboard.dashboard-layout', [
            'students' => $student,
            'saldo'     => $saldo,
            'admin'     => $admin,
            'manager'     => $manager,
            'lembaga'   => $lembaga

        ])
            ->extends('layouts.template')
            ->section('content');
    }
}
