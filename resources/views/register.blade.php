<x-layout>
  <main class="py-10 px-4">
    {{-- CARD --}}
    <x-card
      title="Registre-se"
      resume="Crie sua conta para começar a organizar seus hábitos"
    >
      <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col gap-4">
        @csrf
        <div class="flex flex-col-reverse gap-2">
          <input
            type="text"
            name="name"
            placeholder="Seu nome"
            class="bg-white p-2 border-2 @error('name') border-red-500 @enderror"
            required
          >
          <label for="name">
            Nome
          </label>
          @error('name')
            <p class="text-red-500 text-sm">
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class="flex flex-col-reverse gap-2">
          <input
            type="email"
            name="email"
            placeholder="your@email.com"
            class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
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
            class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
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

        <div class="flex flex-col-reverse gap-2">
          <input
            type="password"
            name="password_confirmation"
            placeholder="********"
            class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
            required
          >
          <label for="password_confirmation">
            Repita sua senha
          </label>
          @error('password')
            <p class="text-red-500 text-sm">
              {{ $message }}
            </p>
          @enderror
        </div>

        <button
          type="submit"
          class="p-2 bg-habit-orange habit-shadow-lg habit-btn"
        >
          Cadastrar
        </button>
      </form>

      <p class="text-center">
        Já tem uma conta?
        <a href="{{ route('login') }}" class="hover:underline hover:opacity-80 transition text-habit-orange">
          Faça login
        </a>
      </p>
    </x-card>
  </main>
</x-layout>
