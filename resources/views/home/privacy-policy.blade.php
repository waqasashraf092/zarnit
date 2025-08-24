@extends('layout')

@section('title', __('l.privacy_title'))

@section('content')
    @include('shared.page-header', [
        'tag' => __('l.privacy_tag'),
        'title' => __('l.privacy_title'),
        'sub_title' => __('l.privacy_sub_title'),
    ])

    <section class="bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row g-4 mt-2">
                <div class="col-12">
                    <div class="container">
                        <div class="row g-4 mt-2">
                            <div class="col-12">
                                <small class="text-center">{{ __('l.last_updated') }}</small>
                                <h1 class="display-6">{{ __('l.privacy_introduction_title') }}</h1>
                                <p>{{ __('l.privacy_introduction_text') }}</p>

                                <h1 class="display-6">{{ __('l.information_collect_title') }}</h1>
                                <ul>
                                    <li>{{ __('l.information_collect_account') }}</li>
                                    <li>{{ __('l.information_collect_usage') }}</li>
                                    <li>{{ __('l.information_collect_content') }}</li>
                                    <li>{{ __('l.information_collect_technical') }}</li>
                                    <li>{{ __('l.information_collect_cookies') }}</li>
                                </ul>

                                <h1 class="display-6">{{ __('l.how_use_data_title') }}</h1>
                                <ul>
                                    <li>{{ __('l.how_use_data_provide') }}</li>
                                    <li>{{ __('l.how_use_data_personalize') }}</li>
                                    <li>{{ __('l.how_use_data_security') }}</li>
                                    <li>{{ __('l.how_use_data_compliance') }}</li>
                                </ul>
                                <p>{{ __('l.gdpr_legal_bases_title') }}</p>
                                <ul>
                                    <li>{{ __('l.gdpr_legal_bases_contractual') }}</li>
                                    <li>{{ __('l.gdpr_legal_bases_consent') }}</li>
                                    <li>{{ __('l.gdpr_legal_bases_interests') }}</li>
                                    <li>{{ __('l.gdpr_legal_bases_obligations') }}</li>
                                </ul>

                                <h1 class="display-6">{{ __('l.sharing_data_title') }}</h1>
                                <ul>
                                    <li>{{ __('l.sharing_data_providers') }}</li>
                                    <li>{{ __('l.sharing_data_authorities') }}</li>
                                    <li>{{ __('l.sharing_data_transfers') }}</li>
                                </ul>
                                <p>{{ __('l.sharing_data_no_sell') }}</p>

                                <h1 class="display-6">{{ __('l.ai_data_usage_title') }}</h1>
                                <ul>
                                    <li>{{ __('l.ai_data_usage_storage') }}</li>
                                    <li>{{ __('l.ai_data_usage_sensitive') }}</li>
                                    <li>{{ __('l.ai_data_usage_gdpr') }}</li>
                                    <li>{{ __('l.ai_data_usage_ccpa') }}</li>
                                </ul>

                                <h1 class="display-6">{{ __('l.security_title') }}</h1>
                                <p>{{ __('l.security_text') }}</p>

                                <h1 class="display-6">{{ __('l.retention_title') }}</h1>
                                <p>{{ __('l.retention_text') }}</p>

                                <h1 class="display-6">{{ __('l.children_title') }}</h1>
                                <p>{{ __('l.children_text') }}</p>

                                <h1 class="display-6">{{ __('l.international_transfers_title') }}</h1>
                                <ul>
                                    <li>{{ __('l.international_transfers_us') }}</li>
                                    <li>{{ __('l.international_transfers_scc') }}</li>
                                </ul>

                                <h1 class="display-6">{{ __('l.user_rights_title') }}</h1>
                                <p>{{ __('l.gdpr_rights_title') }}</p>
                                <ul>
                                    <li>{{ __('l.gdpr_rights_access') }}</li>
                                    <li>{{ __('l.gdpr_rights_restrict') }}</li>
                                    <li>{{ __('l.gdpr_rights_portability') }}</li>
                                    <li>{{ __('l.gdpr_rights_withdraw') }}</li>
                                    <li>{{ __('l.gdpr_rights_complaint') }}</li>
                                </ul>
                                <p>{{ __('l.ccpa_rights_title') }}</p>
                                <ul>
                                    <li>{{ __('l.ccpa_rights_know') }}</li>
                                    <li>{{ __('l.ccpa_rights_delete') }}</li>
                                    <li>{{ __('l.ccpa_rights_opt_out') }}</li>
                                    <li>{{ __('l.ccpa_rights_non_discrimination') }}</li>
                                </ul>
                                <p>{{ __('l.user_rights_requests') }}</p>

                                <h1 class="display-6">{{ __('l.cookies_policy_title') }}</h1>
                                <p>{{ __('l.cookies_policy_text') }}</p>
                                <ul>
                                    <li>{{ __('l.cookies_policy_essential') }}</li>
                                    <li>{{ __('l.cookies_policy_analytics') }}</li>
                                    <li>{{ __('l.cookies_policy_marketing') }}</li>
                                </ul>
                                <p>{{ __('l.cookies_policy_control') }}</p>

                                <h1 class="display-6">{{ __('l.dpo_title') }}</h1>
                                <p>{{ __('l.dpo_text') }}</p>

                                <h1 class="display-6">{{ __('l.updates_title') }}</h1>
                                <p>{{ __('l.updates_text') }}</p>

                                <h1 class="display-6">{{ __('l.contact_title') }}</h1>
                                <p>{{ __('l.contact_company') }}</p>
                                <p>{{ __('l.contact_email') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
