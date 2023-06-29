@extends('layouts.pages')
@section('content')
<?php
function displayYearRange() {
    $currentYear = date('Y');
    $nextYear = date('Y', strtotime('+1 year'));
    $lastYear = date('Y', strtotime('-1 year'));
    $currentMonth = date('n');

    if ($currentMonth >= 5) {
        echo $currentYear . '-' . $nextYear;
    } else {
        echo $lastYear . '-' . $currentYear;
    }
}
?>
    <main id="main" class="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="region region-breadcrumb">
            <div data-drupal-messages-fallback class="hidden"></div>

            <div id="block-breadcrumbs"
                class="breadcrumb-block--orange block breadcrumb-block block-system block-system-breadcrumb-block">
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



                    <article data-history-node-id="599" role="article" about="/financial-aid-scholarships"
                        class="node node--type-landing-page node--promoted node--view-mode-full">






                        <div class="node__content">

                            <div
                                class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item" tabindex="0">
                                    <div>


                                        <div class="feature-banner ">
                                            <div class="feature-banner__content-wrap">
                                                <div class="container">
                                                    <div class="feature-banner__content text--center bg--black text--white">
                                                        <h1 class="feature-banner__title">Cost Aid &amp; Scholarships</h1>
                                                        <div class="feature-banner__subtitle">We seek to provide exceptional
                                                            educational experiences to qualified students regardless of
                                                            their financial circumstances.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>

                                        <div class="block-media media-right bg--blue text--gold ">
                                            <div class="container">
                                                <h1 class="block-media__big-title text--center">Yonevas Open University
                                                    Scholarship Application
                                                </h1>
                                                <div class=" text--center">
                                                    <div>
                                                        <p>THE <?php displayYearRange(); ?> SCHOLARSHIP APPLICATION IS NOW OPEN.
                                                            <!-- THE 2023-2024 SCHOLARSHIP APPLICATION WILL OPEN JANUARY 12, 2023 -->
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-media media-right bg--white text--dark ">
                                            <div class="container">
                                                <h1 class="block-media__big-title text--center capitalize"
                                                    style="color: black !important;">APPLY FOR ADDITIONAL SCHOLARSHIPS</h1>
                                                <div class="block-media__group">
                                                    <div class="block-media__media">
                                                        <article class="media media--type-image media--view-mode-paragraph">


                                     <div style="margin-top: 20px;" class="field field--name-field-image field--type-image field--label-hidden field__item scholarship-img"> <img loading="lazy" src="assets/img/scholarship-img3.jpg" alt="girls computer" typeof="foaf:Image" class="image-style-_60x540" />


                                                        </div>

                                                        </article>
                                                    </div>
                                                    <div class="block-media__content bg--white text--dark">
                                                        <div class="page-heading__description" style="color: black;">
                                                            <p>Students have many opportunities to gain money to pay for
                                                                schooling! External scholarships are additional scholarships
                                                                you can use at Yonevas Open University that are not funded by
                                                                Yonevas Open University. <a href="https://zlasic.com" target="_blank" style="text-decoration: underline">Learn More </a>
                                                                <br />
                                                                The Yonevas Open University Foundation is proud to offer
                                                                scholarship opportunities to all current and incoming
                                                                students in good academic standing that are enrolled in a
                                                                minimum of 6 credits per semester.
                                                                <br />
                                                                <b>In the 2023-2024 academic year, Yonevas Open University
                                                                    Foundation awarded over 105 scholarships valuing over
                                                                    &#8358;7,694,000.
                                                                </b>
                                                                <br />
                                                                Click on External Scholarships to see scholarships offered
                                                                from external sources available to Yonevas Open University
                                                                students
                                                                <br />
                                                                <b>If you are unable to access documents here, please
                                                                    contact Foundation @ <a style="color:red; text-decoration:underline" href="mailto:admissions@yonevas.institute">(admissions@yonevas.institute)</a>.
                                                                </b>
                                                            </p>
                                                            <p><b>NOTE
                                                                </b>that schorlaship decision can only be issued on
                                                                confirming your eligibility for admission at Yonevas Open University.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field__item" tabindex="0">

                                    <div>

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
