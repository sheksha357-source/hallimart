    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AuthController;

    Route::get('/', function () {
        return view('welcome');
    });

    /* Register */
    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'register']);

    /* Login */
    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::post('/logout', function () {
    session()->flush();      // remove all session data
    return redirect('/login');
})->name('logout');



    