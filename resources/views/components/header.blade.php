<header class="bg-white border-b-2">
  <div class="max-w-7xl mx-auto flex items-center justify-between p-4">

    {{-- LOGO --}}
    <div class="flex items-center gap-2 font-bold">
      <a
        href="{{ auth()->check() ? route('habits.index') : route('index') }}"
        class="flex items-center gap-3"
      >
        <div class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
          HT
        </div>
        <p class="select-none">
          Habit Tracker
        </p>
      </a>
    </div>

    {{-- NAV --}}
    <div class="flex gap-2 items-center">
      @auth
        <form
          class="inline"
          action="{{ route('auth.logout') }}"
          method="POST"
        >
          @csrf

          <button type="submit" class="habit-shadow-lg habit-btn p-1 px-2 border-2">
            Sair
          </button>
        </form>
      @endauth

      @guest
        <div class="flex gap-2">
          <a href="{{ route('register') }}" class="p-1 px-2 habit-shadow-lg habit-btn">
            Cadastrar
          </a>

          <a href="{{ route('login') }}" class="p-1 px-2 habit-shadow-lg bg-habit-orange habit-btn">
            Logar
          </a>
        </div>
      @endguest

      {{-- GITHUB --}}
      <a
        class="habit-btn habit-shadow-lg p-[5px]"
        href="{{ config('app.repository') }}"
        target="_blank"
        rel="noopener noreferrer"
      >
        <x-icons.github />
      </a>
    </div>
  </div>
</header>
