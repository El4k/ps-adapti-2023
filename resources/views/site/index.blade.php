{{-- Front-end começa aqui! --}}
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    {{-- <div class='cursinhos'>
    @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->curso }}</td>
        </tr>
    @endforeach
</div> --}}
    <div class='aluninhos'>
        @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->nome }}</td>
            </tr>
        @endforeach
    </div>
</body>

</html>
