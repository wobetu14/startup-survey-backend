<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\CompniesController;
use App\Models\Company;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies=Company::all();
        return response()->json(
            [
                'companies'=>$companies,
            ]
        );
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
   
        $create_company = Company::create([
            'company_name'=>$request->input('company_name'),
            'company_description'=>$request->input('company_description'),
            'company_ceo'=>$request->input('company_ceo'),
            'number_of_employees'=>$request->input('number_of_employees'),
            'city'=>$request->input('city'),
            'business_sector'=>$request->input('business_sector'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'website'=>$request->input('website'),
            'have_inhouse_product'=>$request->input('have_inhouse_product'),
            'products_list_and_description'=>$request->input('products_list_and_description'),
            'have_customer_site_deployed'=>$request->input('have_customer_site_deployed'),
            'customer_site_list'=>$request->input('customer_site_list'),
            'list_of_challenges'=>$request->input('list_of_challenges'),
            'have_opensource_product'=>$request->input('have_opensource_product'),
            'list_of_opensource_products'=>$request->input('list_of_opensource_products'),
        ]);

        if($create_company){
            return response()->json(
                ['success'=>'Your application has been submitted successfully.']
            );
        }

        else{
            return response()->json([
                'error'=>'Oops! Something went wrong in processing your application. Please try again.'
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
