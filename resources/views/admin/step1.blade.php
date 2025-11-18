


    <!DOCTYPE html>

<html class="light" lang="pt-br"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistema de Vendas - Dashboard de Leads</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
          borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
        },
      },
    }
  </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
    <a href="/step2" class="btn btn-primary mb-5">
    Proxima Pagina
</a>

<div class="layout-container flex h-full grow flex-col">
    

<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-6 sm:px-10 py-3 bg-white dark:bg-background-dark/80 sticky top-0 z-10 backdrop-blur-sm">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-slate-900 dark:text-white">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M39.5563 34.1455V13.8546C39.5563 15.708 36.8773 17.3437 32.7927 18.3189C30.2914 18.916 27.263 19.2655 24 19.2655C20.737 19.2655 17.7086 18.916 15.2073 18.3189C11.1227 17.3437 8.44365 15.708 8.44365 13.8546V34.1455C8.44365 35.9988 11.1227 37.6346 15.2073 38.6098C17.7086 39.2069 20.737 39.5564 24 39.5564C27.263 39.5564 30.2914 39.2069 32.7927 38.6098C36.8773 37.6346 39.5563 35.9988 39.5563 34.1455Z" fill="currentColor"></path>
<path clip-rule="evenodd" d="M10.4485 13.8519C10.4749 13.9271 10.6203 14.246 11.379 14.7361C12.298 15.3298 13.7492 15.9145 15.6717 16.3735C18.0007 16.9296 20.8712 17.2655 24 17.2655C27.1288 17.2655 29.9993 16.9296 32.3283 16.3735C34.2508 15.9145 35.702 15.3298 36.621 14.7361C37.3796 14.246 37.5251 13.9271 37.5515 13.8519C37.5287 13.7876 37.4333 13.5973 37.0635 13.2931C36.5266 12.8516 35.6288 12.3647 34.343 11.9175C31.79 11.0295 28.1333 10.4437 24 10.4437C19.8667 10.4437 16.2099 11.0295 13.657 11.9175C12.3712 12.3647 11.4734 12.8516 10.9365 13.2931C10.5667 13.5973 10.4713 13.7876 10.4485 13.8519ZM37.5563 18.7877C36.3176 19.3925 34.8502 19.8839 33.2571 20.2642C30.5836 20.9025 27.3973 21.2655 24 21.2655C20.6027 21.2655 17.4164 20.9025 14.7429 20.2642C13.1498 19.8839 11.6824 19.3925 10.4436 18.7877V34.1275C10.4515 34.1545 10.5427 34.4867 11.379 35.027C12.298 35.6207 13.7492 36.2054 15.6717 36.6644C18.0007 37.2205 20.8712 37.5564 24 37.5564C27.1288 37.5564 29.9993 37.2205 32.3283 36.6644C34.2508 36.2054 35.702 35.6207 36.621 35.027C37.4573 34.4867 37.5485 34.1546 37.5563 34.1275V18.7877ZM41.5563 13.8546V34.1455C41.5563 36.1078 40.158 37.5042 38.7915 38.3869C37.3498 39.3182 35.4192 40.0389 33.2571 40.5551C30.5836 41.1934 27.3973 41.5564 24 41.5564C20.6027 41.5564 17.4164 41.1934 14.7429 40.5551C12.5808 40.0389 10.6502 39.3182 9.20848 38.3869C7.84205 37.5042 6.44365 36.1078 6.44365 34.1455L6.44365 13.8546C6.44365 12.2684 7.37223 11.0454 8.39581 10.2036C9.43325 9.3505 10.8137 8.67141 12.343 8.13948C15.4203 7.06909 19.5418 6.44366 24 6.44366C28.4582 6.44366 32.5797 7.06909 35.657 8.13948C37.1863 8.67141 38.5667 9.3505 39.6042 10.2036C40.6278 11.0454 41.5563 12.2684 41.5563 13.8546Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Sistema de Vendas</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-primary text-sm font-bold leading-normal" href="#">Dashboard</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white text-sm font-medium leading-normal" href="#">Propostas</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white text-sm font-medium leading-normal" href="#">Contatos</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white text-sm font-medium leading-normal" href="#">Analytics</a>
</nav>
</div>
<div class="flex items-center gap-4">
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
<span class="material-symbols-outlined text-xl">notifications</span>
</button>
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
<span class="material-symbols-outlined text-xl">settings</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Avatar de usuário" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDQ-wjEoPxicutReHDn6m6ijPIdh9PKwW3Eza-YajFarrw78NOVkUl3e5CvQYbN0pSgO40dwyQNrlxVK22oUHpN4jq84wGyLwv-JBDDTE47Qcv3bJ79WwWxeLuWli23vcm9GGXk4sBow4HtMkb6UPT9Oilr3jVl7jqiWsYDRotzL-Z95GuyVAeMbHKB814HMHanuPSIIIvTHuN7qS-RrdpDHb5Yo6HM7NbB1xLqaUZLR5HkmtIGoQUTgCQ32M5B_3oFpIw4TAaCPmfD");'></div>
</div>
</header>
<main class="flex-1 px-4 sm:px-6 lg:px-10 py-8">
<div class="mx-auto max-w-7xl flex flex-col gap-6">
<div class="flex flex-wrap justify-between items-center gap-4">
<h1 class="text-slate-900 dark:text-white text-3xl font-black leading-tight tracking-[-0.033em]">Dashboard de Leads</h1>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white gap-2 text-sm font-bold leading-normal tracking-[0.015em]">
<span class="material-symbols-outlined text-base">add</span>
<span class="truncate">Importar Leads</span>
</button>
</div>
<div class="flex flex-col md:flex-row flex-wrap items-center justify-between gap-4 p-4 bg-white dark:bg-slate-900/50 rounded-xl border border-slate-200 dark:border-slate-800">
<div class="flex flex-wrap items-center gap-3 w-full md:w-auto">
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-slate-100 dark:bg-slate-800 px-3 hover:bg-slate-200 dark:hover:bg-slate-700">
<p class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Nicho</p>
<span class="material-symbols-outlined text-slate-500 dark:text-slate-400 text-lg">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-slate-100 dark:bg-slate-800 px-3 hover:bg-slate-200 dark:hover:bg-slate-700">
<p class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Cidade</p>
<span class="material-symbols-outlined text-slate-500 dark:text-slate-400 text-lg">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg px-3 text-primary/80 dark:text-primary/90 hover:text-primary">
<p class="text-sm font-medium leading-normal">Limpar Filtros</p>
</button>
</div>
<div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
<label class="flex flex-col w-full sm:w-auto min-w-40 !h-10">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-slate-500 dark:text-slate-400 flex border border-r-0 border-slate-200 dark:border-slate-700 bg-slate-100 dark:bg-slate-800 items-center justify-center pl-3 rounded-l-lg">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-l-0 border-slate-200 dark:border-slate-700 bg-slate-100 dark:bg-slate-800 focus:border-slate-200 dark:focus:border-slate-700 h-full placeholder:text-slate-500 dark:placeholder:text-slate-400 px-3 rounded-l-none pl-2 text-sm font-normal leading-normal" placeholder="Buscar por lead..." value=""/>
</div>
</label>
<button class="flex h-10 w-full sm:w-auto shrink-0 items-center justify-center gap-x-2 rounded-lg bg-slate-100 dark:bg-slate-800 px-3 hover:bg-slate-200 dark:hover:bg-slate-700">
<p class="text-slate-700 dark:text-slate-300 text-sm font-medium leading-normal">Ordenar por: Maior Score</p>
<span class="material-symbols-outlined text-slate-500 dark:text-slate-400 text-lg">expand_more</span>
</button>
</div>
</div>
<div class="px-0 py-0 @container">
<div class="flex overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">
<table class="w-full">
<thead class="bg-slate-50 dark:bg-slate-900">
<tr>
<th class="px-4 py-3 text-left text-slate-600 dark:text-slate-400 w-[25%] text-xs font-medium uppercase tracking-wider">Lead</th>
<th class="px-4 py-3 text-left text-slate-600 dark:text-slate-400 w-[15%] text-xs font-medium uppercase tracking-wider">Status</th>
<th class="px-4 py-3 text-left text-slate-600 dark:text-slate-400 w-[25%] text-xs font-medium uppercase tracking-wider">Score de Prioridade</th>
<th class="px-4 py-3 text-left text-slate-600 dark:text-slate-400 w-[15%] text-xs font-medium uppercase tracking-wider">Segmentação</th>
<th class="px-4 py-3 text-left text-slate-600 dark:text-slate-400 w-[10%] text-xs font-medium uppercase tracking-wider text-center">Ações</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
<td class="h-[72px] px-4 py-2 w-[25%] text-slate-800 dark:text-slate-200 text-sm font-semibold">InnovateTech Solutions</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-full py-1 px-3 text-xs font-medium bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300">
<span class="size-2 rounded-full bg-green-500"></span> Validado
                      </div>
</td>
<td class="h-[72px] px-4 py-2 w-[25%]">
<div class="flex items-center gap-3">
<div class="w-full max-w-28 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700 h-1.5"><div class="h-full rounded-full bg-gradient-to-r from-green-400 to-green-600" style="width: 95%;"></div></div>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">95</p>
</div>
</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-md py-1 px-2.5 text-xs font-medium bg-amber-100 dark:bg-amber-900/50 text-amber-800 dark:text-amber-300 border border-amber-200 dark:border-amber-500/30">
<span class="material-symbols-outlined text-sm">workspace_premium</span> Ouro
                        </div>
</td>
<td class="h-[72px] px-4 py-2 w-[10%] text-center">
<button class="text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
<td class="h-[72px] px-4 py-2 w-[25%] text-slate-800 dark:text-slate-200 text-sm font-semibold">Global Web Services</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-full py-1 px-3 text-xs font-medium bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300">
<span class="size-2 rounded-full bg-green-500"></span> Validado
                      </div>
</td>
<td class="h-[72px] px-4 py-2 w-[25%]">
<div class="flex items-center gap-3">
<div class="w-full max-w-28 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700 h-1.5"><div class="h-full rounded-full bg-gradient-to-r from-green-400 to-green-600" style="width: 88%;"></div></div>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">88</p>
</div>
</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-md py-1 px-2.5 text-xs font-medium bg-amber-100 dark:bg-amber-900/50 text-amber-800 dark:text-amber-300 border border-amber-200 dark:border-amber-500/30">
<span class="material-symbols-outlined text-sm">workspace_premium</span> Ouro
                        </div>
</td>
<td class="h-[72px] px-4 py-2 w-[10%] text-center">
<button class="text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
<td class="h-[72px] px-4 py-2 w-[25%] text-slate-800 dark:text-slate-200 text-sm font-semibold">Creative Minds Agency</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-full py-1 px-3 text-xs font-medium bg-yellow-100 dark:bg-yellow-900/50 text-yellow-800 dark:text-yellow-300">
<span class="size-2 rounded-full bg-yellow-500"></span> Pendente
                      </div>
</td>
<td class="h-[72px] px-4 py-2 w-[25%]">
<div class="flex items-center gap-3">
<div class="w-full max-w-28 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700 h-1.5"><div class="h-full rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600" style="width: 72%;"></div></div>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">72</p>
</div>
</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-md py-1 px-2.5 text-xs font-medium bg-slate-200 dark:bg-slate-700 text-slate-600 dark:text-slate-300 border border-slate-300 dark:border-slate-600">
<span class="material-symbols-outlined text-sm">verified</span> Prata
                        </div>
</td>
<td class="h-[72px] px-4 py-2 w-[10%] text-center">
<button class="text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
<td class="h-[72px] px-4 py-2 w-[25%] text-slate-800 dark:text-slate-200 text-sm font-semibold">DataCorp Inc.</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-full py-1 px-3 text-xs font-medium bg-red-100 dark:bg-red-900/50 text-red-800 dark:text-red-300">
<span class="size-2 rounded-full bg-red-500"></span> Inválido
                      </div>
</td>
<td class="h-[72px] px-4 py-2 w-[25%]">
<div class="flex items-center gap-3">
<div class="w-full max-w-28 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700 h-1.5"><div class="h-full rounded-full bg-gradient-to-r from-orange-400 to-red-600" style="width: 45%;"></div></div>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">45</p>
</div>
</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-md py-1 px-2.5 text-xs font-medium bg-orange-200/50 dark:bg-orange-900/50 text-orange-800 dark:text-orange-400 border border-orange-200 dark:border-orange-500/30">
<span class="material-symbols-outlined text-sm">grade</span> Bronze
                        </div>
</td>
<td class="h-[72px] px-4 py-2 w-[10%] text-center">
<button class="text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
<td class="h-[72px] px-4 py-2 w-[25%] text-slate-800 dark:text-slate-200 text-sm font-semibold">NextGen Logistics</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-full py-1 px-3 text-xs font-medium bg-green-100 dark:bg-green-900/50 text-green-800 dark:text-green-300">
<span class="size-2 rounded-full bg-green-500"></span> Validado
                      </div>
</td>
<td class="h-[72px] px-4 py-2 w-[25%]">
<div class="flex items-center gap-3">
<div class="w-full max-w-28 overflow-hidden rounded-full bg-slate-200 dark:bg-slate-700 h-1.5"><div class="h-full rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600" style="width: 68%;"></div></div>
<p class="text-slate-800 dark:text-slate-200 text-sm font-medium leading-normal">68</p>
</div>
</td>
<td class="h-[72px] px-4 py-2 w-[15%] text-sm">
<div class="inline-flex items-center gap-2 rounded-md py-1 px-2.5 text-xs font-medium bg-slate-200 dark:bg-slate-700 text-slate-600 dark:text-slate-300 border border-slate-300 dark:border-slate-600">
<span class="material-symbols-outlined text-sm">verified</span> Prata
                        </div>
</td>
<td class="h-[72px] px-4 py-2 w-[10%] text-center">
<button class="text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="flex items-center justify-center p-4">
<a class="flex size-10 items-center justify-center text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary" href="#">
<span class="material-symbols-outlined text-xl">chevron_left</span>
</a>
<a class="text-sm font-bold leading-normal tracking-[0.015em] flex size-10 items-center justify-center text-white dark:text-slate-900 rounded-full bg-primary" href="#">1</a>
<a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-slate-600 dark:text-slate-300 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800" href="#">2</a>
<a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-slate-600 dark:text-slate-300 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800" href="#">3</a>
<span class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-slate-600 dark:text-slate-300 rounded-full">...</span>
<a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-slate-600 dark:text-slate-300 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800" href="#">10</a>
<a class="flex size-10 items-center justify-center text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary" href="#">
<span class="material-symbols-outlined text-xl">chevron_right</span>
</a>
</div>
</div>
</main>
</div>
</div>
</body></html>
  </div>
