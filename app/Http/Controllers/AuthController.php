<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\CreateUserRequest;
use App\Interface\AuthInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ResponseClass;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    private AuthInterface $authInterface;

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.auth');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->authInterface->index();

        $user_id = session()->get("user_id");

        return view('users.edit',[
            "page" => 'users.edit',
            "users" => $data,
            "user_id" => $user_id
        ]);
    }

    public function login(Request $request)
    {
        // Valider les informations d'entrée
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion avec les informations d'authentification
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si la connexion réussit, redirige vers le tableau de bord
            return redirect()->route('dashboard');
        }

        // Si la connexion échoue, renvoie à la page de login avec un message d'erreur
        return redirect()->back()->withErrors(['email' => 'Identifiants incorrects']);
    }

     // Affiche le tableau de bord après la connexion
     public function dashboard()
     {
         return view('dashboard');
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            // 'isadmin' => $request->isadmin
        ];

        DB::beginTransaction();

        try {
            $this->authInterface->store($data);
            DB::commit();

            return ResponseClass::success();
        } catch (\Throwable $th) {
            return $th;
            // return ResponseClass::rollback();
        }

    }

    // public function login(Request $request) {

    //     $credentials = $request->only('email', 'password');

    //     $user = User::where("email", $request->email)->first();

    //     if (!$user) {
    //         return back()->withErrors([
    //             'email' => 'Les informations d\'identification fournies sont incorrectes.',
    //         ])->onlyInput('email');
    //     }

    //     try {
    //         if (Hash::check($request->password, $user->password)) {
    //             // $request->session()->put("user_id", $user->id);

    //             return redirect()->route('dashboard');
    //             // return redirect()->intended('dashboard');
    //         }else {
    //             return back()->withErrors([
    //                 'email' => 'Les informations d\'identification fournies sont incorrectes.',
    //             ])->onlyInput('email');
    //         }
    //     } catch (\Throwable $th) {
    //         return back()->withErrors([
    //             'email' => 'Les informations d\'identification fournies sont incorrectes.',
    //         ])->onlyInput('email');
    //     }

    // }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function shoWLogin() {
        return view('auth');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            "username" => $request->name,
        ];

        if (!empty($request->password)) {
            if($request->password == $request->confirmation) {
                $data['password'] = Hash::make($request->password);
            }else {
                return back()->withErrors([
                    'email' => 'Les deux mots de passe ne sont pas identiques.',
                ])->onlyInput('password');
            }
        }

        DB::beginTransaction(); 

        try {
            $this->authInterface->update($data, $id);
            DB::commit();

            return ResponseClass::success();
        } catch (\Throwable $th) {
            return ResponseClass::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkOtpCode()
    {
        return view('dashboard');
    }

    public function pages() {
        return view('dashboard');
    }
}
    