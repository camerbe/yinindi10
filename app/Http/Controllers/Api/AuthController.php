<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,'password'=>$request->password])){
            return response()->json([
                'sucess'=>true,
                'token' =>  Auth::user(),
                'message' => "Utilisateur connecté avec succès",
            ], Response::HTTP_OK);

        }
        else{
            return response()->json([
                'sucess'=>false,
                'message' => "Utilisateur non autorisé",
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
    public function logout()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
