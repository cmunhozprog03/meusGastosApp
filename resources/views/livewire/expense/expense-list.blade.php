<div class="w3-container">

    @include('includes.message')

    <x-slot name="header">
        Meus Registros
    </x-slot>


    <table class="w3-table w3-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dercrição</th>
                <th>Valor</th>
                <th>Tipo</th>
                <th>Data</th>
                <th>
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $exp)
            <tr>
                <td>{{ $exp->id }}</td>
                <td>{{ $exp->description }}</td>
                <td><span class="{{ $exp->type == 1 ? 'text-green-600' : 'text-red-600' }}" > 
                    R$ {{ number_format($exp->amount, 2, ',', '.') }}
                </span>
                </td>>
                    
                        
                   
                <td>{{ $exp->type }}</td>
                <td>{{ $exp->expenses_date ? 
                       $exp->expenses_date->format('d/m/Y H:i:s') :
                       $exp->created_at->format('d/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{ route('expenses.edit', $exp->id) }}" class="w3-button w3-orange">Editar</a>
                    <a href="#" wire:click.prevent="remove({{ $exp->id }})" class="w3-button w3-red">Excluir</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    @if (count($expenses))
        {{ $expenses->links() }}
    @endif
    

</div>
