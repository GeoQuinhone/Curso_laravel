<h3>FornecedorController</h3>

{{ ' Texto de Teste ' }}
<?= 'Texto de Teste 2' ?>

{{-- Fica o comentario estilo // no php --}}

@php
    //Para comentarios de uma linha
    /* Para comentários de bloco de código */
    echo 'Texto de Teste 3';
    /*
    if(<Condição>) {} Enquanto if executa se o retorno for true

    if(isset($variavel)) {} retornar true se a variável estiver definida

    */
@endphp

{{-- @dd($fornecedores) --}}
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
<br>

{{-- @dd($fornecedores2);
Fornecedor: {{ $fornecedores2[0]['nome'] }}
<br>
Status: {{ $fornecedores2[0]['status'] }}
<br>
CNPJ: {{ $fornecedores2[0]['cnpj'] }}
<br>

@if (!($fornecedores2[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br> --}}
{{-- @unles executa se o retorno for false --}}
@unless ($fornecedores2[0]['status'] == 'S')
    <!-- se o retorno da condição for false -->
    Fornecedor Inativo
@endunless
<br>
<br>

@isset($fornecedores2)
    Fornecedor: {{ $fornecedores2[0]['nome'] }}
    <br>
    Status: {{ $fornecedores2[0]['status'] }}
    <br>
    @isset($fornecedores2[0] ['cnpj'])
        CNPJ {{ $fornecedores2[0]['cnpj'] }}
    @endisset
@endisset
<br>
<br>
@isset($fornecedores2)
    Fornecedor: {{ $fornecedores2[1]['nome'] }}
    <br>
    Status: {{ $fornecedores2[1]['status'] }}
    <br>
    @isset($fornecedores2[1] ['cnpj'])
        CNPJ {{ $fornecedores2[1]['cnpj'] }}
    @endisset
@endisset
