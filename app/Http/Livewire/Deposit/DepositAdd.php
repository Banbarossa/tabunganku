<?php

namespace App\Http\Livewire\Deposit;

use Livewire\Component;
use App\Models\Money;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DepositAdd extends Component
{
    public $depositor;
    public $debet;
    public $kredit;
    protected $listeners = [
        'depositDelete' => 'render'
    ];
    use LivewireAlert;
    protected $rules = [
        'debet' => 'numeric',
        'kredit' => 'numeric'
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function mount($depositor)
    {
        $this->depositor = $depositor;
    }



    public function store()
    {
        if ($this->debet === null && $this->kredit === null) {
            $this->alert('warning', 'Data gagal ditambahkan', [
                'position' => 'center'
            ]);
        } else {
            Money::create([
                'student_id' => $this->depositor->id,
                'debet' => $this->debet,
                'kredit' => $this->kredit,
                'teller' => Auth()->user()->name,
            ]);

            $this->debet = null;
            $this->kredit = null;
            $this->emit('depositAdd');
            $this->alert('success', 'Transaksi berhasil ditambahkan', [
                'position' => 'center'
            ]);
        }
    }

    public function render()
    {
        $data = Money::with('student')->where('student_id', $this->depositor->id)->latest()->paginate(5);
        $summary = Money::with('student')->where('student_id', $this->depositor->id)->get();
        $debet = $summary->SUM('debet');
        $kredit = $summary->SUM('kredit');
        $saldo = $debet - $kredit;

        return view('livewire.deposit.deposit-add', [
            'saldo' => number_format($saldo, 0, ".", ",")
        ]);
    }
}
