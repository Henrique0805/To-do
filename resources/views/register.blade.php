<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task_section">
        <h1>Registre-se</h1>

        @if ($errors->any())
            <ul class="alert alert-erro">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            <x-form.text_input name="name" label="Seu nome" placeholder="Seu nome"
            required="required"/>
            <x-form.text_input type="email" name="email" label="Seu email"
            placeholder="Seu email" required="required"/>
            <x-form.text_input type="password" name="password" label="Sua senha"
            placeholder="Sua senha" required="required"/>
            <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha"
            placeholder="Confirme sua senha" required="required"/>
            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se"></x-form.form_button>
        </form>
    </section>
</x-layout>
