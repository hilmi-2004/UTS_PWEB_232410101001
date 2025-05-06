<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use App\Models\Produk;
use App\Models\Profile;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (UserData::checkCredentials($username, $password)) {
            session(['username' => $username]);
            return redirect('/dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Login gagal! Username atau password salah.');
        }
    }

    public function dashboard()
    {
        $username = session('username');
        $produk = array_slice(Produk::getAll(), 0, 6); 

        return view('dashboard', compact('username', 'produk'));
    }

    public function profile()
    {
        $username = session('username'); 
        $data = Profile::getDataByUsername($username);
    
        if (!$data) {
            abort(404, 'User tidak ditemukan');
        }
    
        return view('profile', $data);
    }
    
    public function pengelolaan()
    {
        $username = session('username', 'Guest');
        $dataProduk = Produk::getAll();

        return view('pengelolaan', compact('dataProduk', 'username'));
    }

    public function index()
    {
        $dataProduk = Produk::all();
        dd($dataProduk); 
        return view('pengelolaan', compact('dataProduk'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }
}
