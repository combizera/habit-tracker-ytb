@props([
  'question' => null,
])
<details class="habit-shadow-lg min-w-xl">
  <summary class="flex justify-between font-bold text-lg bg-habit-orange p-2 cursor-pointer">
    {{ $question }}
  </summary>
  <div class="bg-white border-t-4 p-2">
    {{ $slot }}
  </div>
</details>
