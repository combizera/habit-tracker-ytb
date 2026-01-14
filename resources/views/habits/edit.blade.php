<x-layout>
  <main class="max-w-5xl mx-auto py-10 px-4 min-h-[80vh] w-full space-y-4">
    <h1 class="font-bold text-2xl text-center">
      Editar Hábito
    </h1>

    <section class="bg-white max-w-[600px] mx-auto px-10 py-6 space-y-6 border-2 habit-shadow-lg">
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
    </section>
  </main>
</x-layout>
