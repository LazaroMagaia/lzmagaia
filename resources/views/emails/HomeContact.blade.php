<x-mail::message>
# Email da pagina lzmagaia
---

**Nome:** {{$name}}

**Email:** {{$email}}

**Interessado em:**
@foreach ($interested as $item)
    <br> - {{$item}}
@endforeach

**Mensagem:** {!!$message!!}


Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
