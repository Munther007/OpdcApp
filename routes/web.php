<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LawController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/info', function () {
    return view('info');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Dashboard.app');
})->name('dashboard');

Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/',\App\Http\Livewire\Admin\Admin\AdminIndex::class)->name('index');
    Route::get('/user',\App\Http\Livewire\Admin\User\UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
    Route::get('/role',\App\Http\Livewire\Admin\Role\RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
});

Route::get('/books' , [BookController::class , 'index'])->name('books.index');
Route::get('/books/create' , [BookController::class , 'create'])->name('books.create');
Route::post('/books/create' , [BookController::class , 'store'])->name('books.store');
Route::get('/books/{book}' , [BookController::class , 'show'])->name('book.show');
Route::get('/books/edit/{book}' , [BookController::class , 'edit'])->name('book.edit');
Route::patch('/books/edit/{book}' , [BookController::class , 'update'])->name('book.update');
Route::delete('/books/{id}/delete' , [BookController::class , 'destroy'])->name('books.destroy');


Route::get('/phones' , [PhoneController::class , 'index'])->name('phones.index');
Route::get('/phones/create' , [PhoneController::class , 'create'])->name('phones.create');
Route::post('/phones/create' , [PhoneController::class , 'store'])->name('phones.store');
Route::get('/phones/{phone}' , [PhoneController::class , 'show'])->name('phones.show');
Route::delete('/phones/{id}/delete' , [PhoneController::class , 'destroy'])->name('phone.destroy');

Route::get('/websites' , [WebsiteController::class , 'index'])->name('websites.index');
Route::get('/websites/create' , [WebsiteController::class , 'create'])->name('websites.create');
Route::post('/websites/create' , [WebsiteController::class , 'store'])->name('websites.store');
Route::get('/websites/{website}' , [WebsiteController::class , 'show'])->name('websites.show');
Route::delete('/websites/{id}/delete' , [WebsiteController::class , 'destroy'])->name('websites.destroy');
Route::get('/websites/edit/{website}' , [WebsiteController::class , 'edit'])->name('website.edit');
Route::patch('/websites/edit/{website}' , [WebsiteController::class , 'update'])->name('websites.update');

Route::get('/laws' , [LawController::class , 'index'])->name('laws.index');
Route::get('/laws/create' , [LawController::class , 'create'])->name('laws.create');
Route::post('/laws/create' , [LawController::class , 'store'])->name('laws.store');
Route::get('/laws/{law}' , [LawController::class , 'show'])->name('laws.show');
Route::delete('/laws/{id}/delete' , [LawController::class , 'destroy'])->name('laws.destroy');
Route::get('/laws/edit/{law}' , [LawController::class , 'edit'])->name('law.edit');
Route::patch('/laws/edit/{law}' , [LawController::class , 'update'])->name('law.update');

Route::get('/programs' , [ProgramController::class , 'index'])->name('programs.index');
Route::get('/programs/create' , [ProgramController::class , 'create'])->name('programs.create');
Route::post('/programs/create' , [ProgramController::class , 'store'])->name('programs.store');
Route::get('/programs/{id}' , [ProgramController::class , 'show'])->name('programs.show');
Route::get('/programs/edit/{program}' , [ProgramController::class , 'edit'])->name('programs.edit');
Route::patch('/programs/edit/{program}' , [ProgramController::class , 'update'])->name('programs.update');
Route::delete('/programs/{id}/delete' , [ProgramController::class , 'destroy'])->name('programs.destroy');

Route::get('/posts' , [PostController::class , 'index'])->name('posts.index');
Route::get('/posts/create' , [PostController::class , 'create'])->name('posts.create');
Route::post('/posts/create' , [PostController::class , 'store'])->name('posts.store');
Route::get('/posts/{id}' , [PostController::class , 'show'])->name('posts.show');
Route::get('/posts/edit/{post}' , [PostController::class , 'edit'])->name('posts.edit');
Route::patch('/posts/edit/{post}' , [PostController::class , 'update'])->name('posts.update');

Route::delete('/posts/{id}/delete' , [PostController::class , 'destroy'])->name('posts.destroy');

Route::get('/categories' , [CategoryController::class , 'index'])->name('categories.index');
Route::get('/categories/create' , [CategoryController::class , 'create'])->name('categories.create');
Route::post('/categories/create' , [CategoryController::class , 'store'])->name('categories.store');
Route::get('/categories/{id}' , [CategoryController::class , 'show'])->name('categories.show');
Route::delete('/categories/{id}/delete' , [CategoryController::class , 'destroy'])->name('categories.destroy');

Route::get('/messages' , [ContactController::class , 'index'])->name('messages.index');
Route::get('/' , [ContactController::class , 'create'])->name('messages.create');
Route::post('/' , [ContactController::class , 'store'])->name('messages.store');
Route::get('/messages/{id}' , [ContactController::class , 'show'])->name('messages.show');
Route::delete('/messages/{id}/delete' , [ContactController::class , 'destroy'])->name('messages.destroy');

Route::get('/courses' , [CourseController::class , 'index'])->name('courses.index');
Route::get('/courses/create' , [CourseController::class , 'create'])->name('courses.create');
Route::post('/courses/create' , [CourseController::class , 'store'])->name('courses.store');
Route::get('/courses/{id}' , [CourseController::class , 'show'])->name('courses.show');
Route::delete('/courses/{id}/delete' , [CourseController::class , 'destroy'])->name('courses.destroy');
Route::get('/courses/edit/{course}' , [CourseController::class , 'edit'])->name('course.edit');
Route::patch('/courses/edit/{course}' , [CourseController::class , 'update'])->name('courses.update');

//Route::get('/company' , [CompanyController::class , 'index'])->name('company.index');
//Route::get('/company/create' , [CompanyController::class , 'create'])->name('company.create');
//Route::post('/company/create' , [CompanyController::class , 'store'])->name('company.store');
//Route::get('/company/{course}' , [CompanyController::class , 'show'])->name('company.show');
//Route::delete('/company/{id}/delete' , [CompanyController::class , 'destroy'])->name('company.destroy');
//Route::get('/company/edit/{id}' , [CompanyController::class , 'edit'])->name('company.edit');
//Route::patch('/company/edit/{id}' , [CompanyController::class , 'update'])->name('company.update');


Route::get('/weather/{city}', [WeatherController::class, 'getWeatherData']);
