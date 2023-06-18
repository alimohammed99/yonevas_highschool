@extends('layouts.pages')
@section('content')
    <style>
        body {
            overflow-x: hidden;
        }

        #reg ::placeholder {
            color: white;
            font-size: 25px;
        }

        #reg input:focus {
            border: none;
            outline: none;
        }

        .form-group {
            margin-top: 2rem;
        }

        #reg input {
            width: 100%;
        }

        #reg input[type='number']::-webkit-outer-spin-button,
        input[type='number']::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        #aao {
            width: 100%;
        }
    </style>

    <main id="main" class="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="region region-breadcrumb">
            <div data-drupal-messages-fallback class="hidden"></div>

            <div id="block-breadcrumbs"
                class="breadcrumb-block--orange block breadcrumb-block block-system block-system-breadcrumb-block">
                <div class="breadcrumb-block__inner">
                    <div class="container">
                        <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
                            <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                            <ol>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    Create An Account
                                </li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>

        </div>

        <div class="main-region">
            <div class="region region-content">
                <div id="block-mainpagecontent" class="block block-system block-system-main-block">



                    <article data-history-node-id="598" role="article" about="/tuition"
                        class="node node--type-landing-page node--promoted node--view-mode-full">






                        <div class="node__content">

                            <div
                                class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item" tabindex="0">
                                    <div>


                                        <div class="feature-banner ">
                                            <div id="aao" class="feature-banner__content-wrap">
                                                <div class="container">
                                                    <div class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Create An Account
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="50" fill="currentColor" class="bi bi-person-lock"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                                            </svg>
                                                        </h1>
                                                        <div class="feature-banner__subtitle">Please fill in
                                                            your details carefully</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>
                                        <div class="box-icon ">
                                            <div class="container" style="padding-bottom: 20px;">
                                                <h1 class="box-icon__big-title text--center">

                                                </h1>

                                                <div class="div">

                                                    @if (session('status'))
                                                        <div class="mb-4 font-medium text-sm text-green-600">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif





                                                    <x-slot name="logo">

                                                    </x-slot>

                                                    <x-jet-validation-errors
                                                        style="color:red; font-weight:bold; margin-bottom:20px"
                                                        class="mb-5" />





                                                    <form id="reg" method="POST" action="{{ route('register') }}"
                                                        class="form mt-4 pt-4 mr-4">
                                                        @csrf




                                                        <div class="form-group">
                                                            <x-jet-input id="first_name"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="first_name" type="text" :value="old('first_name')"
                                                                width="400%" class="pl-4" placeholder="Enter First Name"
                                                                autofocus />
                                                        </div>




                                                        <div class="form-group mt-5">
                                                            <x-jet-input id="last_name"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="last_name" type="text" :value="old('last_name')"
                                                                width="400%" class="pl-4" placeholder="Enter Last Name"
                                                                autofocus />
                                                        </div>


                                                        <div class="form-group mt-5">
                                                            <x-jet-input id="other_names"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="other_names" type="text" :value="old('other_names')"
                                                                width="400%" class="pl-4"
                                                                placeholder="Enter Other Name (Not Compulsory)" />
                                                        </div>


                                                        <div class="form-group mt-5">
                                                            <x-jet-input id="phone"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="phone" type="number" :value="old('phone')"
                                                                width="400%" class="pl-4"
                                                                placeholder="Enter Phone Number" autofocus />
                                                        </div>
                                                        <div class="form-group mt-5">
                                                            <x-jet-input id="email"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="email" type="email" :value="old('email')"
                                                                width="400%" class="pl-4" placeholder="Enter Email"
                                                                autofocus />
                                                        </div>

                                                        <div class="form-group mt-5">
                                                            <x-jet-input id="password"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="password" type="password" :value="old('password')"
                                                                width="400%" class="pl-4"
                                                                placeholder="Enter Password" autofocus />
                                                        </div>

                                                        <div class="form-group mt-5">
                                                            <x-jet-input id="password_confirmation"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                name="password_confirmation" type="password"
                                                                width="400%" class="pl-4"
                                                                placeholder="Confirm Password" />
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="checkbox" name="referral" id="referral" />
                                                            <label for="referral">Referral</label>
                                                        </div>

                                                        <div class="referral" style="display:none;">
                                                            <div class="form-group mt-5">
                                                                <x-jet-input id="referral_name"
                                                                    style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                    name="referral_name" type="text" :value="old('referral_name')"
                                                                    width="400%" class="pl-4"
                                                                    placeholder="Referral Name" />
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <x-jet-input id="referral_email"
                                                                    style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:5px groove white; outline:none;"
                                                                    name="referral_email" type="text" width="400%"
                                                                    :value="old('referral_email')" class="pl-4"
                                                                    placeholder="Referral Email" />
                                                            </div>

                                                        </div>


                                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                            <div class="mt-4">
                                                                <x-jet-label for="terms">
                                                                    <div class="flex items-center">
                                                                        <x-jet-checkbox name="terms" id="terms" />

                                                                        <div class="ml-2">
                                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                                'terms_of_service' =>
                                                                                    '<a target="_blank" href="' .
                                                                                    route('terms.show') .
                                                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                                                    __('Terms of Service') .
                                                                                    '</a>',
                                                                                'privacy_policy' =>
                                                                                    '<a target="_blank" href="' .
                                                                                    route('policy.show') .
                                                                                    '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                                                    __('Privacy Policy') .
                                                                                    '</a>',
                                                                            ]) !!}
                                                                        </div>
                                                                    </div>
                                                                </x-jet-label>
                                                            </div>
                                                        @endif


                                                        <div class="flex items-center justify-end mt-4">
                                                            <a class="mr-4s text-danger  underline text-sm text-gray-600 hover:text-gray-900"
                                                                style="font-size:25px; text-decoration:underline"
                                                                href="{{ route('login') }}">
                                                                {{ __('Already registered?') }}
                                                            </a>

                                                            <x-jet-button
                                                                style="background: green; border:none; border-radius:20px; padding:15px"
                                                                class="btn btn-success ml-4 mb-4">
                                                                {{ __('Register') }}
                                                            </x-jet-button>
                                                        </div>

                                                    </form>










                                                    </form>

                                                </div>
                                            </div>
                                        @endsection
