@extends('layouts.app')

@section('conteudo')
    <form method="POST" action="/atualizar_noticia/{{ $noticia->id_noticias }}">
        {{ csrf_field() }}

        <h3>Editar notícias</h3>

        <div class="form-group">
            <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="text_titulo" value="{{ $noticia->titulo }}" required>
        </div>

        <div class="form-group">
            <label for="texto">Texto:</label>
            <textarea class="form-control" name="text_texto" id="texto"  rows="5" placeholder="Texto da notícia" required>{{ $noticia->texto }}</textarea>           
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="text_autor" value="{{ $noticia->autor }}" required>
        </div>

        <div class="form-group text-center">

            @if ($noticia->visivel == 1)
                <input type="checkbox"  name="check_visivel" checked> Notícia visível                    
            @else
                <input type="checkbox"  name="check_visivel"> Notícia visível
            @endif

        </div>

        <div class="text-center">
            <button class="btn btn-primary" role="submit">Atualizar</button>

        </div>
    </form>
@endsection