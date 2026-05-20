@props(['title' => ''])

<header id="navbar" class="navbar">
    <div class="navbar-inner">
        {{-- Mobile sidebar toggle --}}
        <button id="sidebar-toggle" class="navbar-toggle" onclick="toggleSidebar()">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5">
                <path d="M3 12h18M3 6h18M3 18h18" />
            </svg>
        </button>

        {{-- Search Bar --}}
        <div class="navbar-search">
            <svg class="navbar-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <path d="M21 21l-4.35-4.35" />
            </svg>
            <input type="text" id="search-input" class="navbar-search-input" placeholder="Search transactions..." />
        </div>

        {{-- Right Section --}}
        <div class="navbar-actions">
            {{-- Notifications --}}
            <button id="btn-notifications" class="navbar-action-btn" title="Notifications">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                    <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 01-3.46 0" />
                </svg>
                <span class="navbar-notification-dot"></span>
            </button>

            {{-- Help --}}
            <button id="btn-help" class="navbar-action-btn" title="Help">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9.09 9a3 3 0 115.83 1c0 2-3 3-3 3" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg>
            </button>
        </div>
    </div>
</header>