@props(['active' => 'dashboard'])

<nav class="hidden md:flex flex-col p-6 space-y-4 bg-white/10 dark:bg-black/10 backdrop-blur-[40px] border border-white/20 dark:border-white/10 shadow-[4px_0_40px_rgba(0,0,0,0.05)] fixed w-[280px] z-50 left-[48px] top-[48px] h-[calc(100vh-96px)] rounded-[32px]">

    <!-- Header / Branding -->
    <div class="flex items-center space-x-4 mb-6 px-2">
        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary-fixed to-primary flex items-center justify-center shadow-[0_4px_12px_rgba(0,88,188,0.25)] flex-shrink-0">
            <span class="material-symbols-outlined text-on-primary text-2xl" style="font-variation-settings: 'FILL' 1;">storefront</span>
        </div>
        <div>
            <h1 class="font-headline-md text-headline-md font-black text-primary leading-tight">Inventera</h1>
            <p class="font-label-sm text-label-sm text-on-surface-variant leading-tight">Jayusman Retail</p>
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 space-y-1 overflow-y-auto">

        {{-- Group: Main --}}
        <p class="font-label-sm text-label-sm text-on-surface-variant/50 uppercase tracking-widest px-4 pb-1 pt-2">Utama</p>

        <a href="{{ route('dashboard') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'dashboard' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'dashboard' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>dashboard</span>
            <span class="font-label-md text-label-md">Dashboard</span>
        </a>

        <a href="{{ route('transactions') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'transactions' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'transactions' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>point_of_sale</span>
            <span class="font-label-md text-label-md">Transaksi</span>
        </a>

        <a href="{{ route('inventory') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'inventory' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'inventory' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>inventory_2</span>
            <span class="font-label-md text-label-md">Inventaris</span>
        </a>

        {{-- Group: Manajemen --}}
        <p class="font-label-sm text-label-sm text-on-surface-variant/50 uppercase tracking-widest px-4 pb-1 pt-4">Manajemen</p>

        <a href="{{ route('employees') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'employees' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'employees' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>badge</span>
            <span class="font-label-md text-label-md">Karyawan</span>
        </a>

        <a href="{{ route('branches') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'branches' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'branches' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>store</span>
            <span class="font-label-md text-label-md">Cabang</span>
        </a>

        <a href="{{ route('customers') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'customers' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'customers' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>group</span>
            <span class="font-label-md text-label-md">Pelanggan</span>
        </a>

        {{-- Group: Analitik --}}
        <p class="font-label-sm text-label-sm text-on-surface-variant/50 uppercase tracking-widest px-4 pb-1 pt-4">Analitik</p>

        <a href="{{ route('reports') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'reports' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'reports' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>assessment</span>
            <span class="font-label-md text-label-md">Laporan</span>
        </a>

        <a href="{{ route('audit-log') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'audit-log' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'audit-log' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>manage_history</span>
            <span class="font-label-md text-label-md">Audit Log</span>
        </a>
    </div>

    <!-- Footer Area -->
    <div class="space-y-1 pt-4 border-t border-white/20">

        <a href="{{ route('settings') }}"
           class="flex items-center space-x-3 px-4 py-2.5 rounded-xl {{ $active === 'settings' ? 'bg-primary text-on-primary shadow-[0_4px_12px_rgba(0,88,188,0.25)]' : 'text-on-surface-variant hover:bg-white/20 hover:text-on-surface transition-all duration-200' }}">
            <span class="material-symbols-outlined text-[22px]" {{ $active === 'settings' ? 'style="font-variation-settings: \'FILL\' 1;"' : '' }}>settings</span>
            <span class="font-label-md text-label-md">Pengaturan</span>
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center space-x-3 px-4 py-2.5 rounded-xl text-error hover:bg-error-container/30 transition-all duration-200">
                <span class="material-symbols-outlined text-[22px]">logout</span>
                <span class="font-label-md text-label-md">Keluar</span>
            </button>
        </form>
    </div>
</nav>
