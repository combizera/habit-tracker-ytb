@props([
  'title',
  'resume',
])
<section class="bg-white max-w-[600px] mx-auto px-4 md:px-10 py-6 space-y-6 border-2 habit-shadow-lg">
  <div class="flex flex-col gap-2">
    <h1 class="font-bold text-3xl">
      {{ $title }}
    </h1>

    <p>
      {{ $resume }}
    </p>
  </div>

  {{ $slot }}
</section>
