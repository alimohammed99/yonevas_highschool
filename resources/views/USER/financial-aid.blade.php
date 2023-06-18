@extends('layouts.pages')
@section('content')
<main id="main" class="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="region region-breadcrumb">
        <div data-drupal-messages-fallback class="hidden"></div>

        <div id="block-breadcrumbs" class="breadcrumb-block--orange block breadcrumb-block block-system block-system-breadcrumb-block">
            <div class="breadcrumb-block__inner">
                <div class="container">
                    <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
                        <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                        <ol>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                Financial Aid
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



                <article data-history-node-id="599" role="article" about="/financial-aid-scholarships" class="node node--type-landing-page node--promoted node--view-mode-full">






                    <div class="node__content">

                        <div class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                            <div class="field__item" tabindex="0">
                                <div>


                                    <div class="feature-banner ">
                                        <div class="feature-banner__content-wrap">
                                            <div class="container">
                                                <div class="feature-banner__content text--center bg--black text--white">
                                                    <h1 class="feature-banner__title">Financial Aids</h1>

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
                                            <h1 class="block-media__big-title text--center capitalize" style="color: black !important;">Financial Aid Opportunities </h1>
                                            <div class="block-media__group">
                                                <div class="block-media__media">
                                                    <article class="media media--type-image media--view-mode-paragraph">


                                                        <div style="margin-top: 20px;" class="field field--name-field-image field--type-image field--label-hidden field__item scholarship-img"> <img loading="lazy" src="assets/img/financial-aid.png" alt="girls computer" typeof="foaf:Image" class="image-style-_60x540" />


                                                        </div>

                                                    </article>
                                                </div>
                                                <div class="block-media__content bg--white text--dark">
                                                    <div class="page-heading__description">
                                                        <p>Yonevas Open University offers a range of financial aid opportunities to help students fund their education. These opportunities include scholarships, grants, and student loans.</p>
                                                        <p>Scholarships are a form of financial aid that does not need to be repaid. Yonevas Open University offers merit-based scholarships to students who have demonstrated exceptional academic achievement or talent in a particular field. These scholarships can help offset the cost of tuition and fees, making college more affordable for students.</p> <br><br>



                                                       <h5>
                                                            <a title="Click to download the form"
                                                    id="begin__application"
                                                    style="color:#e4d018; border:15px groove white; padding:10px; border-radius:20px"
                                                    href="{{ asset('assets/financial-aid.pdf') }}" download="financial-aid-form">CLICK TO DOWNLOAD
                                                    THE FORM</a>

                                                        </h5>

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

                                            <div class="box-icon__subtitle  ">
                                                <p>Grants are another form of financial aid that does not need to be repaid. Yonevas Open University the college foundation, offers grants to support students in certain programs including need-based grants to students who demonstrate financial need.</p>
                                                <p>Student loans are a form of financial aid that must be repaid, with interest. Yonevas Open University participates in YG & Co loan program which offers low-interest loans to eligible students to ensure that students are given the opportunity to enjoy their college experience . </p>
                                                <p>In addition to these financial aid opportunities, Yonevas Open University also offers payment plans that allow students to spread the cost of tuition and fees over several months. This can help make college more affordable and manageable for students who may not have the financial resources to pay for tuition upfront.</p>
                                                <p>Overall, Yonevas Open University is committed to helping students access the financial aid they need to pursue a quality education. By offering scholarships, grants, student loans, and payment plans, the college is working to make college more affordable and accessible for students in Nigeria and beyond.</p>
                                                <p>In addition to the above, Yonevas Open University provides students with information and resources on external scholarships and grants. The college maintains a database of external scholarships and grants available to Nigerian students, which can help students find additional sources of funding to support their education.</p>
                                                <p>Moreover, Yonevas Open University also provides students with financial literacy and budgeting resources to help them manage their finances while in college. This can be particularly valuable for students who are taking out loans or relying on financial aid to pay for their education.</p>
                                                <p>Furthermore, Yonevas Open University is committed to ensuring that all students have equal access to financial aid opportunities regardless of their background or financial circumstances. The college has established policies and procedures to ensure that financial aid is awarded based on need and merit, and that there is no discrimination on the basis of tribe, ethnicity, gender, or other factors.</p>
                                                <p>Overall, Yonevas Open University's commitment to financial aid and affordability is an important part of its mission to provide high-quality education to students in Nigeria and beyond. By offering a range of financial aid opportunities, the college is working to ensure that all students have the opportunity to pursue their educational goals, regardless of their financial circumstances.</p>
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
