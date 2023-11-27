<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="style.css">
    <title>Vasco Jobs</title>
</head>

<body>
    <header id="cabeçalho">
        <img src="./vascudo.jpg" alt="Vascudo">
        <nav>
            <ul>
                <li><button id="dark-mode-toggle">DarkMode</button></li>
                <li><a href="dashboard">Dashboard</a></li>
            </ul>
        </nav>
    </header>
    <main id="principal">
        <div id="container-cards">
            @foreach ($alunos as $aluno)
                <div id="card-principal" class="card">
                    <h3>{{ $aluno->nome }}</h3>
                    <h5>{{ $aluno->curso->curso }}</h5>
                    <img src="{{ url($aluno->imagem) }}" class="image-single-page-news-know" alt="Imagem">
                    <h6>{{ $aluno->descricao }}</h6>
                    @if ($aluno->contratado)
                        <p class="event-type">Contratado</p>
                    @else
                        <p class="event-type">Não Contratado</p>
                        <form action="{{ route('aluno.contratar', $aluno) }}" method="post">
                            @csrf
                            <button type="submit">CONTRATAR</button>
                        </form>
                    @endif

                </div>
            @endforeach
        </div>
    </main>
    <script src="./script.js"></script>
</body>

</html>
