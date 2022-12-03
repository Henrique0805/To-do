<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>
            <x-form.text_input name="title" label="Titulo da task" placeholder="Digite o título da sua task"
            required="required"/>
            <x-form.text_input type="date" name="due_date" label="Data de Realização"
            placeholder="Digite o título da sua task" required="required"/>
            <x-form.select_input name="category" label="Categoria" placeholder="Digite o título da sua task">
                <option>Valor 1</option>
            </x-form.select_input>
            <x-form.textarea_input name="description" placeholder="Digite a descrição da tarefa"/>
            <div class="inputArea">
                <button type="reset" class="btn">Resetar</button>
                <button type="submit" class="btn btn-primary">Criar tarefa</button>
            </div>
        </form>
    </section>
</x-layout>
