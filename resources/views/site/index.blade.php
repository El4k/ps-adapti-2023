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
                <div>
                    <td>{{ $aluno->id }}</td>
                </div>
                <div>
                    <td>{{ $aluno->nome }}</td>
                </div>
                <div>
                    <img src="{{ url($aluno->imagem) }}" class="image-single-page-news-know" alt="News">
                </div>
            </tr>
        @endforeach
    </div>
</body>

</html>
