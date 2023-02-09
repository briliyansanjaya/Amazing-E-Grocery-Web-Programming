    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\App;

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

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

//Login & Register
Route::middleware(['guest'])->group(function () {
    Route::prefix('/login')->group(function () {
        Route::get('', [LoginController::class, 'login'])->name('login');
        Route::post('', [LoginController::class, 'authenticate']);
    });
    Route::prefix('/register')->group(function () {
        Route::get('', [RegisterController::class, 'register'])->name('register');
        Route::post('', [RegisterController::class, 'store']);
    });
});

//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//User
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [ProductController::class, 'home'])->name('home');
    Route::get('/productdetail/{products:ProductID}', [ProductController::class, 'showProductdetail'])->name('productdetail');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/{user:UserID}', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/productdetail/purchase/{product:ProductID}', [ProductController::class, 'purchase'])->name('purchase');
    Route::post('/productdetail/{product:ProductID}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('/carts/{cart:CartID}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
    Route::post('/{totalprice}', [TransactionController::class, 'checkout'])->name('checkout');
    Route::get('/history', [TransactionController::class, 'history'])->name('history');
});

//Admin
Route::get('/manage', [AdminController::class, 'manage'])->name('admin')->middleware('admin');
Route::post('/manage/delete/{user:UserID}', [AdminController::class, 'deleteProductAdmin'])->name('deleteProductAdmin')->middleware('admin');
Route::post('/manage/update/{user:UserID}', [AdminController::class, 'updateRole'])->name('updateRole')->middleware('admin');

