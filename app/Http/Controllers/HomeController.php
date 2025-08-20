<?php

namespace App\Http\Controllers;

use App\Models\EarlyAccess;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function products()
    {
        $products = [
            [
                'name' => 'Zarn',
                'description' => 'Zarn is our flagship AI productivity suite designed to transform how you work. By combining intelligent automation with intuitive interfaces, Zarn helps you eliminate repetitive tasks, organize information efficiently, and focus on high-value work.',
                'features' => [
                    'Smart automation of repetitive tasks and workflows',
                    'Seamless integration with your existing tools and platforms',
                    'AI that learns from your behavior to provide personalized suggestions',
                    'Clean, intuitive interface designed for focus and efficiency',
                ],
                'tags' => ['Productivity', 'AI Assistant', 'Automation'],
                'release' => 'Coming Soon',
                'image' => asset('images/image_2.avif')
            ],
            [
                'name' => 'Reolyy',
                'description' => 'Reolyy leverages cutting-edge AI to revolutionize video editing. From automatic color correction to smart content analysis, Reolyy helps creators produce professional-quality videos in a fraction of the time.',
                'features' => [
                    'AI-powered editing suggestions and automatic scene detection',
                    'Intelligent enhancement of lighting, color, and audio quality',
                    'Professional templates and styles for quick production',
                    'Streamlined export and sharing capabilities',
                ],
                'tags' => ['Video Editing', 'AI Enhancement', 'Creative Tools'],
                'release' => 'Coming Soon',
                'image' => asset('images/image_3.avif')
            ]
        ];

        return view('home.products', compact('products'));
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

    function privacyPolicy()
    {
        return view('home.privacy-policy');
    }

    function termsOfService()
    {
        return view('home.terms-of-service');
    }
}
