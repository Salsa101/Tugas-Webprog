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

    <x-navbar :title="$title" :categories="$categories" />
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center p-5"
        style="margin-top: 3rem">
        <h1 class="col-7 text-center display-3 fw-bolder py-4" style="background-color: #D3EBCD; border-radius: 20px">
            Discover the world’s best books
        </h1>
        <h5 class="col-8 text-center pt-2 fst-italic">
            Explore a curated collection from the most acclaimed authors,<br> ready to inspire your next great read.
        </h5>
    </div>


    <div class="container-sm col-6 pt-3">
        <form class="d-flex">
            @if (request('category'))
                <input type="hidden" name='category' value="{{ request('category') }}">
            @endif

            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
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

    <div class="container-fluid px-5 pt-5">
        {{ $books->links() }}
    </div>

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
                                    href="/?category={{ $book->category->slug }}">{{ $book->category->name }}</a> | <a
                                    href="/?author={{ $book->author->username }}"
                                    style="color:#888">{{ $book->author->name }}</a></p>
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
                        <a class="btn fw-bold" style="background-color: #D3EBCD" href="/">Back to home</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <div class="container-fluid px-5">
        {{ $books->links() }}
    </div>

    <x-footer></x-footer>

</body>

</html>
