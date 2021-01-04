@extends('layouts.app')

@section('conteudo')
    
    @if (count($noticias)==0)
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="alert alert-danger">Não tem notícias na base dados.</p>
            </div>
        </div>    
    @else
        
        @foreach ($noticias as $noticia)
            @include('inc.linha_noticia')
        @endforeach
        
    @endif  
@endsection