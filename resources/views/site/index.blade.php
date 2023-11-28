<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="./vasco.png">
    <link rel="stylesheet" href="style.css">
    <title>Vasco Jobs</title>
</head>

<body>
    <header id="cabeçalho">
        <img src="./vascudo.jpg" alt="Vascudo">
        <nav>
            <ul>
                <li>
                    <button id="dark-mode-toggle">DarkMode</button>
                </li>
                <li>
                    <input type="text" id="search-input" placeholder="Search by Curso or Name"
                        oninput="filterCursos()">
                </li>
                <li>
                    <a href="dashboard">Dashboard</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="principal">
        <div id="container-cards">
            @foreach ($alunos as $aluno)
                <div id="card-principal" class="card">
                    <div class="info">
                        <div class="imagem">
                            <img src="{{ url($aluno->imagem) }}" class="image-single-page-news-know" alt="Imagem">
                        </div>
                        <h4>{{ $aluno->nome }} </h4>
                        <h6>{{ $aluno->curso->curso }}</h6>
                        <h6>{{ $aluno->descricao }}</h6>
                    </div>
                    <div class="bottom-section">
                        @if ($aluno->contratado)
                            <p class="event-type">Contratado</p>
                        @else
                            <p class="event-type">Não Contratado</p>
                            <form action="{{ route('aluno.contratar', $aluno) }}" method="post">
                                @csrf
                                <button type="submit" class="botao">CONTRATAR</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <script src="./script.js"></script>
</body>

</html>
