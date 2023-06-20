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
                                    International Relations
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
                                            <h1 class="feature-banner__title">International Relations B.Sc.</h1>

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
                <p>The International Relations Bachelor of Science (B.Sc.) program is designed to provide students with a comprehensive understanding of the complex dynamics and issues in the field of international relations. The program aims to equip students with the necessary knowledge, skills, and critical thinking abilities to analyze and navigate the ever-changing global landscape.</p>
                <ol>
                    <li>
                        Core Courses:
                        <ul>
                            <li>Introduction to International Relations: Provides a foundational understanding of key concepts, theories, and approaches in international relations.</li>
                            <li>Global Politics and Governance: Explores the structures and institutions that shape global politics and governance, including the United Nations, regional organizations, and non-state actors.</li>
                            <li>International Security: Examines the causes of conflict, the dynamics of warfare, and the role of diplomacy and international law in maintaining global security.</li>
                            <li>International Political Economy: Focuses on the intersection of politics and economics in the global arena, including trade, development, and the role of multinational corporations.</li>
                            <li>Comparative Politics: Analyzes the political systems, ideologies, and processes of different countries to understand variations in governance and political behavior.</li>
                            <li>Research Methods in International Relations: Introduces students to quantitative and qualitative research methods and prepares them to conduct independent research.</li>
                            <li>Foreign Policy Analysis: Investigates the factors that shape foreign policy decisions and the impact of these decisions on global relations.</li>
                        </ul>
                    </li>
                    <li>
                        Elective Courses:
                        <ul>
                            <li>Diplomacy and Negotiation: Explores the theory and practice of diplomacy and negotiation in resolving conflicts and promoting cooperation.</li>
                            <li>Global Governance and International Organizations: Examines the roles and effectiveness of international organizations in addressing global challenges such as climate change, human rights, and humanitarian crises.</li>
                            <li>International Law and Human Rights: Studies the principles, norms, and institutions of international law, with a focus on human rights and humanitarian law.</li>
                            <li>Regional Studies: Analyzes specific regions of the world (e.g., Middle East, Asia, Africa) to understand their unique geopolitical dynamics and challenges.</li>
                            <li>Globalization and Culture: Explores the cultural dimensions of globalization and the impact of globalization on identities, cultures, and social movements.</li>
                            <li>Conflict Resolution and Peacebuilding: Examines theories and strategies for resolving conflicts and promoting sustainable peace at various levels of society.</li>
                        </ul>
                    </li>
                </ol>                
                <p><strong>Learning Outcomes: </strong> Upon completion of the International Relations B.Sc. program, students will have acquired the following skills and knowledge:</p>
                <ol>
                    <li>Comprehensive Understanding: Students will have a solid foundation in the theories, concepts, and methods of international relations, enabling them to analyze global issues from multiple perspectives.</li>
                    <li>Critical Thinking: Students will develop critical thinking skills to evaluate complex global challenges, analyze information, and propose evidence-based solutions.</li>
                    <li>Research and Analysis: Students will be proficient in conducting research, employing both qualitative and quantitative methods, and analyzing data to inform their understanding of international relations.</li>
                    <li>Communication Skills: Students will develop strong oral and written communication skills, allowing them to articulate complex ideas, present arguments, and engage in diplomatic dialogue effectively.</li>
                    <li>Global Perspective: Students will gain a deep understanding of the interconnectedness of nations and cultures, enabling them to navigate the complexities of global politics and engage with diverse perspectives.</li>
                    <li>Professional Skills: Students will acquire practical skills relevant to careers in international relations, such as negotiation, policy analysis, diplomacy, and project management.</li>
                    <li>Ethical Awareness: Students will develop an appreciation for ethical considerations in international relations, including human rights, social justice, and environmental sustainability.</li>
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
                <h4>Career Opportunities for International Relations B.Sc. Graduates:</h4>
                <ol>
                    <li><strong>Diplomatic Service:</strong> Graduates with a B.Sc. in International Relations can pursue careers in the diplomatic service of their home country. They can work as diplomats, representing their country's interests abroad, engaging in diplomatic negotiations, and promoting international cooperation. This can include roles in embassies, consulates, and international organizations.</li>
                    <li><strong>International Organizations:</strong> Graduates can find opportunities in international organizations such as the United Nations (UN), World Bank, International Monetary Fund (IMF), European Union (EU), and regional organizations. They can work in various roles, including policy analysis, program management, research, and advocacy, focusing on global issues such as peace and security, human rights, sustainable development, and economic cooperation.</li>
                    <li><strong>Government Agencies:</strong> Graduates can work in government agencies involved in foreign affairs, international trade, and diplomacy. They can contribute to policy development, analyze international trends, provide strategic advice, and support diplomatic initiatives. This can include positions in ministries of foreign affairs, trade departments, defense agencies, and intelligence services.</li>
                    <li><strong>Non-Governmental Organizations (NGOs):</strong> NGOs play a crucial role in addressing global challenges and promoting social justice. Graduates can work in NGOs focused on human rights, humanitarian aid, development, and peacebuilding. They can contribute to program implementation, policy advocacy, research, and project management, working on issues such as poverty alleviation, gender equality, and conflict resolution.</li>
                    <li><strong>International Business and Trade:</strong> Graduates can pursue careers in international business and trade. They can work in multinational corporations, export-import companies, trade associations, and consulting firms, supporting global business operations, market research, international negotiations, and cross-cultural communication. They can specialize in areas such as international marketing, trade policy, supply chain management, and global logistics.</li>
                    <li><strong>Journalism and Media:</strong> Graduates can work as journalists, reporters, or analysts covering international affairs. They can work for international news agencies, media outlets, think tanks, and research institutions, providing analysis and reporting on global events, political developments, and international relations. They can also work as foreign correspondents or contribute to international news publications.</li>
                    <li><strong>Research and Academia:</strong> Graduates can pursue research-oriented careers in academic institutions, think tanks, and research organizations. They can contribute to the field of international relations by conducting research, analyzing global trends, and publishing scholarly work. They can also teach and mentor students in universities or colleges.</li>
                    <li><strong>Intelligence and Security:</strong> Graduates can work in intelligence agencies and security organizations, analyzing geopolitical developments, monitoring threats, and providing assessments on national and international security issues. They can contribute to intelligence gathering, strategic analysis, risk assessment, and policy formulation related to international security and counterterrorism efforts.</li>
                    <li><strong>Consulting and Risk Analysis:</strong> Graduates can work as consultants, providing expertise on international relations, geopolitical risk, and global business strategies. They can assist organizations in understanding political and economic risks in different regions, conducting risk assessments, and developing strategies for international operations.</li>
                    <li><strong>Peace and Conflict Resolution:</strong> Graduates can work in organizations focused on peacebuilding, conflict resolution, and post-conflict reconstruction. They can contribute to initiatives aimed at promoting peace, mediating disputes, facilitating dialogue, and implementing reconciliation programs.</li>
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
                      <td>IRS 102</td>
                      <td>Evolution of the Contemporary International System</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 104</td>
                      <td>The Rise of Nation States</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 101</td>
                      <td>Ancestors of the Contemporary International System</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 103</td>
                      <td>Introduction to African Politics</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 105</td>
                      <td>History of Nigeria</td>
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
                      <td>IRS 202</td>
                      <td>Structure of International Society</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 204</td>
                      <td>Political Thought Plato-Machiavelli</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 206</td>
                      <td>Foundation of Political Economy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 203</td>
                      <td>Introduction to Political analysis</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 205</td>
                      <td>Political Thought Since Hobbes</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 207</td>
                      <td>New States In World Politics</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SSC 202</td>
                      <td>Introduction to Computer and its Application</td>
                      <td>3</td>
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
                      <td>IRS 301</td>
                      <td>International Economic Relations</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 303</td>
                      <td>The International Political System</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 305</td>
                      <td>Law of Nations (International Law)</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 307</td>
                      <td>Intentional Politics in the Post-Cold War Era</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 311</td>
                      <td>Theory and Practice of Administration</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 304</td>
                      <td>Diplomacy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 306</td>
                      <td>Logic and Methods of Political Inquiry</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 308</td>
                      <td>International Politics of Africa</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 310</td>
                      <td>Theories of International Relations</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 312</td>
                      <td>Integration Theories and Regionalism</td>
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
                      <td>IRS 402</td>
                      <td>Nigerian Foreign Policy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 404</td>
                      <td>Contemporary Strategic Studies</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>IRS 406</td>
                      <td>International Institutions</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 401</td>
                      <td>Foreign Policy Analysis</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>IRS 403</td>
                      <td>Human Rights</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>IRS 405</td>
                      <td>Foreign Policies of the Powers</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>IRS 407</td>
                      <td>Research Project</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>SSC 401</td>
                      <td>Research Method II</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 20</b></p>
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
