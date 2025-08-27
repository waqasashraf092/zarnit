<?php

namespace App\Http\Controllers;

use App\Models\EarlyAccess;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = collect(BlogsController::getBlogs())->take(3);
        return view('home.index', compact('blogs'));
    }

    public function about()
    {
        // return about page view
        return view('home.about');
    }

    public function contact()
    {
        // return contact page view
        return view('home.contact');
    }

    public function earlyAccess()
    {
        // return early access page view
        return view('home.early-access');
    }

    public function earlyAccessSave(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:early_accesses,email',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:100',
            'interests' => 'required|array|min:1',
            'interests.*' => 'string',
        ]);

        EarlyAccess::create($validated);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your early access request has been submitted.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your early access request has been submitted.');
    }

    public function privacyPolicy()
    {
        return view('home.privacy-policy');
    }

    public function termsOfService()
    {
        return view('home.terms-of-service');
    }
}
