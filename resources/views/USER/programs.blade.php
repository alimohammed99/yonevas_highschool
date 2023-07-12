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
                                    Programs
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
                                                    {{-- <source
                                                        srcset="{{ asset('assets/img/yonevas9.webp') }}&amp;itok=yaN7h3BB 1x"
                                                        style="background-repeat: no-repeat; height:120%; width:100%; object-fit:cover;"
                                                        media="screen and (min-width: 90em)" type="image/png" />
                                                    <source
                                                        srcset="{{ asset('assets/img/yonevas9.webp') }}?h=4da1fa98&amp;itok=ODq8_SVs 1x"
                                                        style="background-repeat: no-repeat; height:120%; width:100%; object-fit:cover;"
                                                        media="screen and (min-width: 64em)" type="image/png" />
                                                    <source
                                                        srcset="{{ asset('assets/img/yonevas9.webp') }}?h=4da1fa98&amp;itok=kGzeO0oN 1x"
                                                        style="background-repeat: no-repeat; height:120%; width:100%; object-fit:cover;"
                                                        media="(min-width: 0em)" type="image/png" /> --}}
                                                    <img src="{{ asset('assets/img/yonevas9.webp') }}" alt="Pixels Bench"
                                                        title="pixel_bench_crop.png"
                                                        style="background-repeat: no-repeat; height:120%; width:100%; object-fit:cover;"
                                                        typeof="foaf:Image" />

                                                </picture>

                                            </div>
                                            <div class="feature-banner__content-wrap">
                                                <div class="container">
                                                    <div class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Programs</h1>

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
                                                        Programs of Study at Yonevas Open University</div>
                                                </h1>
                                                <div class="box-icon__subtitle padding-two-sides text--center">Get started
                                                    today, Complete tomorrow and get your hands on a great career! We have
                                                    more than 37 Programs of Study to choose from, and our class sizes allow
                                                    for more personal attention and a comfortable virtual learning
                                                    environment. Take a tour of the virtual campus or visit the Career
                                                    Advising Center if you're not sure where to begin.
                                                </div>
                                                <div class="program-container">
                                                    <div class="program-child">
                                                        <h3>LIST OF BACHELORS PROGRAMS</h3>
                                                        <div>
                                                            <h4>Communication Studies</h4>
                                                            <ol>
                                                                <li>Information and Media Studies B.Sc</li>
                                                                <li>Journalism and Media Studies B.Sc</li>
                                                                <li>Mass Communications B.Sc</li>
                                                                <li>Public Relations B.Sc</li>
                                                            </ol>
                                                        </div>

                                                        {{-- <div>
                                                            <h4>Law Programs</h4>
                                                            <ol>
                                                                <li>Private and Property Law (PPL)</li>
                                                                <li>Jurisprudence and International Law (JIL)</li>
                                                                <li>Commercial and Industrial Law (CIL)</li>
                                                                <li>Public Law (PUL)</li>
                                                            </ol>
                                                        </div> --}}

                                                        <div>
                                                            <h4>Business Programs</h4>
                                                            <ol>
                                                                <li>Accounting</li>
                                                                <li>Business Administration B.Sc.</li>
                                                                <li>Entrepreneurship B.Sc.</li>
                                                                <li>Hospitality and Tourism Management B.Sc.</li>
                                                                <li>Marketing B.Sc.</li>
                                                                <li>Project Management B.Sc.</li>
                                                                <li>Public Administration B.Sc.</li>
                                                            </ol>
                                                        </div>

                                                        <div>
                                                            <h4>Computer Science Programs</h4>
                                                            <ol>
                                                                <li>Computer Science</li>
                                                                <li>Data Science</li>
                                                                <li>Information Systems</li>
                                                                <li>Information Technology</li>
                                                                <li>Software Engineering</li>
                                                            </ol>
                                                        </div>

                                                        <div>
                                                            <h4>Education Programs</h4>
                                                            <ol>
                                                                <li>Business Education B.Ed</li>
                                                                <li>Computer Science B.Ed</li>
                                                                <li>Education Management B. Ed</li>
                                                                <li>Guidance and Counseling B.Ed</li>
                                                                <li>Health Education B.Ed</li>
                                                                <li>Human Kinetics/Physical Education B.Ed</li>
                                                            </ol>
                                                        </div>

                                                        <div>
                                                            <h4>Social Sciences Programs</h4>
                                                            <ol>
                                                                <li>Economics B.Sc.</li>
                                                                <li>Demography and Social Statistics B.Sc.</li>
                                                                <li>Political Science B.Sc.</li>
                                                                <li>Psychology B.Sc.</li>
                                                                <li>Development Study B.Sc.</li>
                                                                <li>International Relation B.Sc</li>
                                                                <li>Social Work B.Sc.</li>
                                                                <li>Sociology B.Sc.</li>
                                                                <li>Statistics</li>
                                                            </ol>
                                                        </div>

                                                    </div>
                                                    <div class="program-child">
                                                        <h3>CERTIFICATE/NON-DEGREE COURSES </h3>
                                                        <div>
                                                            <ol>
                                                                <li>Web Development</li>
                                                                <li>Creative Leadership</li>
                                                                <li>Creative Writing</li>
                                                                <li>Case Report</li>
                                                                <li>Social Media Strategist</li>
                                                                <li>Private Investigator</li>
                                                                <li>Programming</li>
                                                                <li>Networking</li>
                                                                <li>Cyber Security</li>
                                                                <li>Visual Presentation</li>
                                                                <li>3D Motion Graphics</li>
                                                                <li>Social Awareness</li>
                                                                <li>Digital Learning</li>
                                                                <li>Public Speaking</li>
                                                                <li>Graphics Design</li>
                                                                <li>Animations and 3D Motion</li>
                                                                <li>Criminal Justice</li>
                                                                <li>Graphic Design | Media Arts</li>
                                                                <li>Physical and Health Education</li>
                                                                <li>Social Work</li>
                                                                <li>Forensic Accounting & Fraud Investigation</li>
                                                                <li>Human Resource Management</li>
                                                                <li>Event and Meeting Management</li>
                                                                <li>Early Childhood Special Education</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <div class="program-child">
                                                        <h3>CONTINOUS LEARNING PROGRAMS</h3>
                                                        <div>
                                                            <ol>
                                                                <li>Digital Marketing and Social Media Strategy</li>
                                                                <li>Personal Finance and Investment Planning</li>
                                                                <li>Brand Development and Marketing in the Creative Industries</li>
                                                                <li>Virtual Collaboration: Navigating Challenges and Maximizing Opportunities</li>
                                                                <li>Sustainable Business Practices and Environmental Responsibility</li>
                                                                <li>Introduction to Artificial Intelligence and Machine Learning</li>
                                                                <li>The Importance of Play in Child Development and Behavior</li>
                                                                <li>Protecting Yourself from Internet Fraud: Safeguarding Your Online Presence</li>
                                                                <li>Digital Storytelling and Content Creation</li>
                                                                <li>Creative Leadership and Team Management</li>
                                                                <li>Sustainable Transportation: Innovations and Challenges</li>
                                                                <li>Mastering Temperament: The Art of Emotional Control</li>
                                                                <li>Design Thinking for Innovation in the Creative Industries</li>
                                                                <li>Developmental Psychology: Nurturing Resilience and Academic Success from Childhood to Adulthood</li>
                                                                <li>Emotional Intelligence and Communication Skills</li>
                                                                <li>The Impact of Nature and Nurture on Child Behavior</li>
                                                            </ol>
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
