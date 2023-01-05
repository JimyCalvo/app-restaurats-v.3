<?php
namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credecial = $request->gerCredentials();
        if (!Auth::validate($credecial)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }
        $user=Auth::getProvider()->retrieveByCredentials($credecial);
        Auth::login($user);
        return $this->authenticated($request,$user);

    }

    public function authenticated(Request $request,$user){
        return redirect('/home');
    }
}
