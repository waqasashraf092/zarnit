@extends('layout')

@section('title', 'Welcome to Your Laravel App')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    <div class="banner-area bg-img position-relative z-1">
        <div class="container mw-1880">
            <div class="row" style="margin-top:96px">
                <div class="col-md-6">
                    <h2 style="font-size: 3.5rem; line-height: 1;" class="mb-4">
                        Empowering creators, builders,
                        <br />
                        <span style="color: hsl(42 91% 62%)">and businesses to reach new heights!</span>
                    </h2>
                    <div class="mb-4">
                        Zarnite is a forward-thinking software company crafting
                        <br />
                        smart, beautiful tools that bridge technology
                        <br />
                        and everyday productivity.
                    </div>
                    <div>
                        <a href="#" class="btn btn-warning me-3">
                            Explore Products
                        </a>
                        <a href="#" class="btn btn-outline-warning">
                            Get Early Access
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div style="position: relative; display: inline-block;">
                        <img class="shadow" src="{{ asset('images/photo-1617042375876-a13e36732a04.png') }}" style="border-radius: 15px; width: 100%; display: block;" alt="image" />
                        <div style="position: absolute; bottom: 25px; left: 25px; width: auto;  color: #fff;">
                            <div class="mb-2" style="font-size: 14px; background-color: hsl(42 91% 62%); border-radius: 20px; padding: 5px 15px; width: fit-content; color: black; ">
                                AI-Powered Tools
                            </div>
                            <div class="mb-2" style="font-size: 1.2rem; line-height: 2rem; font-weight: 700">
                                Experience the Future of Productivity
                            </div>
                            <div style="font-size: 14px;">
                                Intelligent automation and seamless user experiences
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
