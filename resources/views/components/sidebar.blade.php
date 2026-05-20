@props(['active' => 'dashboard'])

<aside id="sidebar" class="sidebar">
    {{-- Brand --}}
    <div class="sidebar-brand">
        <h1 class="sidebar-logo">Luminescent</h1>
        <span class="sidebar-subtitle">FINANCIAL PLATFORM</span>
    </div>

    {{-- Navigation --}}
    <nav class="sidebar-nav">
        <a href="{{ url('/dashboard') }}"
           class="sidebar-link {{ $active === 'dashboard' ? 'active' : '' }}"
           id="nav-dashboard">
            <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/>
                <path d="M9 21V12h6v9"/>
            </svg>
            <span>Dashboard</span>
            @if($active === 'dashboard')
                <span class="sidebar-active-bar"></span>
            @endif
        </a>

        <a href="{{ url('/transactions') }}"
           class="sidebar-link {{ $active === 'transactions' ? 'active' : '' }}"
           id="nav-transactions">
            <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M17 1l4 4-4 4"/>
                <path d="M3 11V9a4 4 0 014-4h14"/>
                <path d="M7 23l-4-4 4-4"/>
                <path d="M21 13v2a4 4 0 01-4 4H3"/>
            </svg>
            <span>Transactions</span>
            @if($active === 'transactions')
                <span class="sidebar-active-bar"></span>
            @endif
        </a>

        <a href="{{ url('/reports') }}"
           class="sidebar-link {{ $active === 'reports' ? 'active' : '' }}"
           id="nav-reports">
            <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z"/>
                <path d="M14 2v6h6"/>
                <path d="M16 13H8"/>
                <path d="M16 17H8"/>
                <path d="M10 9H8"/>
            </svg>
            <span>Reports</span>
            @if($active === 'reports')
                <span class="sidebar-active-bar"></span>
            @endif
        </a>

        <a href="{{ url('/accounts') }}"
           class="sidebar-link {{ $active === 'accounts' ? 'active' : '' }}"
           id="nav-accounts">
            <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                <path d="M1 10h22"/>
            </svg>
            <span>Accounts</span>
            @if($active === 'accounts')
                <span class="sidebar-active-bar"></span>
            @endif
        </a>

        <a href="{{ url('/settings') }}"
           class="sidebar-link {{ $active === 'settings' ? 'active' : '' }}"
           id="nav-settings">
            <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="3"/>
                <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/>
            </svg>
            <span>Settings</span>
            @if($active === 'settings')
                <span class="sidebar-active-bar"></span>
            @endif
        </a>
    </nav>

    {{-- User Profile --}}
    <div class="sidebar-user">
        <div class="sidebar-user-avatar">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5 text-cyan-400">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        </div>
        <div class="sidebar-user-info">
            <span class="sidebar-user-name">{{ auth()->user()->name ?? 'Guest' }}</span>
            <span class="sidebar-user-role">Finance Manager</span>
        </div>

        {{-- Logout Button --}}
        <form method="POST" action="{{ route('logout') }}" style="margin-left:auto;">
            @csrf
            <button type="submit"
                    title="Logout"
                    style="background:none;border:none;cursor:pointer;padding:6px;border-radius:8px;color:#4b5563;transition:color 0.2s,background 0.2s;display:flex;align-items:center;"
                    onmouseover="this.style.color='#f87171';this.style.background='rgba(239,68,68,0.08)'"
                    onmouseout="this.style.color='#4b5563';this.style.background='none'">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="16" height="16">
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
            </button>
        </form>
    </div>
</aside>
