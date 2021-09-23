<h1>Lista de estudantes</h1>
<br>

@foreach ($estudantes as $estudante)
    <h2>{{ $estudante->getNome() }}</h2>
@endforeach