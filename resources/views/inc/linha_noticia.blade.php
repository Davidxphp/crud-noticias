<div class="row">
    {{-- titulo --}}
    <div class="col-md-6">
        <strong>{{ $noticia->titulo }}</strong>
    </div>

    {{-- autor --}}
    <div class="col-md-3">
        {{ $noticia->autor }}
    </div>

    {{-- incones --}}
    <div  class="col-md-3 text-right">
        {{-- visibilidade --}}
        @if ($noticia->visivel == 1)
            <a href="colocar_invisivel/{{ $noticia->id_noticias }}">
                <span class="glyphicon glyphicon-eye-open" style="margin-left: 10px"></span>
            </a>       
        @else
            <a href="colocar_visivel/{{ $noticia->id_noticias }}">
                <span class="glyphicon glyphicon-eye-open" style="margin-left: 10px; color: #ddd"></span>
            </a>
        @endif
        
        {{-- editar --}}
        <a href="editar_noticia/{{ $noticia->id_noticias }}">
            <span class="glyphicon glyphicon-pencil" style="margin-left: 10px"></span>
        </a>
        {{-- apagar --}}
        <a href="excluir_noticia/{{ $noticia->id_noticias }}">
            <span class="glyphicon glyphicon-trash" style="margin-left: 10px"></span>
        </a>
    </div>

</div>