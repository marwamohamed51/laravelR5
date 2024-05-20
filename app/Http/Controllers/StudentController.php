<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    private $columns = [
        'studentName',
        'age',
        // 'created_at'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentList = Student::get();
        return view('studentList', compact('studentList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'studentName' => 'required|max:100|min:3',
            'age'=>'required|integer|min:1|max:99'
        ]);
        Student::create($data);
        return redirect('studentList')->with('success', 'New student added successfully.');

        // $student = new Student();
        // $student->studentName = $request->studentName;
        // $student->age =$request->age;
        // $student->save();
        // return view('studentResult');
        // return 'Data inserted successfully :);
        // Student::create($request->only($this->columns));
        // return redirect('studentList');

        //query builder
        // DB::table('students')->insert([
        //     'studentName' => $request['studentName'],
        //     'age' => $request['age'],
        //     // Add more fields if necessary
        // ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = DB::table('Students')->where('id', $id)->first();
        return view('showStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'studentName' => 'required|max:100|min:3',
            'age'=>'required|integer|min:1|max:99'
        ]);
        Student::where('id',$id)->update($data);
        return redirect('studentList')->with('success', 'Student Data updated successfully.');

        // query builder
        // $studentData = $request->only($this->columns); // Assuming $this->columns contains the columns you want to update
        // DB::table('students')->where('id', $id)->update($studentData);
        // return redirect('studentList')->with('success', 'Student Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Student::where('id', $id)->delete();
        return redirect('studentList')->with('success', 'Student Data deleted successfully.');
    }

    /**
     * trash
     */
    public function trash()
    {
        $trashed = Student::onlyTrashed()->get();
        // return view('trashStudent', compact('trashed'));
        // DB::table('students')->where('id', $id)->delete();
        return view('trashStudent', compact('trashed'));
    }

    /**
     * restore
     */
    public function restore(string $id)
    {
        Student::where('id', $id)->restore();
        return redirect('studentList')->with('success', 'Student Data restored successfully.');
    }

    /**
     * force delete
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Student::where('id', $id)->forceDelete();
        return redirect('studentList')->with('success', 'Student Data Deleted successfully.');
    }

}
