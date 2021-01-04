@extends('layouts.app')

@section('conteudo')
    <form method="POST" action="/salvar_noticia">
        {{ csrf_field() }}

        <h3>Nova notícias</h3>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="text_titulo" placeholder="Título" required>
        </div>

        <div class="form-group">
            <label for="texto">Texto:</label>
            <textarea class="form-control" name="text_texto" id="texto"  rows="5" placeholder="Texto da notícia" required></textarea>           
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="text_autor" placeholder="autor" required>
        </div>

        <div class="form-group text-center">
            <input type="checkbox"  name="check_visivel" checked> Notícia visível
        </div>

        <div class="text-center">
            <button class="btn btn-primary" role="submit">Salvar</button>

        </div>
    </form>
@endsection