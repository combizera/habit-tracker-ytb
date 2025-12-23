<x-layout>
  <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-160px)] px-4">

    <x-navbar />

    {{-- HISTORICO --}}
    @forelse($habits as $habit)
      <x-contribution :$habit :year="$selectedYear" />
    @empty
      <div>
        <p class="text-black">
          Nenhum hábito para exibir histórico.
        </p>
        <a href="{{ route('habits.create') }}" class="underline ">
          Crie um novo hábito
        </a>
      </div>
    @endforelse

  </main>
</x-layout>
