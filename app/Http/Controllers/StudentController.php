<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
 {
 return view('student.create');
 }

 public function store(Request $request)
 {
 $validateData = $request->validate([
 'no' => 'required|size:8,unique:students',
 'nama' => 'required|min:3|max:50',
 'jenis_kelamin' => 'required|in:P,L',
 'jurusan' => 'required',
 'alamat' => '',
 ]);
 $mahasiswa = new Student();
 $mahasiswa->no = $validateData['no'];
 $mahasiswa->name = $validateData['nama'];
 $mahasiswa->gender = $validateData['jenis_kelamin'];
 $mahasiswa->departement = $validateData['jurusan'];
 $mahasiswa->address = $validateData['alamat'];
 $mahasiswa->save();
 $request->session()->flash('pesan','Penambahan data berhasil');
 return redirect()->route('student.index');
 }

 public function index()
 {
 $mahasiswas = Student::all();
 return view('student.index',['students' => $mahasiswas]);
 }

  public function show($student_id)
 {
 $result = Student::findOrFail($student_id);
 return view('student.show',['student' => $result]);
 }

}
