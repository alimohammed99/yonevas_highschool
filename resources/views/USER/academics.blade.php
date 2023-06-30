@extends('layouts.pages')
@section('content')
<main id="main" class="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="region region-breadcrumb">
        <div data-drupal-messages-fallback class="hidden"></div>

        <div id="block-breadcrumbs" class="breadcrumb-block--overlay block breadcrumb-block block-system block-system-breadcrumb-block">
            <div class="breadcrumb-block__inner">
                <div class="container">
                    <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
                        <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                        <ol>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                Academics
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
                <article data-history-node-id="9798" role="article" about="/how-create-online-classroom" class="node node--type-landing-page node--promoted node--view-mode-full">






                    <div class="node__content">

                        <div class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                            <div class="field__item" tabindex="0">
                                <div>


                                    <div class="feature-banner has-image">
                                        <div class="feature-banner__image">
                                            <picture>

                                                <img src="assets/img/admission-banner.jpeg?itok=0y0-xQbp" alt="computer screen" title="Home Classroom" typeof="foaf:Image" />

                                            </picture>

                                        </div>
                                        <div class="feature-banner__content-wrap">
                                            <div class="container">
                                                <div class="feature-banner__content text--center bg--black text--white">
                                                    <h1 class="feature-banner__title">Academics</h1>

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
                                                    <h3 class="text-columns__title"><a href="{{ route('academics') }}">Overview</a> </h3>

                                                </div>


                                                <div class="text-columns__item ">
                                                    <h3 class="text-columns__title"><a href="{{ route('programs') }}">Major & Minors</a> </h3>

                                                </div>


                                                <div class="text-columns__item ">
                                                    <h3 class="text-columns__title"><a href="/resource">Libraries</a> </h3>
                                                </div>
                                                <div class="text-columns__item ">
                                                    <h3 class="text-columns__title"><a href="{{ route('academicAdviser') }}">Academic Advising</a> </h3>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field__item" tabindex="0">
                                <div>
                                    <div class="cards js-cards bg--blue text--gold">
                                        <div class="container">


                                            <div class="cards__grid cards__grid--3-items">

                                                <div class="cards__item bg--white text--dark">

                                                    <div class="cards__group">
                                                        <div class="cards__image">

                                                            <img src="assets/img/community.webp" alt="Galapagos" title="Galapagos Islands" typeof="foaf:Image" />




                                                        </div>
                                                        <a href="#">
                                                            <h4 class="cards__item__title">Join Our Community</h4>
                                                        </a>


                                                        <div class="cards__item__description">
                                                            Find your niche in a diverse community of learners—from all 36 states and 774 local government areas in Nigeria and

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="cards__item bg--white text--dark">

                                                    <div class="cards__group">
                                                        <div class="cards__image">

                                                            <img src="assets/img/explore.png" alt="Galapagos" title="Galapagos Islands" typeof="foaf:Image" />




                                                        </div>
                                                        <a href="#">
                                                            <h4 class="cards__item__title">Explore Your Options</h4>
                                                        </a>


                                                        <div class="cards__item__description">
                                                            What difference do you want to make in the world? Discover a degree program that matches your

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="cards__item bg--white text--dark">

                                                    <div class="cards__group">
                                                        <a href="#">
                                                            <div class="cards__image">

                                                                <img src="assets/img/Partnership.jpg" alt="Galapagos" title="Galapagos Islands" typeof="foaf:Image" />




                                                            </div>
                                                            <a href="#">
                                                                <h4 class="cards__item__title">Work with world-class faculty
                                                                </h4>
                                                            </a>


                                                            <div class="cards__item__description">
                                                                Learn from those committed to the highest standards of teaching, research, and the pursuit of a just

                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="field__item" tabindex="0">
                                <div>
                                    <div class="cards js-cards ">
                                        <div class="container">

                                            <section class="product">
                                                <h2 class="product-category">Tools</h2>
                                                <a class="pre-btn"><img src="assets/img/arrow.png" alt=""></a>
                                                <a class="nxt-btn"><img src="assets/img/arrow.png" alt=""></a>
                                                <div class="product-container">
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="assets/img/calendar.jpg" class="product-thumb" alt="">
                                                            <a href="{{route('academic-calendar')}}"><button class="card-btn">Academic Calender</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="assets/img/catalogue.jpg" class="product-thumb" alt="">
                                                            <a href="{{route('programs')}}"><button class="card-btn">Course Catalogue</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="assets/img/hover.jpg" class="product-thumb" alt="">
                                                            <a href="http://yonevasdigitech.study/"><button class="card-btn">Library Resources</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="assets/img/degree-home.png" class="product-thumb" alt="">
                                                            <a href="https://classroom.google.com/u/0/"><button class="card-btn">Canvas</button></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>

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
