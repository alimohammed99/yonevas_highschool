@extends('layouts.pages')
@section('content')
    <main id="main" class="main">
        <div class="main-region">
            <div class="region region-content">
                <div id="block-mainpagecontent" class="block block-system block-system-main-block">
                    <div class="field__item" tabindex="0">
                        <div class="banner">
                            <div class="slider">
                                <img src="assets/img/slide1.jpg" id="slideImg" alt="" />
                            </div>
                            <div class="overlay">

                                <div class="content">
                                    <h1 class="prospective "><a href="{{ route('register') }}">Prospective Students</a></h1>
                                    <h1 class="apply "><a href="{{ route('register') }}">Apply</a></h1>
                                    <h1 class="schol"><a href="{{ route('scholarship') }}">Scholarship Oppurtunities</a>
                                    </h1>
                                    <h1 class="return-student"><a href="{{ route('login') }}">Returning Students</a></h1>
                                    <h1 class="find-programs"><a href="{{ route('programs') }}">Find Programs</a></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="node__content">

                        <div
                            class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">

                            <div class="field__item" tabindex="0">
                                <div>
                                    <div class="cta bg--cardinal-red text--white">
                                        <div class="cta__inner container bg--white text--dark">
                                            <h3 class="cta__title">The application for the 2023-24 academic year is open!
                                            </h3>

                                            <div class="cta__group">
                                                <div class="cta__link"> <a href="{{ route('register') }}"
                                                        class="link--bold link-btn">Apply Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field__item" tabindex="0">

                                <div id="Facts">
                                    <div class=" bg--white text--dark ">
                                        <div class="container">
                                            <section id="link-area" class="cd-section">
                                                <ul id="boxes">
                                                    <li class="onscroll">
                                                        <a href="{{ route('undergraduate') }}">
                                                            <span class="blurb">Undergraduate Majors</span>
                                                            <span class="view">Undergraduate either as new or returning
                                                                student
                                                                Checkout application deadline for entry into undergraduate
                                                                program or Apply</span>
                                                            <img class="imgtile"
                                                                alt="engineering students using equipment in a laboratory"
                                                                src="assets/img/degree-home.png" />
                                                        </a>
                                                    </li>
                                                    <li class="onscroll">
                                                        <a href="{{ route('diploma') }}">
                                                            <span class="blurb"> Bachelor Degree</span>

                                                            <span class="view">Apply for two year Bachelor Degree
                                                            </span>
                                                            <img class="imgtile"
                                                                alt="a student administers an IV to a dummy in a medical lab setting"
                                                                src="assets/img/diploma-home1.png" />
                                                        </a>
                                                    </li>
                                                    <li class="onscroll">
                                                        <a href="{{ route('programs') }}">
                                                            <span class="blurb"> Certificate</span>
                                                            <span class="view">Apply for non degree certificate and
                                                                training program
                                                            </span>
                                                            <img class="imgtile"
                                                                alt="a hockey player is seen skating on an ice risk"
                                                                src="assets/img/certifcate-home.png" />
                                                        </a>
                                                    </li>
                                                    <li class="onscroll">
                                                        <a href="{{ route('programs') }}">
                                                            <span class="blurb">Adult/Continuous Learning</span>
                                                            <span class="view">Apply for continuous education</span>
                                                            <img class="imgtile"
                                                                alt="Students gather in the lobby of the business school"
                                                                src="assets/img/programs.png" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field__item" tabindex="0">

                                <div id="fastfacts">
                                    <div class="icon-text  text--white ">
                                        <div class="container">
                                            <div class="icon-text__content">
                                                <h3 class="icon-text__title">Essential Fast Facts</h3>
                                                <div class="icon-text__description">Yonevas Open University education
                                                    compels students to think and learn across disciplines, prepares
                                                    graduates for a range of rewarding careers, and helps them discern who
                                                    they want to be—and why. <br />
                                                    <br />
                                                    By exploring enduring questions and complex problems, our students
                                                    acquire the skills, knowledge, and habits of mind and they will need to
                                                    thrive , reflective people in a diverse , positive contribution within
                                                    the socioeconomic environment, and global society.
                                                </div>
                                            </div>

                                            <div class="icon-text__list">
                                                <div class="icon-text__item">
                                                    <div class="icon-text__icon">
                                                        <em class="icon-world-refresh"></em>
                                                    </div>

                                                    <div class="icon-text__wrap">
                                                        <h5 class="icon-text__text-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Global Student Body</div>
                                                        </h5>

                                                        <div class="icon-text__text-subtitle typography-space-small">
                                                            <div
                                                                class="field field--name-field-body-plain field--type-string-long field--label-hidden field__item">
                                                                Our students come from 36 Nigeria states including the FCT,
                                                                and interact with each other and their teachers through our
                                                                live seminar-style discussion classes.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="icon-text__item">
                                                    <div class="icon-text__icon">
                                                        <em class="icon-school-graduation"></em>
                                                    </div>

                                                    <div class="icon-text__wrap">
                                                        <h5 class="icon-text__text-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Placement by Ability</div>
                                                        </h5>

                                                        <div class="icon-text__text-subtitle typography-space-small">
                                                            <div
                                                                class="field field--name-field-body-plain field--type-string-long field--label-hidden field__item">
                                                                Through careful assessment, students are placed into courses
                                                                by their readiness, not solely by their age or grade level.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="icon-text__item">
                                                    <div class="icon-text__icon">
                                                        <em class="icon-file-checklist"></em>
                                                    </div>

                                                    <div class="icon-text__wrap">
                                                        <h5 class="icon-text__text-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Challenging Curriculum</div>
                                                        </h5>

                                                        <div class="icon-text__text-subtitle typography-space-small">
                                                            <div
                                                                class="field field--name-field-body-plain field--type-string-long field--label-hidden field__item">
                                                                From advanced courses, our curriculum challenges students at
                                                                every level.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="icon-text__item">
                                                    <div class="icon-text__icon">
                                                        <em class="icon-certificate-22"></em>
                                                    </div>

                                                    <div class="icon-text__wrap">
                                                        <h5 class="icon-text__text-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Scholarly Instructors</div>
                                                        </h5>

                                                        <div class="icon-text__text-subtitle typography-space-small">
                                                            <div
                                                                class="field field--name-field-body-plain field--type-string-long field--label-hidden field__item">
                                                                Yonevas Open University, 65% holding Ph.D.&#039;s in their fields,
                                                                work closely with students to help them reach their full
                                                                academic potential.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="icon-text__item">
                                                    <div class="icon-text__icon">
                                                        <em class="icon-account-group-4"></em>
                                                    </div>

                                                    <div class="icon-text__wrap">
                                                        <h5 class="icon-text__text-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Individualized Student Support</div>
                                                        </h5>

                                                        <div class="icon-text__text-subtitle typography-space-small">
                                                            <div
                                                                class="field field--name-field-body-plain field--type-string-long field--label-hidden field__item">
                                                                Our dedicated student-support program includes specifically
                                                                trained wellness counselors, academic advisors, and college
                                                                counselors.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="icon-text__item">
                                                    <div class="icon-text__icon">
                                                        <em class="icon-home-1"></em>
                                                    </div>

                                                    <div class="icon-text__wrap">
                                                        <h5 class="icon-text__text-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Vibrant Community</div>
                                                        </h5>

                                                        <div class="icon-text__text-subtitle typography-space-small">
                                                            <div
                                                                class="field field--name-field-body-plain field--type-string-long field--label-hidden field__item">
                                                                Our Student Life staff makes online and in-person
                                                                community-building events a key part of the student
                                                                experience at Yonevas Open University.</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field__item" tabindex="0">

                                <div id="virtualcampus">

                                    <div class="block-media media-left bg--black text--white ">
                                        <div class="container">
                                            <h1 class="block-media__big-title text--center capitalize">Introduction</h1>
                                            <div class="block-media__group">
                                                <div class="block-media__media">
                                                    <div class="video-wrap js-play-video" tabindex="0">

                                                        <div
                                                            class="field field--name-field-video field--type-video-embed-field field--label-hidden field__item">
                                                            <div
                                                                class="video-embed-field-provider-youtube video-embed-field-responsive-video">
                                                                <iframe width="560" height="315"
                                                                    src="https://www.youtube.com/embed/cw9zkNNLLAc"
                                                                    title="YouTube video player" frameborder="0"
                                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                    allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-media__content bg--white text--dark">
                                                    <h3 class="page-heading__title">Beyond the Ordinary</h3>
                                                    <div class="page-heading__description">
                                                        <p>How can you get a feel for our extraordinary online school? Hear
                                                            what some of our students and instructors have to say about our
                                                            school&#039;s strengths.</p>
                                                    </div>
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
                                            <h1 class="block-stats__big-title text--center capitalize">Highlights</h1>
                                            <div class="block-stats__inner">
                                                <div class="block-stats__list">
                                                    <ul id="boxes-f">
                                                        <li class="fm">
                                                            <a class="hvr-sweep-to-right ftiles"
                                                                href="https://calendly.com/ebubeyonevas/60mins?month=2023-03"><span
                                                                    class="blurb2">Meet virtually with an expert</span></a>
                                                        </li>
                                                        <li class="fm">
                                                            <a class="hvr-sweep-to-right ftiles"
                                                                href="{{ route('programs') }}"><span class="blurb2">Find
                                                                    a Program</span></a>
                                                        </li>
                                                        <li class="fm">
                                                            <a class="hvr-sweep-to-right ftiles" href="javascript:;"><span
                                                                    class="blurb2">Visit admin office</span></a>
                                                        </li>
                                                        <li class="fm">
                                                            <a class="hvr-sweep-to-right ftiles"
                                                                href="{{ route('registrar') }}"><span
                                                                    class="blurb2">Request information</span></a>
                                                        </li>
                                                        <li class="fm"><a class="hvr-sweep-to-right ftiles"
                                                                href="{{ route('programs') }}"><span
                                                                    class="blurb2">Non-degree Courses</span></a>
                                                        </li>
                                                        <li class="fm"><a class="hvr-sweep-to-right ftiles"
                                                                href="https://calendly.com/ebubeyonevas/60mins?month=2023-03"><span
                                                                    class="blurb2">Make appointment</span></a></li>
                                                        <li class="fm">
                                                            <a class="hvr-sweep-to-right ftiles"
                                                                href="{{ route('contactUs') }}"><span class="blurb2">Get
                                                                    a call</span></a>
                                                        </li>
                                                        <li class="fm"><a class="hvr-sweep-to-right ftiles"
                                                                href="{{ route('programs') }}"><span
                                                                    class="blurb2">Diploma</span></a></li>
                                                        <li class="fm"><a class="hvr-sweep-to-right ftiles"
                                                                href="{{ route('login') }}"><span
                                                                    class="blurb2">Returning Students</span></a></li>
                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="page-follow has-image text--center">
                                <div class="page-follow__image">
                                    <picture>

                                        <img src="{{ asset('assets/img/background-home.jpg') }}" alt="OHS Swag"
                                            title="Yonevas"
                                            style="background-repeat: no-repeat; height:120%; width:100%; object-fit:cover;"
                                            typeof="foaf:Image" />

                                    </picture>

                                </div>
                                <div class="page-follow__content">
                                    <div class="page-follow__inner overlay">
                                        <div class="container quote">
                                            <div class="quote__body">
                                                <blockquote>
                                                    <p>Yonevas has established a truly amazing community of learners,
                                                        educators and supporters. The school provides a unique hybrid space
                                                        with online flipped classrooms enriched by in-person opportunities
                                                        through regional meetups and residential programs.</p>
                                                </blockquote>
                                            </div>
                                            <h4 class="quote__author">Mrs. A. Happiness Ifeanyichukwu</h4>
                                            <div class="quote__position">Director</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        </div>

        </div>
    </main>
@endsection
