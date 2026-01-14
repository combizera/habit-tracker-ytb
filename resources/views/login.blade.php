<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto px-10 py-6 space-y-6 border-2 habit-shadow-lg">
      <div class="flex flex-col gap-2">
        <h1 class="font-bold text-3xl">
          Faça Login
        </h1>

        <p>
          Insira seus dados para acessar
        </p>
      </div>

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
    </section>
  </main>
</x-layout>
