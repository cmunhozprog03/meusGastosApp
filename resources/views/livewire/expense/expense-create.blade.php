<div class="ml-5">
    <h3 class="text-blue-600 ml-5">Criar Registros</h3>

    <hr>
    
    <form action="">
        <p>
            <label for="">Descrição</label>
            <input class="shadow border-t" type="text" name="Description" wire:model="description">
        </p>
        
        <p>
            <label for="">Valor</label>
            <input class="shadow border-t" type="text" name="amount" wire:model="amount">
        </p>
        
        <p>
            <label for="">Tipo</label>
            <select name="type" id="" class="shadow border-t" wire:model="type">
                <option value="">Escolha uma opção:</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
        </p>
        <button class="bg-green-400" type="submit">Criar Registro</button>
    </form>
    
    

</div>
