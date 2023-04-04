<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use \Auth;

class TaskList extends Component
{
    public $dateChange;

    protected $listeners = [
        'taskStored',
        'dateChange'
    ];
    
    public function render()
    {
        $tanggal = $this->dateChange ? $this->dateChange : now()->toDateString();
        $tasks = Task::where('id_user', Auth::user()->id)->whereDate('tanggal', $tanggal )->get();
        return view('livewire.task-list', [
            'tasks' => $tasks
        ]);

    }

    public function dateChange($tanggal){
        $this->dateChange = $tanggal;
    }

    public function taskStored($task){

    }

    public function check($id)
    {
        $task = Task::where('id', $id)->first()->update([
            'status' => 'Done'
        ]);
        
    }

    public function uncheck($id)
    {
        $task = Task::where('id', $id)->first()->update([
            'status' => 'Listed'
        ]);
        
    }

    public function deleteTask($id)
    {
        $task = Task::where('id', $id)->first()->delete();
    }
}
