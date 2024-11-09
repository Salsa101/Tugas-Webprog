@props(['title' => '', 'categories' => [], 'books' => []])

<style>
    /* Mengubah warna teks navbar untuk semua link */
    .navbar-nav .nav-link {
        color: #a1c19c;
        /* Warna teks navbar */
    }

    /* Mengatur warna teks link yang aktif */
    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:hover {
        color: #D3EBCD;
        /* Warna teks lebih terang saat aktif atau di-hover */
    }

    /* Warna teks default untuk tombol dropdown dan item */
    .navbar-nav .dropdown-toggle,
    .navbar-nav .dropdown-menu .dropdown-item {
        color: #a1c19c;
        /* Warna default */
    }

    /* Warna teks saat item dropdown aktif (di-klik) */
    .navbar-nav .dropdown-menu .dropdown-item.active,
    .navbar-nav .dropdown-toggle:focus {
        color: #D3EBCD;
        /* Warna saat item dropdown atau toggle fokus/klik */
    }

    /* Warna teks di dalam dropdown */
    .navbar-nav .dropdown-menu .dropdown-item {
        color: #839AA8;
        /* Warna item dropdown */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light ps-5 pe-5 py-3" style="background-color:#839AA8">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-4" style="color:#D3EBCD" href="/">Paper Trails</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }} fw-bold" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Books' ? 'active' : '' }} fw-bold" aria-current="page"
                        href="/books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }} fw-bold" aria-current="page"
                        href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="/?category={{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <div class="button">
                <button class="btn fw-bold"
                    style="background-color: #AEDBCE; border:3px solid #AEDBCE; color: #839AA8">Sign In</button>
                <button class="btn ms-2 fw-bold"
                    style="background-color: #839AA8; color: #AEDBCE; border:3px solid #AEDBCE">Sign Up</button>
            </div>

        </div>
    </div>
</nav>
