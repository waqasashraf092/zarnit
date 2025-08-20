@extends('layout')

@section('title', 'Contact Us')

@section('content')
    @include('shared.page-header', [
        'tag' => 'Terms of Service',
        'title' => 'Terms of Service',
        'sub_title' => 'The rules and guidelines for using our services.',
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
