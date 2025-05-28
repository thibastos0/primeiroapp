<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Tarefas
        </h2>
    </x-slot>    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-15 shaow bg-white p-5 rounded-lg">                 
                <p><h1>Cadastrar tarefa</h1></p>
                <br>
                <form method="POST" action="{{ route('task.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título da Tarefa:</label>
                        <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Título" required>
                    </div>
                    <div class="mb-4">
                        <label for="completed" class="block text-gray-700 text-sm font-bold mb-2">Finalizada:</label>
                        <select name="completed" id="completed" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

