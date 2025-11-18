@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
'resources/assets/vendor/libs/swiper/swiper.scss',
'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/fonts/flag-icons.scss'
])
@endsection
@section('page-style')
@vite('resources/assets/vendor/scss/pages/cards-advance.scss')
@endsection
@section('vendor-script')
@vite([
'resources/assets/vendor/libs/apex-charts/apexcharts.js',
'resources/assets/vendor/libs/swiper/swiper.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<div class="row g-6">

<!DOCTYPE html>

<html class="light" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reunião Rápida</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#005A9C",
            "background-light": "#F4F7FA",
            "background-dark": "#101922",
            "success": "#1DB954",
            "warning": "#FFA500"
          },
          fontFamily: {
            "display": ["Manrope", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.5rem",
            "lg": "0.75rem",
            "xl": "1rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
<style>
    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111827] dark:text-slate-200">
    <a href="/step6" class="btn btn-primary mb-5">
    Proxima Pagina
</a>
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-700 px-6 md:px-10 py-4 bg-white dark:bg-background-dark shadow-sm">
<div class="flex items-center gap-4 text-[#111827] dark:text-slate-100">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-[#111827] dark:text-slate-100 text-lg font-bold leading-tight tracking-[-0.015em]">Reunião Rápida - Nome do Lead</h2>
</div>
<div class="flex items-center gap-6">
<div class="flex gap-2.5">
<div class="flex w-16 flex-col items-stretch gap-2">
<div class="flex h-12 grow items-center justify-center rounded-lg px-3 bg-slate-100 dark:bg-slate-800">
<p class="text-[#111827] dark:text-slate-100 text-xl font-bold leading-tight tracking-[-0.015em]">00</p>
</div>
<div class="flex items-center justify-center"><p class="text-[#6B7280] dark:text-slate-400 text-xs font-normal leading-normal">Horas</p></div>
</div>
<div class="flex w-16 flex-col items-stretch gap-2">
<div class="flex h-12 grow items-center justify-center rounded-lg px-3 bg-slate-100 dark:bg-slate-800">
<p class="text-[#111827] dark:text-slate-100 text-xl font-bold leading-tight tracking-[-0.015em]">10</p>
</div>
<div class="flex items-center justify-center"><p class="text-[#6B7280] dark:text-slate-400 text-xs font-normal leading-normal">Minutos</p></div>
</div>
<div class="flex w-16 flex-col items-stretch gap-2">
<div class="flex h-12 grow items-center justify-center rounded-lg px-3 bg-slate-100 dark:bg-slate-800">
<p class="text-warning text-xl font-bold leading-tight tracking-[-0.015em]">00</p>
</div>
<div class="flex items-center justify-center"><p class="text-[#6B7280] dark:text-slate-400 text-xs font-normal leading-normal">Segundos</p></div>
</div>
</div>
</div>
</header>
<main class="flex-1 p-6 md:p-10">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div class="lg:col-span-2 flex flex-col gap-6">
<div class="flex flex-col gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg shadow-sm">
<div class="flex gap-6 justify-between items-center">
<p class="text-[#111827] dark:text-slate-100 text-base font-medium leading-normal">Progresso do Script</p>
<span class="text-sm font-semibold text-primary">1/6</span>
</div>
<div class="rounded-full bg-slate-200 dark:bg-slate-700 h-2.5">
<div class="h-2.5 rounded-full bg-primary" style="width: 16%;"></div>
</div>
</div>
<div class="flex flex-col gap-3">
<details class="flex flex-col rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 group" open="">
<summary class="flex cursor-pointer items-center justify-between gap-6 py-3 list-none">
<p class="text-[#111827] dark:text-slate-100 text-base font-semibold leading-normal">Diagnóstico</p>
<span class="material-symbols-outlined text-[#6B7280] group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="pb-4 space-y-3">
<label class="flex items-center gap-3 cursor-pointer">
<input class="h-4 w-4 rounded border-slate-300 text-success focus:ring-success/50" type="checkbox"/>
<span class="text-[#6B7280] dark:text-slate-300 text-sm">Qual é o maior desafio que você enfrenta atualmente em [área relevante]?</span>
</label>
<label class="flex items-center gap-3 cursor-pointer">
<input class="h-4 w-4 rounded border-slate-300 text-success focus:ring-success/50" type="checkbox"/>
<span class="text-[#6B7280] dark:text-slate-300 text-sm">O que você já tentou para resolver esse problema?</span>
</label>
<label class="flex items-center gap-3 cursor-pointer">
<input class="h-4 w-4 rounded border-slate-300 text-success focus:ring-success/50" type="checkbox"/>
<span class="text-[#6B7280] dark:text-slate-300 text-sm">Como seria o cenário ideal para você em 3-6 meses?</span>
</label>
</div>
</details>
<details class="flex flex-col rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 group">
<summary class="flex cursor-pointer items-center justify-between gap-6 py-3 list-none">
<p class="text-[#111827] dark:text-slate-100 text-base font-semibold leading-normal">Oportunidade</p>
<span class="material-symbols-outlined text-[#6B7280] group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="pb-4 space-y-3">
<p class="text-[#6B7280] dark:text-slate-300 text-sm">Conteúdo sobre como o problema pode ser resolvido com sua solução.</p>
</div>
</details>
<details class="flex flex-col rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 group">
<summary class="flex cursor-pointer items-center justify-between gap-6 py-3 list-none">
<p class="text-[#111827] dark:text-slate-100 text-base font-semibold leading-normal">Portfólio</p>
<span class="material-symbols-outlined text-[#6B7280] group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="pb-4 space-y-3">
<p class="text-[#6B7280] dark:text-slate-300 text-sm">Apresentação breve dos produtos/serviços relevantes.</p>
</div>
</details>
<details class="flex flex-col rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 group">
<summary class="flex cursor-pointer items-center justify-between gap-6 py-3 list-none">
<p class="text-[#111827] dark:text-slate-100 text-base font-semibold leading-normal">Oferta</p>
<span class="material-symbols-outlined text-[#6B7280] group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="pb-4 space-y-3">
<p class="text-[#6B7280] dark:text-slate-300 text-sm">Proposta específica e preços.</p>
</div>
</details>
<details class="flex flex-col rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 group">
<summary class="flex cursor-pointer items-center justify-between gap-6 py-3 list-none">
<p class="text-[#111827] dark:text-slate-100 text-base font-semibold leading-normal">Garantia</p>
<span class="material-symbols-outlined text-[#6B7280] group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="pb-4 space-y-3">
<p class="text-[#6B7280] dark:text-slate-300 text-sm">Explicação de garantias ou reversão de risco.</p>
</div>
</details>
<details class="flex flex-col rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 group">
<summary class="flex cursor-pointer items-center justify-between gap-6 py-3 list-none">
<p class="text-[#111827] dark:text-slate-100 text-base font-semibold leading-normal">Call to Action</p>
<span class="material-symbols-outlined text-[#6B7280] group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="pb-4 space-y-3">
<p class="text-[#6B7280] dark:text-slate-300 text-sm">Script para fechamento e pagamento imediato.</p>
</div>
</details>
</div>
</div>
<div class="lg:col-span-1 flex flex-col gap-6">
<div class="p-6 bg-white dark:bg-slate-800 rounded-lg shadow-sm space-y-6">
<div>
<h3 class="text-lg font-bold text-[#111827] dark:text-slate-100">Painel de Ações</h3>
</div>
<div class="space-y-2">
<h4 class="text-sm font-semibold text-[#6B7280] dark:text-slate-400">Detalhes do Lead</h4>
<div class="text-sm text-[#111827] dark:text-slate-300 space-y-1">
<p><strong>Empresa:</strong> Tech Solutions Inc.</p>
<p><strong>Cargo:</strong> Gerente de TI</p>
<p><strong>Contato:</strong> (11) 98765-4321</p>
</div>
<a class="text-sm font-medium text-primary hover:underline" href="#">Ver Perfil Completo</a>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-[#111827] dark:text-slate-200" for="meeting-status">Status da Reunião</label>
<select class="block w-full rounded border-slate-300 dark:border-slate-600 dark:bg-slate-700 dark:text-slate-200 shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm" id="meeting-status" name="meeting-status">
<option>Selecione um status...</option>
<option value="venda-realizada">Venda Realizada</option>
<option value="follow-up">Follow-up Necessário</option>
<option value="nao-qualificado">Não Qualificado</option>
</select>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-[#111827] dark:text-slate-200" for="next-steps">Anotações e Próximos Passos</label>
<textarea class="block w-full rounded border-slate-300 dark:border-slate-600 dark:bg-slate-700 dark:text-slate-200 shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm" id="next-steps" name="next-steps" placeholder="Digite suas anotações aqui..." rows="4"></textarea>
</div>
<div class="space-y-2">
<label class="block text-sm font-medium text-[#111827] dark:text-slate-200" for="follow-up-date">Agendar Follow-up</label>
<input class="block w-full rounded border-slate-300 dark:border-slate-600 dark:bg-slate-700 dark:text-slate-200 shadow-sm focus:border-primary focus:ring-primary focus:ring-opacity-50 sm:text-sm" id="follow-up-date" name="follow-up-date" type="date"/>
</div>
</div>
<div class="mt-auto pt-6">
<button class="w-full inline-flex justify-center items-center rounded-lg bg-primary px-6 py-3 text-base font-semibold leading-6 text-white shadow-sm hover:bg-primary/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-colors" type="button">
                  Salvar e Concluir Reunião
                </button>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>
    
  </div>
@endsection