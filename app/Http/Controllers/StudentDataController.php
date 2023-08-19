<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cohort;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;

class StudentDataController extends Controller
{
    public function showImportForm()
    {
        return view('import-students');
    }

    public function importStudents(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('excel_file');

        Excel::import(new StudentsImport, $file);

        return redirect()->route('import-students')->with('success', 'Students imported successfully');
    }

    public function showEnrollForm()
    {
        $students = User::all();
        $cohorts = Cohort::all();

        return view('enroll-students', compact('students', 'cohorts'));
    }

    public function enrollStudents(Request $request)
    {

        $request->validate([
            'student_id' => 'required',
            'cohort_names' => 'required|array',
        ]);

        $studentId = $request->input('student_id');
        $cohortNames = $request->input('cohort_names');

        $student = User::find($studentId);
        if ($student) {
            foreach ($cohortNames as $cohortName) {
                $cohort = Cohort::firstOrCreate(['name' => $cohortName]);
                $student->cohorts()->attach($cohort->id);
            }

            $this->sendConfirmationEmail($student);

            return redirect()->route('enroll-students')->with('success', 'Students enrolled successfully');
        } else {
            return redirect()->route('enroll-students')->with('error', 'Student not found');
        }
    }

    public function viewStudentData()
    {
        $students = User::with('cohorts')->paginate(10);

        return view('view-student-data', compact('students'));
    }

    private function sendConfirmationEmail($student)
    {
        Mail::to($student->email)->send(new RegistrationConfirmation());
    }
}
