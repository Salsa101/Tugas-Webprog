<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Trails | Product Detail</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset($book['image']) }}" alt="Product Image" class="img-fluid rounded"
                    style="max-width: 400px">
            </div>

            <div class="col-md-6 d-flex flex-column justify-content-center align-items-start">
                <h1 class="display-5 pb-4 fw-bolder">{{ $book['title'] }}</h1>
                <h3 class="fw-bold" style="color: green">Rp.{{ $book['price'] }}</h3>
                <p class="mt-2">{{ $book['description'] }}</p>
                <a href="/" class="btn mt-1 fw-bold" style="background-color: #AEDBCE">Back to Home</a>
            </div>
        </div>
    </div>
</body>

</html>
