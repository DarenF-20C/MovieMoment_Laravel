<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Schedule;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(! auth()->attempt($credentials)){
            return redirect()->route('login')
                ->with('error','Email-Address or Password are wrong.');
        }

        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin.home');
        }

        $dateToday = Carbon::now()->format('y-m-d');
        $schedule=Schedule::all()
        ->where('date','>=',$dateToday)
        ->first();
        if(!$schedule){
            Schedule::create(['date'=>Carbon::now()->format('y-m-d')]);
            // User::all()->update(['dailyLimit' => 0]);
            $user = DB::table('users')->where('dailyLimit', '!=', 0)->update(array('dailyLimit' => 0));
        }

        return redirect()->back();
    }
}
