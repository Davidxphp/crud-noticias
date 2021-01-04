<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{    
    public function index()
    {
        // busca todas as noticias
        $dados = noticias::all();
        return view('noticias_index', compact('dados'));
    }

    public function create()
    {
        // apresenta pagina de criação
        return view('noticias_create');
    }

    public function store(Request $request)
    {
        // gravar nova notica
        $noticia = new noticias;

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

        // visibilidade da noticia
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        }
        else{
            $noticia->visivel = 0;
        }

        // salvar
        $noticia->save();

        // redirecionamento para inicio - home
        return redirect('/');

    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        // apresenta formulário para editar  com dados pre-preenchido
        $noticia = noticias::find($id);
        return view('noticias_edit', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
        // altera dados
        $noticia = noticias::find($id);

        $noticia->titulo = $request->text_titulo;
        $noticia->texto  = $request->text_texto;
        $noticia->autor = $request->text_autor; 
        
        // visibilidade da noticia
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        }
        else{
            $noticia->visivel = 0;
        }

        $noticia->save();

        return redirect('gerir_noticias');

    }

    public function destroy($id)
    {
        // exclui notícias
        noticias::destroy($id);
        return redirect('/gerir_noticias');
    }

    public function gestao()
    {
        // lista todas as noticias para gestão
        $noticias = noticias::all();
        return view('noticias_gestao', compact('noticias')); 
    }

    public function colocarVisivel($id)
    {
        $noticia = noticias::find($id);
        $noticia->visivel = 1;
        $noticia->save();
        return redirect('/gerir_noticias');
    }

    public function colocarInvisivel($id)
    {
        $noticia = noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return redirect('/gerir_noticias');
    }
}
