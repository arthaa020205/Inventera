<x-layouts.retail active="dashboard" title="Dashboard Owner (Liquid Glass) - Jayusman Retail Management">
    <!-- Page Header -->
    <header class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12 mt-8 md:mt-0">
        <div>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-2">Good morning, Pak Jayusman</p>
            <h2 class="font-display text-display text-on-surface hidden md:block">Store Overview</h2>
            <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface md:hidden">Store Overview</h2>
        </div>
        <div class="flex items-center space-x-3">
            <x-search-dropdown />
            <x-notif-dropdown />
            <div class="w-12 h-12 rounded-full bg-primary-container overflow-hidden border-2 border-white/50 shadow-sm cursor-pointer flex items-center justify-center text-on-primary font-label-md text-label-md"
                 style="background: linear-gradient(135deg, #0058bc, #0070eb);">
                {{ strtoupper(substr(Auth::user()->name ?? 'J', 0, 1)) }}
            </div>
        </div>

    </header>

    <!-- Insight Cards (Bento Grid) -->
    <section>
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-headline-md text-headline-md text-on-surface">Branch Performance</h3>
            <button class="font-label-md text-label-md text-primary flex items-center">View All <span class="material-symbols-outlined text-[18px] ml-1">arrow_forward</span></button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Card 1 -->
            <div class="liquid-glass rounded-lg p-6 flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">location_city</span>
                    </div>
                    <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-1 rounded-full">+12%</span>
                </div>
                <div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-1">Jakarta (HQ)</p>
                    <p class="font-headline-md text-headline-md text-on-surface">Rp 4.2B</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="liquid-glass rounded-lg p-6 flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">location_on</span>
                    </div>
                    <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-1 rounded-full">+8%</span>
                </div>
                <div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-1">Bandung</p>
                    <p class="font-headline-md text-headline-md text-on-surface">Rp 2.8B</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="liquid-glass rounded-lg p-6 flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">location_on</span>
                    </div>
                    <span class="bg-surface-variant text-on-surface-variant font-label-sm text-label-sm px-2 py-1 rounded-full">-2%</span>
                </div>
                <div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-1">Surabaya</p>
                    <p class="font-headline-md text-headline-md text-on-surface">Rp 1.9B</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="liquid-glass rounded-lg p-6 flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">location_on</span>
                    </div>
                    <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-1 rounded-full">+15%</span>
                </div>
                <div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-1">Medan</p>
                    <p class="font-headline-md text-headline-md text-on-surface">Rp 3.1B</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="liquid-glass rounded-lg p-6 flex flex-col justify-between">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-10 h-10 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">location_on</span>
                    </div>
                    <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-1 rounded-full">+4%</span>
                </div>
                <div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-1">Makassar</p>
                    <p class="font-headline-md text-headline-md text-on-surface">Rp 1.2B</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Row: Chart & Alerts -->
    <div class="grid grid-cols-1 xl:grid-cols-3 2xl:grid-cols-4 gap-8">
        <!-- Main Chart Area -->
        <section class="xl:col-span-2 2xl:col-span-3 liquid-glass rounded-xl p-8 flex flex-col">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Revenue Trend</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">Combined sales across all 5 branches</p>
                </div>
                <div class="flex bg-white/30 rounded-full p-1 border border-white/40">
                    <button class="px-4 py-1.5 rounded-full bg-white text-primary font-label-sm text-label-sm shadow-sm">1W</button>
                    <button class="px-4 py-1.5 rounded-full text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">1M</button>
                    <button class="px-4 py-1.5 rounded-full text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm">1Y</button>
                </div>
            </div>
            <!-- Decorative Placeholder for Chart -->
            <div class="flex-1 min-h-[450px] w-full relative overflow-hidden rounded-lg border border-white/20 bg-gradient-to-t from-primary/5 to-transparent flex items-end">
                <!-- Abstract Grid Lines -->
                <div class="absolute inset-0 grid grid-rows-4 grid-cols-1 opacity-10">
                    <div class="border-b border-primary"></div>
                    <div class="border-b border-primary"></div>
                    <div class="border-b border-primary"></div>
                    <div class="border-b border-primary"></div>
                </div>
                <!-- Abstract Area Chart Silhouette -->
                <div class="w-full h-2/3 bg-gradient-to-t from-primary/20 to-primary/0 border-t-2 border-primary relative" style="clip-path: polygon(0 100%, 0 60%, 20% 40%, 40% 70%, 60% 30%, 80% 50%, 100% 20%, 100% 100%);">
                    <div class="absolute top-[20%] right-[0%] w-3 h-3 bg-white border-2 border-primary rounded-full shadow-md transform -translate-x-1.5 -translate-y-1.5"></div>
                </div>
            </div>
        </section>

        <!-- Stock Alerts & Quick Actions -->
        <section class="flex flex-col space-y-6 xl:col-span-1">
            <!-- Alerts Panel -->
            <div class="liquid-glass rounded-xl p-6 flex-1">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-headline-md text-headline-md text-on-surface">Critical Stock</h3>
                    <span class="w-8 h-8 rounded-full bg-error-container text-on-error-container flex items-center justify-center font-label-sm text-label-sm">3</span>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 p-3 rounded-lg hover:bg-white/30 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-error-container/50 text-error flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined">warning</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-label-md text-label-md text-on-surface truncate">Premium Leather Bags</p>
                            <p class="font-body-md text-body-md text-on-surface-variant truncate">Jakarta Branch • 2 left</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 p-3 rounded-lg hover:bg-white/30 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-error-container/50 text-error flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined">warning</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-label-md text-label-md text-on-surface truncate">Silk Scarves (Blue)</p>
                            <p class="font-body-md text-body-md text-on-surface-variant truncate">Bandung Branch • 0 left</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 p-3 rounded-lg hover:bg-white/30 transition-colors cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-tertiary-container/20 text-tertiary flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined">inventory</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-label-md text-label-md text-on-surface truncate">Winter Coats 2024</p>
                            <p class="font-body-md text-body-md text-on-surface-variant truncate">Surabaya Branch • Low est.</p>
                        </div>
                    </div>
                </div>
                <button class="w-full mt-6 py-3 px-4 liquid-glass rounded-full text-primary font-label-md text-label-sm hover:bg-white/60 transition-all">
                    Manage Inventory
                </button>
            </div>
        </section>
    </div>
    <div class="pb-12"></div>
</x-layouts.retail>