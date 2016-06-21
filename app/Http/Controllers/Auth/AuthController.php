<?php

namespace App\Http\Controllers\Auth;

use App\Models\InviteCode;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use ThrottlesLogins;

	public function __construct()
	{
		parent::__construct();

		$this->middleware('guest', ['except' => ['getLogout']]);
	}

	public function getLogin()
	{
		return view('auth.login');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email'    => 'required|email',
			'password' => 'required',
		]);
		$credentials = $request->only('email', 'password');

		if (\Auth::attempt($credentials, $request->has('remember'))) {
			return redirect()->route('index');
		}

		return redirect()->back()->withInput($request->only('email', 'remember'));
	}

	public function getLogout()
	{
		\Auth::logout();

		return redirect()->route('index');
	}

	public function getRegister()
	{
		return view('auth.register');
	}

	public function postRegister(Request $request)
	{
		// register validator
		$this->validator($request->all());

		// check invite code
		$inviteCode = InviteCode::where('invite_code', $request->get('invite_code'))->where('active', false)->first();
		if (is_null($inviteCode)) {
			return redirect()->back()->withInput($request->all())->withErrors('Invite Code Validate Failed');
		}

		// create user
		$input             = $request->except('invite_code', 'password');
		$input['token_id'] = $inviteCode->id;
		$input['password'] = \Hash::make($request->get('password'));

		try {
			\DB::transaction(function () use ($input, $inviteCode) {
				$existUser = User::withTrashed()->where('email', $input['email'])->first();
				if (! is_null($existUser)) {
					if ($existUser->trashed()) {
						$existUser->restore();
						$existUser->invite_code_id = $inviteCode->id;
						$existUser->save();
						$user = $existUser;
					}
					else {
						throw new \Exception('User with email ' . $input['email'] . ' already exist!');
					}
				}
				else {
					$user = User::create($input);
				}

				$inviteCode->user_id = $user->id;
				$inviteCode->active  = true;
				$inviteCode->save();

				\Auth::login($user);
			});
		} catch (\Exception $e) {
			return redirect()->back()->withInput($request->all())->withErrors('Register Failed');
		}

		return redirect()->route('index');
	}


	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name'        => 'required|max:255',
			'email'       => 'required|email|max:255|unique:users',
			'password'    => 'required|min:6|confirmed',
			'invite_code' => 'required',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array $data
	 * @return User
	 */
	protected function create(array $data)
	{
		return User::create([
			'name'           => $data['name'],
			'email'          => $data['email'],
			'password'       => bcrypt($data['password']),
			'invite_code_id' => $data['invite_code_id'],
		]);
	}
}
