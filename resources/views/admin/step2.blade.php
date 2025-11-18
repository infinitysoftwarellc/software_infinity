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

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lead Details - Sales System</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
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
<style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root">
    <a href="/step3" class="btn btn-primary mb-5">
    Proxima Pagina
</a>
<div class="flex h-full min-w-0 flex-1">
<!-- SideNavBar -->
<aside class="w-64 flex-col border-r border-slate-200/80 dark:border-slate-800/40 bg-white dark:bg-background-dark hidden lg:flex">
<div class="flex h-full flex-col justify-between p-4">
<div class="flex flex-col gap-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Company Logo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDE6-Yuq_kExzcLJTVNKvDxiTl2ErVrbmibto6axHn33jmVQgswDXryow0o8w8GZfVlFWICGn1FAspVJoPl8dK9Cex2MarQwzRoOfSzcZLymgqi88g8qJ6D4PlUOVsk2xDqTOUGBI6vUkNnGxlBhAKtOJsaO-u7xzxNrHzY-kh6D74BTGVRqyfBkn8K1rh55lnE44N10HMSia_EhCNAuh-jx0p-7wYC7pTSafUXnmLu47I5RZNvCeLRWtDOtydcE1jqaTrys8qKc-Kb");'></div>
<div class="flex flex-col">
<h1 class="text-slate-900 dark:text-slate-50 text-base font-medium leading-normal">Sistema de Vendas</h1>
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">Plano Pro</p>
</div>
</div>
<nav class="flex flex-col gap-2 mt-4">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-800 dark:text-slate-200">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary-300" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
<p class="text-sm font-medium leading-normal">Leads</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-800 dark:text-slate-200">description</span>
<p class="text-sm font-medium leading-normal">Propostas</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-800 dark:text-slate-200">apartment</span>
<p class="text-sm font-medium leading-normal">Clientes</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-800 dark:text-slate-200">bar_chart</span>
<p class="text-sm font-medium leading-normal">Relatórios</p>
</a>
</nav>
</div>
<div class="flex flex-col gap-4">
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
<span class="truncate">Nova Proposta</span>
</button>
<div class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-800 dark:text-slate-200">settings</span>
<p class="text-sm font-medium leading-normal">Configurações</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-800 dark:text-slate-200">help</span>
<p class="text-sm font-medium leading-normal">Ajuda</p>
</a>
</div>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 overflow-y-auto">
<div class="mx-auto max-w-7xl p-4 sm:p-6 lg:p-8">
<!-- Page Heading -->
<header class="flex flex-col sm:flex-row flex-wrap items-start justify-between gap-4 mb-8">
<div class="flex min-w-72 flex-col gap-2">
<p class="text-slate-900 dark:text-slate-50 text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Empresa Inovadora Ltda.</p>
<p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">João Silva, Diretor de Marketing</p>
</div>
<div class="flex gap-3">
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-slate-200/80 dark:bg-slate-800 text-slate-900 dark:text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-slate-300/80 dark:hover:bg-slate-700">
<span class="truncate">Editar</span>
</button>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-transparent text-slate-600 dark:text-slate-400 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-slate-200/50 dark:hover:bg-slate-800/50">
<span class="truncate">Arquivar</span>
</button>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
<span class="truncate">Gerar Proposta</span>
</button>
</div>
</header>
<!-- Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Column -->
<div class="lg:col-span-1 flex flex-col gap-6">
<!-- AI Score Widget -->
<div class="rounded-xl border border-slate-200/80 dark:border-slate-800/40 bg-white dark:bg-slate-900/40 p-6 flex flex-col items-center text-center">
<h3 class="text-slate-900 dark:text-slate-50 text-lg font-bold leading-tight tracking-[-0.015em] mb-4">Pontuação de Prioridade</h3>
<div class="relative size-32">
<svg class="size-full" height="36" viewbox="0 0 36 36" width="36" xmlns="http://www.w3.org/2000/svg">
<circle class="stroke-current text-slate-200 dark:text-slate-700" cx="18" cy="18" fill="none" r="16" stroke-width="3"></circle>
<circle class="stroke-current text-amber-500" cx="18" cy="18" fill="none" r="16" stroke-dasharray="88" stroke-dashoffset="17.6" stroke-linecap="round" stroke-width="3"></circle>
</svg>
<div class="absolute inset-0 flex items-center justify-center">
<span class="text-4xl font-bold text-slate-900 dark:text-slate-50">88</span>
</div>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-4">Baseado em interações e perfil da empresa, este lead tem alta probabilidade de conversão.</p>
</div>
<!-- Lead Data Card -->
<div class="rounded-xl border border-slate-200/80 dark:border-slate-800/40 bg-white dark:bg-slate-900/40">
<h3 class="text-slate-900 dark:text-slate-50 text-lg font-bold leading-tight tracking-[-0.015em] px-6 py-4 border-b border-slate-200/80 dark:border-slate-800/40">Dados do Lead</h3>
<div class="p-6 grid grid-cols-1 gap-4">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-xl mt-0.5">public</span>
<div class="flex flex-col gap-1">
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">Site</p>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">inovadora.com</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-xl mt-0.5">call</span>
<div class="flex flex-col gap-1">
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">Telefone</p>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">(11) 99999-8888</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-xl mt-0.5">email</span>
<div class="flex flex-col gap-1">
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">E-mail</p>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">joao.silva@inovadora.com</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-xl mt-0.5">supervisor_account</span>
<div class="flex flex-col gap-1">
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal">Decisor</p>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">João Silva</p>
</div>
</div>
</div>
<div class="px-6 py-4 border-t border-slate-200/80 dark:border-slate-800/40">
<p class="text-slate-500 dark:text-slate-400 text-sm font-normal leading-normal mb-2">Segmentação</p>
<div class="flex flex-wrap gap-2">
<span class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-medium text-primary dark:bg-primary/20 dark:text-primary-300">SaaS</span>
<span class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-medium text-primary dark:bg-primary/20 dark:text-primary-300">Enterprise</span>
<span class="inline-flex items-center rounded-full bg-amber-500/10 px-3 py-1 text-xs font-medium text-amber-600 dark:bg-amber-500/20 dark:text-amber-400">Alta Prioridade</span>
</div>
</div>
</div>
</div>
<!-- Right Column -->
<div class="lg:col-span-2 flex flex-col gap-6">
<!-- Activity History -->
<div class="rounded-xl border border-slate-200/80 dark:border-slate-800/40 bg-white dark:bg-slate-900/40">
<div class="flex justify-between items-center px-6 py-4 border-b border-slate-200/80 dark:border-slate-800/40">
<h3 class="text-slate-900 dark:text-slate-50 text-lg font-bold leading-tight tracking-[-0.015em]">Histórico de Interações</h3>
<button class="flex items-center gap-2 min-w-[84px] cursor-pointer justify-center overflow-hidden rounded-lg h-9 px-3 bg-slate-200/80 dark:bg-slate-800 text-slate-900 dark:text-slate-50 text-sm font-bold leading-normal hover:bg-slate-300/80 dark:hover:bg-slate-700">
<span class="material-symbols-outlined text-base">add_circle</span>
<span class="truncate">Adicionar Nota</span>
</button>
</div>
<div class="p-6">
<ol class="relative border-s border-slate-200 dark:border-slate-700">
<li class="mb-10 ms-8">
<span class="absolute -start-4 flex size-8 items-center justify-center rounded-full bg-green-100 dark:bg-green-900 ring-8 ring-white dark:ring-slate-900/40">
<span class="material-symbols-outlined text-base text-green-600 dark:text-green-400">check</span>
</span>
<h3 class="flex items-center mb-1 text-base font-semibold text-slate-900 dark:text-white">Proposta v1 gerada</h3>
<time class="block mb-2 text-sm font-normal leading-none text-slate-400 dark:text-slate-500">2 dias atrás</time>
<p class="text-sm font-normal text-slate-500 dark:text-slate-400">A proposta inicial foi gerada e está pronta para envio. Valor: R$ 25.000.</p>
</li>
<li class="mb-10 ms-8">
<span class="absolute -start-4 flex size-8 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 ring-8 ring-white dark:ring-slate-900/40">
<span class="material-symbols-outlined text-base text-blue-600 dark:text-blue-400">sticky_note_2</span>
</span>
<h3 class="mb-1 text-base font-semibold text-slate-900 dark:text-white">Nota adicionada pelo vendedor</h3>
<time class="block mb-2 text-sm font-normal leading-none text-slate-400 dark:text-slate-500">5 dias atrás</time>
<p class="text-sm font-normal text-slate-500 dark:text-slate-400">"João demonstrou grande interesse na funcionalidade de automação. Marcar follow-up para a próxima semana."</p>
</li>
<li class="ms-8">
<span class="absolute -start-4 flex size-8 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 ring-8 ring-white dark:ring-slate-900/40">
<span class="material-symbols-outlined text-base text-blue-600 dark:text-blue-400">forward_to_inbox</span>
</span>
<h3 class="mb-1 text-base font-semibold text-slate-900 dark:text-white">Email de prospecção enviado</h3>
<time class="block mb-2 text-sm font-normal leading-none text-slate-400 dark:text-slate-500">7 dias atrás</time>
<p class="text-sm font-normal text-slate-500 dark:text-slate-400">Enviado template "Introdução SaaS B2B". Lead abriu o e-mail 3 vezes.</p>
</li>
</ol>
</div>
</div>
<!-- Empty State Example (commented out) -->
<!--
                            <div class="rounded-xl border border-dashed border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900/40 p-12 text-center">
                                <div class="mx-auto flex size-12 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800">
                                     <span class="material-symbols-outlined text-slate-500 dark:text-slate-400">history</span>
                                </div>
                                <h3 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Nenhuma atividade registrada</h3>
                                <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">Comece a interagir com este lead. Adicione uma nota, envie um e-mail ou gere uma proposta.</p>
                                <button class="mt-6 flex items-center gap-2 min-w-[84px] cursor-pointer justify-center overflow-hidden rounded-lg h-9 px-3 bg-primary text-white text-sm font-bold leading-normal mx-auto hover:bg-primary/90">
                                    <span class="material-symbols-outlined text-base">add_circle</span>
                                    <span class="truncate">Adicionar Primeira Nota</span>
                                </button>
                            </div>
                            -->
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>
    
  </div>
@endsection