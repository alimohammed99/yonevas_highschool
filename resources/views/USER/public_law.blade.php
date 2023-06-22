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
                                    Public Law
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
                                        <source srcset="assets/img/admission-banner.jpeg?h=4da1fa98&amp;itok=yaN7h3BB 1x"
                                            media="screen and (min-width: 90em)" type="image/png" />
                                        <source srcset="assets/img/admission-banner.jpeg?h=4da1fa98&amp;itok=ODq8_SVs 1x"
                                            media="screen and (min-width: 64em)" type="image/png" />
                                        <source srcset="assets/img/admission-banner.jpeg?h=4da1fa98&amp;itok=kGzeO0oN 1x"
                                            media="(min-width: 0em)" type="image/png" />
                                        <img src="assets/img/admission-banner.jpeg?itok=mkYpVdvv" alt="Pixels Bench"
                                            title="pixel_bench_crop.png" typeof="foaf:Image" />

                                    </picture>

                                </div>
                                <div class="feature-banner__content-wrap">
                                    <div class="container">
                                        <div class="feature-banner__content text--center bg--black text--white">
                                            <h1 class="feature-banner__title"> Public Law LL.B.</h1>

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
                    <h4>Entry Requirements</h4>
                </button>
                <button class="tab-button" onclick="openTab(event, 'tab3')">
                    <h4>Career Opportunities</h4>
                </button>
                <button class="tab-button" onclick="openTab(event, 'tab4')">
                    <h4>Program Cost</h4>
                </button>
            </div>

            <div id="tab1" class="tab-content">
                <p>The Public Law LL.B. course offers a comprehensive exploration of the principles, concepts, and applications of public law within the legal and governance frameworks. This course delves into the legal foundations of public administration, constitutional law, administrative law, and other related areas. Students will critically analyze the legal structures that govern the relationship between the state and its citizens, examining topics such as human rights, governmental powers, judicial review, and the rule of law. Through engaging lectures, interactive discussions, and case studies, students will gain a deep understanding of the complexities and significance of public law in shaping societies and ensuring the protection of individual rights and democratic principles.


                </p>
                <h5>Aim and Objectives</h5>

                           <p><b>Aims</b></p>

                <p>1. To provide students with a comprehensive understanding of the principles and theories underpinning public law.

                </p>

                <p>2. To familiarize students with the legal frameworks governing the relationship between the state and its citizens.
</p>

<p>3. To cultivate critical thinking and analytical skills necessary for the evaluation and interpretation of legal principles and cases in the context of public law.
</p>

<p>4. To encourage students to explore the ethical and societal implications of legal decisions and their impact on public governance.
</p>

                <p>The specific <b>objectives</b> of the program are:
                </p>

                <p>1. Develop a solid understanding of the legal concepts, principles, and institutions that form the foundation of public law.



                </p>

                <p>2. Analyze and evaluate key theories, debates, and case studies related to public law, providing a comprehensive understanding of its practical application.


                </p>

                <p>3. Apply legal reasoning and critical thinking skills to analyze and interpret statutes, regulations, and case law in the field of public law.



                </p>

                <p>4. Access the impact of public law on various aspects of governance, including human rights, administrative decision-making, constitutional interpretation, and judicial review.



                </p>

                <p>5. Develop effective oral and written communication skills, enabling students to articulate legal arguments and perspectives in a clear and concise manner.


                </p>

                <p>6. Foster an awareness of ethical considerations and the importance of upholding the rule of law in public administration and decision-making processes.
</p>

                <h5>Learning Outcomes:
                </h5>

                <p>By the end of the Public Law course, students will be able to:

                </p>

                <p>1. Demonstrate a comprehensive understanding of the foundational principles, theories, and institutions of public law.



                </p>

                <p>2. Analyze and critically evaluate legal concepts, theories, and case studies within the field of public law.



                </p>

                <p>3. Apply legal reasoning and analytical skills to interpret statutes, regulations, and judicial decisions in the context of public law.



                </p>

                <p>4. Access the implications of public law on various aspects of governance and the protection of individual rights.



                </p>

                <p>5. Communicate effectively, both orally and in writing, using legal terminology and arguments relevant to public law.



                </p>

                <p>6. Exhibit an understanding of ethical considerations and the importance of upholding the rule of law in public administration.



                </p>


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

                <p>Note: English and Mathematics are compulsory in some areas of study, contact the department if you are
                    not sure where to begin.

                </p>
            </div>

            <div id="tab3" class="tab-content">
                <h4>Career Opportunities for Public Law LL.B. Graduates:

                </h4>
                <ol>
                    <li>Legal Profession: Graduates can pursue careers in the legal profession, working as lawyers or legal advisors specializing in public law. They can join law firms, government legal departments, or non-profit organizations, representing clients in public law cases, providing legal advice, and advocating for individuals or organizations in matters related to public administration, constitutional law, and administrative law.




                    </li>
                    <li>Government and Public Administration: Graduates can work in various government agencies and public administration departments at the local, national, or international level. They can hold positions such as legal consultants, policy analysts, or legislative researchers, contributing to the development, implementation, and evaluation of public policies, regulations, and legislation.



                    </li>
                    <li>Judiciary and Judicial Services: Graduates can pursue careers within the judicial system, working as judges, court clerks, or legal researchers. They can play a crucial role in interpreting and applying the law in cases related to public law, ensuring the protection of constitutional rights, and upholding the principles of justice and the rule of law.



                    </li>
                    <li>Human Rights Organizations: Graduates can work in non-profit organizations and human rights advocacy groups, focusing on issues such as civil liberties, social justice, and human rights protection. They can contribute to legal research, policy analysis, and advocacy efforts aimed at promoting and safeguarding human rights within society.




                    </li>
                    <li>International Organizations: Graduates can find opportunities in international organizations such as the United Nations (UN), European Union (EU), and non-governmental organizations (NGOs) that specialize in public law and human rights. They can work in areas such as international law, legal compliance, human rights monitoring, and policy development.




                    </li>
                    <li>Research and Academia: Graduates can pursue research-oriented careers in academic institutions, think tanks, or research organizations. They can contribute to the field of public law by conducting research, publishing scholarly articles, and teaching courses on public law and related subjects.




                    </li>
                    <li>Public Policy Analysis: Graduates can work as policy analysts in research institutions, government agencies, or consulting firms. They can analyze and evaluate public policies, assess their legal implications, and make recommendations for policy development and implementation.



                    </li>

                    <li>Corporate Compliance and Governance: Graduates can work in corporate legal departments, focusing on compliance with public laws and regulations. They can ensure that organizations operate within legal frameworks, advise on legal risks, and develop corporate governance policies in line with public law requirements.





                    </li>


                    <li>Non-Profit and Advocacy Organizations: Graduates can contribute to non-profit organizations and advocacy groups that focus on issues related to public law, governance, and social justice. They can engage in public awareness campaigns, legal advocacy, and policy reform initiatives.




                    </li>

                    <li>Legal Journalism and Media: Graduates can work as legal journalists, legal analysts, or contributors to media outlets. They can report on legal cases, analyze legal developments, and provide commentary on public law issues for newspapers, television, radio, or online platforms.






                    </li>



                </ol>
            </div>

            <div id="tab4" class="tab-content">
                <p>The program cost at Yonevas Open University typically includes tuition fees, administrative fees, and
                    access to digital learning resources. These resources includes course materials, online libraries, and
                    other digital platforms that support the learning process. The cost structure may vary depending on the
                    specific program and its duration.
                </p>
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


        <div class="program-requirements"
            style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
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
        <div class="certificate-advert"
            style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
            <h2>LOOKING FOR SOMETHING ELSE?</h2>
            <p style="font-size: 15px; margin:5px;">Check out our 10 months professional certificate programs</p>

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
