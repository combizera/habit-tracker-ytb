<x-layout>
  <main class="py-10 px-4">
    {{-- CARD --}}
    <x-card
      title="Cadastrar Hábito"
      resume="Cadastre um novo hábito abaixo."
    >
      <form action="{{ route('habits.store') }}" method="POST" class="flex flex-col">
        @csrf

        <div class="flex flex-col gap-2 mb-2">
          <label for="name" class="text-xl font-bold">
            Nome do Hábito
          </label>
          <input
            type="text"
            name="name"
            placeholder="Ex: Ler 10 páginas"
            class="bg-white habit-shadow p-2 @error('name') border-red-500 @enderror"
          >
          @error('name')
          <p class="text-red-500 text-sm">
            {{ $message }}
          </p>
          @enderror
        </div>

        <button
          type="submit"
          class="bg-habit-orange habit-btn habit-shadow-lg p-2 mt-2"
        >
          Cadastrar hábito
        </button>
      </form>
    </x-card>
  </main>
</x-layout>
