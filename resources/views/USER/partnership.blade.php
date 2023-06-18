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
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    Partnership
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



                    <article data-history-node-id="9798" role="article" about="/how-create-online-classroom"
                        class="node node--type-landing-page node--promoted node--view-mode-full">






                        <div class="node__content">

                            <div
                                class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item" tabindex="0">
                                    <div>


                                        <div class="feature-banner has-image">
                                            <div class="feature-banner__image">
                                                <picture>

                                                    <img src="assets/img/partnership.jpg?itok=0y0-xQbp"
                                                        alt="computer screen" title="Home Classroom" typeof="foaf:Image" />

                                                </picture>

                                            </div>
                                            <div class="feature-banner__content-wrap">
                                                <div class="container">
                                                    <div class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Partnership</h1>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>
                                        <div class="text-columns  bg--blue text--gold text--center">
                                            <div class="container">


                                                <div class="text-columns__grid text-columns__grid--4-items">

                                                    <div class="text-columns__item ">
                                                        <h3 class="text-columns__title"><a
                                                                href="{{ route('wellness') }}">Wellness</a>
                                                        </h3>

                                                    </div>


                                                    {{-- <div class="text-columns__item ">
                                                        <h3 class="text-columns__title"><a
                                                                href="{{ route('board') }}">Staff</a> </h3>

                                                    </div> --}}


                                                    <div class="text-columns__item ">
                                                        <h3 class="text-columns__title"><a
                                                                href="{{ route('login') }}">Alumni</a> </h3>
                                                    </div>
                                                    <div class="text-columns__item ">
                                                        <h3 class="text-columns__title"><a
                                                                href="{{ route('donate') }}">Donate</a>
                                                        </h3>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>


                                        <div class="block-media media-right bg--white text--dark ">
                                            <div class="container">
                                                <div class="block-media__group">
                                                    <div class="block-media__media">
                                                        <article class="media media--type-image media--view-mode-paragraph">


                                                            <div
                                                                class="field field--name-field-image field--type-image field--label-hidden field__item scholarship-img">
                                                                <img loading="lazy" src="assets/img/patnership2.png"
                                                                    alt="girls computer" typeof="foaf:Image"
                                                                    class="image-style-_60x540" />


                                                            </div>

                                                        </article>
                                                    </div>
                                                    <div class="block-media__content bg--white text--dark">
                                                        <div class="page-heading__description" style="color:black;">
                                                            <p>Yonevas Virtual University offers more than 25 pathways in
                                                                today’s most innovative fields, Yonevas Virtual University is
                                                                recognized as one of the region’s best online academic
                                                                institutions across the nation. Here, you’ll find
                                                                career-focused programs designed to give experiences that
                                                                meet industry needs. Our talented faculty bring real-world
                                                                experience to their teaching and will prepare you with the
                                                                skills you’ll need to start your career in three years or
                                                                less. Many goto school to obtain a degree certificate, but
                                                                we welcome you to our school to teach so you can learn the
                                                                values of life. Which is the most important of all things .
                                                                we bring to your mind the two elements that lead to several
                                                                engagements , philosophy and attitude , the two bring
                                                                activity, activity is simply what you do. What you do has
                                                                several implications, how you do them determines the
                                                                outcome.</p>
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
    </main>
@endsection
