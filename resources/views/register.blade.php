<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto px-10 py-6 space-y-6 border-2 habit-shadow-lg">
      <div class="flex flex-col gap-2">
        <h1 class="font-bold text-3xl">
          Registre-se
        </h1>

        <p>
          Preencha as informações para começar a organizar os seus hábitos
        </p>
      </div>

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
    </section>
  </main>
</x-layout>
