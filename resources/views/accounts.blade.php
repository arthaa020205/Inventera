<x-layouts.retail active="customers" title="Accounts - Jayusman Retail Management">
    <!-- Page Header -->
    <header class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12 mt-8 md:mt-0">
        <div>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-2">Financial Treasury</p>
            <h2 class="font-display text-display text-on-surface hidden md:block">Accounts</h2>
            <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface md:hidden">Accounts</h2>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-5 py-2.5 liquid-glass rounded-full font-label-md text-label-md text-on-surface hover:bg-white/60 transition-all flex items-center space-x-2">
                <span class="material-symbols-outlined text-[18px]">tune</span>
                <span>Settings</span>
            </button>
            <button class="px-5 py-2.5 bg-primary text-on-primary rounded-full font-label-md text-label-md shadow-[0_8px_16px_rgba(0,88,188,0.3)] hover:opacity-90 transition-all flex items-center space-x-2">
                <span class="material-symbols-outlined text-[18px]">add</span>
                <span>Add Account</span>
            </button>
        </div>
    </header>

    <!-- Stats Row -->
    <section class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        @php
            $stats = [
                ['label' => 'Total Balance', 'value' => 'Rp 6.4M', 'icon' => 'account_balance_wallet', 'color' => 'text-primary'],
                ['label' => 'Bank Accounts', 'value' => '12', 'icon' => 'account_balance', 'color' => 'text-secondary'],
                ['label' => 'Pending Sync', 'value' => '02', 'icon' => 'sync', 'color' => 'text-tertiary'],
                ['label' => 'Active Wallets', 'value' => '05', 'icon' => 'wallet', 'color' => 'text-primary-container'],
            ];
        @endphp
        @foreach($stats as $stat)
        <div class="liquid-glass rounded-xl p-5 flex items-center space-x-4">
            <div class="w-10 h-10 rounded-full bg-primary/10 {{ $stat['color'] }} flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">{{ $stat['icon'] }}</span>
            </div>
            <div>
                <p class="font-label-sm text-label-sm text-on-surface-variant">{{ $stat['label'] }}</p>
                <p class="font-headline-md text-headline-md text-on-surface">{{ $stat['value'] }}</p>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Account Cards -->
    <section class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-headline-md text-headline-md text-on-surface">Connected Accounts</h3>
            <button class="font-label-md text-label-md text-primary flex items-center">
                View All <span class="material-symbols-outlined text-[18px] ml-1">arrow_forward</span>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Account 1 -->
            <div class="liquid-glass rounded-xl p-7 flex flex-col justify-between hover:translate-y-[-4px] transition-transform duration-300 cursor-pointer group">
                <div class="flex justify-between items-start">
                    <div class="w-11 h-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance</span>
                    </div>
                    <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2.5 py-1 rounded-full">Primary</span>
                </div>
                <div class="mt-6">
                    <h3 class="font-headline-md text-headline-md text-on-surface">BCA Corporate Treasury</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Bank Central Asia • **** 9920</p>
                </div>
                <div class="mt-6 flex justify-between items-end">
                    <div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Balance</p>
                        <p class="font-headline-md text-headline-md text-on-surface mt-1">Rp 3.21M</p>
                    </div>
                    <button class="w-9 h-9 rounded-full liquid-glass flex items-center justify-center text-on-surface-variant group-hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
            </div>

            <!-- Account 2 -->
            <div class="liquid-glass rounded-xl p-7 flex flex-col justify-between hover:translate-y-[-4px] transition-transform duration-300 cursor-pointer group">
                <div class="flex justify-between items-start">
                    <div class="w-11 h-11 rounded-xl bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">wallet</span>
                    </div>
                    <span class="bg-surface-variant text-on-surface-variant font-label-sm text-label-sm px-2.5 py-1 rounded-full">External</span>
                </div>
                <div class="mt-6">
                    <h3 class="font-headline-md text-headline-md text-on-surface">GoPay Business Wallet</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">Gojek Ecosystem • ****-7731</p>
                </div>
                <div class="mt-6 flex justify-between items-end">
                    <div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Balance</p>
                        <p class="font-headline-md text-headline-md text-on-surface mt-1">Rp 218.3jt</p>
                    </div>
                    <button class="w-9 h-9 rounded-full liquid-glass flex items-center justify-center text-on-surface-variant group-hover:text-secondary transition-colors">
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
            </div>

            <!-- Add New Account -->
            <div class="rounded-xl border-2 border-dashed border-outline-variant p-7 flex flex-col items-center justify-center text-center hover:border-outline transition-colors cursor-pointer group">
                <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant group-hover:text-on-surface group-hover:bg-surface-container-high transition-all">
                    <span class="material-symbols-outlined">add</span>
                </div>
                <p class="mt-4 font-label-md text-label-md text-on-surface-variant group-hover:text-on-surface transition-colors">Connect New Gateway</p>
            </div>
        </div>
    </section>

    <!-- Recent Operations Table -->
    <section class="liquid-glass rounded-xl overflow-hidden">
        <div class="flex items-center justify-between p-6 border-b border-white/20">
            <h3 class="font-headline-md text-headline-md text-on-surface">Recent Operations</h3>
            <p class="font-label-sm text-label-sm text-on-surface-variant">Latest Activity Tracker</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-white/10">
                        <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Action</th>
                        <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Subject</th>
                        <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">Timestamp</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    <tr class="hover:bg-white/10 transition-colors cursor-pointer">
                        <td class="px-6 py-4 flex items-center space-x-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center">
                                <span class="material-symbols-outlined text-[16px]">north_east</span>
                            </span>
                            <span class="font-label-md text-label-md text-on-surface">Funds Transfer</span>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface-variant">Sent Rp 18jt to Sarah Kusuma</td>
                        <td class="px-6 py-4">
                            <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-3 py-1 rounded-full">Verified</span>
                        </td>
                        <td class="px-6 py-4 text-right font-label-sm text-label-sm text-on-surface-variant">2 hours ago</td>
                    </tr>
                    <tr class="hover:bg-white/10 transition-colors cursor-pointer">
                        <td class="px-6 py-4 flex items-center space-x-3">
                            <span class="w-8 h-8 rounded-full bg-tertiary-fixed/30 text-tertiary flex items-center justify-center">
                                <span class="material-symbols-outlined text-[16px]">south_west</span>
                            </span>
                            <span class="font-label-md text-label-md text-on-surface">Inward Remittance</span>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface-variant">Received from PT Sinar Plastik</td>
                        <td class="px-6 py-4">
                            <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-3 py-1 rounded-full">Cleared</span>
                        </td>
                        <td class="px-6 py-4 text-right font-label-sm text-label-sm text-on-surface-variant">5 hours ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <div class="pb-12"></div>
</x-layouts.retail>


