<?php

namespace App\Http\Livewire\Deposit;

use Livewire\Component;
use App\Models\Money;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;;

class DepositIndex extends Component
{
    public $depositor;
    protected $listeners = [
        'depositAdd' => 'render',
        'confirmed' => 'destroy',
        'studentDeposit'
    ];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use LivewireAlert;
    public $moneyId;


    public function studentDeposit($id)
    {
        $this->depositor = $id;
    }
    public function confirm($id)
    {
        $this->moneyId = $id;
        $this->alert('warning', 'Apakah anda yakin untuk menghapus', [
            'position'          => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yakin',
            'onConfirmed'       => 'confirmed',
            'showCancelButton'  => true,
            'cancelButtonText'  => 'Cancel',
            'onDismissed'       => 'cancelled',
            'timer'             => ''
        ]);
    }


    public function destroy()
    {
        $data = Money::where('id', $this->moneyId);
        $data->delete();
        $this->alert('success', 'data berhasil dihapus', [
            'position' => 'center'
        ]);
        $this->emit('depositDelete');
    }

    public function render()
    {

        $data = Money::with('student')->where('student_id', $this->depositor->id)->latest()->paginate(5);
        $summary = Money::with('student')->where('student_id', $this->depositor->id)->get();
        $debet = $summary->SUM('debet');
        $kredit = $summary->SUM('kredit');
        $saldo = $debet - $kredit;

        return view('livewire.deposit.deposit-index', [
            'data' => $data,
            'saldo' => number_format($saldo, 2, ".", ",")
        ]);
    }
}
