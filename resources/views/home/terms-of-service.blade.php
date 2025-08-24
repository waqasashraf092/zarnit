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
                    <small class="text-center">{{ __('l.last_updated') }}</small>
                    <h1 class="display-6">{{ __('l.introduction_title') }}</h1>
                    <p>{{ __('l.introduction_text') }}</p>

                    <h1 class="display-6">{{ __('l.eligibility_title') }}</h1>
                    <ul>
                        <li>{{ __('l.eligibility_age') }}</li>
                        <li>{{ __('l.eligibility_organization') }}</li>
                    </ul>

                    <h1 class="display-6">{{ __('l.services_title') }}</h1>
                    <p>{{ __('l.services_text') }}</p>

                    <h1 class="display-6">{{ __('l.accounts_title') }}</h1>
                    <ul>
                        <li>{{ __('l.accounts_access') }}</li>
                        <li>{{ __('l.accounts_responsibility') }}</li>
                    </ul>

                    <h1 class="display-6">{{ __('l.acceptable_use_title') }}</h1>
                    <p>{{ __('l.acceptable_use_text') }}</p>
                    <ul>
                        <li>{{ __('l.acceptable_use_unlawful') }}</li>
                        <li>{{ __('l.acceptable_use_reverse_engineer') }}</li>
                        <li>{{ __('l.acceptable_use_upload') }}</li>
                        <li>{{ __('l.acceptable_use_interfere') }}</li>
                    </ul>

                    <h1 class="display-6">{{ __('l.intellectual_property_title') }}</h1>
                    <ul>
                        <li>{{ __('l.intellectual_property_ownership') }}</li>
                        <li>{{ __('l.intellectual_property_license') }}</li>
                    </ul>

                    <h1 class="display-6">{{ __('l.ai_outputs_title') }}</h1>
                    <ul>
                        <li>{{ __('l.ai_outputs_accuracy') }}</li>
                        <li>{{ __('l.ai_outputs_liability') }}</li>
                    </ul>

                    <h1 class="display-6">{{ __('l.termination_title') }}</h1>
                    <p>{{ __('l.termination_text') }}</p>

                    <h1 class="display-6">{{ __('l.disclaimers_title') }}</h1>
                    <p>{{ __('l.disclaimers_text') }}</p>

                    <h1 class="display-6">{{ __('l.limitation_liability_title') }}</h1>
                    <ul>
                        <li>{{ __('l.limitation_liability_damages') }}</li>
                        <li>{{ __('l.limitation_liability_amount') }}</li>
                    </ul>

                    <h1 class="display-6">{{ __('l.indemnification_title') }}</h1>
                    <p>{{ __('l.indemnification_text') }}</p>

                    <h1 class="display-6">{{ __('l.governing_law_title') }}</h1>
                    <ul>
                        <li>{{ __('l.governing_law_delaware') }}</li>
                        <li>{{ __('l.governing_law_arbitration') }}</li>
                        <li>{{ __('l.governing_law_class_action') }}</li>
                        <li>{{ __('l.governing_law_eu') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
