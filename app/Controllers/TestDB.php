<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestDB extends Controller
{
    public function index()
    {
        $db = Database::connect();

        if ($db->connID) {
            echo "✅ Koneksi database berhasil!";
        } else {
            echo "❌ Gagal koneksi ke database.";
        }
    }
}
