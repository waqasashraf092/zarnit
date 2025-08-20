@extends('layout')

@section('title', 'Contact Us')

@section('content')
    @include('shared.page-header', [
        'tag' => 'Privacy Policy',
        'title' => 'Privacy Policy',
        'sub_title' => 'Committed to keeping your information private and secure.',
    ])

    <section class="bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row g-4 mt-2">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
@endsection
