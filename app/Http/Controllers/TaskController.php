<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = Auth::user();
        //é possível fazer um if e verificar se o usuário é Administrador e pode ver todas as tarefas
        $tasks = $user->tasks()->orderBy('created_at', 'desc')->get(); //lista de tarefas do usuário logado
        return view('task.index', compact('tasks')); //compact é um helper do PHP que transforma variáveis em array associativo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $user = Auth::user();
        $dados['user_id'] = $user->id; //adiciona o id do usuário logado

        Task::create($dados);
        return redirect()->route('task.index')->with('success', 'Tarefa cadastrada com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {   
        if(!$this->validarAcesso($task)){
            return redirect()->route('task.index')->with('error', 'Você não tem permissão para excluir esta tarefa!');
        }

        return view('task.editar', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {   
        if(!$this->validarAcesso($task)){
            return redirect()->route('task.index')->with('error', 'Você não tem permissão para excluir esta tarefa!');
        }

        $dados = $request->all();
        $task->update($dados);
        return redirect()->route('task.index')->with('success', 'Tarefa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {   
        //$task = Task::find($id); //ou $task = Task::findOrFail($id);
        //findOrFail retorna um erro 404 caso não encontre o id
        if(!$this->validarAcesso($task)){
            return redirect()->route('task.index')->with('error', 'Você não tem permissão para excluir esta tarefa!');
        }

        $task->delete();
        return redirect()->route('task.index')->with('success', 'Tarefa excluída com sucesso!');
    }

    private function validarAcesso(Task $task):bool
    {
        $user = Auth::user();
        if($task->user_id != $user->id){
            return false;
        }

        return true;

    }

}
