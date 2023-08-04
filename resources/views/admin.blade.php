<!-- login.blade.php -->
<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <!-- Add login form fields here -->
    <button type="submit">Login</button>
</form>

<!-- register.blade.php -->
<form method="POST" action="{{ route('admin.register') }}">
    @csrf
    <!-- Add registration form fields here -->
    <button type="submit">Register</button>
</form>


// routes/web.php

Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminController@login');
    Route::post('logout', 'AdminController@logout')->name('admin.logout');

    Route::get('register', 'AdminController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'AdminController@register');

    // Add other admin dashboard routes and controllers here
});

// app/Http/Controllers/AdminController.php

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers, RegistersUsers;

    // Admin registration method
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = $this->create($request->all());
        $this->guard()->login($admin);
        return redirect($this->redirectPath());
    }

    // Admin login method
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        } else {
            return $this->sendFailedLoginResponse($request);
        }
    }

    // Override the registration form view
    protected function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    // Override the login form view
    protected function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Other methods can be added here, such as logout, password reset, etc.
}


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Other model logic and relationships can be added here
}


// database/migrations/YYYY_MM_DD_create_admins_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
