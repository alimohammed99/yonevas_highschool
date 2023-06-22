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
                                    Commercial and Industrial Law
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
                                            <h1 class="feature-banner__title"> Commercial and Industrial Law LL.B.</h1>

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
                <p>The Commercial and Industrial Law course provides students with a comprehensive understanding of the
                    legal principles and regulations that govern commercial transactions and industrial operations. This
                    course delves into various aspects of business law, including contract law, company law, intellectual
                    property law, competition law, and employment law. Students will explore the legal framework within
                    which businesses operate, gaining insights into the rights, obligations, and responsibilities of
                    individuals and organizations in the commercial and industrial sectors. Through case studies, practical
                    examples, and interactive discussions, students will develop a solid foundation in commercial and
                    industrial law and its practical applications in the business world.

                </p>
                <h5>Aim and Objectives</h5>
                <p>The <b>aim</b> of the Commercial and Industrial Law course is to equip students with the knowledge,
                    skills, and understanding of the legal principles and regulations that are essential for effective
                    decision-making and compliance within commercial and industrial settings. By studying this course,
                    students will develop a comprehensive understanding of the legal framework governing business
                    operations, enabling them to navigate legal complexities and make informed decisions in a dynamic
                    business environment.
                </p>

                <p>The specific <b>objectives</b> of the program are:
                </p>

                <p>1. Understand Legal Principles: The course aims to familiarize students with fundamental legal principles
                    and concepts relevant to commercial and industrial law. Students will gain an in-depth understanding of
                    contract formation, company structures, intellectual property rights, competition regulations, and
                    employment laws.


                </p>

                <p>2. Analyze Legal Issues: The course aims to develop students' analytical skills to identify legal issues
                    and apply relevant laws to real-world scenarios. Students will learn to critically analyze and interpret
                    legal statutes, case law, and contractual agreements, enabling them to evaluate legal risks and make
                    sound decisions.


                </p>

                <p>3. Comprehend Regulatory Frameworks: The course aims to provide students with a comprehensive
                    understanding of the regulatory frameworks governing commercial and industrial activities. Students will
                    explore the legal obligations, rights, and responsibilities of businesses and individuals, including
                    compliance with consumer protection laws, labor regulations, and corporate governance standards.


                </p>

                <p>4. Enhance Legal Research and Writing Skills: The course aims to enhance students' legal research and
                    writing skills. Students will learn effective research techniques to locate and analyze legal sources,
                    such as statutes, case law, and legal precedents. They will also develop proficiency in legal writing,
                    including drafting contracts, legal opinions, and legal memoranda.


                </p>

                <p>5. Apply Legal Knowledge to Practical Situations: The course aims to equip students with the ability to
                    apply their legal knowledge to practical situations. Through case studies, simulations, and practical
                    exercises, students will develop problem-solving skills and learn to navigate legal challenges commonly
                    faced in commercial and industrial settings.


                </p>

                <h5>Learning Outcomes:
                </h5>

                <p>By the end of the Commercial and Industrial Law course, students will be able to:

                </p>

                <p>1. Demonstrate a comprehensive understanding of the legal principles and regulations relevant to
                    commercial and industrial law.


                </p>

                <p>2. Analyze and evaluate legal issues arising in commercial and industrial contexts.


                </p>

                <p>3. Apply legal principles and regulations to practical situations, considering ethical and commercial
                    considerations.


                </p>

                <p>4. Conduct legal research using relevant sources and effectively communicate legal analysis in oral and
                    written form.


                </p>

                <p>5. Understand and comply with legal obligations and responsibilities within commercial and industrial
                    operations.


                </p>

                <p>6. Evaluate legal risks and make informed decisions based on legal considerations.


                </p>

                <p>7. Collaborate effectively in group discussions and engage in critical thinking related to commercial and
                    industrial law.



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
                <h4>Career Opportunities for Commercial and Industrial Law LL.B. Graduates:

                </h4>
                <ol>
                    <li>Corporate Lawyer: Graduates can pursue careers as corporate lawyers, working in law firms or
                        corporate legal departments. They can provide legal advice, draft contracts and agreements, handle
                        mergers and acquisitions, and ensure compliance with relevant laws and regulations. Corporate
                        lawyers play a crucial role in managing legal risks and facilitating business transactions.



                    </li>
                    <li>In-House Counsel: Many companies have in-house legal departments to handle their legal affairs.
                        Graduates can work as in-house counsel, providing legal guidance and support to the organization.
                        They can assist with contract negotiation, regulatory compliance, intellectual property protection,
                        employment law matters, and dispute resolution within the company.



                    </li>
                    <li>Compliance Officer: Graduates can work as compliance officers in organizations, ensuring adherence
                        to legal and regulatory requirements. They can develop and implement compliance programs, conduct
                        internal audits, monitor business practices, and provide training to employees on legal compliance.
                        Compliance officers play a vital role in mitigating legal risks and maintaining ethical business
                        practices.



                    </li>
                    <li>Legal Consultant: Graduates can work as legal consultants, offering their expertise to businesses
                        and individuals. They can provide advice on legal matters, review contracts, conduct legal research,
                        and assist with legal documentation. Legal consultants often work on a freelance basis or as part of
                        consulting firms, serving clients across various industries.



                    </li>
                    <li>Government Regulatory Agencies: Graduates can find employment opportunities in government regulatory
                        agencies responsible for overseeing commercial and industrial operations. They can work as legal
                        advisors, policy analysts, or compliance officers, ensuring businesses comply with regulations and
                        assisting in the formulation of regulatory frameworks.



                    </li>
                    <li>Intellectual Property Specialist: Graduates with a specialization in intellectual property law can
                        pursue careers as intellectual property specialists. They can work in law firms, corporations, or
                        specialized intellectual property agencies, providing guidance on trademarks, patents, copyrights,
                        and trade secrets. Intellectual property specialists help businesses protect their valuable
                        intellectual assets and enforce their rights.



                    </li>
                    <li>Arbitrator or Mediator: Graduates can explore careers as arbitrators or mediators, facilitating the
                        resolution of disputes between parties outside the court system. They can work in alternative
                        dispute resolution centers, law firms, or as independent practitioners. Arbitrators and mediators
                        play a vital role in helping parties reach mutually agreeable solutions, reducing the need for
                        lengthy litigation.



                    </li>

                    <li>Legal Researcher: Graduates can work as legal researchers in think tanks, research institutions, or
                        legal publishing companies. They can conduct in-depth research on legal issues, contribute to legal
                        publications, and provide analysis and insights on emerging legal trends. Legal researchers
                        contribute to the advancement of legal scholarship and policy development.




                    </li>


                    <li>Compliance Analyst: Graduates can work as compliance analysts in financial institutions,
                        multinational corporations, or regulatory bodies. They can assess regulatory compliance, monitor
                        financial transactions, and develop risk mitigation strategies. Compliance analysts help
                        organizations navigate complex regulatory environments and ensure adherence to legal requirements.




                    </li>

                    <li>Academia and Teaching: Graduates can pursue careers in academia as professors or instructors,
                        teaching commercial and industrial law to future students. They can contribute to legal research and
                        publish scholarly work in the field. By imparting their knowledge and expertise, they play a crucial
                        role in shaping the next generation of legal professionals.





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
