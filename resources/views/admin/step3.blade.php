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
<title>Editor de Proposta</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-[#172B4D] dark:text-gray-200">
    <a href="/step4" class="btn btn-primary mb-5">
    Proxima Pagina
</a>
<div class="relative flex min-h-screen w-full">
    
<!-- SideNavBar -->
<aside class="flex-shrink-0 w-64 bg-white dark:bg-gray-800/50 p-4 flex flex-col justify-between border-r border-gray-200 dark:border-gray-700">
    
<div class="flex flex-col gap-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="company logo abstract shape" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA6BeJ90txz-_JwO-9lBqBDiAta6EYPtQ0M8Z1stL1GLOZZ0Csa3-RyLadKWlBrbzoNVlMVD7JqvwpiRNyfersoVKxDHxyYXOxWfdW7Eg7GVzIAyFbLWJwqUMwtT5Dd63AaLUauD_Nk-qxGwwndNJ2ioUgrQJxgtTo_lC3OmcRkp21S7GFNF3j2HZMKg_jgApS63PQyUK_mRVhaRcKrpk5aF8sxvS4w4sE20AD1zyNrP-yums9_HOOt0RPffUbQr-yUxuV8dxTudTd2");'></div>
<div class="flex flex-col">
<h1 class="text-base font-bold text-gray-900 dark:text-white">Sistema de Vendas</h1>
<p class="text-sm font-normal text-gray-500 dark:text-gray-400">Gerente de Vendas</p>
</div>
</div>
<nav class="flex flex-col gap-2 mt-4">
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-primary dark:hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-medium">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-primary dark:hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<p class="text-sm font-medium">Leads</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary font-bold" href="#">
<span class="material-symbols-outlined">description</span>
<p class="text-sm font-medium">Propostas</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-primary dark:hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">apartment</span>
<p class="text-sm font-medium">Clientes</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-primary dark:hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium">Configurações</p>
</a>
</nav>
</div>
<div class="flex flex-col gap-2">
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
<span class="truncate">Nova Proposta</span>
</button>
<div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-primary dark:hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">help</span>
<p class="text-sm font-medium">Ajuda</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 hover:text-primary dark:hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<p class="text-sm font-medium">Sair</p>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col">
<!-- Header -->
<header class="sticky top-0 z-10 flex h-16 items-center justify-end border-b border-gray-200 dark:border-gray-700 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm px-8">
<div class="flex items-center gap-4">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-9 px-4 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
<span class="material-symbols-outlined text-base">save</span>
<span class="truncate">Salvar Rascunho</span>
</button>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-9 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined text-base">send</span>
<span class="truncate">Gerar e Enviar</span>
</button>
</div>
</header>
<!-- Content Grid -->
<div class="flex-1 grid grid-cols-1 lg:grid-cols-2 gap-8 p-8 overflow-y-auto">
<!-- Left Column: Editor -->
<div class="flex flex-col gap-6">
<!-- Page Heading -->
<div class="flex flex-col gap-1">
<h1 class="text-3xl font-black leading-tight tracking-[-0.033em] text-gray-900 dark:text-white">Ajustar e Enviar Proposta</h1>
<p class="text-base font-normal text-gray-500 dark:text-gray-400">Para: <span class="font-medium text-gray-700 dark:text-gray-300">Empresa Lead Exemplo</span></p>
</div>
<!-- Section: Proposal Editor -->
<div class="flex flex-col gap-6">
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em] text-gray-800 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2">Editor da Proposta</h2>
<!-- Card: General Information -->
<div class="bg-white dark:bg-gray-800/50 p-5 rounded-xl border border-gray-200 dark:border-gray-700/50">
<label class="flex flex-col">
<p class="text-base font-medium leading-normal pb-2 text-gray-800 dark:text-gray-200">Título da Proposta</p>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-background-dark h-12 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal transition-colors" value="Proposta de Otimização de SEO"/>
</label>
</div>
<!-- Card: Diagnosis -->
<div class="bg-white dark:bg-gray-800/50 p-5 rounded-xl border border-gray-200 dark:border-gray-700/50 flex flex-col gap-4">
<h3 class="font-bold text-gray-800 dark:text-gray-200">Diagnóstico</h3>
<label class="flex flex-col">
<p class="text-base font-medium leading-normal pb-2 text-gray-800 dark:text-gray-200">Diagnóstico do Erro Atual</p>
<textarea class="form-input flex w-full min-w-0 flex-1 resize-y overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-background-dark min-h-36 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal transition-colors"></textarea>
</label>
<div class="flex flex-col gap-2">
<p class="text-base font-medium leading-normal text-gray-800 dark:text-gray-200">Print do Site do Lead</p>
<div class="flex items-center gap-4">
<div class="w-40 h-24 bg-gray-200 dark:bg-gray-700 rounded-lg bg-cover bg-center" data-alt="Screenshot of the lead's website" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuClYmXIaVkcWUDHX31IT1uUCa17FzQmuCXJJx1H5_xIifOgE9xtbxMMe6NEVdvY39W7GyClVTaXilsJZttjm6iy_rn98UGKCPsaiT7TxWlDLbwnxgv8Bs05_o09L8TulxWfzieLz2yMUsCMePxkPRsgulqujHXmtv3oA6wpcd9kJVD3ySyUQV46cfrsW8UEAvQHTi2jviThfz0CDymntWk-w0PPfTnKkXBRfzFtcQmMtH75VdYNKuo5dMcWIJb_UpufhmXH0f0i1YPM')"></div>
<button class="flex items-center justify-center gap-2 h-9 px-4 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 rounded-lg text-sm font-bold text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
<span class="material-symbols-outlined text-base">upload_file</span>
                    Substituir Imagem
                  </button>
</div>
</div>
</div>
<!-- Card: Solution -->
<div class="bg-white dark:bg-gray-800/50 p-5 rounded-xl border border-gray-200 dark:border-gray-700/50">
<label class="flex flex-col">
<h3 class="font-bold text-gray-800 dark:text-gray-200 pb-2">Nossa Solução</h3>
<textarea class="form-input flex w-full min-w-0 flex-1 resize-y overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-background-dark min-h-36 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal transition-colors" placeholder="Detalhe a solução proposta aqui..."></textarea>
</label>
</div>
<!-- Card: Investment & Deadline -->
<div class="bg-white dark:bg-gray-800/50 p-5 rounded-xl border border-gray-200 dark:border-gray-700/50 flex flex-col gap-6">
<div class="flex flex-col gap-4">
<h3 class="font-bold text-gray-800 dark:text-gray-200">Investimento</h3>
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<p class="text-base text-gray-600 dark:text-gray-300">Valor base</p>
<p class="text-base font-medium text-gray-800 dark:text-gray-200">R$ 100,00</p>
</div>
<div class="flex items-center justify-between">
<label class="flex items-center gap-3 cursor-pointer" for="upsell-toggle">
<input class="form-checkbox h-5 w-5 rounded text-primary focus:ring-primary/50 border-gray-300 dark:border-gray-600 bg-background-light dark:bg-background-dark" id="upsell-toggle" type="checkbox"/>
<span class="text-base text-gray-800 dark:text-gray-200">Adicionar Upsell</span>
</label>
<input class="form-input rounded-lg w-28 text-right text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-background-dark h-10 placeholder:text-gray-400 p-2 text-base font-normal leading-normal transition-colors" placeholder="0,00" type="number"/>
</div>
<div class="border-t border-gray-200 dark:border-gray-700 my-1"></div>
<div class="flex items-center justify-between">
<p class="text-lg font-bold text-gray-900 dark:text-white">Total</p>
<p class="text-lg font-bold text-primary">R$ 100,00</p>
</div>
</div>
</div>
<div class="flex flex-col">
<label class="flex flex-col">
<p class="text-base font-medium leading-normal pb-2 text-gray-800 dark:text-gray-200">Prazo de Entrega</p>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-background-dark h-12 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal transition-colors" value="15 dias úteis"/>
</label>
</div>
</div>
</div>
</div>
<!-- Right Column: PDF Preview -->
<div class="sticky top-24 h-[calc(100vh-8rem)] flex-col gap-4 hidden lg:flex">
<div class="flex justify-between items-center">
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em] text-gray-800 dark:text-gray-200">Pré-visualização do Documento</h2>
<button class="flex items-center justify-center gap-2 h-9 px-4 text-primary text-sm font-bold hover:bg-primary/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-base">download</span>
              Baixar PDF
            </button>
</div>
<div class="flex-1 bg-white dark:bg-gray-800/50 rounded-xl border border-gray-200 dark:border-gray-700/50 flex items-center justify-center p-4">
<div class="w-full h-full bg-gray-100 dark:bg-gray-700 rounded-lg flex flex-col items-center justify-center text-center text-gray-500 dark:text-gray-400 p-4">
<span class="material-symbols-outlined text-5xl">picture_as_pdf</span>
<p class="mt-2 font-medium">A pré-visualização do PDF aparecerá aqui.</p>
<p class="text-sm">As alterações no editor serão refletidas em tempo real.</p>
<div class="flex items-center gap-2 mt-4 text-sm text-gray-400 dark:text-gray-500">
<span class="material-symbols-outlined text-base animate-spin">autorenew</span>
                Atualizando...
              </div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>
    
  </div>
@endsection