<x-layout
  title="Acompanhe seus hábitos"
  resume="Acompanhe, visualize, gerencie e celebre cada pequena vitória na construção dos seus hábitos diários."
>
  <main class="py-10">
    {{-- HERO --}}
    <section class="mx-auto px-4 flex flex-col items-center gap-4 max-w-[650px] mb-80 mt-50">
      <h1 class="text-[50px] leading-[1.2] text-center font-bold">
        Veja seus hábitos ganharem vida
      </h1>
      <p class="text-center text-lg">
        Construa a versão que você quer ser, <span class="inline-block bg-habit-orange p-0.5 font-mono px-1 -skew-x-16 text-white"> um dia de cada vez</span>.
        Acompanhe, visualize e celebre cada pequena vitória.
      </p>

      <a
        href="{{ auth()->check() ? route('habits.index') : route('register') }}"
        class="habit-shadow-lg habit-btn bg-habit-orange p-2 text-center mt-4"
      >
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
        <x-question question="Como funciona o registro de hábitos?">
          Você cria seus hábitos personalizados e marca diariamente quando os completa. O sistema registra tudo automaticamente e te mostra seu progresso ao longo do tempo de forma visual e clara.
        </x-question>

        <x-question question="Posso rastrear múltiplos hábitos ao mesmo tempo?">
          Sim! Você pode adicionar quantos hábitos quiser e acompanhar todos eles em um único painel. Cada hábito tem seu próprio histórico e estatísticas independentes.
        </x-question>

        <x-question question="Como acompanho meu progresso?">
          O sistema gera gráficos e estatísticas automáticas mostrando seus dias completados, taxa de consistência e evolução ao longo do tempo. Tudo de forma visual e fácil de entender.
        </x-question>

        <x-question question="Posso personalizar meus hábitos?">
          Totalmente! Você define o nome, descrição e pode ajustar as configurações de cada hábito conforme sua rotina e objetivos pessoais.
        </x-question>

        <x-question question="Meus dados ficam salvos?">
          Sim, tudo fica armazenado de forma segura. Você pode acessar seu histórico completo a qualquer momento e acompanhar sua jornada de construção de hábitos.
        </x-question>
      </article>

    </section>
  </main>
</x-layout>
