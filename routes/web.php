<?php

use App\Livewire\Page\Admin\Category as CategoryAdmin;
use App\Livewire\Page\Admin\Profile;
use App\Livewire\Page\Auth as AuthAlias;
use App\Livewire\Page\Category;
use App\Livewire\Page\Index;
use App\Livewire\Page\ProductDetail;
use App\Livewire\Search;
use Illuminate\Support\Facades\Route;

Route::pattern('slug', '^[a-zA-Z0-9-_]{1,}$');
Route::pattern('params', '^[a-zA-Z0-9آ-ی_-]{2,}$');
Route::pattern('id', '^[0-9]{1,}$');


Route::get('/', Index::class)->name('index');
Route::get('/search/{params}', Search::class)->name('search');
Route::get('category/{slug}', Category::class)->name('category');
Route::get('product/{id}', ProductDetail::class)->name('product.detail');


// Auth
Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('/', AuthAlias::class)->name('login');
});

Route::middleware('auth:web')->prefix('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('auth.profile');
    Route::get('/categories', CategoryAdmin::class)->name('auth.categories');
});
