@props(['habit', 'year' => null])

@php
  // Define o ano (padrão: ano atual)
  $selectedYear = $year ?? now()->year;

  // Primeiro e último dia do ano
  $startDate = \Carbon\Carbon::create($selectedYear, 1, 1); // 01/01/YYYY
  $endDate = \Carbon\Carbon::create($selectedYear, 12, 31); // 31/12/YYYY

  $weeks = [];
  $currentWeek = [];

  // Preenche dias vazios no início (se o ano não começar no domingo)
  $firstDayOfWeek = $startDate->dayOfWeek; // 0 = domingo, 1 = segunda, etc
  for ($i = 0; $i < $firstDayOfWeek; $i++) {
    $currentWeek[] = null; // Placeholder vazio
  }

  // Agrupa os dias em semanas (domingo a sábado)
  for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
    $currentWeek[] = $date->copy();

    // Fecha a semana no sábado ou no último dia
    if ($date->isSaturday() || $date->eq($endDate)) {
      $weeks[] = $currentWeek;
      $currentWeek = [];
    }
  }
@endphp

<div class="mb-6">
  {{-- NOME + ANO --}}
  <div class="flex items-center justify-between mb-3">
    <h2 class="font-bold text-lg">
      {{ $habit->name }}
    </h2>
    <span class="text-sm text-gray-600 font-semibold">
      {{ $selectedYear }}
    </span>
  </div>

  {{-- GRID --}}
  <div class="bg-orange-50 p-2 habit-shadow-lg">
    <div class="flex gap-1 justify-between w-full">
      @foreach($weeks as $week)
        <div class="flex flex-col gap-1">
          @foreach($week as $day)
            @if($day === null)
              {{-- Espaço vazio para alinhar semanas --}}
              <div class="w-3 h-3"></div>
            @else
              @php
                // TODO: Verificar se tem log nessa data
                // Por enquanto randômico
                $done = rand(0, 1);
              @endphp
              <div class="w-3 h-3 rounded-xs cursor-pointer transition hover:ring-2 hover:ring-blue-400
                       {{ $done ? 'bg-[#FF7A05]' : 'bg-[#DADFE9]' }}"
                   title="{{ $day->format('d/m/Y') }} - {{ $day->translatedFormat('l') }}"
              ></div>
            @endif
          @endforeach
        </div>
      @endforeach
    </div>
  </div>

  {{-- LEGENDA --}}
  <div class="flex items-center gap-4 mt-2 text-sm text-gray-600">
    <div class="flex items-center gap-1.5">
      <div class="w-3 h-3 bg-[#DADFE9] rounded-xs"></div>
      <span>Não feito</span>
    </div>
    <div class="flex items-center gap-1.5">
      <div class="w-3 h-3 bg-[#FF7A05] rounded-xs"></div>
      <span>Feito</span>
    </div>
  </div>
</div>
