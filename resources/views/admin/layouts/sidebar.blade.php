<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
        </li>
  
        @if (Auth::user()->level == 'Admin')
  
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Data Alumni</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <!-- Pastikan route ini mengarah ke rute yang benar -->
                    <li class="nav-item"> 
                        <a href="{{ route('data-alumni.index') }}" class="nav-link @yield('menuDataAlumni')">Alumni</a>
                    </li>
                    
                </ul>
            </div>
        </li>
        
      
  
        @elseif ( Auth::user()->level == 'Alumni')

        <li class="nav-item" {{ request()->routeIs('data-kategori.index') || request()->routeIs('data-kategori.create') || request()->routeIs('data-kategori.edit') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('data-kategori.index') }}" class="nav-link @yield('menuDataAlumniKategori')">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Kategori</span>
            </a>
        </li>

        <li class="nav-item" {{ request()->routeIs('data-produk.index') || request()->routeIs('data-produk.create') || request()->routeIs('data-produk.edit') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('data-produk.index') }}" class="nav-link @yield('menuDataAlumniProduk')">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Produk</span>
            </a>
        </li>
        
        
        @endif
    </ul>
  </nav>

  