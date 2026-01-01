<x-layout>
  {{-- HERO --}}
  <main class="py-10">
    <section class="mx-auto px-4 flex flex-col items-center gap-4 max-w-[650px] mb-80 mt-50">
      <h1 class="text-[50px] leading-[1.2] text-center font-bold">
        Veja seus hábitos ganharem vida
      </h1>
      <p class="text-center text-lg">
        Construa a versão que você quer ser, <span class="underline"> um dia de cada vez.</span> Acompanhe, visualize e celebre cada pequena vitória.
      </p>

      <a href="#" class="habit-shadow-lg habit-btn bg-habit-orange p-2 text-center">
        Começar Agora
      </a>
    </section>

    {{-- SLIDER  --}}
    <section class="w-full overflow-hidden bg-white border-y-2 mt-50">
      <div class="slider-track flex gap-6 items-center py-4">
        @for($i = 0; $i < 10; $i++)
          <div class="flex gap-3 items-center whitespace-nowrap flex-shrink-0">
            <x-icons.detail class="flex-shrink-0" />
            <p class="font-bold text-lg">
              Tenha controle dos seus hábitos
            </p>
          </div>
        @endfor
      </div>
    </section>

    {{-- FAQ --}}
    <section class="faq max-w-5xl mx-auto flex flex-col gap-8 py-40">
      <h2 class="text-3xl font-bold text-center">
        Perguntas Frequentes
      </h2>

      <article class="flex flex-col items-center gap-4">
        <x-question question="Tal pergunta">
          Tal resposta
        </x-question>
        <x-question question="Tal pergunta">
          Tal resposta
        </x-question>
        <x-question question="Tal pergunta">
          Tal resposta
        </x-question>
      </article>

    </section>
  </main>
</x-layout>
