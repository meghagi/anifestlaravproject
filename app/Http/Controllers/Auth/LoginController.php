<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
  
     */
//     public function authenticate()
// {
//     if (Auth::user()->role == 'admin') {
//         return redirect()->route('admin/dashboard')->with('status', 'Welcome to Admin Dashboard');
//     } else {
//         return redirect()->route('dashboard')->with('status', 'Welcome to user Dashboard');
//     }
// }
// public function authenticate(Request $request)
// {
//     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//         $user = Auth::user();

//         if ($user->role == 'admin') {
//             return redirect()->route('/admindashboard');
//         } else {
//             return redirect()->route('/dashboard');
//         }
//     }

//     return back()->withErrors(['email' => 'Invalid credentials']);
// }

    //protected $redirectTo = '/';
   protected $redirectTo = '/dashboard';
 
  protected $redirectTo1 = '/admindashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // protected $redirectTo = '/'; // Default redirect path

// protected function redirectTo() {
//     if (Auth::user()->Role === 'admin') {
//         return redirect()->route('/admindashboard');
//     } else if (Auth::user()->Role === 'user') {
//         return redirect()->route('/dashboard');
//     } else {
//         return '/';
//     }
// }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated($request, $user)
    {
        // Check if the authenticated user is an admin
        if ($user->isAdmin()) {
            return redirect()->intended('/admindashboard');
        }

        return redirect()->intended('/dashboard');
    }
}
   

