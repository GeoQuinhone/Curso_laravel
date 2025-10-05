<?php

use Illuminate\Support\Facades\Route;

/* Metodos usado anteriormente

Route::get('/', function () {
    return 'Olá seja ao sobre-nós';
});

Route::get('/sobre-nos', function () {
    return 'Olá seja ao sobre-nós';
});

Route::get('/contato', function () {
    return 'Olá seja ao contato';
});

*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'outroPrincipal'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'principal'])->name('site.contato');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

//Agrupamento de Rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});
/*
para acessar uma rota agrupada utilize por exemplo /app/clientes
Callback é uma função que é passada como argumento para outra função e será executada
"de volta" (called back) em um momento posterior, geralmente após a conclusão de alguma operação */


// Redirecionamento de Rotas
Route::get('/rota1', function () {})->name('site.rota1');

//Redirecionamento dentro do callback
Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');
/*Route::get('/rota2', function(){})->name('site.rota2');
Route::redirect('/rota2','/rota1') */

//Rota de contigência que é utilizada quando uma rota não é encontrada ou é inexistente (fallback)
Route::fallback(function() {
    echo 'Rota não encontrada, <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial';
});





/*
Testes
Recebendo parametros nome, categoria, assunto, mensagem - aqui é obrigatorio passar todos os parametros para nao dar erro
para deixar um parametro opcional e nao dar erro é só colocar ex: {mensagem?} - utilizando o ? como valor padrão colocado dentro da function sempre da direita para a esquerda
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',function(
    string $nome = 'Desconhecido',
    string $categoria = 'Informação',
    string $assunto = 'Contato',
    $mensagem = 'Mensagem não informada!'
    ){
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});


Route::get('/contato/{nome}/{categoria_id}', function (string $nome, int $categoria_id = 1) {
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+',)-> where('nome', '[A-Za-z]+');
 Aqui o laravel sabe que se receber algo diferente de um valor númerico ele vai recusar a requisição da categoria
E se o nome conter numeros ele vai recusar a requisição também


Verbo http
get
post
put
patch
delete
options
*/
