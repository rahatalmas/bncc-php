<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display the list of students, categorized by status.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch students by their status
        $pendingStudents = Student::where('status', 'pending')->get();
        $approvedStudents = Student::where('status', 'approved')->get();

        return view('students.index', compact('pendingStudents', 'approvedStudents'));
    }

    /**
     * Show the form to create a new student.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a new student in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            // Validate the input fields, including ensuring that `student_id` is unique and `image` is required
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'student_id' => 'required|string|max:255|unique:students,student_id',
                'subject' => 'required|string|max:255',
                'birth_year' => 'required|date',
                'admission_year' => 'required|integer',
                'email' => 'required|email|max:255|unique:students,email', // Ensure the email is unique
                'institute_name' => 'required|string|max:255',
                'chest_size' => 'required|numeric',
                'height' => 'required|numeric',
                'weight' => 'required|numeric',
                'blood_group' => 'required|string|max:10',
                'doctors_speech' => 'nullable|string',
                'fathers_name' => 'required|string|max:255',
                'mothers_name' => 'required|string|max:255',
                'nationality' => 'required|string|max:255',
                'religion' => 'required|string|max:255',
                'interested_area' => 'nullable|string|max:255',
                'agree_bncc_rules' => 'required|boolean',
                'purpose_in_life' => 'nullable|string',
                'form_date' => 'required|date',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Make image field required
            ]);
    
            // Handle the image upload if the image is provided
            $imagePath = null;
            if ($request->hasFile('image')) {
                // Store the image
                $imagePath = $request->file('image')->store('students', 'public');
            }
    
            // Create a new student record
            $student = new Student();
            $student->name = $validated['name'];
            $student->semester = $validated['semester'];
            $student->student_id = $validated['student_id'];
            $student->subject = $validated['subject'];
            $student->birth_year = $validated['birth_year'];
            $student->admission_year = $validated['admission_year'];
            $student->email = $validated['email'];
            $student->institute_name = $validated['institute_name'];
            $student->chest_size = $validated['chest_size'];
            $student->height = $validated['height'];
            $student->weight = $validated['weight'];
            $student->blood_group = $validated['blood_group'];
            $student->doctors_speech = $validated['doctors_speech'];
            $student->fathers_name = $validated['fathers_name'];
            $student->mothers_name = $validated['mothers_name'];
            $student->nationality = $validated['nationality'];
            $student->religion = $validated['religion'];
            $student->interested_area = $validated['interested_area'];
            $student->agree_bncc_rules = $validated['agree_bncc_rules'];
            $student->purpose_in_life = $validated['purpose_in_life'];
            $student->form_date = $validated['form_date'];
            $student->image = $imagePath; // Set the image path if it exists
            
            // Save the student record
            $student->save();
    
            // Redirect to the students index page with a success message
            return redirect()->route('students.index')->with('success', 'Student created successfully!');
        
        } catch (\Illuminate\Database\QueryException $ex) {
            // Catch duplicate entry error for `student_id`
            if ($ex->getCode() == 23000) { // Duplicate entry error code
                return redirect()->route('students.index')->with('error', 'Duplicate Student ID. Please enter a unique student ID.');
            }
            // Handle other errors
            return redirect()->route('students.index')->with('error', 'An error occurred while saving the student.');
        }
    }
    

    /**
     * Display the form to edit a student's information.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\View\View
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update a student's information in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Student $student)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'semester' => 'required|string|max:50',
            'student_id' => 'required|string|max:50|unique:students,student_id,' . $student->id,
            'email' => 'required|email|max:255|unique:students,email,' . $student->id,
            'subject' => 'required|string|max:50',
            'birth_year' => 'required|date',
            'admission_year' => 'required|string|max:4',
            'institute_name' => 'required|string|max:255',
            'chest_size' => 'required|integer',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'blood_group' => 'required|string|max:5',
            'doctors_speech' => 'required|string|max:500',
            'fathers_name' => 'required|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'nationality' => 'required|string|max:100',
            'religion' => 'required|string|max:100',
            'interested_area' => 'required|string|max:255',
            'agree_bncc_rules' => 'required|boolean',
            'purpose_in_life' => 'required|string|max:1000',
            'form_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional during update
        ]);

        // If an image is uploaded, store the new image path
        if ($request->hasFile('image')) {
            // Delete old image
            if ($student->image && file_exists(public_path('storage/' . $student->image))) {
                unlink(public_path('storage/' . $student->image));
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        // Update the student record
        $student->update($validated);

        // Redirect to the student index page with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove a student from the database.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Student $student)
    {
        // Delete the student's image from storage if it exists
        if ($student->image && file_exists(public_path('storage/' . $student->image))) {
            unlink(public_path('storage/' . $student->image));
        }

        // Delete the student record
        $student->delete();

        // Redirect to the student index page with a success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }

    /**
     * Approve a student and set 'status' to 'approved'
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve($id)
    {
        // Find the student by ID
        $student = Student::findOrFail($id);
        
        // Update the student's status to 'approved'
        $student->status = 'approved';
        $student->save();

        // Redirect back to the student list with a success message
        return redirect()->route('students.index')->with('success', 'Student approved successfully!');
    }

    /**
     * Display the student's details.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.details', compact('student'));
    }
}
