@extends('layouts.pages')
@section('content')
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
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('programs') }}">Programs</a>
                                </li>
                                <li>
                                    Economics
                                </li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>

        </div>

        <div class="container main-content">
            <div class="region region-content">
                <div id="block-mainpagecontent" class="block block-system block-system-main-block">
                    <div class="field__item" tabindex="0">
                        <div>


                            <div class="feature-banner has-image">
                                <div class="feature-banner__image">
                                    <picture>
                                        <source srcset="assets/img/admission-banner.jpg?h=4da1fa98&amp;itok=yaN7h3BB 1x"
                                            media="screen and (min-width: 90em)" type="image/png" />
                                        <source srcset="assets/img/admission-banner.jpg?h=4da1fa98&amp;itok=ODq8_SVs 1x"
                                            media="screen and (min-width: 64em)" type="image/png" />
                                        <source srcset="assets/img/admission-banner.jpg?h=4da1fa98&amp;itok=kGzeO0oN 1x"
                                            media="(min-width: 0em)" type="image/png" />
                                        <img src="assets/img/admission-banner.jpg?itok=mkYpVdvv" alt="Pixels Bench"
                                            title="pixel_bench_crop.png" typeof="foaf:Image" />

                                    </picture>

                                </div>
                                <div class="feature-banner__content-wrap">
                                    <div class="container">
                                        <div class="feature-banner__content text--center bg--black text--white">
                                            <h1 class="feature-banner__title">Economics B.Sc.</h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="tab-body">
            <div class="tab">
                <button class="tab-button" onclick="openTab(event, 'tab1')">
                    <h4>Course info</h4>
                </button>
                <button class="tab-button" onclick="openTab(event, 'tab2')">
                    <h4>Program Requirements</h4>
                </button>
                <button class="tab-button" onclick="openTab(event, 'tab3')">
                    <h4>Career Opportunities</h4>
                </button>
                <button class="tab-button" onclick="openTab(event, 'tab4')">
                    <h4>Program Cost</h4>
                </button>
            </div>

            <div id="tab1" class="tab-content">
                <p>Our B.Sc. in Economics program provides students with a comprehensive understanding of economic theories,
                    principles, and analytical tools. The curriculum consists of a balanced combination of core courses,
                    elective courses, and practical applications. Core courses cover topics such as microeconomics,
                    macroeconomics, econometrics, mathematical economics, and international economics. Elective courses
                    allow students to specialize in areas such as economic policy, finance, development economics, or
                    industrial organization. The program also emphasizes the development of critical thinking,
                    problem-solving, and quantitative skills through coursework, case studies, research projects, and
                    internships.</p>
                <p>Outcome: Upon completion of the Economics B.Sc. program, students will have a strong foundation in
                    economic theory and analysis. They will be equipped with the skills to analyze economic phenomena,
                    conduct empirical research, and make informed policy recommendations. Graduates can pursue careers in
                    various sectors such as banking, finance, consulting, government, research institutions, or
                    international organizations. They can work as economists, financial analysts, policy analysts, research
                    associates, or data analysts. Additionally, the program provides a solid basis for further studies at
                    the postgraduate level, such as pursuing a Master's or Ph.D. in Economics or related fields.</p>
            </div>

            <div id="tab2" class="tab-content">
                <ol>
                    <li>Original Waec, or Neco certificate</li>
                    <li>Online/computer print of waec with scratch card attached</li>
                    <li>Transcript from previous university</li>
                    <li>Jamb result (Optional)</li>
                    <li>Two passport photos</li>
                    <li>Valid form of identification: [international passport, Voter’s Card, NIN, etc…]</li>
                    <li>Birth Certificate or Local government ID</li>
                </ol>
            </div>

            <div id="tab3" class="tab-content">
                <h4>Career Opportunities for Economics B.Sc. Graduates:</h4>
                <ol>
                    <li>Financial Services Sector: Economics graduates can pursue careers in the financial services sector,
                        including banking, investment firms, and insurance companies. They can work as financial analysts,
                        risk managers, investment bankers, or financial consultants, providing expertise in economic
                        analysis, forecasting, and financial decision-making.</li>
                    <li>Government and Public Sector: Many economics graduates find employment opportunities in government
                        agencies and public sector organizations. They can work in economic planning departments, central
                        banks, regulatory bodies, and research institutes, providing economic analysis, policy formulation,
                        and conducting research on various economic issues.</li>
                    <li>Consulting Firms: Economics graduates can work in consulting firms, providing economic advisory
                        services to clients from various industries. They may assist in market research, feasibility
                        studies, economic impact assessments, and business strategy development, utilizing their analytical
                        and problem-solving skills to provide valuable insights to clients.</li>
                    <li>International Organizations: Graduates in economics can explore career opportunities in
                        international organizations such as the World Bank, International Monetary Fund (IMF), United
                        Nations (UN), and regional development banks. They can work on projects related to economic
                        development, poverty reduction, trade, and sustainable development, both at headquarters and in
                        field offices around the world.</li>
                    <li>Data Analysis and Research: Economics graduates with strong quantitative and analytical skills can
                        pursue careers in data analysis and research. They can work in research institutions, think tanks,
                        and market research companies, conducting economic research, analyzing data, and providing insights
                        on economic trends, market conditions, and policy implications.</li>
                    <li>Economic Consulting: Economics graduates can work in economic consulting firms, providing expertise
                        in areas such as antitrust, competition policy, regulatory economics, and litigation support. They
                        may analyze market structures, assess economic damages, and provide economic insights for legal
                        cases and regulatory decision-making processes.</li>
                    <li>Academic and Teaching Positions: Graduates in economics can pursue careers in academia and teaching.
                        They can work as professors or lecturers in universities or colleges, conducting research, teaching
                        courses in economics, and mentoring students. They may also contribute to economic literature
                        through publishing research papers and participating in academic conferences.</li>
                    <li>Non-Profit Organizations and Development Agencies: Economics graduates interested in social and
                        development issues can work in non-profit organizations and development agencies. They can
                        contribute to poverty alleviation programs, sustainable development initiatives, and social impact
                        assessment projects, utilizing economic analysis to inform policy and programmatic interventions.
                    </li>
                    <li>Market Research and Business Analytics: Economics graduates can work in market research firms and
                        business analytics companies, conducting market analysis, forecasting, and consumer behavior
                        research. They may help businesses understand market trends, pricing strategies, and customer
                        preferences to inform business decisions.</li>
                    <li>Entrepreneurship and Start-ups: Economics graduates with an entrepreneurial mindset can start their
                        own businesses or work in start-ups. They can leverage their understanding of market dynamics,
                        pricing strategies, and economic trends to create innovative business models and drive growth.</li>
                </ol>
            </div>

            <div id="tab4" class="tab-content">
                <p>The program cost at Yonevas Open University typically includes tuition fees, administrative fees, and
                    access to digital learning resources. These resources includes course materials, online libraries, and
                    other digital platforms that support the learning process. The cost structure may vary depending on the
                    specific program and its duration.</p>
                <table>
                    <tr>
                        <th>Program length</th>
                        <th>Medium</th>
                        <th>Est. Cost</th>
                        <th>Begin/Term</th>
                        <th>Award Offered</th>
                    </tr>
                    <tr>
                        <td>8 semesters</td>
                        <td>Virtual</td>
                        <td>#84,000</td>
                        <td>Sept./Feb</td>
                        <td>Bachelors</td>
                    </tr>
                </table>
            </div>
            <a href="/register">
                <button class="formbold-btn">
                    Apply Now!
                </button>
            </a>
        </div>


        <div class="program-requirements" style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
            <h2>Program Requirements</h2>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">100 level</h4>
                <table>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr>
                    <tr>
                        <td>GST 111</td>
                        <td>Communication Skills in English</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>GST 112</td>
                        <td>Nigerian Peoples and Culture</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 101</td>
                        <td>Principles of Economics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 103</td>
                        <td>Introductory Mathematics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 102</td>
                        <td>Principles of Economics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 104</td>
                        <td>Introductory Mathematics ll</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 12</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">200 level</h4>
                <table>
                    <tr>
                        <td>GST 212</td>
                        <td>Philosophy, Logic and Human Existence</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ENT 211</td>
                        <td>Entrepreneurship and Innovation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>SSC 202</td>
                        <td>Introduction to Computer and its Application</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ECO 201</td>
                        <td>Introduction to Microeconomics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 203</td>
                        <td>Introduction to Macroeconomics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 205</td>
                        <td>Structure of the Nigerian Economy</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 207</td>
                        <td>Mathematics for Economists</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 202</td>
                        <td>Introduction to Microeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 204</td>
                        <td>Introduction to Macroeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 206</td>
                        <td>Statistics for Economists</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 21</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">300 level</h4>
                <table>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr>
                    <tr>
                        <td>ECO 301</td>
                        <td>Intermediate Microeconomics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 303</td>
                        <td>Intermediate Macroeconomics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 305</td>
                        <td>History of Economic Thought</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 307</td>
                        <td>Project Evaluation</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ECO 302</td>
                        <td>Intermediate Microeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 304</td>
                        <td>Intermediate Macroeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 306</td>
                        <td>Introductory Econometrics</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ECO 310</td>
                        <td>Public Sector Economics</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>SSC 301</td>
                        <td>Innovation in the Social Sciences</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>SSC 302</td>
                        <td>Research Method I</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 26</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">400 level</h4>
                <table>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr>
                    <tr>
                        <td>ECO 401</td>
                        <td>Advanced Microeconomics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 403</td>
                        <td>Advanced Macroeconomics l</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 405</td>
                        <td>Economic Planning</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ECO 407</td>
                        <td>Fiscal Policy and Analysis</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ECO 402</td>
                        <td>Advanced Microeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 404</td>
                        <td>Advanced Macroeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 406</td>
                        <td>Monetary Theory and Policy</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ECO 499</td>
                        <td>Research Project/Original Essay</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>SSC 401</td>
                        <td>Research Method II</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 25</b></p>
            </div>
        </div>
        <div style="display: flex; flex-direction:column; align-items:center; justify-content:center; margin: 10px;">
            <h2>LOOKING FOR SOMETHING ELSE?</h2>
            <p style="font-size: 15px; margin:5px;">Check out our 10 months  professional certificate programs</p>

            <ol class="course-list desk" style="width: 90%; margin:10px 0;">
                <li class="course-item">
                    <a href="/register">
                    Web Development
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Creative Writing
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Social Media Strategist
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Private Investigator
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Programming
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Networking
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Cyber Security
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    3D Motion Graphics
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Criminal Justice
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Graphic Design | Media Arts
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Human Resource Management
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Social Awareness
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Public Speaking
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Graphics Design
                    </a>
                </li>
            </ol>
            <ol class="course-list mobile" style="width: 90%; margin:10px 0;">
                <li class="course-item">
                    <a href="/register">
                    Web Development
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Private Investigator
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Programming
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Cyber Security
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    3D Motion Graphics
                    </a>
                </li>
                <li class="course-item">
                    <a href="/register">
                    Human Resource Management
                    </a>
                </li>
            </ol>
        </div>
    </main>
    {{-- function for the tab --}}
    <script>
        // Function to switch between tabs
        function openTab(event, tabId) {
            // Hide all tab contents
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].style.display = "none";
            }

            // Remove the "active" class from all tab buttons
            var tabButtons = document.getElementsByClassName("tab-button");
            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }

            // Show the selected tab content
            document.getElementById(tabId).style.display = "block";

            // Add the "active" class to the clicked button
            event.currentTarget.classList.add("active");
        }

        // Show the first tab by default
        document.getElementById("tab1").style.display = "block";
        document.getElementsByClassName("tab-button")[0].classList.add("active");
    </script>
@endsection
