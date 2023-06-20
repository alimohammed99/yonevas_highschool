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
                                    Development Studies
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
                                            <h1 class="feature-banner__title">Development Studies B.Sc.
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
                <p>The Development Studies B.Sc. is a multidisciplinary undergraduate program designed to provide students with a comprehensive understanding of development theories, policies, and practices. The program combines elements of economics, sociology, political science, and other related fields to explore the social, economic, political, and environmental dimensions of development.
                </p>
                <p><strong>Core Courses:</strong> The core courses in the Development Studies B.Sc. program typically cover the following areas:
                </p>
                <ol>
                    <li><strong>Introduction to Development Studies:</strong> Provides an overview of key concepts, theories, and approaches to development. Students will gain a deep understanding of the historical context and evolution of development studies, as well as the various theoretical frameworks used to analyze development processes.</li>

                    <li><strong>Economic Development:</strong> Examines theories of economic growth, poverty, inequality, and sustainable development. This course will delve into the economic factors and policies that contribute to or hinder development, including discussions on international trade, foreign investment, and economic governance.</li>

                    <li><strong>Sociology of Development:</strong> Explores the social aspects of development, including issues of social justice, gender, and social change. Students will critically examine how social structures, cultural norms, and power dynamics influence development outcomes, and they will gain insights into strategies for promoting inclusivity and equality in development processes.</li>

                    <li><strong>Political Economy of Development:</strong> Analyzes the political and economic factors that shape development policies and outcomes. This course will provide students with an understanding of the interplay between political institutions, economic systems, and development trajectories. Students will explore topics such as governance, corruption, and the role of international actors in development.</li>

                    <li><strong>Research Methods in Development Studies:</strong> Equips students with essential research skills, including data collection, analysis, and interpretation. This course will cover quantitative and qualitative research methods commonly used in development studies, allowing students to design and conduct research projects relevant to real-world development challenges.</li>

                    <li><strong>Environmental Sustainability and Development:</strong> Investigates the relationship between environmental issues, natural resource management, and sustainable development. Students will explore the complex interactions between economic development and environmental preservation, analyzing strategies for achieving sustainable development goals and mitigating the adverse impacts of human activities on the environment.</li>
                </ol>
                <p><b>Elective Courses:</b> The program also offers a range of elective courses, allowing students to specialize in specific areas of development studies. Some examples of elective courses include:</p>
                <ol>
                    <li><strong>Gender and Development:</strong> Focuses on gender inequalities and their impact on development outcomes. This course will explore the ways in which gender dynamics shape development processes, including the roles of women and men in economic, social, and political spheres. Students will critically analyze gender mainstreaming strategies and interventions aimed at promoting gender equality and empowering marginalized groups.</li>

                    <li><strong>Global Health and Development:</strong> Examines the intersection of health issues and development, including healthcare systems, disease control, and public health policies. Students will examine the social determinants of health and the challenges faced by developing countries in addressing health disparities. They will analyze global health initiatives and explore strategies for promoting equitable access to healthcare and improving health outcomes in resource-constrained settings.</li>

                    <li><strong>Urbanization and Development:</strong> Explores the challenges and opportunities of urban development in the context of globalization. This course will examine the rapid urbanization trends worldwide and their implications for economic growth, social well-being, and environmental sustainability. Students will critically analyze urban planning approaches, housing policies, and strategies for managing urbanization processes while ensuring inclusive and sustainable development.</li>

                    <li><strong>International Development Organizations:</strong> Analyzes the roles and functions of international organizations in development, such as the United Nations and World Bank. This course will provide students with an understanding of the structures, policies, and programs of these organizations and their impact on global development. Students will examine the challenges and opportunities of international development cooperation and explore the role of multilateral institutions in shaping development agendas, funding projects, and promoting sustainable development goals.</li>
                </ol>
                <p><strong>Internship or Fieldwork:</strong> To provide practical experience and hands-on learning opportunities, the program may include an internship or fieldwork component. Students may have the opportunity to work with local or international development organizations, government agencies, or research institutions to apply their knowledge in real-world settings.
                </p>
                <p><strong>Capstone Project:</strong> In the final year of the program, students typically undertake a capstone project that allows them to apply their cumulative knowledge and skills to a specific development issue or problem. The capstone project may involve conducting independent research, analyzing data, and presenting findings and recommendations.
                </p>
                <p><b>Outcome:</b> Upon completion of the Development Studies B.Sc. program, graduates should be equipped with the following knowledge and skills:</p>
                <ol>
                  <li>Comprehensive understanding of development theories, policies, and practices.</li>
                  <li>Ability to critically analyze and evaluate development issues from multidisciplinary perspectives.</li>
                  <li>Strong research skills, including data collection, analysis, and interpretation.</li>
                  <li>Knowledge of key social, economic, political, and environmental factors shaping development.</li>
                  <li>Awareness of ethical considerations and social justice principles in development work.</li>
                  <li>Proficiency in written and oral communication for effective presentation and dissemination of ideas.</li>
                  <li>Ability to work collaboratively in diverse teams and adapt to changing development contexts.</li>
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
              <h4>Career Opportunities for Development Studies B.Sc. Graduates:
                </h4>
              <ol>
                <li><strong>International Development Organizations:</strong> Graduates with a B.Sc. in Development Studies can find rewarding career opportunities in international development organizations such as the United Nations (UN), World Bank, International Monetary Fund (IMF), and non-governmental organizations (NGOs). They can work in various capacities, including program management, project coordination, policy analysis, and research, focusing on poverty reduction, sustainable development, social justice, and humanitarian aid.</li>
                <li><strong>Government Agencies:</strong> Many government agencies, both at national and international levels, hire development studies graduates to work on policies and programs related to social and economic development. Graduates can pursue careers in government departments focused on international relations, foreign aid, community development, urban planning, rural development, and public policy.</li>
                <li><strong>Research and Academia:</strong> Development studies graduates can pursue research-oriented careers in academic institutions, think tanks, and research organizations. They can contribute to the field by conducting studies, analyzing data, and publishing research papers on topics such as economic development, social inequality, governance, and environmental sustainability. Additionally, they can teach and mentor students in universities or colleges.</li>
                <li><strong>Non-Profit and Non-Governmental Organizations (NGOs):</strong> NGOs play a crucial role in addressing social, economic, and environmental challenges globally. Development studies graduates can work in NGOs focused on human rights, education, healthcare, gender equality, environmental conservation, and community development. They can contribute to project implementation, program management, advocacy, and capacity building initiatives.</li>
                <li><strong>Social Enterprises and Corporate Social Responsibility (CSR):</strong> With the growing emphasis on sustainable and socially responsible business practices, development studies graduates can explore career opportunities in social enterprises and companies with robust CSR initiatives. They can work in areas such as social entrepreneurship, impact investing, corporate sustainability, and community engagement, integrating development principles into business strategies.</li>
                <li><strong>International Relations and Diplomacy:</strong> Graduates can pursue careers in international relations and diplomacy, representing their countries or international organizations in negotiations, policy-making, and diplomatic missions. They can work in diplomatic missions, foreign ministries, and international organizations, contributing to global development agendas, peacebuilding efforts, and diplomatic relations.</li>
                <li><strong>Consulting and Evaluation:</strong> Development studies graduates with strong analytical and research skills can work as consultants or evaluators, providing expertise to organizations in designing and evaluating development programs and projects. They can assess the impact, effectiveness, and sustainability of interventions, providing recommendations for improvement and evidence-based decision-making.</li>
                <li><strong>Social and Community Development:</strong> Graduates can work directly with communities and grassroots organizations, implementing and managing development projects at the local level. They can focus on areas such as community mobilization, participatory development, microfinance, social entrepreneurship, and capacity building, making a direct impact on improving the lives of marginalized populations.</li>
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
                      <td>DES 101</td>
                      <td>Introduction to Development Studies</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 103</td>
                      <td>Economics for Development Studies</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 101</td>
                      <td>Introduction to Political Science</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 101</td>
                      <td>Sociology and Culture in Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 104</td>
                      <td>Psychological Perspectives on Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>MGS 101</td>
                      <td>Elements of Management</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 16</b></p>
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
                      <td>DES 201</td>
                      <td>Development Theories and Practices</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 203</td>
                      <td>Nigerian Government and Politics (adopt synopsis for Pol. Sci.)</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>ACC 202</td>
                      <td>Development budget and Financing</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 207</td>
                      <td>Non-Governmental Organizations, Development and Change</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 202</td>
                      <td>Applied Statistics for Development (adopt synopsis for Statistics)</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 204</td>
                      <td>Basic Accounting (adopt synopsis for Accounting)</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>ECO 206</td>
                      <td>History and Structure of Nigeria (Economy) (adopt synopsis for Economics)</td>
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
                      <td>BUS 326</td>
                      <td>Business Communication</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 303</td>
                      <td>Development Policy and Planning</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 305</td>
                      <td>Gender and Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 307</td>
                      <td>Supervised Field attachment</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 302</td>
                      <td>Research Methods</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 304</td>
                      <td>Project Management, monitoring and evaluation</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 306</td>
                      <td>Community and Rural Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 308</td>
                      <td>Development Economics</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 24</b></p>
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
                      <td>DES 401</td>
                      <td>Research Project</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>DES 403</td>
                      <td>Globalization and Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 405</td>
                      <td>Ecology and Sustainable Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 409</td>
                      <td>Sociology of Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 402</td>
                      <td>Issues in Social Development</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DES 404</td>
                      <td>International Relations and Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DES 407</td>
                      <td>Informal Sector in Nigeria</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>POL 401</td>
                      <td>Development Administration</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 23</b></p>
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
