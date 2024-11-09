<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paper Trails | About</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar :title="$title" :categories="$categories" />

    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/banner1.jpg" class="d-block w-100"
                    style="max-height: 510px; object-fit: cover; filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Discover New Worlds</h5>
                    <p>Dive into a range of genres, from timeless classics to the latest releases at Paper Trails.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/banner2.jpg" class="d-block w-100"
                    style="max-height: 510px; object-fit: cover; filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>For Every Book Lover</h5>
                    <p>Begin your journey with a selection of books curated for readers of all kinds.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/banner3.jpg" class="d-block w-100"
                    style="max-height: 510px; object-fit: cover; filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Where Stories Come Alive</h5>
                    <p>Each book is handpicked to deliver a deeply immersive reading experience.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container-fluid about-section mt-2 mb-5 col-7 text-center">
        <div class="pt-3">
            <h1 class="p-4 fw-bold" style="background-color: #D3EBCD; border-radius: 20px">-Journey Through Words,
                Guided by Paper Trails-</h1>
        </div>

        <p class="pt-4 pb-4">
            Paper Trails is more than just a bookstore—it's a haven for book lovers, a sanctuary for knowledge seekers,
            and a community space for literary enthusiasts of all ages. Our store offers a curated selection of books
            across genres, from timeless classics to the latest bestsellers. We believe that every book has a journey,
            and we are here to help you find yours.

            At Paper Trails, we celebrate the power of stories and the magic of words. Our carefully chosen collection
            spans a variety of interests, whether you’re diving into fiction, exploring history, uncovering scientific
            marvels, or embracing the world of art and poetry. Beyond just books, we provide a space where people can
            come together to share ideas, join events, and spark meaningful conversations.

            Our mission is to be more than a bookstore—to be a place where stories are discovered, connections are made,
            and imaginations are ignited. So come visit us, take a stroll through the aisles, and let us help you
            uncover stories that will stay with you long after you’ve turned the final page.
        </p>
    </section>

    <x-footer />

</body>

</html>
