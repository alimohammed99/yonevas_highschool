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
                                    Political Science
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
                                            <h1 class="feature-banner__title">Political Science B.Sc
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
                <p>The Bachelor of Science (B.Sc.) in Political Science is a comprehensive program designed to provide students with a deep understanding of political systems, theories, and processes. Through an interdisciplinary approach, this program explores the complex dynamics of politics, governance, and international relations. Students will engage with key concepts, theories, and methodologies in political science, while critically analyzing political institutions, public policies, and global issues. By examining the diverse perspectives and ideologies that shape political systems, students will develop a well-rounded understanding of the political landscape and the forces that influence it. This program offers a solid foundation for students aspiring to pursue careers in government, international organizations, research, advocacy, or further studies in political science.
                </p>
                <p><strong>Aim and Objectives:</strong> The aim of the B.Sc. in Political Science is to provide students with a comprehensive understanding of political systems, institutions, and processes at the national and international levels. The program aims to cultivate critical thinking, analytical skills, and a deep appreciation for the complexities of politics. The objectives of the program include:
                </p>
                <ol>
                    <li><strong>Develop a broad knowledge base:</strong> The program aims to equip students with a solid foundation in political science, including an understanding of political theories, comparative politics, international relations, and public policy. Students will gain knowledge of key concepts and methodologies used in political analysis.</li>
                    <li><strong>Foster critical thinking and analysis:</strong> The program aims to develop students' ability to critically analyze political issues, policies, and events. Students will learn to evaluate different perspectives, assess evidence, and make informed judgments about political phenomena.</li>
                    <li><strong>Enhance research and communication skills:</strong> The program aims to develop students' research and communication skills, including the ability to gather and analyze political data, conduct independent research, and effectively communicate their ideas through oral presentations and written reports.</li>
                    <li><strong>Promote global awareness:</strong> The program aims to foster an understanding of the global nature of politics and the interconnectedness of political systems. Students will gain insights into international relations, global governance, and the impact of globalization on political dynamics.</li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the B.Sc. in Political Science, students will be able to:</p>
                <ul>
                    <li>Demonstrate a comprehensive understanding of political theories, concepts, and methodologies.</li>
                    <li>Analyze and evaluate political systems, institutions, and processes at the national and international levels.</li>
                    <li>Critically assess political issues, policies, and events using evidence-based analysis.</li>
                    <li>Conduct independent research on political topics, utilizing appropriate research methods and resources.</li>
                    <li>Effectively communicate political ideas, arguments, and research findings through oral and written means.</li>
                    <li>Demonstrate a global perspective and an awareness of the interconnectedness of political systems and global issues.</li>
                </ul>
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
              <h4>Career Opportunities for Political Science B.Sc. Graduates:
                </h4>
              <ol>
                <li><strong>Government and Public Administration:</strong> Graduates can pursue careers in government and public administration at various levels, including local, state, and national government. They can work in roles such as policy analysts, legislative aides, campaign managers, political advisors, public affairs officers, or civil servants. They can contribute to policy development, political strategy, public administration, and public service.</li>
                <li><strong>Political Campaigns and Advocacy:</strong> Graduates can work in political campaigns, serving as campaign managers, communication specialists, or policy advisors. They can also join advocacy organizations, interest groups, or non-profit organizations focused on specific issues such as human rights, environmental conservation, social justice, or healthcare reform. They can engage in lobbying, public relations, grassroots organizing, and policy advocacy.</li>
                <li><strong>International Organizations:</strong> Graduates can find opportunities in international organizations such as the United Nations (UN), European Union (EU), World Bank, and non-governmental organizations (NGOs). They can work in roles related to international relations, diplomacy, development, human rights, peacebuilding, or global governance. They can contribute to policy analysis, program management, research, and advocacy on global issues.</li>
                <li><strong>Research and Analysis:</strong> Graduates can pursue careers in research institutions, think tanks, or consulting firms. They can work as policy researchers, political analysts, or consultants, conducting research, analyzing data, and providing insights on political trends, policy implications, and public opinion. They can contribute to policy recommendations, white papers, and research reports.</li>
                <li><strong>Journalism and Media:</strong> Graduates can work as political journalists, reporters, or analysts in media organizations. They can cover political events, elections, and policy debates, providing analysis and commentary on current affairs. They can contribute to print, broadcast, or online media outlets, informing the public and shaping public discourse.</li>
                <li><strong>International Relations and Diplomacy:</strong> Graduates can pursue careers in international relations and diplomacy, working for foreign ministries, diplomatic missions, or international organizations. They can serve as diplomats, policy advisors, or negotiators, engaging in diplomatic missions, representing their country's interests, and contributing to global diplomacy and international cooperation.</li>
                <li><strong>Legal and Paralegal Careers:</strong> Graduates can pursue legal careers by attending law school or working as paralegals in law firms or legal departments. Their understanding of political systems, constitutional law, and public policy can be valuable in legal analysis, legislative drafting, or advocacy for legal cases related to public policy and governance.</li>
                <li><strong>Academia and Education:</strong> Graduates can pursue careers in academia by pursuing advanced degrees and becoming researchers, lecturers, or professors in political science or related fields. They can teach and mentor students, conduct research, and contribute to the academic discourse on political theories, international relations, and public policy.</li>
                <li><strong>Non-profit and Community Development:</strong> Graduates can work in non-profit organizations focused on community development, social justice, or public policy. They can contribute to program management, policy analysis, community organizing, or advocacy efforts, addressing social and political issues at the grassroots level.</li>
                <li><strong>Corporate and Business Sectors:</strong> Graduates can work in the corporate sector, particularly in areas related to government relations, public affairs, corporate social responsibility (CSR), or regulatory compliance. They can help businesses navigate political landscapes, engage with policymakers, and ensure compliance with government regulations.</li>
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
                      <td>Communication in English</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>GST 112</td>
                      <td>Nigerian Peoples and Culture</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 101</td>
                      <td>Introduction to Political Science</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 103</td>
                      <td>Organisation of Government</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 105</td>
                      <td>Nigerian Constitutional Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 102</td>
                      <td>Introduction to African Politics</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 104</td>
                      <td>Nigerian Legal Systems</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 14</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">200 level</h4>
                <table>
                    <tr>
                      <th>Course Code</th>
                      <th>Course Title</th>
                      <th>Unit</th>
                    </tr>
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
                      <td>POL 201</td>
                      <td>Nigerian Government and Politics</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 203</td>
                      <td>Political Ideas</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 205</td>
                      <td>Introduction to International Relations</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 202</td>
                      <td>Introduction to Political Analysis</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 204</td>
                      <td>Foundations of Political Economy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 206</td>
                      <td>Introduction to Public Administration</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 19</b></p>
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
                      <td>SSC 301</td>
                      <td>Innovation in the Social Sciences</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SSC 302</td>
                      <td>Research Method I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 301</td>
                      <td>History of Political thought</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 303</td>
                      <td>Contemporary Political Analysis</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 305</td>
                      <td>Public Policy analysis</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 307</td>
                      <td>Statistics for Political Science</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 309</td>
                      <td>Theories of International Relations</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 312</td>
                      <td>Theory and Practice of Marxism</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 302</td>
                      <td>Logic and Methods of Political Science Research</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 304</td>
                      <td>Political Behaviour</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 306</td>
                      <td>Comparative Federalism</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 308</td>
                      <td>Politics of development and underdevelopment</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 310</td>
                      <td>Democratisation Studies</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 30</b></p>
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
                      <td>SSC 401</td>
                      <td>Research Method II</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 401</td>
                      <td>Civil-Military Relations</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 403</td>
                      <td>Contemporary Defence and Strategic Studies</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 405</td>
                      <td>Nigerian Foreign Policy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 407</td>
                      <td>Research Project</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>POL 408</td>
                      <td>Political Sociology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 402</td>
                      <td>State and Economy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 404</td>
                      <td>Nigerian Local Government System</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 406</td>
                      <td>International Law and Organisation</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 410</td>
                      <td>Political Parties and Pressure Groups</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 22</b></p>
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
