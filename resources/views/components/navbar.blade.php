<nav>
  <ul class="flex gap-4 items-center">
    <li>
      <a href="{{ route('habits.index') }}" class="{{ Route::is('habits.index') ? 'font-bold underline' : '' }} text-md border-r-2 border-habit-orange pr-2 hover:underline">
        Hoje
      </a>
    </li>
    <li>
      <a href="{{ route('habits.history') }}" class="{{ Route::is('habits.history') ? 'font-bold underline' : '' }} text-md border-r-2 border-habit-orange pr-2 hover:underline">
        Histórico
      </a>
    </li>
    <li>
      <a href="#" class="text-md border-r-2 border-habit-orange pr-2 hover:underline cursor-not-allowed">
        Calendário 🔒
      </a>
    </li>
    <li>
      <a href="{{ route('habits.settings') }}" class="{{ Route::is('habits.settings') ? 'font-bold underline' : '' }} text-md hover:underline">
        Gerenciar Hábitos
      </a>
    </li>
  </ul>
</nav>
