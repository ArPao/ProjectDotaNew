<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Validator;
use App\Models\UserFacebook;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use App\Http\Controllers;
use Guzzle\Service\Builder;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;

class FacebookController extends Controller
{

    public function facebooklogin()
    {
        return Socialite::with('facebook')->redirect();

    }

    public function Callback()
    {
        $user = Socialite::with('facebook')->user();

        session::put("FacebookName", $user->getName());
        session::put("FacebookAvatar", $user->getAvatar());
        session::put("FacebookId", $user->getID());
        session::put("FacebookEmail", $user->getEmail());


        $db = UserFacebook::where('idfacebook', $user->getId())->first();
        if ($db) {

            DB::table('users_facebook')
                ->where('users_facebook.idfacebook', '=', $user->getId())
                ->get();

            return redirect('/');

        } else {
            $facebook = new UserFacebook();
            $facebook->idfacebook = $user->getId();
            $facebook->username = $user->getId();
            $facebook->name = $user->getName();
            $facebook->social = 'facebook';
            $facebook->email = $user->getEmail();
            $facebook->avatar = $user->getAvatar();

            $facebook->save();

            DB::table('users_facebook')
                ->where('users_facebook.idfacebook', '=', $user->getId())
                ->get();

            return redirect('/');

        }
    }

    public function sendreques()
    {
        if (!session()->get('FacebookName')) {

            abort(402);

        } else {
            DB::table('users_facebook')
                ->where('users_facebook.idfacebook', '=', session()->get('FacebookId'))
                ->get();

            return redirect('formreques'.session()->get('FacebookName'));
        }
    }

    public function  checkloginfacebook()
    {
        Socialite::with('facebook')->redirect('callbackchecklogin');

    }

    public function  logoutfacebook()
    {
        if ( session()->get('FacebookName')) {
            session()->forget('FacebookName');
            return redirect('/');

        }
    }


}
