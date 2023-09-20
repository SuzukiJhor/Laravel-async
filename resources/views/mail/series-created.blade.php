@component('mail::message')

# {{ $nomeSerie }} Criada!

A série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} episódios

Acesse Aqui:

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
Ver série
@endcomponent

@endcomponent
