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
}
