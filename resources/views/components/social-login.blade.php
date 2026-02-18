<div class="flex flex-col gap-3">
  <a
    id="btn-social"
    class="p-2 bg-[#24292e] text-white habit-shadow-lg habit-btn flex items-center justify-center gap-2"
    href="{{ route('oauth.redirect', 'github') }}"
  >
    <x-icons.github />
    Entrar com GitHub
  </a>

  <a
    class="p-2 bg-white habit-shadow-lg habit-btn flex items-center justify-center gap-2"
    href="{{ route('oauth.redirect', 'google') }}"
  >
    <x-icons.google />
    Entrar com Google
  </a>
</div>

<div class="flex items-center gap-4">
  <div class="flex-1 h-0.5 bg-black/10"></div>
  <span class="text-sm text-black/40 font-bold">ou</span>
  <div class="flex-1 h-0.5 bg-black/10"></div>
</div>
