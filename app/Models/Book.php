<?php

namespace App\Models; //harus pake ini yh

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model{ //terhubung ke tabel books
    //all() fungsinya mengambil semua data array
    //extends Model

    // protected $table = 'table_books'; -> ini dipake klo gak versi jamak dr modelnya (namanya beda)
    // protected $primaryKey = 'books_id' -> ini juga sama
    use HasFactory;
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class); //1 produk punya 1 kategori
    }

    public function author(){
        return $this->belongsTo(User::class); //1 produk punya 1 kategori
    }

    public function scopeFilter(Builder $query, array $filters):void{ //filters biar tau lg filter apa
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        ); //klo cuma 1 pake if aja

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
            $query->where('slug', $category))
        );

        $query->when(
            $filters['author'] ?? false,
            fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
            $query->where('username', $author))
        );
    }
}

