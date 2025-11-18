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
<title>Revisar Mensagens - Sistema de Vendas</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
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
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      vertical-align: middle;
    }
  </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200">
    <a href="/step5" class="btn btn-primary mb-5">
    Proxima Pagina
</a>
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-700 px-6 md:px-10 py-3 bg-white dark:bg-background-dark/80 sticky top-0 z-10 backdrop-blur-sm">
<div class="flex items-center gap-4 text-gray-900 dark:text-white">
<div class="size-6 text-primary">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M39.5563 34.1455V13.8546C39.5563 15.708 36.8773 17.3437 32.7927 18.3189C30.2914 18.916 27.263 19.2655 24 19.2655C20.737 19.2655 17.7086 18.916 15.2073 18.3189C11.1227 17.3437 8.44365 15.708 8.44365 13.8546V34.1455C8.44365 35.9988 11.1227 37.6346 15.2073 38.6098C17.7086 39.2069 20.737 39.5564 24 39.5564C27.263 39.5564 30.2914 39.2069 32.7927 38.6098C36.8773 37.6346 39.5563 35.9988 39.5563 34.1455Z"></path>
<path clip-rule="evenodd" d="M10.4485 13.8519C10.4749 13.9271 10.6203 14.246 11.379 14.7361C12.298 15.3298 13.7492 15.9145 15.6717 16.3735C18.0007 16.9296 20.8712 17.2655 24 17.2655C27.1288 17.2655 29.9993 16.9296 32.3283 16.3735C34.2508 15.9145 35.702 15.3298 36.621 14.7361C37.3796 14.246 37.5251 13.9271 37.5515 13.8519C37.5287 13.7876 37.4333 13.5973 37.0635 13.2931C36.5266 12.8516 35.6288 12.3647 34.343 11.9175C31.79 11.0295 28.1333 10.4437 24 10.4437C19.8667 10.4437 16.2099 11.0295 13.657 11.9175C12.3712 12.3647 11.4734 12.8516 10.9365 13.2931C10.5667 13.5973 10.4713 13.7876 10.4485 13.8519ZM37.5563 18.7877C36.3176 19.3925 34.8502 19.8839 33.2571 20.2642C30.5836 20.9025 27.3973 21.2655 24 21.2655C20.6027 21.2655 17.4164 20.9025 14.7429 20.2642C13.1498 19.8839 11.6824 19.3925 10.4436 18.7877V34.1275C10.4515 34.1545 10.5427 34.4867 11.379 35.027C12.298 35.6207 13.7492 36.2054 15.6717 36.6644C18.0007 37.2205 20.8712 37.5564 24 37.5564C27.1288 37.5564 29.9993 37.2205 32.3283 36.6644C34.2508 36.2054 35.702 35.6207 36.621 35.027C37.4573 34.4867 37.5485 34.1546 37.5563 34.1275V18.7877ZM41.5563 13.8546V34.1455C41.5563 36.1078 40.158 37.5042 38.7915 38.3869C37.3498 39.3182 35.4192 40.0389 33.2571 40.5551C30.5836 41.1934 27.3973 41.5564 24 41.5564C20.6027 41.5564 17.4164 41.1934 14.7429 40.5551C12.5808 40.0389 10.6502 39.3182 9.20848 38.3869C7.84205 37.5042 6.44365 36.1078 6.44365 34.1455L6.44365 13.8546C6.44365 12.2684 7.37223 11.0454 8.39581 10.2036C9.43325 9.3505 10.8137 8.67141 12.343 8.13948C15.4203 7.06909 19.5418 6.44366 24 6.44366C28.4582 6.44366 32.5797 7.06909 35.657 8.13948C37.1863 8.67141 38.5667 9.3505 39.6042 10.2036C40.6278 11.0454 41.5563 12.2684 41.5563 13.8546Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Sistema de Vendas</h2>
</div>
<div class="flex flex-1 justify-end gap-2 sm:gap-4">
<div class="flex gap-2">
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
<span class="material-symbols-outlined text-gray-600 dark:text-gray-400">notifications</span>
</button>
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
<span class="material-symbols-outlined text-gray-600 dark:text-gray-400">settings</span>
</button>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User avatar with a gradient background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCtHTNPfA68PxYJcF-Mr-gnLWC7X39EfqYLXB5X-_ciZBwv1_LZ5E65zbhI9qxqZtfXH_VuItgjcJ-wnPBRCZpM7FXrEwFfx-cpmEP1OT8DPMCkMgpi46Z4a7HhrCp1-gvqNt_kC4hxO1cIzIy-NDmZcHYA3iroVI-Mc0XJUHrmpTJMaeqJ-0ZBZ7bepVuPhWt9vJcjatMOjn_vQ9KoLSTEQ3ZT-ypXRI2UR_7Svlt4WmV9pziN0R7sl-TLxANSqNS7H7pe__g46o-c");'></div>
</div>
</header>
<main class="flex flex-1 justify-center py-5 px-4 sm:px-6 md:px-8">
<div class="layout-content-container flex flex-col w-full max-w-5xl flex-1">
<div class="flex flex-wrap justify-between gap-4 p-4">
<div class="flex min-w-72 flex-col gap-2">
<p class="text-gray-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Revisar Mensagens para [Nome do Lead]</p>
<p class="text-gray-500 dark:text-gray-400 text-base font-normal leading-normal">
                Edite as mensagens abaixo ou use a versão gerada pela IA. Clique em 'Enviar' para iniciar a automação.
              </p>
</div>
</div>
<div class="border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800/50 rounded-lg p-4 mb-6">
<div class="flex items-center gap-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-14" data-alt="Avatar of the lead" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHyGAfJKa_4hASV3enbnKVIhzE0XGCVmnjcSJbtbr46p324o3lSpPwMASxBvFA1l95xZ3TTeYet_fWrCkaN-ytJGz8bjhN-0U4sDN2ldRXcalOIWawjM9VBVjBaOFt050AQnuk753LeYd-V2_CdqSe_fcFQoBUvse6JCZ6NfY1ORqbVdwH2RCKmJIJvotkxNinaupinzX8xKGCoWMdYVOsdNGlO7ZPXrN_BAUGDuRPMTRnOyXbmoIeY3SnQvpY1124PG9jFv2P6gmn");'></div>
<div class="flex flex-col justify-center">
<p class="text-gray-900 dark:text-white text-base font-bold leading-normal line-clamp-1">Ana Clara</p>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal line-clamp-2">(11) 98765-4321 • ana.clara@email.com</p>
</div>
</div>
</div>
<div class="pb-3">
<div class="flex border-b border-gray-200 dark:border-gray-700 px-4 gap-8">
<a class="flex items-center justify-center gap-2 border-b-[3px] border-b-primary text-gray-900 dark:text-white pb-[13px] pt-4" href="#">
<span class="material-symbols-outlined text-lg">chat_bubble</span>
<p class="text-sm font-bold leading-normal tracking-[0.015em]">WhatsApp</p>
</a>
<a class="flex items-center justify-center gap-2 border-b-[3px] border-b-transparent text-gray-500 dark:text-gray-400 pb-[13px] pt-4 hover:text-gray-700 dark:hover:text-gray-300" href="#">
<span class="material-symbols-outlined text-lg">photo_camera</span>
<p class="text-sm font-bold leading-normal tracking-[0.015em]">Instagram</p>
</a>
<a class="flex items-center justify-center gap-2 border-b-[3px] border-b-transparent text-gray-500 dark:text-gray-400 pb-[13px] pt-4 hover:text-gray-700 dark:hover:text-gray-300" href="#">
<span class="material-symbols-outlined text-lg">mail</span>
<p class="text-sm font-bold leading-normal tracking-[0.015em]">E-mail</p>
</a>
</div>
</div>
<div class="bg-white dark:bg-gray-800/50 rounded-b-lg p-4 md:p-6">
<div class="flex flex-col gap-4">
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Mensagem para WhatsApp</h3>
<textarea class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200 focus:ring-primary focus:border-primary" rows="6">Olá [Nome do Lead]! Vi que você se interessou por nossos serviços de automação. Gostaria de agendar uma conversa rápida de 15 minutos para entender melhor suas necessidades e como podemos ajudar a alavancar seus resultados. Qual o melhor horário para você?</textarea>
<div class="flex items-center justify-between">
<p class="text-xs text-gray-500 dark:text-gray-400">256 Caracteres</p>
<div class="flex items-center gap-2">
<button class="flex items-center justify-center gap-2 h-9 px-4 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm font-medium hover:bg-gray-300 dark:hover:bg-gray-600">
<span class="material-symbols-outlined text-base">content_copy</span>
<span class="truncate">Copiar</span>
</button>
<button class="flex items-center justify-center gap-2 h-9 px-4 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700">
<span class="material-symbols-outlined text-base">send</span>
<span class="truncate">Enviar</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>
    
  </div>
@endsection