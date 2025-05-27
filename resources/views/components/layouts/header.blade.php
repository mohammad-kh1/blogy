<header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">

        <div class="top-row d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-end">
                <h1 class="sitename">Blogy</h1><span>.</span>
            </a>

            <div class="d-flex align-items-center">


                <form wire:submit="search" class="search-form ms-4">
                    <input type="text" wire:model="title" placeholder="Search..." class="form-control">
                    <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>

    </div>

    <div class="nav-wrap">
        <div class="container d-flex justify-content-center position-relative">
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('home')}}"  class="{{request()->routeIs('home') ? 'active' : ''}}" >Home</a></li>
                    <li><a href="{{route('about')}}" wire:navigate class="{{request()->routeIs('about') ? 'active' : ''}}">About</a></li>
                    <li><a href="{{route('category')}}" wire:navigate class="{{request()->routeIs('category') ? 'active' : ''}}">Category</a></li>
                    <li><a href="{{route('contact')}}" wire:navigate class="{{request()->routeIs("contact") ? 'active' : ''}}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>

</header>
