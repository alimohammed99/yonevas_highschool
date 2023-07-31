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
                                    Create Account
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
                                                    <div style="width:100%"
                                                        class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Log In <svg
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item"
                                                                style="width:; height:; size:100px; font-size:100%"
                                                                xmlns="http://www.w3.org/2000/svg" width="60"
                                                                height="50" fill="currentColor" class="bi bi-key"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                            </svg></h1>
                                                        <div class="feature-banner__subtitle">Welcome Back...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>
                                        <div class="box-icon ">
                                            <div class="container">
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







                                                    <form id="reg" method="POST" action="{{ route('login') }}"
                                                        class="form mt-4 pt-4 mr-4">

                                                        @csrf

                                                        <x-jet-validation-errors
                                                            style="color:red; font-weight:bold; margin-bottom:25px"
                                                            class="mb-5" />

                                                        @if (session()->has('success_message'))
                                                            <div class="alert alert-success alert-dismissible">
                                                                <button class="close" type="button"
                                                                    data-dismiss="alert">x</button>
                                                                {{ session()->get('success_message') }}
                                                            </div>
                                                        @endif


                                                        @if (session()->has('error_message'))
                                                            <div class="alert alert-danger alert-dismissible">
                                                                <button class="close" type="button"
                                                                    data-dismiss="alert">x</button>
                                                                {{ session()->get('error_message') }}
                                                            </div>
                                                        @endif


                                                        <br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-envelope ml-3"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                        </svg>
                                                        <div class="form-group">
                                                            <x-jet-input id="email"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:15px groove white; outline:none;"
                                                                name="email" type="email" :value="old('email')"
                                                                width="400%" class="pl-4"
                                                                placeholder="Enter Email here now" required autofocus />
                                                        </div> <br>





                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-unlock"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z" />
                                                        </svg>
                                                        <div class="form-group">
                                                            <x-jet-input id="password"
                                                                style="border:none; background:inherit; padding:5px; font-size:22px; padding-left:17px; color:white; border-left:7px solid white; border-radius:20px; border-bottom:15px groove white; outline:none;"
                                                                name="password" type="password" :value="old('email')"
                                                                width="400%" class="pl-4" placeholder="Enter Password"
                                                                required autofocus autocomplete="current-password" />
                                                        </div> <br><br>




                                                        <div class="flex items-center justify-end mt-4">
                                                            @if (Route::has('password.request'))
                                                                <a style="color:red; font-size:22px"
                                                                    class="underline text-sm text-gray-600 hover:text-gray-900"
                                                                    href="{{ route('password.request') }}">
                                                                    {{ __('Forgot your password?') }}
                                                                </a>
                                                            @endif

                                                            <x-jet-button class="ml-4 mb-4 btn btn-success ml-3"
                                                                style="background:green; border:none; border-radius:13px; margin-left:10px">
                                                                {{ __('Log in') }}
                                                            </x-jet-button>
                                                        </div><br><br>









                                                    </form>










                                                    </form>

                                                </div>
                                            </div>
    </main>
@endsection
