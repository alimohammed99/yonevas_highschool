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
                                    Psychology
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
                                            <h1 class="feature-banner__title">Sociology B.Sc</h1>

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
                <p>The Sociology B.Sc. program at Yonevas Open University offers a comprehensive study of human society, social behavior, and the structures that shape our everyday lives. This program provides students with a deep understanding of the social dynamics, cultural patterns, and social inequalities that exist in contemporary societies. Through a combination of theoretical perspectives and practical research methods, students will explore various sociological concepts, such as socialization, social stratification, gender, race, class, and globalization. The program encourages critical thinking, analytical skills, and a sociological imagination to understand and address social issues and challenges in our interconnected world.</p>
                <p><strong>Aim and Objectives:</strong> The aim of the Sociology B.Sc. program is to equip students with a solid foundation in sociological theory, research methods, and analytical skills. The program seeks to foster a deep understanding of human behavior within social contexts and promote a critical examination of social structures and processes. The objectives of the program are as follows</p>
                <ul>
                    <li><strong>Develop Sociological Knowledge:</strong> The program aims to provide students with a comprehensive understanding of sociological concepts, theories, and research methods. Students will explore various sociological perspectives and gain insights into the complexities of social life and the dynamics of human behavior.</li>
                    <li><strong>Foster Critical Thinking:</strong> The program aims to develop critical thinking skills among students, enabling them to analyze and evaluate social phenomena, institutions, and social problems from a sociological perspective. Students will learn to question prevailing assumptions, challenge stereotypes, and develop informed opinions on social issues.</li>
                    <li><strong>Enhance Research and Analytical Skills:</strong> The program aims to equip students with research skills and methodologies used in sociological inquiry. Students will learn how to design and conduct research projects, collect and analyze data, and interpret findings. These skills will enable students to engage in evidence-based sociological analysis and contribute to the field of sociology.</li>
                </ul>
                <p><strong>Learning Outcomes: </strong> By the end of the Sociology B.Sc. program, students will be able to:</p>
                <ul>
                    <li>Demonstrate a comprehensive understanding of sociological theories, concepts, and research methods.</li>
                    <li>Apply sociological perspectives to analyze social phenomena, institutions, and social problems.</li>
                    <li>Critically evaluate the impact of social structures, such as gender, race, class, and globalization, on individuals and societies.</li>
                    <li>Conduct independent sociological research, including data collection, analysis, and interpretation.</li>
                    <li>Communicate sociological ideas effectively through oral presentations, written reports, and discussions.</li>
                    <li>Apply sociological knowledge and skills to address social issues and contribute to positive social change.</li>
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
                <h4>Career Opportunities for Sociology B.Sc. Graduates:</h4>
                <ol>
                    <li><strong>Social Researcher:</strong> Sociology graduates can work as social researchers in academic institutions, research organizations, or private companies. They can conduct research projects, collect and analyze data, and generate insights into various social issues. They may specialize in areas such as social inequality, urban studies, family dynamics, or healthcare disparities.</li>

                    <li><strong>Social Worker:</strong> Graduates can pursue careers as social workers, providing support and assistance to individuals, families, and communities facing social challenges. They may work in government agencies, non-profit organizations, or healthcare settings, helping individuals navigate social services, advocating for their rights, and providing counseling and guidance.</li>

                    <li><strong>Policy Analyst:</strong> Sociology graduates can work as policy analysts, contributing their expertise to governmental or non-governmental organizations. They can assess the impact of social policies, develop recommendations for policy improvement, and analyze the social implications of proposed legislation. Their insights can help shape social policies that promote equality and social justice.</li>

                    <li><strong>Community Development Officer:</strong> Graduates can work as community development officers, collaborating with communities to identify their needs, develop programs, and implement initiatives to address social issues. They can work in non-profit organizations, government agencies, or community-based organizations, fostering community engagement, empowerment, and social cohesion.</li>

                    <li><strong>Human Resources Specialist:</strong> Sociology graduates can pursue careers in human resources, utilizing their understanding of social dynamics and organizational behavior. They can work in recruitment, employee relations, or organizational development, fostering diversity and inclusion, managing conflicts, and enhancing workplace culture.</li>

                    <li><strong>Market Research Analyst:</strong> Graduates can work as market research analysts, using their sociological perspective to analyze consumer behavior, social trends, and market dynamics. They can help companies understand consumer preferences, develop marketing strategies, and make informed business decisions.</li>

                    <li><strong>Non-Profit Administrator:</strong> Sociology graduates can work in non-profit organizations in administrative roles, managing programs, coordinating services, and overseeing organizational operations. They can contribute to the implementation of initiatives related to social justice, advocacy, community outreach, and humanitarian efforts.</li>

                    <li><strong>Advocacy and Policy Officer:</strong> Graduates can work as advocacy and policy officers in non-profit organizations, lobbying for social change, and promoting policies that address social issues. They can engage in public awareness campaigns, collaborate with stakeholders, and advocate for marginalized groups to influence social policies and practices.</li>

                    <li><strong>Academic and Teaching Positions:</strong> Sociology graduates can pursue further education and enter academia, teaching sociology courses and conducting research in colleges or universities. They can contribute to the development of future sociologists and shape the field through their research and scholarship.</li>
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
                      <td>SOC 101</td>
                      <td>Introduction to Sociology I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 102</td>
                      <td>Introduction to Anthropology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 103</td>
                      <td>Introduction to African Societies and Culture</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 104</td>
                      <td>Introduction to Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 105</td>
                      <td>Elements of Scientific Thought</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>SOC 106</td>
                      <td>Introduction to Sociology II</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
                      <td>SOC 201</td>
                      <td>History of Social Thought</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SOC 204</td>
                      <td>Social Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 205</td>
                      <td>Elements of Social Work</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 210</td>
                      <td>Gender and Society</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 202</td>
                      <td>Social Change and Social Problems</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SOC 203</td>
                      <td>Sociology of the Family</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 206</td>
                      <td>Structure of the Nigerian Society</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 209</td>
                      <td>Language in Society & Culture</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 25</b></p>
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
                      <td>SOC 301</td>
                      <td>Methods of Social Research & Statistics</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>SOC 302</td>
                      <td>Social Inequality</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 303</td>
                      <td>Sociology of Crime and Delinquency</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>SOC 305</td>
                      <td>Political Sociology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 306</td>
                      <td>Formal Organizations</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
                      <td>SOC 401</td>
                      <td>Classical and Contemporary Sociological Theories</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SOC 403</td>
                      <td>Regional Ethnography</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 408</td>
                      <td>Research Project</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>SOC 406</td>
                      <td>Models in Sociological Analysis</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SOC 407</td>
                      <td>Sociology of Development</td>
                      <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 19</b></p>
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
