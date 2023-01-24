<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $data = Employee::get();
        // return $data;
        return view('employee-list', compact('data'));
    }
    public function addEmployee(){
        return view('add-employee');
    }
    public function saveEmployee(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $emp = new Employee();
        $emp->name = $name;
        $emp->email = $email;
        $emp->phone = $phone;
        $emp->address = $address;
        $emp->save();

        return redirect()->back()->with('success', 'Employee Added Successfully');
    }

    public function editEmployee($id) {
        $data = Employee::where('id','=',$id)->first();
        // return $data;
        return view('edit-employee', compact('data'));
    }
    public function updateEmployee(Request $request){
        $request->validate([
            'name' => 'required',
            "email" => 'required|email',
            "phone" => 'required',
            "address" => 'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        Employee::where('id', '=', $id)->update([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
        ]);
        return redirect()->back()->with('success', 'Employee Updated Successfully');
    }
    public function deleteEmployee($id) {
        Employee::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Employee Deleted Successfully');
    }
}
