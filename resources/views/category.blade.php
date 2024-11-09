<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paper Trails | Category</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar :title="$title" :categories="$categories" />

    <nav class="navbar navbar-light bg-light ps-5 pb-4 pt-5">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <a class="navbar-brand fs-1 fw-bold" href="#">{{ $category }}</a>
        </div>
    </nav>


    <div class="container-sm col-6 pt-4 pb-3">
        <form class="d-flex">
            <div class="icon-plus-search position-relative w-100 me-2">
                <i class="bi bi-search position-absolute"
                    style="left: 10px; top: 50%; transform: translateY(-50%); color: #888;"></i>
                <input class="form-control ps-5" type="search" placeholder="Find your books here..."
                    aria-label="Search">
            </div>
            <button class="btn" style="background-color: #AEDBCE" type="submit">Search</button>
        </form>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-md-4 g-2 p-4">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card" style="width: 18rem">
                        <img src="{{ asset($book['image']) }}" class="card-img-top" style="max-height: 200px; width:auto; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ Str::limit($book['title'], 20) }}</h5>
                            <p class="card-category text-secondary"><a
                                    href="/?category={{ $books->category->slug }}">{{ $books->category->name }}</a>
                            </p>
                            <p class="card-text">{{ Str::limit($book['description'], 80) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-price fw-bold" style="color: green">Rp.{{ $book['price'] }}</span>
                                <a href="/home/{{ $book['id'] }}" class="btn" style="background-color: #AEDBCE">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




</body>

</html>
