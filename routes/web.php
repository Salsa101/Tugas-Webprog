<?php


use Illuminate\Support\Facades\Route;
use App\Models\Book; //buat import modelnya
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "books" => Book::all(),
        'categories' => Category::all(),
        "books" => Book::filter(request(['search', 'category']))->latest()->paginate(8)->withQueryString() //scope, order by, get
    ]);
});

Route::get('/home/{book}', function (Book $book) {
    return view('book', [
        "title" => "Book",
        "book" => $book
    ]);
});

Route::get('/books', function () {
    return view('books', [
        "title" => "Books",
        "books" => Book::all(),
        'categories' => Category::all(),
        "books" => Book::filter(request(['search', 'category']))->latest()->get()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $categories = Category::all();
    return view('category', [
        "title" => $category->name,
        'books' => $category->books,
        'category' => $category->name,
        'categories' => $categories
    ]);
});
