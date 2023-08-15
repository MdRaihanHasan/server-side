<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //find id of domain from users table
        // $domain = User::all();

        // foreach ($domain as $user) {
        //     $domain = $user->domain;
        // }



        $currentUrl = $request->url();

        $currentUrl = parse_url($currentUrl, PHP_URL_HOST);

        $domain_content = User::where('domain', $currentUrl)->first();

        if(!empty($domain_content)){
            $domain_identity_id = $domain_content->id;
            return view('index', compact('domain_content'));
            
        } else {

            return response()->json(['message' => 'URL does not match'], 400);
        }

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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
