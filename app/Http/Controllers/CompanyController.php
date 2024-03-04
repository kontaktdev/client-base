<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Retrieve the simple search query from the request
        $searchQuery = $request->input('simple_search');

        if ($searchQuery) {
            $companies = Company::where('name', 'like', '%' . $searchQuery . '%')
                ->orWhere('vat', 'like', '%' . $searchQuery . '%')
                ->orWhere('city', 'like', '%' . $searchQuery . '%')
                ->orWhere('country', 'like', '%' . $searchQuery . '%')
                ->paginate(10);
        } else {
            $companies = Company::withCount('employees')->paginate(10);
        }
        
        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     * @Request GET companies/{company_id}/edit
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:100',
            'vat' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:50',
            'zipcode' => 'nullable|string|max:15',
            'country' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
            'mobile' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:50',
            'website' => 'nullable|url|max:100',
            'description' => 'nullable|string',
        ]);

        $company->update($attributes);

        return redirect()->route('companies.index')->with('success', 'Company details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
