<x-layout>
  <main class="py-10 px-4">
    {{-- CARD --}}
    <x-card
      title="Editar Hábito"
      resume="Altere o nome do seu hábito abaixo."
    >
      <form action="{{ route('habits.update', $habit->id) }}" method="POST" class="flex flex-col gap-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col-reverse gap-2">
          <input
            type="text"
            name="name"
            placeholder="Ex: Ler 10 páginas"
            @class(['border-red-500' => $errors->has('name')])
            value="{{ $habit->name }}"
            required
          >
          <label for="name">
            Nome do Hábito
          </label>
          @error('name')
          <p class="text-red-500 text-sm">
            {{ $message }}
          </p>
          @enderror
        </div>

        <button
          type="submit"
          class="bg-habit-orange habit-btn habit-shadow-lg p-2"
        >
          Editar hábito
        </button>
      </form>
    </x-card>
  </main>
</x-layout>
