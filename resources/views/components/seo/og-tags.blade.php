<meta name="robots" content="max-snippet:-1,max-image-preview:large,max-video-preview:-1">
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $title }}" />
@if (!empty($resume))
  <meta property="og:description" content="{{ strip_tags($resume) }}" />
@else
  <meta property="og:description" content="{{ config('app.name') }}" />
@endif

@if (!empty($image))
  <meta property="og:image" content="{{ Vite::image('og-image.png') }}" />
@else
  <meta property="og:image" content="{{ Storage::url($image) }}" />
@endif

<meta property="og:logo" content="{{ Vite::image('logo.png') }}" />
<meta property="og:locale" content="pt_BR">
<meta property="og:site_name" content="{{ config('app.name') }}" />
