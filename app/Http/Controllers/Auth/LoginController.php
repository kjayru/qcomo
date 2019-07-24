<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    use AuthenticatesUsers {
        attemptLogin as attemptLoginAtAuthenticatesUsers;
    }
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

    //protected $redirectTo = '/admin';
    protected function authenticated(Request $request, $user)
    {
        
        switch ($user->roles[0]->slug) {
            case 'admin':
                return redirect('/admin');
                break;
            case 'franquicia':
                return redirect('/admin');
                break;
           
            case 'local':
                return redirect('/admin');
            break;
            case 'mozo':
                return redirect('/admin');
            break;
            case 'caja':
                return redirect('/admin');
            break;
        }

    }

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function username()
    {
        return config('auth.providers.users.field', 'email');
    }

   
    protected function attemptLogin(Request $request)
    {
        if ($this->username() === 'email') {
            return $this->attemptLoginAtAuthenticatesUsers($request);
        }
        if (! $this->attemptLoginAtAuthenticatesUsers($request)) {
            return $this->attempLoginUsingUsernameAsAnEmail($request);
        }
        return false;
    }

    protected function attempLoginUsingUsernameAsAnEmail(Request $request)
    {
        return $this->guard()->attempt(
            ['email' => $request->input('username'), 'password' => $request->input('password')],
            $request->has('remember')
        );
    }

}
