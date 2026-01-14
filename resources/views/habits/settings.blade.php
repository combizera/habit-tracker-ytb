<x-layout>
  <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-160px)] px-4 w-full">

    {{-- NAVBAR --}}
    <x-navbar />

    <div class="flex flex-col gap-4 items-start">
      <x-title>
        Configurar Hábitos
      </x-title>

      <ul class="flex flex-col gap-2 mt-2 w-full">
          @forelse($habits as $item)
            <li class="flex gap-2 items-center justify-between w-full">
              {{-- ITEM --}}
              <div class="habit-shadow-lg p-2 bg-[#FFDAAC] w-full">
                <p class="font-bold text-lg">
                  {{ $item->name }}
                </p>
              </div>

              {{-- EDIT --}}
              <a
                class="bg-white habit-shadow-lg p-1 md:p-2 hover:opacity-50"
                href="{{ route('habits.edit', $item->id) }}"
              >
                <x-icons.edit />
              </a>

              {{-- DELETE --}}
              <form action="{{ route('habits.destroy', $item) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="habit-shadow-lg bg-red-500 text-white p-1 md:p-2 hover:opacity-50 cursor-pointer">
                  <x-icons.trash />
                </button>
              </form>
            </li>
          @empty
            <p>
              Ainda não tem nenhuma hábito cadastrado
            </p>
            <a href="{{ route('habits.create') }}" class="bg-white p-2 border-2">
              Cadastre um novo hábito agora
            </a>
          @endforelse
        </ul>

      <a href="{{ route('habits.create') }}" class="p-2 habit-shadow-lg bg-habit-orange habit-btn">
        + Adicionar
      </a>
    </div>
  </main>
</x-layout>
