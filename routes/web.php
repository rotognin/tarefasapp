<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController; // Estava faltando essa indicação!

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// O primeiro parâmetro vai definir o que for requisitado, ou seja, o que vier por "get"
// O segundo parâmetro informa para onde vai a solicitação, que nesse caso vai jogar
//   para o controlador de tarefas, no método "create"

// Eu posso tanto criar um link para um endereço e jogá-lo aqui nas rotas,
// como nomear uma rota e usá-la pelo blade
// Essa rota abaixo pode estar na view de duas formas:
// <a href="/tasks/new">Nova tarefa</a>
// <a href="{{ route('new_task') }}">Nova tarefa</a>
Route::get('/tasks/new', [TasksController::class, 'create'])->name('new_task'); // versão 8 do Laravel

//Route::get('/tasks/new', 'TasksController@create');         // versão 7 do Laravel

// Se vier por POST, redirecionar para o controlador das tarefas, no método "store"
// Rota nomeada para "register_task", e lá na view eu defino para essa rota o "action" do Form!
Route::post('/tasks', [TasksController::class, 'store'])->name('register_task');

// Em vez de ir direto para a view, eu vou para um controlador para
// carregar os registros da tabela de tarefas

//Route::view('/tasks', 'index');
Route::get('/tasks', [TasksController::class, 'load'])->name('tasks_home');

Route::get('/tasks/find/{id}', [TasksController::class, 'show']);
Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->name('edit_task');
Route::post('/tasks/edit/{id}', [TasksController::class, 'update'])->name('update_task');
Route::get('/tasks/delete/{id}', [TasksController::class, 'delete'])->name('confirm_delete_task');
Route::post('/tasks/delete/{id}', [TasksController::class, 'destroy'])->name('delete_task');
Route::get('/tasks/do/{id}', [TasksController::class, 'do'])->name('do_task');
Route::get('/tasks/archive/{id}', [TasksController::class, 'archive'])->name('archive_task');
