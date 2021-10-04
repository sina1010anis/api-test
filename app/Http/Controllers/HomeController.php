<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function doLoginPhone(Request $request)
    {
        return $request->phone;
        $data = $request->all();
        $this->validate($request, [
            'phone' => 'required|exists:users',
        ]);
        $user = User::where('phone', $request->input('phone'))->first();

        $token = Token::create([
            'user_id' => $user->id
        ]);
        $rememberMe  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        if ($token->sendCode()) {
            session()->put("code_id", $token->id);
            session()->put("user_id", $user->id);
            session()->put("remember", $rememberMe);

            return redirect()->route('verify');
        }

        $token->delete();
        return redirect()->route('login')->withErrors([
            "Unable to send verification code"
        ]);
    }
}
