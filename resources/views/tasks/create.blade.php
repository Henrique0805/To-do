<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>
            <div class="inputArea">
                <label for="title">
                    Título da Task
                </label>
                <input id="title" name="title" placeholder="Digite o título da tarefa" required />
            </div>
            <div class="inputArea">
                <label for="due_date">
                    Data de Realização
                </label>
                <input type="date" id="due_date" name="due_date" placeholder="Digite o título da tarefa" required />
            </div>
            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value="">Selecione a categoria</option>
                </select>
            </div>
            <div class="inputArea">
                <label for="description">
                    Descrição de tarefa
                </label>
                <textarea id="description" name="description" placeholder="Digite uma descrição para sua tarefa" ></textarea>
            </div>
        </form>
    </section>
</x-layout>
