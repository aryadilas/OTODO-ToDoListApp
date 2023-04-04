<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use DateTime;
use \Auth;

class CreatePanel extends Component
{

    public $tanggal;
    public $hari;
    public $task;

    protected $listeners = [
        'nextDay',
        'beforeDay'
    ];

    public function updateHari()
    {
        $dateObj = new DateTime($this->tanggal);
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $dayName = $days[$dateObj->format('w')];
        
        $this->hari = $dayName;
        
    }

    public function beforeDay()
    {
        $dateObj = new DateTime($this->tanggal);
        $dateObj->modify('-1 day');
        $this->tanggal = $dateObj->format('Y-m-d');
        $this->updateHari();
        $this->emit('dateChange', $this->tanggal);
        
    }

    public function nextDay()
    {
        $dateObj = new DateTime($this->tanggal);
        $dateObj->modify('+1 day');
        $this->tanggal = $dateObj->format('Y-m-d');
        $this->updateHari();
        $this->emit('dateChange', $this->tanggal);
        
    }

    public function updated($field)
    {
        if ($field == 'tanggal') {
            $this->updateHari();
            $this->emit('dateChange', $this->tanggal);
        }
    }

    public function mount()
    {
        if(!$this->tanggal)
        {
            $this->tanggal = date('Y-m-d');
            $this->updateHari();
        }
    }

    public function render()
    {
        return view('livewire.create-panel');
    }

    public function store()
    {
        
        $task = Task::create([
            'tanggal' => $this->tanggal,
            'task' => $this->task,
            'status' => 'Listed',
            'id_user' => Auth::user()->id,
        ]);
        $this->resetInput();
        $this->emit('taskStored', $task);
    }

    private function resetInput()
    {
        $this->task = null;
        
    }

    
}
