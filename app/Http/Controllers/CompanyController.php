<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function viewAllCompany() {
        $companies = Company::orderBy('created_at','DESC');
        $companies = $companies->get();

        return view('all-companies')->with('companies',$companies);
    }

    function addNewCompany(Request $request) {
        Company::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ]);
        return redirect()->route('company.all');
    }

    function editCompany(Request $request,$id) {
        $company = Company::where('id',$id)->first();

        return view('edit-company')->with('company',$company);
    }

    function updateCompany(Request $request, $id) {
        $company = Company::where('id',$id)->first();

            $company->name = $request->name;
            $company->code = $request->code;
            $company->address = $request->address;
            $company->city = $request->city;
            $company->country = $request->country;
       $company->save();
       
       return redirect()->route('company.all');
    }

    function deleteCompany(Request $request) {
        Company::where('id',$request->company_id)->delete();

        return redirect()->route('company.all');
    }
}
