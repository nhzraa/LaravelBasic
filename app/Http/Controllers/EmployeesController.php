<?php

namespace App\Http\Controllers;
use App\Models\Employees;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;
use DB;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        
        $companies = DB::table('companies')->pluck('name', 'id');
        
        foreach($companies as $company)
        {
           
        }

        return view('employees.index', compact('companies',$companies))->with('employees', $employees);
    }
    
    public function create()
    {
        $companies = DB::table('companies')->pluck('name', 'id');
        
        foreach($companies as $company)
        {
           
        }

        return view('employees.create', compact('companies',$companies));
    }

    public function store(Request $request)
    {
        $rules = array(
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'nullable',
            'phone' => 'nullable',
            'company_id' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

            // process the login
        if ($validator->fails()) 
        {
            return redirect()->route('employees/create')->withErrors($validator)->withInput();
        } 
        else {
            // store
            $employees = new Employees;
            $employees->fname = $request->input('fname');
            $employees->lname = $request->input('lname');
            $employees->email = $request->input('email');
            $employees->phone = $request->input('phone');
            $employees->company_id = $request->input('company_id');

            $employees->save();

            return redirect()->route('employees.index')->with('success', 'Project created successfully');
        }
    }

    public function show($id)
    {
       $employees = Employees::find($id);
       
       return view('employees.show')->with('employees', $employees);
    }

    public function edit($id)
    {
       $employees = Employees::find($id);
       
       return view('employees.edit')->with('employees',$employees);
    }

    public function update(Request $request, $id)
    {
                
        $rules = array(
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'nullable',
            'phone' => 'nullable',
        );
        $validator = Validator::make($request->all(), $rules);

            // process the login
        if ($validator->fails()) 
        {
            return redirect()->route('admin/employees/' . $id )->withErrors($validator)->withInput();
        } 
        else {
            // store
            $employees = Employees::find($id);
            $employees->fname = $request->input('fname');
            $employees->lname = $request->input('lname');
            $employees->email = $request->input('email');
            $employees->phone = $request->input('phone');

            $employees->save();

            return redirect()->route('employees.index')->with('success', 'Project updated successfully');
        }
    }

    public function destroy($id)
    {
        Employees::where('id',$id)->delete();
        return redirect()->route('employees.index')->with('success', 'Project deleted successfully');
    }
}
