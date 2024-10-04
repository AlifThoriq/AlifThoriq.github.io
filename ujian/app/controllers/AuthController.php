<?php

namespace App\Controllers;

use App\Models\User;

class AuthController {

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Simpan data pengguna
            User::create([
                'nama' => $nama,
                'username' => $username,
                'email' => $email,
                'password' => $password
            ]);

            echo 'Registrasi berhasil!';
        } else {
            require_once __DIR__ . '/../../resources/views/register.php';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $identifier = $_POST['identifier'];
            $password = $_POST['password'];

            // Cari pengguna berdasarkan username atau email
            $user = User::where('username', $identifier)
                        ->orWhere('email', $identifier)
                        ->first();

            if ($user && password_verify($password, $user->password)) {
                echo 'Login berhasil!';
                // Redirect ke home
                header("Location: home2.php");
                exit();
            } else {
                echo 'Login gagal!';
            }
        } else {
            require_once __DIR__ . '/../../resources/views/login.php';
        }
    }
}