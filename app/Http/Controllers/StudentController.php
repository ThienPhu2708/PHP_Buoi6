<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private function staticStudents(): array
    {
        return [
            ['name' => 'Nguyễn An', 'age' => 19, 'email' => 'an@huit.edu.vn', 'gender' => 'male'],
            ['name' => 'Trần Bình', 'age' => 18, 'email' => 'binh@huit.edu.vn', 'gender' => 'male'],
            ['name' => 'Lê Chi', 'age' => 17, 'email' => 'chi@huit.edu.vn', 'gender' => 'female'],
            ['name' => 'Phạm Dũng', 'age' => 20, 'email' => 'dung@huit.edu.vn', 'gender' => 'male'],
            ['name' => 'Đỗ Em', 'age' => 21, 'email' => 'em@huit.edu.vn', 'gender' => 'female'],
        ];
    }

    // BT03 + BT05: 2 tab (?source=array|db)
    public function index(Request $request)
    {
        $source = $request->query('source', 'array') === 'db' ? 'db' : 'array';
        $students = $this->staticStudents();
        $db = Student::orderBy('id', 'desc')->paginate(5)->appends(['source' => 'db']);

        return view('students.index', compact('students', 'db', 'source'));
    }

    // BT04 + BT06
    public function indexDb(Request $request)
    {
        $gender = $request->query('gender'); // 'male' | 'female' | null
        $query = Student::query()->orderBy('id', 'desc');

        if ($gender) {
            $query->where('gender', $gender);
        }

        $students = $query->paginate(5)->appends(compact('gender'));

        return view('students.index_db', compact('students', 'gender'));
    }

    // BT05: trang so sánh
    public function combined(Request $request)
    {
        $static = $this->staticStudents();
        $db = Student::orderBy('id', 'desc')->paginate(5)->appends(['source' => 'db']);
        $source = $request->query('source', 'db');

        return view('students.combined', compact('static', 'db', 'source'));
    }

    // BT08
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:students,email'],
            'age' => ['nullable', 'integer', 'min:16'],
            'gender' => ['required', 'in:male,female'],
            'class_name' => ['nullable', 'string', 'max:255'],
        ]);

        Student::create($data);

        return redirect('/students/db')->with('success', 'Tạo mới thành công');
    }
}
