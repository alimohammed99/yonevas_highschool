@extends('layouts.pages')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <main id="main" class="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="region region-breadcrumb">
            <div data-drupal-messages-fallback class="hidden"></div>
        </div>

        @if (session()->has('success_message'))
            <div class="alert alert-success alert-dismissible">
                <button class="close" type="button" data-dismiss="alert">x</button>
                {{ session()->get('success_message') }}
            </div>
        @endif


        @if (session()->has('error_message'))
            <div class="alert alert-danger alert-dismissible">
                <button class="close" type="button" data-dismiss="alert">x</button>
                {{ session()->get('error_message') }}
            </div>
        @endif

        <div class="main-region">
            <div class="region region-content">
                <div id="block-mainpagecontent" class="block block-system block-system-main-block">



                    <article data-history-node-id="275" role="article" about="/contact-us"
                        class="node node--type-landing-page node--promoted node--view-mode-full">






                        <div class="node__content">

                            <div
                                class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item" tabindex="0">
                                    <div class="content-group block-contact">
                                        <div class="container">
                                            <div class="content-left">
                                                <div class="contact" style="background: #fefefd">
                                                    <div class="contact__form">
                                                        <h1 class="contact__label">Message us</h1>
                                                        {{-- <form
                                                            class="webform-submission-form webform-submission-add-form webform-submission-contact-form webform-submission-contact-add-form webform-submission-contact-paragraph-766-form webform-submission-contact-paragraph-766-add-form js-webform-details-toggle webform-details-toggle antibot"
                                                            data-drupal-selector="webform-submission-contact-paragraph-766-add-form"
                                                            data-action="/contact-us" action="/antibot" method="post"
                                                            id="webform-submission-contact-paragraph-766-add-form"
                                                            accept-charset="UTF-8">
                                                                @csrf --}} 
                                                        <div class="formbold-main-wrapper">
                                                        <!-- Author: FormBold Team -->
                                                        <!-- Learn More: https://formbold.com -->
                                                        <div class="formbold-form-wrapper">
                                                            <form action="{{ route('contact.send') }}" method="POST">
                                                                @csrf
                                                                <div class="formbold-input-flex">
                                                                    <div>
                                                                        <input type="text" name="name" id="firstname" placeholder="Jhon Chukwuemeka" class="formbold-form-input" required />
                                                                        <label for="firstname" class="formbold-form-label"> Full name </label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="email" name="email" id="email" placeholder="jhon@gmail.com" class="formbold-form-input" required />
                                                                        <label for="email" class="formbold-form-label"> Email </label>
                                                                    </div>
                                                                </div>

                                                                <div class="formbold-textarea">
                                                                        <input type="text" name="subject" id="subject" placeholder="Enquiry about process" class="formbold-form-input" required />
                                                                        <label for="subject" class="formbold-form-label"> Subject </label>
                                                                </div>

                                                                <div class="formbold-textarea">
                                                                    <textarea rows="6" name="message" id="message" placeholder="Write your message..."
                                                                        class="formbold-form-input" required ></textarea>
                                                                    <label for="message" class="formbold-form-label"> Message </label>
                                                                </div>
                                                                <button class="formbold-btn">
                                                                    Send Message
                                                                </button>
                                                            </form>
                                                        </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="content-right contact-img " style="position: relative">
                                                <img src="{{ asset('assets/newImages/Y-03.png') }}" alt="yonevas logo" style="position: absolute; top:0; left:0; width:100%; height:auto; z-index: 20;" />
                                                <img src="{{ asset('assets/newImages/contact.png') }}" alt="computer system" />
                                                <img src="{{ asset('assets/newImages/Y-04.png') }}" alt="yonevas logo" style="position: absolute; bottom:0; left:0; width:100%; height:auto; z-index: 20;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
