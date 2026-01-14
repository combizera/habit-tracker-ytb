@props([
  'question' => null,
])
<details class="habit-shadow-lg min-w-fit md:min-w-xl w-full">
  <summary class="flex justify-between font-bold text-lg bg-habit-orange p-2 cursor-pointer text-center">
    {{ $question }}
  </summary>
  <div class="bg-white border-t-4 p-2 px-4">
    <p>
      {{ $slot }}
    </p>
  </div>
</details>
