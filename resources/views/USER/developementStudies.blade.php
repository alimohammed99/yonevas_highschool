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
                <ul>
                    <li>Comprehensive understanding of development theories, policies, and practices.</li>
                    <li>Ability to critically analyze and evaluate development issues from multidisciplinary perspectives.</li>
                    <li>Strong research skills, including data collection, analysis, and interpretation.</li>
                    <li>Knowledge of key social, economic, political, and environmental factors shaping development.</li>
                    <li>Awareness of ethical considerations and social justice principles in development work.</li>
                    <li>Proficiency in written and oral communication for effective presentation and dissemination of ideas.</li>
                    <li>Ability to work collaboratively in diverse teams and adapt to changing development contexts.</li>
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


        <div style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
            <h2>Program Requirements</h2>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">100 level</h4>
                <p style="text-align:left; "><b>Total Unit: 17</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">200 level</h4>
                <p style="text-align:left; "><b>Total Unit: 13</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">300 level</h4>
                <p style="text-align:left; "><b>Total Unit: 28</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">400 level</h4>
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
