<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task_section">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <x-form.text_input name="title"
            label="Titulo da task"
            placeholder="Digite o título da sua task"
            required="required"
            value="{{$task->title}}"/>
            <x-form.text_input type="datetime"
            name="due_date"
            label="Data de Realização"
            required="required"
            value="{{$task->due_date}}"/>
            <x-form.select_input name="category_id"
            label="Categoria"
            placeholder="Digite o título da sua task">
            @foreach ($categories as $category)
                <option value="{{$category->id}}"
                @if ($category->id == $task->category_id)
                    selected
                @endif >{{$category->title}}</option>
            @endforeach
            </x-form.select_input>
            <x-form.textarea_input label="Descrição da tarefa"
            name="description"
            placeholder="Digite a descrição da tarefa"
            value="{{$task->description}}"/>
            <x-form.form_button resetTxt="Resetar"
            submitTxt="Atualizar tarefa"></x-form.form_button>
        </form>
    </section>
</x-layout>
