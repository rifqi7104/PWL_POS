<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {

        // tambah data user dengan Elequent Model
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345'),
        ];
        UserModel::create($data);

        // coba akses UserModel
        $user = UserModel::all(); // Ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }
}
