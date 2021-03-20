<div class="w3-container">
    
    <x-slot name="header">
        Criar Registro
    </x-slot>

    @include('includes.message')

    
    <div class="w3-row py-5">
       
        <form action="" wire:submit.prevent="createExpense">
            <div class="w3-col m6">
                <p>
                    <label for="">Descrição</label>
                    <input type="text" class="w3-input" name="description" wire:model="description">

                    @error('description')
                        <h5>{{ $message }}</h5>
                    @enderror
                </p>
                <p>
                    <label for="">Valor</label>
                    <input type="text" class="w3-input" name="amount" wire:model="amount">

                    @error('amount')
                        <h5>{{ $message }}</h5>
                    @enderror
                </p>
                <p>
                    <label for="">Tipo de operação</label>
                    <select name="type" id="" class="w3-select" wire:model="type">
                        <option value="">Escolha a operação</option>
                        <option value="1">Entrada</option>
                        <option value="2">Saída</option>
                    </select>

                    @error('type')
                        <h5>{{ $message }}</h5>
                    @enderror
                </p>
                <p>
                    <label for="">Foto do comprovante</label>
                    <input type="file" class="w3-input" name="photo" wire:model="photo">
                    @if ($photo)
                        <img class="my-3" src="{{ $photo->temporaryUrl() }}" alt="" width="150">
                    @endif

                    @error('photo')
                        <h5>{{ $message }}</h5>
                    @enderror
                </p>
                <p>
                    <label for="">Data</label>
                    <input type="text" class="w3-input" name="expenses_date" wire:model="expenseDate">
                    
                    @error('expenses_date')
                        <h5>{{ $message }}</h5>
                    @enderror
                </p>
                <button type="submit" class="w3-button w3-teal mt-2">Criar</button>
            </div>

        </form>
       
        
      </div> 
    
</div>
