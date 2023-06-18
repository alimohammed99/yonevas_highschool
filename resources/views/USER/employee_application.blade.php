<style>
    /* html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    } */

    .login-box {
        position: absolute;
        /* top: 50%; */
        left: 50%;
        width: 1000px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }
</style>

@extends('layouts.pages')
@section('content')
    <main id="main" class="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="region region-breadcrumb">
            <div data-drupal-messages-fallback class="hidden"></div>

            <div id="block-breadcrumbs"
                class="breadcrumb-block--overlay block breadcrumb-block block-system block-system-breadcrumb-block">
                <div class="breadcrumb-block__inner">
                    <div class="container">
                        <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
                            <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                            <ol>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    Admissions
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



                    <article data-history-node-id="27" role="article" about="/admissions"
                        class="node node--type-landing-page node--promoted node--view-mode-full">






                        <div class="node__content">

                            <div
                                class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item" tabindex="0">
                                    <div>


                                        <div class="feature-banner has-image">
                                            <div class="feature-banner__image">
                                                <picture>
                                                    <source
                                                        srcset="assets/img/admission-banner.jpg?h=4da1fa98&amp;itok=yaN7h3BB 1x"
                                                        media="screen and (min-width: 90em)" type="image/png" />
                                                    <source
                                                        srcset="assets/img/admission-banner.jpg?h=4da1fa98&amp;itok=ODq8_SVs 1x"
                                                        media="screen and (min-width: 64em)" type="image/png" />
                                                    <source
                                                        srcset="assets/img/admission-banner.jpg?h=4da1fa98&amp;itok=kGzeO0oN 1x"
                                                        media="(min-width: 0em)" type="image/png" />
                                                    <img src="assets/img/admission-banner.jpg?itok=mkYpVdvv"
                                                        alt="Pixels Bench" title="pixel_bench_crop.png"
                                                        typeof="foaf:Image" />

                                                </picture>

                                            </div>
                                            <div class="feature-banner__content-wrap">
                                                <div class="container">
                                                    <div class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Employment Opportunity</h1>
                                                        <div class="feature-banner__subtitle">Yonevas Open University is a private,
                                                            college of arts & sciences sponsored by the Yonevas Company, The
                                                            College serves over 106 FT & PT undergrad students. A rigorous
                                                            core curriculum provides the foundation for all majors. The
                                                            College is located in Nigeria with its main headquarter in Lagos
                                                            , other branch offices for administrative works located in
                                                            Anambra state . Yonevas Company is committed to recruiting a
                                                            diverse work force and welcomes applications from persons of
                                                            traditionally under-represented groups. Please send a cover
                                                            letter (including salary requirements) and resume to:
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>
                                        <div class="box-icon bg--white text--dark">
                                            <div class="container">
                                                <h1 class="box-icon__big-title text--center">
                                                    <div
                                                        class="field field--name-field-title field--type-string field--label-hidden field__item capitalize">
                                                        Employment Application Form</div>
                                                </h1>
                                                <p> <b>NOTE</b> that all position requires computer literacy
                                                </p><br><br><br>
                                        

                                                <div class="login-box">
                                                    {{-- <h2>Login</h2> --}}
                                                    <form>
                                                        <div class="user-box">
                                                            <input type="text" name="" required="">
                                                            <label>Username</label>
                                                        </div>
                                                        <div class="user-box">
                                                            <input type="password" name="" required="">
                                                            <label>Password</label>
                                                        </div>
                                                        <a href="#">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            Submit
                                                        </a>
                                                    </form>
                                                </div>


                                            </div>
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
        </div>
        </div>
        </div>
        </div>
    </main>
@endsection
