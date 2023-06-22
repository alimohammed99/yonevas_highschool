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
                                    Private & Property Law
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
                                            <h1 class="feature-banner__title">     Private & Property Law LL.B.</h1>

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
                <p>The Private and Property Law B.Sc. program offers a comprehensive study of legal principles and practices related to private law, focusing specifically on property law. This program is designed to provide students with a deep understanding of the legal framework governing private rights, obligations, and transactions. Through engaging coursework, case studies, and practical exercises, students will develop the knowledge and skills necessary to navigate the complex landscape of private and property law. By exploring topics such as contracts, torts, property rights, and intellectual property, students will gain a solid foundation in this specialized area of law.
                </p>
                <h5>Aim and Objectives</h5>
                <p>The <b>aim</b> of the Private and Property Law LL.B. program is to equip students with a thorough understanding of the principles, theories, and practical applications of private and property law. The program aims to:
                </p>

                <p>The specific <b>objectives</b> of the program are:
                </p>

                <p>1. Provide a comprehensive understanding: The program aims to provide students with a comprehensive understanding of private and property law, including its historical development, theoretical foundations, and practical implications. Students will explore various legal concepts, doctrines, and principles related to private rights and property ownership.

                </p>

                <p>2. Develop analytical and critical thinking skills: The program aims to develop students' analytical and critical thinking skills, enabling them to analyze complex legal issues and apply legal reasoning to real-world scenarios. Students will learn to evaluate legal arguments, identify legal issues, and propose appropriate legal solutions.

                </p>

                <p>3. Foster legal research and writing skills: The program aims to enhance students' legal research and writing skills, equipping them with the ability to conduct thorough legal research, analyze case law, and communicate their findings effectively through legal writing. Students will develop the skills necessary to prepare legal documents, such as contracts, legal opinions, and memoranda.

                </p>

                <p>4. Promote ethical and professional conduct: The program aims to instill a strong sense of ethics and professionalism in students, emphasizing the importance of integrity, honesty, and respect in legal practice. Students will be exposed to ethical dilemmas and professional responsibilities in the context of private and property law.

                </p>

                <p>5. Enhance practical legal skills: The program aims to enhance students' practical legal skills, enabling them to apply legal principles to practical situations. Students will participate in simulated exercises, case studies, and moot court sessions to develop their negotiation, advocacy, and legal drafting skills.

                </p>

                <h5>Learning Outcomes:
                </h5>

                <p>By the end of the Private and Property Law B.Sc. program, students will:
                </p>

                <p>1. Demonstrate a comprehensive understanding of the principles, theories, and concepts of Private and Property law.

                </p>

                <p>2. Analyze and evaluate legal issues related to private rights, obligations, and property ownership.

                </p>

                <p>3. Conduct independent legal research, analyze case law, and communicate legal arguments effectively through legal writing.

                </p>

                <p>4. Apply legal reasoning and problem-solving skills to resolve complex legal issues in the context of private and property law.

                </p>

                <p>5. Demonstrate ethical and professional conduct in legal practice, adhering to legal and ethical standards.

                </p>

                <p>6. Utilize practical legal skills, such as negotiation, advocacy, and legal drafting, to effectively address legal challenges in private and property law.

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

                <p>Note:   English and Mathematics are compulsory in some areas of study, contact the department if you are not sure where to begin.

                </p>
            </div>

            <div id="tab3" class="tab-content">
                <h4>Career Opportunities for Private and Property Law LL.B. Graduates:

                </h4>
                <ol>
                    <li>Private Law Practice: Graduates can pursue careers as private practice lawyers, specializing in private and property law. They can work in law firms, handling cases related to contracts, torts, property disputes, and other private legal matters. Graduates may choose to specialize further in areas such as real estate law, intellectual property law, or family law.


                    </li>
                    <li>Corporate Counsel: Graduates can work as in-house legal counsel for corporations, providing advice and guidance on private law matters. They can assist with contract negotiations, intellectual property protection, compliance with regulations, and risk management. Graduates may find opportunities in various industries, including real estate, finance, technology, and manufacturing.


                    </li>
                    <li>Government Agencies: Graduates can work in government agencies involved in regulatory compliance, contract enforcement, or property management. They can contribute to policy development, legal analysis, and advising government bodies on private law matters. Opportunities may exist within departments such as justice, commerce, housing, and urban development.


                    </li>
                    <li>Real Estate and Property Management: Graduates can pursue careers in the real estate industry, working as legal advisors, property managers, or title examiners. They can assist in drafting contracts, conducting property transactions, resolving disputes, and ensuring compliance with property laws and regulations.


                    </li>
                    <li>Intellectual Property Law: Graduates with an interest in intellectual property can specialize in this area and work as intellectual property lawyers. They can assist clients with protecting trademarks, copyrights, and patents, and enforcing intellectual property rights. Opportunities may exist in law firms, technology companies, entertainment industry, and research institutions.


                    </li>
                    <li>Compliance and Risk Management: Graduates can work in compliance departments of corporations or consulting firms, ensuring adherence to legal and regulatory frameworks. They can help organizations identify and mitigate legal risks, develop compliance programs, and provide legal guidance on corporate activities and transactions.


                    </li>
                    <li>Alternative Dispute Resolution: Graduates can pursue careers in alternative dispute resolution methods such as mediation or arbitration. They can work as mediators or arbitrators, helping parties resolve conflicts outside of the courtroom, particularly in private law matters such as contract disputes or property disagreements.


                    </li>


                </ol>
            </div>

            <div id="tab4" class="tab-content">
                <p>The program cost at Yonevas Open University typically includes tuition fees, administrative fees, and access to digital learning resources. These resources  includes course materials, online libraries, and other digital platforms that support the learning process. The cost structure may vary depending on the specific program and its duration.
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
