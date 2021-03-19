<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseCreate extends Component
{
    public $description;
    public $amount;
    public $type;

    protected $rules =([
        'description' => 'required',
        'amount' => 'required',
        'type' => 'required',
    ]);

    public function createExpense()
    {
        $this->validate();

        Expense::create([
            'description' => $this->description,
            'amount'      => $this->amount,
            'type'        => $this->type,
            'user_id'     => 1
        ]);
        
        session()->flash('message', 'registro criado com seucesso!');
        
        $this->description = $this->amount = $this->type = null;

        
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
