<ul class="navbar-nav bg-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RRStudio</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-solid fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('gallery.index')}}">
            <i class="fas fa-solid fa-images"></i>
            <span>Gallery</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('genre.index')}}">
            <i class="fas fa-solid fa-film"></i>
            <span>Genre</span></a>
    </li>

</ul>