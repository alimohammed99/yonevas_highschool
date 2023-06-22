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
                                    School of Computer Education
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
                                                    <img src="{{ asset('assets/img/degree-home.png') }}" alt="Pixels Bench"
                                                        title="pixel_bench_crop.png"
                                                        style="background-repeat: no-repeat; height:120%; width:100%; object-fit:cover;"
                                                        typeof="foaf:Image" />

                                                </picture>

                                            </div>
                                            <div class="feature-banner__content-wrap">
                                                <div class="container">
                                                    <div class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Faculty of Computer Science</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">
                                    <div id="highlights">
                                        <div class="block-stats bg--white text--dark">
                                            <div class="container">
                                                <h1 class="block-stats__big-title text--center capitalize">Courses</h1>
                                                <div class="block-stats__inner">
                                                    <div class="block-stats__list">
                                                        <ul id="boxes-f">
                                                            <li class="fm">
                                                                <a class="hvr-sweep-to-right ftiles"
                                                                    href="{{ route('computer-science') }}"><span
                                                                        class="blurb2">Computer Science B.Sc</span></a>
                                                            </li>
                                                            <li class="fm">
                                                                <a class="hvr-sweep-to-right ftiles"
                                                                    href="{{ route('cyberSecurity') }}"><span
                                                                        class="blurb2">Cybersecurity B.Sc</span></a>
                                                            </li>
                                                            <li class="fm">
                                                                <a class="hvr-sweep-to-right ftiles"
                                                                    href="{{ route('dataScience') }}"><span
                                                                        class="blurb2">Data Science B.Sc</span></a>
                                                            </li>
                                                            <li class="fm"><a class="hvr-sweep-to-right ftiles"
                                                                    href="{{ route('info-tech') }}"><span
                                                                        class="blurb2">Information Technology
                                                                        B.Sc</span></a>
                                                            </li>
                                                            <li class="fm"><a class="hvr-sweep-to-right ftiles"
                                                                    href="{{ route('soft-engr') }}"><span
                                                                        class="blurb2">Software Engineering B.Sc</span></a>
                                                            </li>
                                                        </ul>
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
