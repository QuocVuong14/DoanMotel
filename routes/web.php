<?php

use Illuminate\Support\Facades\Http;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use App\Models\Exam;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Api\MotelController;


use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\CartController;
use App\Http\Controllers\Guest\PaymentController;
use App\Http\Controllers\Guest\MyOrderController;
use App\Http\Controllers\Guest\ProfileController;
use App\Http\Controllers\Guest\MailController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Api\PostController;


// ////////////////////////////////////////////////////////////////////////////////
// //==========Login Facebook ===========
// Route::get('/auth/facebook', [SocialController::class, 'facebookRedirect']);
// Route::get('/auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

// //==========Login Google ===========
// Route::get('/auth/google', [SocialController::class, 'googleRedirect']);
// Route::get('/google/callback', [SocialController::class, 'googleCallback']);

//==========Login With Account =======
Route::group(['middleware' => 'guest'], function(){
    Route::match(['get','post'],'login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Auth\LoginController@login']);

});


//===================


Route::get('/auth', function(){
    date_default_timezone_set('Australia/Melbourne');
    $date = date('m/d/Y h:i:s a', time());
    dd($date);
});

Route::get('/auth2', function(){
//    dd(session() -> all());
//    dd((Auth::user() -> roles)[0]->id );
//    $_SESSION['role'] = 1;
//    session('role', 1);
//    session(['role' => 1]);
    dd(session('role'));
});


Route::get('/auth3', function(){
    dd(Auth::user() -> id);
});


//gửi mail xác minh cho client
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//chấp nhận tại mail client
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

//gửi lại email xác minh cho client
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//=====================
Route::get('', function(){
    return redirect('home');
});

// ->middleware('verified');

//== Logout Account ==
Route::get('/logout',function(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
});
// Route::get('/profile', [ProfileController::class, 'index']);

// ===component
//Route::get('/exams/component', [ExamController::class, 'component'])  -> name('exams.component');
//Route::get('/product/component', [HomeController::class, 'component'])   -> name('component');
////////////////////////////////////////////////////////////////////////////////

// Route::get('/profile', [\App\Http\Controllers\Guest\CategoryController::class, 'getCate']) ;

Route::group(['middleware' => ['guest'],
            'prefix' => ''
], function(){
    Route::post('/logout', [LoginController::class, 'logout'])  -> name('logout');
    Route::get('/user/create', [UserController::class, 'create'])  -> name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])  -> name('user.store');
    Route::get('/detailproduct', [HomeController::class, 'detailproduct'])  -> name('home.detailproduct');
});
//

// lỗi thêm verified sau auth
// ,'verified'
Route::group(['middleware' => ['auth' ,'verified'],
              'prefix' => ''
], function(){

    Route::get('/home', [HomeController::class, 'index'])->withoutMiddleware(['auth','verified'])  -> name('home.index');
    Route::get('/home/search', [HomeController::class, 'search'])->withoutMiddleware(['auth','verified'])  -> name('home.search');
    Route::get('home/detail/{id}', [HomeController::class, 'detail'])->withoutMiddleware(['auth','verified'])  -> name('home.detail');
    // Route::get('/home/location', [HomeController::class, 'location']) -> withoutMiddleware(['auth','verified'])  -> name('home.location ');
    // Route::post('/home/vote/{id}', [HomeController::class, 'vote'])-> withoutMiddleware(['verified'])  -> name('vote');
    // Route::get('home/cate/{id}', [HomeController::class, 'cate'])->withoutMiddleware(['auth','verified'])  -> name('home.cate');
    Route::get('home/sendmail{id}', [HomeController::class, 'sendmail']);
    Route::post('/home/send-comment/{id}', [HomeController::class, 'SendComment']);
    



    Route::post('/logout', [LoginController::class, 'logout'])-> withoutMiddleware(['verified'])  -> name('logout');


});

Route::post('/insert-rating', [HomeController::class, 'insert_rating']);




//== Area Admin ==
Route::group(['middleware' => ['auth','checkrole'],
              'prefix' => ''
], function(){

    Route::group(['prefix' => '/exams'], function(){
        Route::get('/', [ExamController::class, 'index'])  -> name('exams.index');
        Route::get('/show', [ExamController::class, 'show'])  -> name('exams.show');
        Route::get('/destroy/{id}', [ExamController::class, 'destroy'])  -> name('exams.destroy');
        Route::get('/edit/{id}', [ExamController::class, 'edit'])  -> name('exams.edit');
        Route::put('/update/{id}', [ExamController::class, 'update'])  -> name('exams.update');
        Route::get('/create', [ExamController::class, 'create'])  -> name('exams.create');
        Route::post('/store', [ExamController::class, 'store'])  -> name('exams.store');
    });

    Route::group(['prefix' => '/post'], function(){
        Route::get('/', [PostController::class, 'index'])  -> name('posts.index');
        Route::get('/create', [PostController::class, 'create'])  -> name('posts.create');
        Route::post('/store', [PostController::class, 'store'])  -> name('posts.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])  -> name('posts.edit');
        Route::put('/update/{id}', [PostController::class, 'update'])  -> name('posts.update');
        Route::delete('/destroy/{id}', [PostController::class, 'destroy'])  -> name('posts.destroy');

    });
    Route::group(['prefix' => '/profile'], function(){

        Route::get('/', [UserController::class, 'updateprofile'])  -> name('profile.index');
        Route::post('updateprofile', [UserController::class, 'saveprofile'])-> name('profile.update');

    });

    Route::group(['prefix' => '/statistic'], function(){

        Route::get('/', [PostController::class, 'statistic'])  -> name('statistic.index');


    });



});


?>
