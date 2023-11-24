<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;


class SiteController extends Controller
{

    private $cursos;
    private $alunos;

    public function __construct(Aluno $aluno, Curso $curso)
    {
        $this->cursos = $curso;
        $this->alunos = $aluno;
    }

    public function index()
    {
        $cursos = $this->cursos->all();
        $alunos = $this->alunos->all();
        return view('site.index', compact('cursos', 'alunos'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
