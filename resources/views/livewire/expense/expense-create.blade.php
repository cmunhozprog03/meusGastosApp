<div class="ml-5">

    @if (session()->has('message'))
        <h3>{{session('message')}}</h3>
    @endif

    <h3 class="text-blue-600 ml-5">Criar Registros</h3>

    <hr>
    
    <form action="" wire:submit.prevent="createExpense">
        <p>
            <label for="" >Descrição</label>
            <input class="shadow border-t" type="text" name="Description" wire:model="description">
            
            @error('description')
                <h5>{{$message}}</h5> 
            @enderror
        </p>
        
        <p>
            <label for="">Valor</label>
            <input class="shadow border-t" type="text" name="amount" wire:model="amount">
        
            @error('description')
                <h5>{{$message}}</h5> 
            @enderror
        </p>
        
        <p>
            <label for="">Tipo</label>
            <select name="type" id="" class="shadow border-t" wire:model="type">
                <option value="">Escolha uma opção:</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>

            @error('description')
                <h5>{{$message}}</h5> 
            @enderror
        </p>
        <button class="bg-green-400" type="submit">Criar Registro</button>
    </form>
    
    

</div>
