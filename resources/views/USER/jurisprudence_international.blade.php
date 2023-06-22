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
                                    Jurisprudence & International Law
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
                                            <h1 class="feature-banner__title">Jurisprudence & International Law LL.B.</h1>

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
                <p>The Jurisprudence and International Law B.Sc. program offers students a comprehensive understanding of
                    the principles and theories that underpin the legal systems and international legal frameworks. This
                    program delves into the philosophical and theoretical aspects of law, exploring concepts of justice,
                    human rights, and legal reasoning. Additionally, it focuses on the study of international law, analyzing
                    the legal norms and principles that govern the interactions between states and individuals in the global
                    arena. Through a combination of theoretical study, case analysis, and practical applications, students
                    will develop a strong foundation in jurisprudence and international law, preparing them for careers in
                    law, diplomacy, international organizations, and academia.
                </p>
                <h5>Aim and Objectives</h5>
                <p>The <b>aim</b> of the Jurisprudence and International Law LL.B. program is to equip students with a deep
                    understanding of legal theory, principles, and international legal frameworks. The program aims to
                    develop students' critical thinking and analytical skills, enabling them to engage in theoretical
                    debates, ethical considerations, and practical applications of law. The program also aims to foster a
                    global perspective and intercultural competence, encouraging students to appreciate the complexities and
                    challenges of international legal systems.
                </p>

                <p>The specific <b>objectives</b> of the program are:
                </p>

                <p>1. To provide students with a solid foundation in the fundamental principles of jurisprudence and legal
                    theory, enabling them to critically analyze and interpret legal concepts and doctrines.
                </p>

                <p>2. To develop students' understanding of international law, including the sources of international law,
                    principles of state sovereignty, human rights, and the role of international organizations.
                </p>

                <p>3. To enhance students' research and analytical skills, enabling them to conduct independent legal
                    research, analyze legal cases, and apply legal principles to practical scenarios.
                </p>

                <p>4. To foster students' communication and argumentation skills, enabling them to articulate legal
                    arguments, engage in legal debates, and present their ideas effectively.
                </p>

                <p>5. To cultivate an awareness of the ethical dimensions of law and international relations, promoting a
                    sense of social responsibility and a commitment to justice and human rights.
                </p>

                <h5>Learning Outcomes:
                </h5>

                <p>By the end of the Jurisprudence and International Law B.Sc. program, students will be able to:
                </p>

                <p>1. Demonstrate a comprehensive understanding of the principles and theories of jurisprudence, including
                    legal positivism, natural law, legal realism, and critical legal studies.
                </p>

                <p>2. Analyze and interpret legal doctrines, cases, and statutes, applying critical thinking and legal
                    reasoning skills to solve complex legal problems.
                </p>

                <p>3. Explain the sources of international law and analyze the legal norms and principles that govern state
                    interactions, human rights, and international organizations.
                </p>

                <p>4. Conduct independent legal research, utilizing appropriate research methodologies and legal resources
                    to analyze legal issues and formulate legal arguments.
                </p>

                <p>5. Present legal arguments and opinions effectively, both orally and in writing, demonstrating strong
                    communication and advocacy skills.
                </p>

                <p>6. Evaluate ethical dimensions of legal issues and international relations, demonstrating a commitment to
                    justice, human rights, and social responsibility in the practice of law.
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
                <h4>Career Opportunities for Jurisprudence and International Law LL.B. Graduates:
                </h4>
                <ol>
                    <li>Legal Practice: Graduates can pursue careers as lawyers, advocates, or legal consultants,
                        representing clients in various legal matters. They can specialize in areas such as international
                        law, human rights, international trade, or public interest law. Graduates may work in law firms,
                        corporate legal departments, or establish their own legal practices.
                    </li>
                    <li>International Organizations: Graduates can work in international organizations such as the United
                        Nations (UN), International Court of Justice (ICJ), International Criminal Court (ICC), or regional
                        organizations. They can contribute to legal research, policy analysis, treaty negotiations, and
                        dispute resolution, focusing on international law and human rights issues.
                    </li>
                    <li>Diplomatic Service: Graduates can pursue careers in the diplomatic service of their home country or
                        work as diplomats in international organizations. They can engage in diplomatic negotiations,
                        represent their country's interests, and contribute to the development and implementation of
                        international agreements and treaties.
                    </li>
                    <li>Government Agencies: Graduates can work in government departments related to foreign affairs,
                        international trade, or human rights. They can contribute to policy formulation, legal analysis, and
                        the development of international agreements and treaties. Graduates may work in ministries of
                        foreign affairs, trade departments, or human rights commissions.
                    </li>
                    <li>Legal Compliance and Risk Management: Graduates can work in corporations, multinational companies,
                        or financial institutions, ensuring legal compliance with national and international regulations.
                        They can provide legal advice, assess legal risks, and develop strategies to mitigate legal
                        challenges in areas such as international business transactions, corporate governance, or
                        intellectual property.
                    </li>
                    <li>Legal Writing and Journalism: Graduates can pursue careers in legal writing, journalism, or legal
                        publishing. They can work as legal analysts, legal journalists, or authors, providing analysis and
                        commentary on legal issues for newspapers, magazines, or online platforms.
                    </li>
                    <li>Public Sector and Policy Analysis: Graduates can work in government agencies or research
                        organizations, engaging in policy analysis, legislative drafting, or public sector management. They
                        can contribute to the development and implementation of legal and regulatory frameworks at the
                        national or international level.
                    </li>
                    <li>Mediation and Arbitration: Graduates can work as mediators or arbitrators, facilitating the
                        resolution of legal disputes between parties. They can work in alternative dispute resolution
                        organizations, legal departments, or as independent practitioners, helping parties find mutually
                        acceptable solutions outside the traditional court system.

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
