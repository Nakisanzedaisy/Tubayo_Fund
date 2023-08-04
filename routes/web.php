<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WithdrawController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Home Page
Route::get( '/dashboard', [HomeControllerController::class, 'index'])->name('home');
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('/dashboard', 'HomeController@index')->name( 'dashboard')->middleware('auth');



// User Registration and Login
// Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [UserController::class, 'register']);
//Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [UserController::class, 'login']);
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Savings related routes
//Route::get('/savings', [SavingsController::class, 'index'])->name('savings');
//Route::get('/savings/{id}', [SavingsController::class, 'show'])->name('savings.show');
//Route::get('/savings/create', [SavingsController::class, 'create'])->name('savings.create');
Route::post('/savings', [SavingsController::class, 'store'])->name('savings.store');
// Add more routes as needed for updating, deleting, etc.



Route::get('/', function () {
    return view( 'welcome');
});



Route::get('/withdraw-money', function () {
    return view('new-ui.withdraw-money');
});

Route::get('/dashboard', function () {
    return view('dashboard.layouts.main');
})->name("userdashboard");

Route::get('/admindashboard', function () {
    return view('new-ui.admindashboard');
});

Route::get('/404', function () {
    return view('new-ui.404');
});

Route::get('/service', function () {
    return view('new-ui.service');
});

Route::get('/education', function () {
    return view('new-ui.education');
});

Route::get('/process_deposit', function () {
    return view('new-ui.process_deposit');
});


Route::get('/contact', function () {
    return view('new-ui.contact');
});

Route::get('/charts-apexcharts', function () {
    return view('new-ui.charts-apexcharts');
});

Route::get('/index', function () {
    return view('new-ui.index');
});

Route::get('/pages-faq', function () {
    return view('new-ui.pages-faq');
});

Route::get('/charts', function () {
    return view('new-ui.charts');
});

Route::get('/users-profile', function () {
    return view('new-ui.users-profile');
});

Route::get('/sitelogin', function () {
    return view('new-ui.sitelogin');
});

Route::get('/my_transactions', function () {
    return view('dashboard.pages.transactions.my_transactions');
});

Route::get('/siteregister', function () {
     return view('new-ui.siteregister');
 });
// Route::post('/submit',function (\Illuminate\Http\Request $request) {
//    dd($request);
//     return view('new-ui.sitelogin');
// }
// )->name("submit");

Route::post('/submit', [RegisterController::class, 'create'])->name( "submit");

Route::get('/secure-contact', function () {
    return view('new-ui.pages-contact');
});


//System routings

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::middleware(['auth'])->group(function () {



    Route::get('/notifications', function(){
    return view('dashboard.pages.notifications.notifications');
    });

    Route::get('/mark_as_read/{id}', [SystemController::class, 'mark_notification_as_read']);


    //Route::get('/my-savings-account', [SystemController::class, 'show_my_savings_account']);
    //Route::get('/account-financial-tips', [SystemController::class, 'show_financial_tips']);
    //Route::get('/account-articles', [SystemController::class, 'show_articles']);
    // Route::get('/account-transactions', [SystemController::class, 'show_transactions']);
    
    // Route::get('/account-rewards', [SystemController::class, 'show_rewards']);
    // Route::get('/account-goal-savings-calculator', [SystemController::class, 'show_savings_calculators']);


    //Goals_Routes
    Route::get('/account-goals', [SystemController::class, 'show_goals']);
    Route::get('/account-add-goal', [SystemController::class, 'show_add_goal']);
    Route::post('/add-goal', [SystemController::class, 'add_goal']);
    // Route::get('/goals', 'GoalsController@index')->name('goals.index');
    // Route::get('/goals/create', 'GoalsController@create')->name('goals.create');
    // Route::post('/goals', 'GoalsController@store')->name('goals.store');
    // Route::get('/goals/{goal}/edit', 'GoalsController@edit')->name('goals.edit');
    // Route::put('/goals/{goal}', 'GoalsController@update')->name('goals.update');
    // Route::delete('/goals/{goal}', 'GoalsController@destroy')->name('goals.destroy');

    //Deposit_Routes
    //Route::post('/process_deposit', 'DepositController@process')->name('process_deposit');
    Route::post('/process_deposit', [SystemController::class, 'process'])->name('process_deposit');

    // Route::get('/deposits/{deposit}/edit', 'DepositsController@edit')->name('deposits.edit');
    // Route::put('/deposits/{deposit}', 'DepositsController@update')->name('deposits.update');
    // Route::delete('/deposits/{deposit}', 'DepositsController@destroy')->name('deposits.destroy');

    //Feedback_routes
    Route::post('/submit-feedback', [SystemController::class, 'show_feedback'])->name('submit_feedback');

    //achievements
    Route::get('/account-achievements', [SystemController::class, 'show_achievements']);

    
    //Transactions
    // Route::get('/account-add-transaction/{id}', [SystemController::class, 'show_add_transaction']);
    // Route::post('/add-transaction', [SystemController::class, 'add_transaction']);
    Route::get('/my-savings-account', [SystemController::class, 'show_my_savings_account']);
    Route::get('/account-transactions', [SystemController::class, 'show_transactions']);
    Route::get('/account-goals', [SystemController::class, 'show_goals']);
   
    

    //Savings_Calculator
    //Route::get('/savings-calculator', 'SystemController@showCalculatorForm')->name('savings.calculator.form');
    //Route::post('/savings-calculator', 'SystemController@calculate')->name('savings.calculator.calculate');
    Route::get('/account-goal-savings-calculator', [SystemController::class, 'show_savings_calculators']);

    //WithdrawingController
    
    Route::get('/withdraw/create', [WithdrawController::class, 'create'])->name('withdraw.create');
    Route::post('/withdraw/store', [WithdrawController::class, 'store'])->name('withdraw.store');


    Route::get('/logOut', function(){
    Auth::logOut();
    return redirect('/');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');