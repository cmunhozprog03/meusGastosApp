<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExpenseCreate extends Component
{
    use WithFileUploads;

    public $description;
    public $amount;
    public $type;
    public $photo;

    protected $rules =([
        'description' => 'required',
        'amount' => 'required',
        'type' => 'required',
        'photo' => 'image'
    ]);

    public function createExpense()
    {
        $this->validate();

        $photo = $this->photo->store('expenses-photos', 'public');

        auth()->user()->expenses()->create([
            'description' => $this->description,
            'amount'      => $this->amount,
            'type'        => $this->type,
            'user_id'     => 1,
            'photo'       => $photo ?? null
        ]);
        
        session()->flash('message', 'registro criado com seucesso!');
        
        $this->description = $this->amount = $this->type = null;

        
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
