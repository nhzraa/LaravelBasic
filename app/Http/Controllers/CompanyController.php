<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;


class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view('companies.index')->with('companies', $company);
    }
    
    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'nullable',
            'logo' => 'nullable',
            'website' => 'nullable',
        );
        $validator = Validator::make($request->all(), $rules);

            // process the login
        if ($validator->fails()) 
        {
            return redirect()->route('company/create')->withErrors($validator)->withInput();
        } 
        else {
            // store
            $company = new Company;
            $company->name = $request->input('name');
            $company->email = $request->input('email');
            $company->logo = $request->input('logo');
            $company->website = $request->input('website');

            $company->save();

            return redirect()->route('companies.index')->with('success', 'Project created successfully');
        }
    }

    public function show($id)
    {
       $company = Company::find($id);
       return view('companies.show')->with('company', $company);
    }

    public function edit($id)
    {
       $company = Company::find($id);
       return view('companies.edit')->with('company',$company);
    }

    public function update(Request $request, $id)
    {
                
        $rules = array(
            'name' => 'required',
            'email' => 'nullable',
            'logo' => 'nullable',
            'website' => 'nullable'
        );
        $validator = Validator::make($request->all(), $rules);

            // process the login
        if ($validator->fails()) 
        {
            return redirect()->route('admin/company/' . $id )->withErrors($validator)->withInput();
        } 
        else {
            // store
            $company = Company::find($id);
            $company->name = $request->input('name');
            $company->email = $request->input('email');
            $company->logo = $request->input('logo');
            $company->website = $request->input('website');

            $company->save();

            return redirect()->route('companies.index')->with('success', 'Project updated successfully');
        }
    }

    public function destroy($id)
    {
        Company::where('id',$id)->delete();
        return redirect()->route('companies.index')->with('success', 'Project deleted successfully');
    }

}