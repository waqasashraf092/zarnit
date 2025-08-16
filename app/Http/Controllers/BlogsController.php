<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    private $blogs;

    function __construct()
    {
        $this->blogs = [
            [
                'id' => '1',
                'title' => 'The Future of AI in Everyday Software',
                'description' => 'How intelligent automation is transforming the way we interact with technology and enhancing productivity.',
                'image' => asset('images/news-1.jpg'),
                'tags' => ['Technology'],
                'reading_time' => '5 min read',
                'created_at' => 'Mar 15, 2025',
            ],
            [
                'id' => '2',
                'title' => 'Designing for the Next Generation',
                'description' => 'The principles behind creating intuitive, beautiful interfaces that stand the test of time.',
                'image' => asset('images/news-2.jpg'),
                'tags' => ['Design'],
                'reading_time' => '4 min read',
                'created_at' => 'Mar 8, 2025',
            ],
            [
                'id' => '3',
                'title' => 'Building Scalable AI Solutions',
                'description' => 'How we approach creating flexible, powerful AI systems that grow with your needs.',
                'image' => asset('images/news-3.jpg'),
                'tags' => ['Development'],
                'reading_time' => '6 min read',
                'created_at' => 'Mar 1, 2025',
            ],
            [
                'id' => '4',
                'title' => 'Productivity Redefined: AI as Your Co-Pilot',
                'description' => 'Exploring how AI assistants are transforming personal productivity and work management.',
                'image' => asset('images/news-1.jpg'),
                'tags' => ['Productivity'],
                'reading_time' => '7 min read',
                'created_at' => 'Feb 22, 2025',
            ],
            [
                'id' => '5',
                'title' => 'The Near Future of Human-Computer Interaction',
                'description' => 'Predicting how we will interact with our devices in the coming years, beyond touch and voice.',
                'image' => asset('images/news-2.jpg'),
                'tags' => ['Future Tech'],
                'reading_time' => '8 min read',
                'created_at' => 'Feb 15, 2025',
            ],
            [
                'id' => '6',
                'title' => 'The Near Future of Human-Computer Interaction',
                'description' => 'How we are approaching data privacy and security in our AI-powered applications.',
                'image' => asset('images/news-3.jpg'),
                'tags' => ['Security'],
                'reading_time' => '5 min read',
                'created_at' => 'Feb 8, 2025',
            ],
        ];
    }

    public function index()
    {
        $blogs = $this->blogs;
        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = collect($this->blogs)->where('id', $id)->first();
        return view('blogs.show', compact('blog'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
