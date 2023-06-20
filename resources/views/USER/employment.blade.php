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
                                                    srcset="assets/img/admission-banner.jpeg?h=4da1fa98&amp;itok=yaN7h3BB 1x"
                                                    media="screen and (min-width: 90em)" type="image/png" />
                                                <source
                                                    srcset="assets/img/admission-banner.jpeg?h=4da1fa98&amp;itok=ODq8_SVs 1x"
                                                    media="screen and (min-width: 64em)" type="image/png" />
                                                <source
                                                    srcset="assets/img/admission-banner.jpeg?h=4da1fa98&amp;itok=kGzeO0oN 1x"
                                                    media="(min-width: 0em)" type="image/png" />
                                                <img src="assets/img/admission-banner.jpeg?itok=mkYpVdvv"
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
                                                    open positions</div>
                                            </h1>
                                            <p> <b>NOTE</b> that all position requires computer literacy
                                            </p>
                                            <div class="card-grid">
                                                <div class="card">
                                                    <h2>Admission Counsellor</h2>
                                                    <hr />
                                                    <a href="#">
                                                        <p>Admission/Student Advisor (2 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Undergraduate admin manager (1 opening)</p>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <h2>Event Director</h2>
                                                    <hr />
                                                    <a href="#">
                                                        <p>Media Manager/Operator (1 opening)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Sports/Recreational Organizer</p>
                                                    </a>
                                                </div>
                                                <div class="card">
                                                    <h2>Academic Staff</h2>
                                                    <hr />
                                                    <a href="#">
                                                        <p>Experienced lecturers (6 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Department staff (2 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Registry/ Exams and records (2 openings)</p>
                                                    </a>

                                                </div>
                                                <div class="card">
                                                    <h2>Tech Support</h2>
                                                    <hr />
                                                    <a href="#">
                                                        <p>Library assistant (6 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Virtual Support Personnel (2 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Library Admin manager (2 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Meeting Scheduler (2 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Data analyst (2 openings)</p>
                                                    </a>

                                                </div>
                                                <div class="card">
                                                    <h2>YOU Foundation</h2>
                                                    <hr />
                                                    <a href="#">
                                                        <p>Social Worker (6 openings)</p>
                                                    </a>
                                                    <a href="#">
                                                        <p>Survey Planner (2 openings)</p>
                                                    </a>
                                                </div>

                                            </div><br><br>

                                            <h5>
                                                <a title="Click to start your application" id="begin__application"
                                                    style="color:#e4d018; border:15px groove white; padding:10px; border-radius:20px"
                                                    href="{{ route('application') }}">BEGIN YOUR APPLICATION HERE</a>

                                                <a title="Click to download the form"
                                                    id="begin__application"
                                                    style="color:#e4d018; border:15px groove white; padding:10px; border-radius:20px"
                                                    href="{{ asset('assets/employee-form.pdf') }}" download="employee-form">OR CLICK TO DOWNLOAD
                                                    THE FORM</a>
                                            </h5>
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
