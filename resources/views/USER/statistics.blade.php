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
                                    Statistics
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
                                            <h1 class="feature-banner__title">Statistics B.Sc</h1>

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
                <p>The Statistics B.Sc. program offers a comprehensive study of statistical theories, methods, and applications, preparing students for a range of careers in data analysis, research, and decision-making. This program equips students with the necessary skills to collect, analyze, interpret, and present data in various fields, including business, economics, social sciences, and healthcare. Through a combination of theoretical knowledge and practical applications, students gain a solid foundation in statistical principles and techniques, enabling them to make informed decisions and draw meaningful conclusions from data. The program also emphasizes the use of statistical software and tools to handle large datasets and conduct advanced statistical analyses. By the end of the program, students will have the competence to apply statistical concepts and techniques in real-world scenarios and contribute to evidence-based decision-making processes.</p>
                <p><strong>Aim and Objectives:</strong> The aim of the Statistics B.Sc. program is to provide students with a comprehensive understanding of statistical theory, methodology, and applications, preparing them for successful careers in data analysis and research. The program aims to develop students' skills in data collection, analysis, interpretation, and presentation, enabling them to contribute effectively to decision-making processes in various industries. Additionally, the program aims to foster critical thinking, problem-solving abilities, and ethical conduct in statistical analysis.</p>
                <ol>
                    <li>Develop a strong foundation in statistical theory and methodology, including probability, statistical inference, regression analysis, and experimental design.</li>
                    <li>Familiarize students with statistical software and tools commonly used in data analysis, such as SPSS, R, and Python.</li>
                    <li>Provide practical training in data collection, data cleaning, and data management techniques.</li>
                    <li>Enhance students' ability to conduct descriptive and inferential statistical analyses and interpret the results accurately.</li>
                    <li>Develop skills in effectively communicating statistical findings through written reports, presentations, and visualizations.</li>
                    <li>Foster critical thinking and problem-solving skills to address real-world challenges and make informed decisions based on statistical evidence.</li>
                    <li>Promote ethical conduct in statistical analysis, emphasizing the importance of integrity, confidentiality, and unbiased reporting.</li>
                </ol>
                <p><strong>Learning Outcomes: </strong> by the end of the Statistics B.Sc. program, students will:</p>
                <ol>
                    <li>Demonstrate a comprehensive understanding of statistical theories, concepts, and principles.</li>
                    <li>Apply appropriate statistical techniques to analyze and interpret data in various domains.</li>
                    <li>Utilize statistical software and tools effectively to handle and analyze large datasets.</li>
                    <li>Design and conduct research studies, collect relevant data, and apply appropriate statistical methods for analysis.</li>
                    <li>Communicate statistical findings clearly and effectively through written reports, presentations, and visualizations.</li>
                    <li>Critically evaluate statistical analyses, identify limitations, and propose improvements.</li>
                    <li>Apply ethical guidelines and principles in statistical analysis, respecting confidentiality and integrity.</li>
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
                <h4>Career Opportunities for Statistics B.Sc. Graduates:</h4>
                <ol>
                    <li><strong>Data Analyst:</strong> Graduates can pursue careers as data analysts in various industries, including finance, healthcare, market research, and technology. They analyze large datasets, identify trends and patterns, and provide valuable insights to support decision-making processes.</li>
                    <li><strong>Statistician:</strong> Graduates can work as statisticians, applying statistical theories and methods to design experiments, analyze data, and interpret results. They can contribute to research studies, policy analysis, quality control, and survey design.</li>
                    <li><strong>Data Scientist:</strong> With their strong background in statistical analysis and data manipulation, graduates can pursue careers as data scientists. They utilize advanced statistical techniques, machine learning algorithms, and programming languages to extract insights and build predictive models.</li>
                    <li><strong>Business Intelligence Analyst:</strong> Graduates can work as business intelligence analysts, combining statistical analysis with business knowledge to provide strategic insights and support decision-making within organizations.</li>
                    <li><strong>Market Research Analyst:</strong> Graduates can pursue careers as market research analysts, collecting and analyzing data to help companies understand consumer behavior, market trends, and competitive landscapes.</li>
                    <li><strong>Risk Analyst:</strong> Graduates can work as risk analysts in industries such as insurance, banking, and finance. They assess and quantify risks, develop models for risk prediction, and contribute to risk management strategies.</li>
                    <li><strong>Healthcare Analyst:</strong> Graduates can work in healthcare organizations, analyzing patient data, conducting clinical trials, and contributing to healthcare policy development.</li>
                    <li><strong>Researcher/Academic:</strong> Graduates can pursue careers in research or academia, conducting statistical research, publishing scholarly work, and teaching statistics.</li>
                    <li><strong>Government and Policy Analyst:</strong> Graduates can work in government agencies, providing statistical analysis and support for policy development, program evaluation, and data-driven decision-making.</li>
                    <li><strong>Consulting:</strong> Graduates can work as statistical consultants, providing expertise to organizations across various sectors.</li>
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
                      <td>CSC 101</td>
                      <td>Introduction to Computer Science</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>MTH 101</td>
                      <td>Elementary Mathematics I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>MTH 102</td>
                      <td>Elementary Mathematics II</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>STA 111</td>
                      <td>Descriptive Statistics</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 112</td>
                      <td>Probability I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 121</td>
                      <td>Statistical Inference I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 122</td>
                      <td>Statistical Computing I</td>
                      <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 23</b></p>
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
                      <td>Philosophy, Logic, and Human Existence</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>ENT 211</td>
                      <td>Entrepreneurship and Innovation</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>STA 202</td>
                      <td>Statistics for Physical Sciences & Engineering</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 211</td>
                      <td>Probability II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 212</td>
                      <td>Introduction to Social & Economic Statistics</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 221</td>
                      <td>Statistical Inference II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 231</td>
                      <td>Statistical Computing II</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>STA 299</td>
                      <td>Industrial Attachment I (12 Weeks)</td>
                      <td>3</td>
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
                      <td>STA 311</td>
                      <td>Probability III</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 312</td>
                      <td>Distribution theory I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 321</td>
                      <td>Statistical Inference III</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 322</td>
                      <td>Regression and Analysis of Variance I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>STA 324</td>
                      <td>Survey methods and sampling theory</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 399</td>
                      <td>Industrial Attachment II (12 Weeks)</td>
                      <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 21</b></p>
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
                      <td>STA 411</td>
                      <td>Probability IV</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 412</td>
                      <td>Distribution Theory II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 413</td>
                      <td>Statistical Inference IV</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 415</td>
                      <td>Regression and Analysis of Variance II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 422</td>
                      <td>Logical Background of Statistics & Decision Theory</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>STA 499</td>
                      <td>Research Project</td>
                      <td>6</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 21</b></p>
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
