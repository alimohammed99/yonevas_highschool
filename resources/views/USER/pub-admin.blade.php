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
                                    Public Administration
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
                                            <h1 class="feature-banner__title">Public Administration B.Sc.
                                            </h1>
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
                <p>The Public Administration B.Sc. program offers students a comprehensive understanding of the principles and practices involved in effectively managing public organizations and implementing public policies. This program is designed to equip students with the knowledge and skills required to navigate the complexities of public administration, address public sector challenges, and contribute to the development of efficient and transparent governance systems. Through a combination of theoretical knowledge, practical case studies, and experiential learning, students will gain insights into the dynamics of public organizations, public policy formulation and implementation, administrative processes, and public service delivery. The program prepares graduates for a wide range of career opportunities in public administration, public policy analysis, and government service at the local, national, and international levels.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Public Administration B.Sc. program is to provide students with a solid foundation in the field of public administration and equip them with the necessary skills and knowledge to effectively contribute to public sector management and policy-making. The program aims to:
                </p>
                <ol>
                    <li><strong>Develop a deep understanding of public administration theories and concepts:</strong> The program aims to familiarize students with the fundamental theories and concepts of public administration, including organizational behavior, public policy analysis, public finance, public personnel management, and administrative law. By gaining a strong theoretical foundation, students will be able to critically analyze and evaluate public administration practices.
                    </li>
                    <li><strong>Enhance practical skills for effective public management:</strong> The program aims to equip students with practical skills necessary for effective public management. This includes skills such as policy analysis, program evaluation, strategic planning, budgeting, leadership, and decision-making. Students will learn how to apply these skills in real-world scenarios and develop the ability to manage and lead public organizations.
                    </li>
                    <li><strong>Foster an understanding of ethical and accountable governance:</strong> The program aims to cultivate an understanding of ethical principles and values in public administration. Students will explore the importance of accountability, transparency, and integrity in public organizations. They will develop the skills to navigate ethical dilemmas and make responsible decisions in the public sector.
                    </li>
                    <li><strong>Promote critical thinking and analytical skills:</strong> The program aims to develop students' critical thinking and analytical skills. Through case studies, research projects, and policy analysis exercises, students will learn how to identify problems, evaluate policy options, and propose evidence-based solutions. They will develop the ability to think critically and analytically about complex public administration issues.
                    </li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Public Administration B.Sc. program, students will be able to:</p>
                <ol>
                    <li>Demonstrate a comprehensive understanding of the theories, concepts, and principles of public administration.
                    </li>
                    <li>Apply theoretical knowledge and practical skills to effectively manage public organizations and implement public policies.
                    </li>
                    <li>Analyze and evaluate public administration practices and policies using critical thinking and analytical skills.
                    </li>
                    <li>Demonstrate ethical decision-making and an understanding of the importance of accountability and transparency in public administration.
                    </li>
                    <li>Communicate effectively and collaborate with diverse stakeholders in the public sector.
                    </li>
                    <li>Contribute to the development and implementation of effective public policies and governance systems.
                    </li>
                    <li>Adapt to the evolving challenges and dynamics of public administration in a rapidly changing socio-political environment.
                    </li>
                    <li>Engage in lifelong learning and professional development to stay abreast of emerging trends and best practices in the field of public administration.
                    </li>
                </ol>
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
              <h4>Career Opportunities for Public Administration B.Sc. Graduates:
            </h4>
              <ol>
                <li><strong>Public Administration Officer:</strong> Graduates can work as public administration officers in government agencies at the local, regional, or national level. They can be involved in policy development, program management, budgeting, and overseeing the implementation of public services.
                </li>
                <li><strong>Policy Analyst:</strong> Graduates can pursue careers as policy analysts, working in government departments, think tanks, research institutes, or consulting firms. They can analyze existing policies, conduct research, and provide recommendations for improving public policies and programs.
                </li>
                <li><strong>Nonprofit Organization Manager:</strong> Graduates can work in nonprofit organizations, managing operations, fundraising, and program development. They can contribute to the strategic planning, financial management, and implementation of initiatives aimed at addressing social, environmental, or community development issues.
                </li>
                <li><strong>Government Relations Specialist:</strong> Graduates can work as government relations specialists in corporations, nonprofit organizations, or lobbying firms. They can monitor policy developments, advocate for their organization's interests, and facilitate communication and collaboration between the organization and government entities.
                </li>
                <li><strong>Public Sector Consultant:</strong> Graduates can work as consultants, providing expertise to public sector organizations on topics such as organizational development, process improvement, performance evaluation, and policy analysis. They can assist government agencies in enhancing efficiency, effectiveness, and transparency in their operations.
                </li>
                <li><strong>Program Manager:</strong> Graduates can pursue careers as program managers in government agencies, nonprofit organizations, or international development organizations. They can be responsible for planning, implementing, and evaluating programs that address social issues, public services, or community development.
                </li>
                <li><strong>Urban or Regional Planner:</strong> Graduates can work as urban or regional planners, collaborating with government agencies, private developers, and community stakeholders to develop plans and policies for sustainable urban or regional development. They can be involved in land use planning, transportation planning, and environmental management.
                </li>
                <li><strong>Human Resources Manager</strong>: Graduates can specialize in public sector human resources management, working in government agencies or public organizations. They can oversee recruitment, employee training and development, performance evaluation, and policy implementation related to personnel management.
                </li>
                <li><strong>Researcher:</strong> Graduates can pursue careers as researchers in academic institutions, think tanks, or research organizations, conducting studies on public administration, public policy, and governance issues. They can contribute to the advancement of knowledge in the field and inform evidence-based policy-making.
                </li>
                <li><strong>Public Affairs Specialist</strong>: Graduates can work as public affairs specialists, managing communication and public relations activities for government agencies, nonprofit organizations, or corporations. They can develop communication strategies, handle media relations, and engage with the public on policy matters.
                </li>
                <li><strong>International Development Consultant:</strong> Graduates can work in international development organizations or consulting firms, providing expertise on public administration and policy issues in developing countries. They can contribute to capacity building, governance reform, and sustainable development initiatives.
                </li>
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
                        <td>AMS 101</td>
                        <td>Principles of Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>AMS 102</td>
                        <td>Basic Mathematics</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>AMS 103</td>
                        <td>Introduction to Computers</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>AMS 104</td>
                        <td>Principles of Project Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 101</td>
                        <td>Elements of Public Administration</td>
                        <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 17</b></p>
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
                        <td>PAD 201</td>
                        <td>Introduction to Public Administration</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PAD 205</td>
                        <td>Office Administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 202</td>
                        <td>Nigerian Government & Administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 212</td>
                        <td>Rural and Community Development </td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 13</b></p>
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
                        <td>GST 312</td>
                        <td>Peace and Conflict Resolution</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ENT 312</td>
                        <td>Venture Creation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 301</td>
                        <td>Administrative Theory</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 303</td>
                        <td>International Administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 305</td>
                        <td>Public Personnel Administration</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PAD 307</td>
                        <td>Research Methods</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PAD 309</td>
                        <td>Comparative Local Government</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 311</td>
                        <td>Public Finance</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 313</td>
                        <td>Administrative Law</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 302</td>
                        <td>Administrative Behavior</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 306</td>
                        <td>Development Administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 308</td>
                        <td>E-governance</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 310</td>
                        <td>Intergovernmental Relations</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 312</td>
                        <td>Traditional Administrative System in Nigeria</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 28</b></p>
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
                        <td>PAD 401</td>
                        <td>Theory and Practice of Planning</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 403</td>
                        <td>Public Policy Analysis</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PAD 405</td>
                        <td>Workshop in Public Administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 407</td>
                        <td>Public Finance Administration</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PAD 409</td>
                        <td>Public Service Ethics & Accountability</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 411</td>
                        <td>Social & Welfare Administration in Nigeria</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 402</td>
                        <td>Public Project Analysis and Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 404</td>
                        <td>Public Enterprises Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PAD 406</td>
                        <td>Research Project</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>PAD 408</td>
                        <td>Comparative Public Administration</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 26</b></p>
            </div>
        </div>
        <div class="certificate-advert" style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
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
