<h3>Fornecedor</h3>

{{--  Fica comentado que sera descartado pelo interpretador do blade --}}
@php
    /*if(isset($variavel)) {}
    */
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        
    Iteração atual: {{ $loop->iteration }}
    <br>
    Fornecedor: {{ $fornecedor['nome'] }} 
    <br>
    Status: {{ $fornecedor ['status'] }}
    <br>
    CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado nao foi preenchido'}}
    <br>
    Telefone: ({{ $fornecedor['DDD'] ?? ''}}) {{ $fornecedor['Telefone'] ?? ''}}    
    <br>
    @if($loop->first)
    Primeira iteracao
    @endif

    @if($loop->last)
    ultima iteracao do loop

    <br>

    total de registros: {{$loop->count}}
    @endif
    <hr>
    @empty
    Não existem fornecedores cadastrados!!!
    @endforelse
@endisset

<br>