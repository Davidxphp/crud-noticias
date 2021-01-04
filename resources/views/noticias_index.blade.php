{{-- exibir as noticias com flag true  --}}
@extends('layouts.app');

@section('conteudo')

    @if (count($dados)==0)
        {{-- não tem noticias --}}
        <p class="alert alert-danger text-center">Não tem notícias na base de dados</p>        
    @else
        {{-- contador total de notícias --}}
        @php
            {{ $total = 0;}}
        @endphp
        {{-- Exbir notícias --}}
        @foreach ($dados as $noticia)

            @if ($noticia->visivel == 1)
                {{-- cabeçalho da notícia (título, autor, update-at) --}}
                <div class="row bg-info">
                    {{-- titulo --}}
                    <div class="col-md-9">
                        <h2>{{ $noticia->titulo }}</h2>
                    </div>
                    {{-- autor e hora --}}
                    <div class="col-md-3 text-right" style="padding-top: 10px">
                        <span class="glyphicon  glyphicon-pencil"></span> {{ $noticia->autor }}
                        <span class="glyphicon  glyphicon-time"></span> {{ $noticia->updated_at->diffForHumans() }}
                    </div>
                </div>

                {{-- texto da notícia  --}}
                <div class="row">
                    <div class="col-md-12" style="padding-top: 5px">
                        {{ $noticia->texto }}
                    </div>
                </div>
                {{-- separador --}}
                <hr> 
                
                @php
                    $total++;
                @endphp
            @endif            
        @endforeach
        {{-- exibe total de notícias visíveis --}}
        <div class="row">
            <div class="col-md-12 text-right">
                <p>Numero total de notícias: {{ $total }}</p>
            </div>
        </div>
        

    @endif    
@endsection



