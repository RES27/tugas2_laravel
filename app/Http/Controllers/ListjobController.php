<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListjobController extends Controller
{
    public function getJob()
    {
        $data = [
            [
                'name' => 'Arsitek',
                'Deskripsi' => 'Seorang profesional yang bertugas untuk merancang desain serta unsur fungsional sebuah bangunan',
                'img' => 'https://www.umn.ac.id/wp-content/uploads/2022/10/Beda-Arsitek-dan-Desain-Interior.jpg',
            ],
            [
                'name' => 'Programer',
                'Deskripsi' => 'Mengembangkan sebuah aplikasi atau sistem pada komputer untuk membuat suatu perangkat lunak (software) maupun perangkat keras (hardware) dengan menggunakan bahasa pemrograman',
                'img' => 'https://itbox.id/wp-content/uploads/2023/01/perbedaan-programmer-dan-developer.jpeg',
            ],
            [
                'name' => 'Guru',
                'Deskripsi' => 'Merupakan tenaga profesional yang memiliki tugas utama untuk mendidik, membimbing, mengajar, mengarahkan, menilai, melatih dan mengevaluasi para peserta didik untuk jalur pendidikan formal pada pendidikan anak usia dini, pendidikan dasar, hingga pendidikan menengah.',
                'img' => 'https://cdn-web.ruangguru.com/landing-pages/assets/hs/Imported_Blog_Media/guru-theodysseyonline-1.jpg',
            ]
        ];

        return view('data-produk.index', ['data' => $data]);
    }
}
