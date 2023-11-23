<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Curso;

class CursoController extends Controller
{

    private $cursos;

    public function __construct(Curso $curso)
    {
        $this->cursos = $curso;
    }

    public function index()
    {
        $cursos = $this->cursos->all();
        return view('admin.curso.index', compact('cursos'));
    }

    public function create()
    {
        return view('admin.curso.crud');
    }

    public function store(CursoRequest $request)
    {
        $data = $request->all();
        $this->cursos->create($data);
        return redirect()->route('curso.index')->with('sucess', 'Curso cadastrado com sucesso.');
    }

    public function show($id)
    {
        $curso = $this->cursos->find($id);
        return response()->json($curso);
    }

    public function edit($id)
    {
        $curso = $this->cursos->find($id);
        return view('admin.curso.crud', compact('curso'));
    }

    public function update(CursoRequest $request, $id)
    {
        $data = $request->all();
        $curso = $this->cursos->find($id);
        $curso->update($data);
        return redirect()->route('curso.index')->with('sucess', 'Curso atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $curso = $this->cursos->find($id);
        $curso->delete();
        return redirect()->route('curso.index')->with('sucess', 'Curso deletado com sucesso.');
    }
}
