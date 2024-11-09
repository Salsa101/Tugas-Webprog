<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paper Trails | Home</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                                        href="/books?category={{ $category->slug }}">{{ $category->name }}</a></li>
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


    <div class="container-fluid d-flex flex-column justify-content-center align-items-center p-5"
        style="margin-top: 3rem">
        <h1 class="col-7 text-center display-5 fw-bolder">
            All Books
        </h1>
    </div>


    <div class="container-sm col-6 pt-3">
        <form class="d-flex">
            @if (request('category'))
                <input type="hidden" name='category' value="{{ request('category') }}">
            @endif
            <div class="icon-plus-search position-relative w-100 me-2">
                <i class="bi bi-search position-absolute ps-1"
                    style="left: 10px; top: 50%; transform: translateY(-50%); color: #888;"></i>
                <input class="form-control ps-5" type="search" id="search" name="search"
                    placeholder="Find your books here..." aria-label="Search">
            </div>
            <button class="btn fw-bold" style="background-color: #AEDBCE" type="submit">Search</button>
        </form>
    </div>

    {{-- <div class="container-fluid px-5 pt-5">
        {{ $books->links() }}
    </div> --}}

    <div class="container-fluid">
        <div class="row row-cols-md-4 g-2 p-4">
            @forelse ($books as $book)
                <div class="col">
                    <div class="card" style="width: 18rem">
                        <img src="{{ $book['image'] }}" style="max-height: 200px; width:auto; object-fit: contain;"
                            class="card-img-top" alt="...">
                        <div class="card-body mt-2">
                            <h5 class="card-title fw-bold">{{ Str::limit($book['title'], 20) }}</h5>
                            <p class="card-category text-secondary"><a style="color:#888"
                                    href="/books?category={{ $book->category->slug }}">{{ $book->category->name }}</a>
                            </p>
                            <p class="card-text">{{ Str::limit($book['description'], 80) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-price fw-bold" style="color: green">Rp.{{ $book['price'] }}</span>
                                <a href="/home/{{ $book['id'] }}" class="btn fw-bold"
                                    style="background-color: #AEDBCE">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="container-fluid py-5">
                    <p class="d-flex justify-content-center align-items-center mt-5 fw-bold fs-3">Product not found!</p>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-secondary" href="/books">Back to all books</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    {{-- <div class="container-fluid px-5">
        {{ $books->links() }}
    </div> --}}

    <x-footer/>

</body>

</html>
