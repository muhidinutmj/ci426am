<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\Student();
        $students = $model->findAll();
        return view('students/index', ['students' => $students]);
    }

    public function show($id)
    {
        $model = new \App\Models\Student();
        $student = $model->find($id);
        if (!$student) {
            return redirect()->to('/students')->with('error', 'Mahasiswa tidak ditemukan');
        }
        return view('students/show', ['student' => $student]);
    }

    public function create()
    {
        return view('students/create');
    }
}
