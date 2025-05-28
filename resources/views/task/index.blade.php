<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tarefas
        </h2>
    </x-slot>    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-15 shaow bg-white p-5 rounded-lg">                 
                <p><h1>Lista de tarefas</h1></p>
                <br>
                @foreach ($tasks as $task)
                    <div class="mb-4">
                        <a href="{{ route('task.edit', $task) }}" class="text-blue-500 hover:text-blue-700">
                        <h2 class="text-lg font-semibold">(ID:{{ $task->id }})  {{ $task->title }}: </h2>
                        </a>
                        <p class="text-gray-800">{{ $task->completed === 1 ? 'CONCLUIDA' : 'PENDENTE' }}</p>
                        <p class="text-sm text-gray-500">Criado em: {{ $task->created_at }}</p>
                        <p class="text-sm text-gray-500">Atualizado em: {{ $task->updated_at }}</p>
                        <!-- deletar tarefa -->
                        <form method="POST" action="{{ route('task.destroy', $task) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Deletar</button>
                        </form>
                    </div>
                    <hr>                   
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>