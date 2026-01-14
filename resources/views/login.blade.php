<x-layout>
  <main class="py-10 px-4">
    {{-- CARD --}}
    <x-card
      title="Login"
      resume="Entre na sua conta para gerenciar seus hábitos"
    >
      <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">
        @csrf

        <div class="flex flex-col-reverse gap-2">
          <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="your@email.com"
            @class(['border-red-500' => $errors->has('email')])
            required
          >
          <label for="email">
            Email
          </label>
          @error('email')
          <p class="text-red-500 text-sm">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="flex flex-col-reverse gap-2">
          <input
            type="password"
            name="password"
            placeholder="********"
            @class(['border-red-500' => $errors->has('password')])
            required
          >
          <label for="password">
            Senha
          </label>
          @error('password')
          <p class="text-red-500 text-sm">
            {{ $message }}
          </p>
          @enderror
        </div>

        {{-- REMEMBER ME --}}
        <div class="flex items-center gap-2">
          <input
            type="checkbox"
            name="remember"
            id="remember"
            {{ old('remember') ? 'checked' : '' }}
            class="w-4 h-4 cursor-pointer"
          >
          <label for="remember" class="cursor-pointer select-none">
            Lembrar de mim
          </label>
        </div>

        <button
          type="submit"
          class="p-2 bg-habit-orange habit-shadow-lg habit-btn"
        >
          Entrar
        </button>
      </form>

      <p class="text-center">
        Ainda não tem uma conta?
        <a href="{{ route('register') }}" class="hover:underline hover:opacity-80 transition text-habit-orange">
          Registre-se
        </a>
      </p>
    </x-card>
  </main>
</x-layout>
