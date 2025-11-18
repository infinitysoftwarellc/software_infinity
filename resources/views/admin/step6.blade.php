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
<title>Painel de Onboarding</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#137fec",
            "background-light": "#f6f7f8",
            "background-dark": "#101922",
          },
          fontFamily: {
            "display": ["Manrope", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="flex flex-row min-h-screen">
<!-- SideNavBar -->
<aside class="w-64 bg-white dark:bg-background-dark dark:border-r dark:border-slate-800 flex flex-col p-4 border-r border-slate-200 sticky top-0 h-screen">
<div class="flex flex-col gap-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Company logo showing an abstract geometric shape" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAs4NyiZWcypL9EtLZjuT7jicIUD29XOSGxzt2io0e2O9uP1McirruyxFkN-HJ7pzPkY3vmprpjoizGXtBM-12UJdJnTVmZZ57y11NSVBKDe47Sol2H4Dqosrw3NoRlzY6xiQdeYvAI4l2HOiYu0ef7DfCGlyWzkcUsTlUsbYzMeAHcMrnaFPyvJd3qqxI0oOQcgPLeEMSDNH20nWlGSRCTdf4_r7fALCK30DZNO8hQaPQjit365q-5jbcx1a24Pgnpu27ga-An4Bom");'></div>
<div class="flex flex-col">
<h1 class="text-slate-900 dark:text-slate-200 text-base font-semibold leading-normal">Sistema de Vendas</h1>
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">Bem-vindo(a)!</p>
</div>
</div>
<nav class="flex flex-col gap-2 mt-4">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-800 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-800 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined">group</span>
<p class="text-sm font-medium leading-normal">Leads</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-800 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined">assessment</span>
<p class="text-sm font-medium leading-normal">Propostas</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">business_center</span>
<p class="text-sm font-medium leading-normal">Clientes</p>
</a>
</nav>
</div>
<div class="mt-auto flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-800 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium leading-normal">Configurações</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-800 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined">help</span>
<p class="text-sm font-medium leading-normal">Ajuda</p>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 p-6 lg:p-10">
<div class="max-w-7xl mx-auto">
<!-- Breadcrumbs -->
<div class="flex flex-wrap gap-2 mb-6">
<a class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal" href="#">Clientes</a>
<span class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal">/</span>
<a class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal" href="#">Acme Corporation</a>
<span class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-normal">/</span>
<span class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">Onboarding</span>
</div>
<!-- PageHeading -->
<header class="flex flex-wrap justify-between items-start gap-4 mb-8">
<div class="flex min-w-72 flex-col gap-2">
<p class="text-slate-900 dark:text-white text-3xl font-bold leading-tight">Onboarding: Acme Corporation</p>
<p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Acompanhe o status do novo projeto</p>
</div>
<!-- Chips -->
<div class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-amber-100 dark:bg-amber-500/20 px-4">
<p class="text-amber-700 dark:text-amber-400 text-sm font-medium leading-normal">Aguardando Pagamento</p>
</div>
</header>
<!-- ProgressBar -->
<div class="flex flex-col gap-3 p-6 bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-slate-800 mb-8">
<div class="flex gap-6 justify-between items-center">
<p class="text-slate-900 dark:text-white text-base font-semibold leading-normal">Progresso do Onboarding</p>
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">1 de 4 etapas concluídas</p>
</div>
<div class="rounded-full bg-slate-200 dark:bg-slate-700 h-2">
<div class="h-2 rounded-full bg-primary" style="width: 25%;"></div>
</div>
</div>
<!-- Action Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Card de Pagamento -->
<div class="flex flex-col p-6 bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-slate-800 gap-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 flex items-center justify-center rounded-full bg-green-100 dark:bg-green-500/20">
<span class="material-symbols-outlined text-green-600 dark:text-green-400">check_circle</span>
</div>
<div>
<h3 class="text-slate-900 dark:text-white font-semibold">1. Pagamento</h3>
<p class="text-green-600 dark:text-green-400 text-sm">Concluído</p>
</div>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm">O pagamento foi confirmado. Prossiga para a etapa de contrato.</p>
<button class="w-full flex items-center justify-center h-10 px-4 rounded-lg bg-slate-200 dark:bg-slate-700 text-slate-500 dark:text-slate-400 text-sm font-medium cursor-not-allowed" disabled="">
                Pagamento Confirmado
              </button>
</div>
<!-- Card de Contrato -->
<div class="flex flex-col p-6 bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-slate-800 gap-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 flex items-center justify-center rounded-full bg-amber-100 dark:bg-amber-500/20">
<span class="material-symbols-outlined text-amber-600 dark:text-amber-400">hourglass_top</span>
</div>
<div>
<h3 class="text-slate-900 dark:text-white font-semibold">2. Contrato</h3>
<p class="text-amber-600 dark:text-amber-400 text-sm">Pendente</p>
</div>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm">Gere e envie o contrato para o cliente assinar digitalmente.</p>
<div class="flex flex-col gap-2 mt-auto">
<button class="w-full flex items-center justify-center h-10 px-4 rounded-lg bg-primary text-white text-sm font-medium hover:bg-primary/90">
<span class="material-symbols-outlined mr-2 text-base">file_present</span>
                  Gerar Contrato
                </button>
<button class="w-full flex items-center justify-center h-10 px-4 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-sm font-medium hover:bg-slate-200 dark:hover:bg-slate-700">
                  Confirmar Assinatura
                </button>
</div>
</div>
<!-- Card de Briefing -->
<div class="flex flex-col p-6 bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-slate-800 gap-4 opacity-50">
<div class="flex items-center gap-3">
<div class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800">
<span class="material-symbols-outlined text-slate-500 dark:text-slate-400">radio_button_unchecked</span>
</div>
<div>
<h3 class="text-slate-900 dark:text-white font-semibold">3. Briefing do Projeto</h3>
<p class="text-slate-500 dark:text-slate-400 text-sm">Aguardando</p>
</div>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm">Aguardando a assinatura do contrato para liberar o formulário.</p>
<div class="mt-auto">
<input class="w-full h-10 px-3 rounded-lg bg-slate-100 dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 text-sm cursor-not-allowed" readonly="" type="text" value="https://forms.example/briefing/xyz"/>
</div>
</div>
</div>
<!-- Final Action Button -->
<div class="mt-10 flex flex-col items-center justify-center text-center p-6 bg-white dark:bg-slate-900/50 rounded-xl border border-dashed border-slate-300 dark:border-slate-700">
<div class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800">
<span class="material-symbols-outlined text-4xl text-slate-400 dark:text-slate-500">rocket_launch</span>
</div>
<h3 class="text-slate-900 dark:text-white font-semibold mb-1">4. Início do Projeto</h3>
<p class="text-slate-500 dark:text-slate-400 text-sm mb-6 max-w-sm">Este botão será habilitado quando todas as etapas anteriores forem concluídas com sucesso.</p>
<button class="h-12 px-8 rounded-lg bg-slate-300 dark:bg-slate-700 text-white dark:text-slate-500 text-base font-semibold cursor-not-allowed" disabled="">
              Start no Projeto
            </button>
</div>
</div>
</main>
</div>
</div>
</body></html>
    
  </div>
@endsection