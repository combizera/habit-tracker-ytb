<meta name="twitter:card" content="summary_large_image" />
<meta property="twitter:domain" content="{{ Str::replace('https://', '', config('app.url')) }}">
<meta name="twitter:url" content="{{ config('app.url') }}" />
<meta name="twitter:title" content="{{ $title }}" />
@if (!empty($resume))
  <meta name="twitter:description" content="{{ strip_tags($resume) }}" />
@else
  <meta name="twitter:description" content="{{ config('app.name') }}" />
@endif
@if (!empty($settings->office_og_image))
  <meta name="twitter:image content="{{ Vite::image('og-image.png') }}" />
@endif
