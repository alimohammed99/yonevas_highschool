@extends('layouts.pages')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .slidecontainer .slider {
            /* background-color: red; */
            width: 100% !important;
        }

        .slidecontainer {
            width: 100%;
            /* Width of the outside container */
        }

        /* The slider itself */
        .slider {
            -webkit-appearance: none;
            /* Override default CSS styles */
            appearance: none;
            width: 100%;
            /* Full-width */
            height: 25px;
            /* Specified height */
            background: #d3d3d3;
            /* Grey background */
            outline: none;
            /* Remove outline */
            opacity: 0.7;
            /* Set transparency (for mouse-over effects on hover) */
            -webkit-transition: .2s;
            /* 0.2 seconds transition on hover */
            transition: opacity .2s;
        }

        /* Mouse-over effects */
        .slider:hover {
            opacity: 1;
            /* Fully shown on mouse-over */
        }

        /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            /* Override default look */
            /*  appearance: none;*/
            width: 25px;
            /* Set a specific slider handle width */
            height: 25px;
            /* Slider handle height */
            background: #04AA6D;
            /* Green background */
            cursor: pointer;
            /* Cursor on hover */
        }

        .slider::-moz-range-thumb {
            width: 25px;
            /* Set a specific slider handle width */
            height: 25px;
            /* Slider handle height */
            background: #04AA6D;
            /* Green background */
            cursor: pointer;
            /* Cursor on hover */
        }

        #container-ck {
            /* width: 1000px; */
            margin: 20px auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            /* max-width: 80%; */
            margin: 20px auto;
        }
    </style>
    <main id="main" class="main">
        <a id="main-content" tabindex="-1"></a>


        @if (session()->has('success_message'))
            <div style="padding-top:2%; margin-top:4%" class="alert alert-success alert-dismissible">
                <button style="padding-top:2%;" class="close" type="button" data-dismiss="alert">x</button>
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

                                    <div class="container">
                                        <div class="content-left text--align">
                                            <div class="contact" style="margin-bottom: 20px;">
                                                <div class="contact__form">
                                                    <h1 style="margin-top:5rem" class="contact__label">Website Feedback Form
                                                    </h1>

                                                    <h5>We value your feedback! Please take a moment to provide us with your
                                                        thoughts and suggestions regarding our school website. Your input
                                                        will help us improve and enhance the user experience for all
                                                        visitors.
                                                    </h5> <br><br>

                                                    {{-- <form
                                                            class="webform-submission-form webform-submission-add-form webform-submission-contact-form webform-submission-contact-add-form webform-submission-contact-paragraph-766-form webform-submission-contact-paragraph-766-add-form js-webform-details-toggle webform-details-toggle antibot"
                                                            data-drupal-selector="webform-submission-contact-paragraph-766-add-form"
                                                            data-action="/contact-us" action="/antibot" method="post"
                                                            id="webform-submission-contact-paragraph-766-add-form"
                                                            accept-charset="UTF-8" style="margin-bottom: 20px;">
                                                                @csrf --}}
                                                    <form style="margin-bottom:10%"
                                                        action="{{ url('submit_visitors_feedback') }}" method="post"
                                                        enctype="multipart/form-data">



                                                        @csrf

                                                        <noscript>
                                                            <div
                                                                class="antibot-no-js antibot-message antibot-message-warning">
                                                                You must have JavaScript enabled to use this form.</div>
                                                        </noscript>
                                                        <div
                                                            class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label style="font-size:20px" for="position"
                                                                class="js-form-required form-required">1. Overall
                                                                Impression:
                                                            </label><br><br>

                                                            <p style="font-size:23px">On a scale of 1 to 5, please rate your
                                                                overall impression of our school website.
                                                            </p>
                                                            <div style="width:100% !important"
                                                                class="slidecontainer js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                                <h4>Scale: <span id="demo"></span></h4>
                                                                <input name="overall_impression" type="range"
                                                                    width="100%" min="1" max="5"
                                                                    value="1" class="slider" id="myRange" required"
                                                                    required="required" aria-required="true">
                                                                <span id="demo"></span>
                                                            </div>
                                                            <script type="text/javascript">
                                                                var slider = document.getElementById("myRange");
                                                                var output = document.getElementById("demo");
                                                                output.innerHTML = slider.value; // Display the default slider value

                                                                // Update the current slider value (each time you drag the slider handle)
                                                                slider.oninput = function() {
                                                                    output.innerHTML = this.value;
                                                                }
                                                            </script>

                                                        </div>
                                                        {{-- <h4>Personal Information:</h4> --}}
                                                        <div
                                                            class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label style="font-size:20px; margin-top:5%" for="edit-name"
                                                                class="js-form-required form-required">2. User
                                                                Interface</label><br><br>
                                                            <p style="font-size:23px">Please rate the following aspects of
                                                                our website's user interface:
                                                            </p>
                                                            <p style="font-size:20px">2.1. Navigation and ease of finding
                                                                information:
                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="male"
                                                                name="navigation" value="Easy" required"
                                                                required="required" aria-required="true" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px" for="male">Easy</label>
                                                            &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="female"
                                                                name="navigation" value="Medium" required"
                                                                required="required" aria-required="true" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px" for="female">Medium</label>
                                                            &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="fffemale"
                                                                name="navigation" value="Difficult" required"
                                                                required="required" aria-required="true" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px" for="fffemale">Difficult</label>

                                                            <p style="font-size:20px; margin-top:5%">2.2. Design and Visual
                                                                appeal:

                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="good"
                                                                name="design_and_visual_appeal" value="Attractive"
                                                                required" required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="good">Attractive</label>
                                                            &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="bad"
                                                                name="design_and_visual_appeal" value="Unattractive"
                                                                required" required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="bad">Unattractive</label> &nbsp;&nbsp;


                                                            <p style="font-size:20px; margin-top:5%">2.3. Responsiveness
                                                                and
                                                                compatibility across devices:


                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="plain"
                                                                name="responsiveness" value="Highly Responsive/Compatible"
                                                                required" required="required" aria-required="true">
                                                            <label style="font-size:20px" for="plain">Highly
                                                                Responsive/Compatible</label> &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="notplain"
                                                                name="responsiveness" value="Not Responsive/Compatible"
                                                                required" required="required" aria-required="true">
                                                            <label style="font-size:20px" for="notplain">Not
                                                                Responsive/Compatible</label> &nbsp;&nbsp;



                                                        </div>

                                                        <div
                                                            class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label style="font-size:20px; margin-top:5%" for="edit-name"
                                                                class="js-form-required form-required">3.
                                                                Content</label><br><br>
                                                            <p style="font-size:23px">Please provide your feedback on the
                                                                content of our website:

                                                            </p>
                                                            <p style="font-size:20px">3.1. Clarity and relevance of the
                                                                information provided:

                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="aaa"
                                                                name="clarity_info" value="Clear/Relevant" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="aaa">Clear/Relevant</label> &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="bbb"
                                                                name="clarity_info" value="Unclear/Irrelevant" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="bbb">Unclear/Irrelevant</label> &nbsp;&nbsp;

                                                            <p style="font-size:20px; margin-top:5%">3.2. Completeness of
                                                                information (e.g., programs, admissions, faculty, etc.):


                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="info"
                                                                name="completeness_of_info" value="Comprehensive"
                                                                required" required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="info">Comprehensive</label> &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="infos"
                                                                name="completeness_of_info" value="Incomplete" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="infos">Incomplete</label> &nbsp;&nbsp;






                                                        </div>
                                                        <div
                                                            class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label style="font-size:20px; margin-top:5%" for="edit-name"
                                                                class="js-form-required form-required">4.
                                                                Functionality</label><br><br>
                                                            <p style="font-size:23px">Please rate the functionality and
                                                                features of our website:


                                                            </p>
                                                            <p style="font-size:20px">4.1. Load time and performance:


                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="ccc"
                                                                name="load_time" value="Fast/Excellent" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="ccc">Fast/Excellent</label> &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="ddd"
                                                                name="load_time" value="Slow/Poor" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px" for="ddd">Slow/Poor</label>
                                                            &nbsp;&nbsp;

                                                            <p style="font-size:20px; margin-top:5%">4.2. Availability and
                                                                functionality of interactive elements (forms, search, etc.):



                                                            </p>
                                                            <input style="font-size:20px" type="radio" id="info_ele"
                                                                name="interactive_elements" value="Very Comprehensive"
                                                                required" required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="info_ele">Comprehensive</label> &nbsp;&nbsp;

                                                            <input style="font-size:20px" type="radio" id="infos_ele"
                                                                name="interactive_elements" value="Not complete" required"
                                                                required="required" aria-required="true">
                                                            <label style="font-size:20px"
                                                                for="infos_ele">Incomplete</label> &nbsp;&nbsp;






                                                        </div>

                                                        <div
                                                            class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label style="font-size:20px; margin-top:5%" for="edit-name"
                                                                class="js-form-required form-required">5.
                                                                Suggestions:</label><br><br>
                                                            <p style="font-size:23px">Please provide any suggestions or
                                                                improvements you would like to see on our website.



                                                            </p>

                                                            <div id="container-ck">
                                                                <div id="">
                                                                    <textarea name="suggestions" id="content_editor"></textarea>
                                                                </div>
                                                            </div>

                                                            {{-- <button id="submit_text">Submit</submit> --}}

                                                            <script>
                                                                const btn = document.querySelector("#submit_text");

                                                                // try to call the function before the alert.
                                                                btn.addEventListener('click', function() {
                                                                    const text_value = document.getElementById('content_editor').value;
                                                                    console.log(text_value);
                                                                });
                                                                // alert('Hello');
                                                            </script>

                                                            <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>



                                                            <script>
                                                                CKEDITOR.ClassicEditor.create(document.getElementById("content_editor"), {

                                                                    toolbar: {
                                                                        items: [
                                                                            'exportPDF', 'exportWord', '|', 'findAndReplace', 'selectAll', '|', 'heading', '|', 'bold',
                                                                            'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat',
                                                                            '|', 'bulletedList', 'numberedList', 'todoList', '|', 'outdent', 'indent', '|', 'undo',
                                                                            'redo', '-', 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                                                            'alignment', '|', 'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed',
                                                                            'codeBlock', 'htmlEmbed', '|', 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                                                            'textPartLanguage', '|', 'sourceEditing'
                                                                        ],
                                                                        shouldNotGroupWhenFull: true
                                                                    },

                                                                    list: {
                                                                        properties: {
                                                                            styles: true,
                                                                            startIndex: true,
                                                                            reversed: true
                                                                        }
                                                                    },

                                                                    heading: {
                                                                        options: [{
                                                                            model: 'paragraph',
                                                                            title: 'Paragraph',
                                                                            class: 'ck-heading_paragraph'
                                                                        }, {
                                                                            model: 'heading1',
                                                                            view: 'h1',
                                                                            title: 'Heading 1',
                                                                            class: 'ck-heading_heading1'
                                                                        }, {
                                                                            model: 'heading2',
                                                                            view: 'h2',
                                                                            title: 'Heading 2',
                                                                            class: 'ck-heading_heading2'
                                                                        }, {
                                                                            model: 'heading3',
                                                                            view: 'h3',
                                                                            title: 'Heading 3',
                                                                            class: 'ck-heading_heading3'
                                                                        }, {
                                                                            model: 'heading4',
                                                                            view: 'h4',
                                                                            title: 'Heading 4',
                                                                            class: 'ck-heading_heading4'
                                                                        }, {
                                                                            model: 'heading5',
                                                                            view: 'h5',
                                                                            title: 'Heading 5',
                                                                            class: 'ck-heading_heading5'
                                                                        }, {
                                                                            model: 'heading6',
                                                                            view: 'h6',
                                                                            title: 'Heading 6',
                                                                            class: 'ck-heading_heading6'
                                                                        }]
                                                                    },

                                                                    placeholder: 'Write suggestions here...',

                                                                    fontFamily: {
                                                                        options: [
                                                                            'default', 'Arial, Helvetica, sans-serif', 'Courier New, Courier, monospace',
                                                                            'Georgia, serif', 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                                                            'Tahoma, Geneva, sans-serif', 'Times New Roman, Times, serif',
                                                                            'Trebuchet MS, Helvetica, sans-serif', 'Verdana, Geneva, sans-serif'
                                                                        ],
                                                                        supportAllValues: true
                                                                    },

                                                                    fontSize: {
                                                                        options: [10, 12, 14, 'default', 18, 20, 22],
                                                                        supportAllValues: true
                                                                    },

                                                                    htmlSupport: {
                                                                        allow: [{
                                                                            name: /.*/,
                                                                            attributes: true,
                                                                            classes: true,
                                                                            styles: true,
                                                                            autoParagraph: false
                                                                        }]
                                                                    },

                                                                    htmlEmbed: {
                                                                        showPreviews: true
                                                                    },

                                                                    link: {
                                                                        decorators: {
                                                                            addTargetToExternalLinks: true,
                                                                            defaultProtocol: 'https://',
                                                                            toggleDownloadable: {
                                                                                mode: 'manual',
                                                                                label: 'Downloadable',
                                                                                attributes: {
                                                                                    download: 'file'
                                                                                }
                                                                            }
                                                                        }
                                                                    },

                                                                    mention: {
                                                                        feeds: [{
                                                                            marker: '@',
                                                                            feed: [
                                                                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                                                                                '@chocolate', '@cookie', '@cotton', '@cream', '@cupcake', '@danish', '@donut',
                                                                                '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                                                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                                                                                '@sesame', '@snaps', '@soufflé', '@sugar', '@sweet', '@topping', '@wafer'
                                                                            ],
                                                                            minimumCharacters: 1
                                                                        }]
                                                                    },

                                                                    removePlugins: [

                                                                        'CKBox', 'CKFinder', 'EasyImage', 'RealTimeCollaborativeComments',
                                                                        'RealTimeCollaborativeTrackChanges', 'RealTimeCollaborativeRevisionHistory', 'PresenceList',
                                                                        'Comments', 'TrackChanges', 'TrackChangesData', 'RevisionHistory', 'Pagination', 'WProofreader',
                                                                        'MathType', 'SlashCommand', 'Template', 'DocumentOutline', 'FormatPainter', 'TableOfContents'
                                                                    ]
                                                                });
                                                            </script>







                                                        </div>

                                                        <div
                                                            class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label style="font-size:20px; margin-top:5%" for="edit-name"
                                                                class="js-form-required form-required">6. Contact
                                                                Information (Optional):</label><br><br>
                                                            <p style="font-size:23px">If you would like us to follow up
                                                                with you regarding your feedback, please provide your name
                                                                and email address below:



                                                            </p>

                                                            <div
                                                                class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                                <label for="degree"
                                                                    class="js-form-required form-required">Name:</label>
                                                                <input data-drupal-selector="degree" type="text"
                                                                    id="degree" name="user_name" value=""
                                                                    size="60" maxlength="254"
                                                                    class="form-email /><br>

                                                            </div>
                                                            <div
                                                                class="
                                                                    js-form-item form-item js-form-type-email
                                                                    form-type-email js-form-item-email form-item-email">
                                                                <label style="margin-top:3%" for="degree"
                                                                    class="js-form-required form-required">Email:</label>
                                                                <input data-drupal-selector="degree" type="text"
                                                                    id="degree" name="user_email" value=""
                                                                    size="60" maxlength="254" class="form-email" />

                                                            </div>





                                                        </div>

                                                        <p style="font-size:25px; margin-top:3%;">Thank you for your
                                                            feedback!
                                                        </p>

                                                        <p style="font-size:23px">We appreciate your time and valuable
                                                            input. Your feedback will help us enhance our school website and
                                                            provide an improved experience for all visitors.

                                                        </p>

                                                        <div>
                                                            <input id="submit_text" type="submit" name="submit"
                                                                value="Submit">
                                                        </div>







                                                    </form>


                                                </div>
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
