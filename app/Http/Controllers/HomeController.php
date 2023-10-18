<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Igaster\LaravelTheme\Facades\Theme;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $currentUrl = $request->url();

        $currentUrl = parse_url($currentUrl, PHP_URL_HOST);

        $domain_content = User::where('domain', $currentUrl)->first();

        if(!empty($domain_content)){
            // $domain_identity_id = $domain_content->id;

            Theme::set($domain_content->domain_identity_id);
            return view('index', compact('domain_content'));

        } else {
            return response()->json(['message' => 'please input your domain name correctly on dashboard'], 400);
        }

    }

    public function show(Request $request)
    {

        $currentUrl = $request->url();

        $currentUrl = parse_url($currentUrl, PHP_URL_HOST);

        $domain_content = User::where('domain', $currentUrl)->first();

        if(!empty($domain_content)){
            // $domain_identity_id = $domain_content->id;

            Theme::set($domain_content->domain_identity_id);
            return view('show', compact('domain_content'));

        } else {
            return response()->json(['message' => 'please input your domain name correctly on dashboard'], 400);
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
