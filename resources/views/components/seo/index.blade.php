{{-- TITLE --}}
<title>
  @unless($title === config('app.name')){{ $title }} | @endunless{{ config('app.name') }}
</title>

{{-- DESCRIPTION --}}
@if (!empty($resume))
  <meta name="description" content="{{ strip_tags($resume) }}" />
@else
  <meta name="description" content="{{ config('app.name') }}" />
@endif

{{-- FAVICON --}}
<link
  rel="shortcut icon pre"
  href="{{ asset('favicon.ico') }}"
  type="image/x-icon" />

{{-- CANONICAL TAG --}}
{{-- TODO: deixar para na pag 404 não exibir isso --}}
<link rel="canonical" href="{{ request()->url() }}">
