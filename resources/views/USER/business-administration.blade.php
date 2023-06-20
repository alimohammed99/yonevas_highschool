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
                                  Business Administration
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
                                            <h1 class="feature-banner__title">Business Administration B.Sc.
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
                <p>The Business Administration B.Sc. program offers students a comprehensive understanding of the principles and practices that drive successful business operations. This program equips students with a broad knowledge base in various areas of business, including management, marketing, finance, accounting, and entrepreneurship. Through a combination of theoretical foundations, practical applications, and case studies, students develop the skills necessary to analyze business challenges, make informed decisions, and contribute effectively to the dynamic and competitive business landscape. The program also emphasizes critical thinking, problem-solving, and effective communication skills, preparing students for diverse roles in the business world.
                </p>
                <p><strong>Aim and Objectives:</strong> The aim of the Business Administration B.Sc. program is to provide students with a solid foundation in business principles, strategies, and practices, enabling them to become competent and ethical business professionals. The program aims to:
                </p>
                <ol>
                  <li>
                    <strong>Develop Business Acumen:</strong> The program aims to cultivate students' understanding of key business concepts, theories, and practices. Students will gain knowledge in areas such as management, marketing, finance, accounting, operations, and business law, enabling them to comprehend the interdependencies and complexities of business operations.
                  </li>
                  <li>
                    <strong>Foster Analytical and Critical Thinking:</strong> The program aims to develop students' analytical and critical thinking abilities, allowing them to assess complex business situations, identify problems, and propose effective solutions. Students will be equipped with tools and techniques for strategic decision-making and problem-solving within various business contexts.
                  </li>
                  <li>
                    <strong>Enhance Communication and Collaboration Skills:</strong> The program aims to enhance students' communication and collaboration skills, preparing them to effectively communicate ideas, negotiate, and collaborate with diverse stakeholders in the business environment. Students will develop oral and written communication skills, presentation abilities, and teamwork skills necessary for successful business interactions.
                  </li>
                  <li>
                    <strong>Nurture Ethical Business Practices:</strong> The program aims to instill ethical values and principles in students, emphasizing the importance of social responsibility, sustainability, and ethical decision-making in business. Students will develop an understanding of ethical challenges and learn to navigate ethical dilemmas within the business context.
                  </li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Business Administration B.Sc. program, students will be able to:                  /p>
                <ol>
                  <li>Demonstrate a comprehensive understanding of fundamental business concepts, theories, and practices across various functional areas.                  </li>
                  <li>Analyze and evaluate business challenges, applying critical thinking and problem-solving skills to propose effective solutions.</li>
                  <li>Communicate ideas, strategies, and findings effectively through oral presentations, written reports, and other business communication mediums.</li>
                  <li>Work collaboratively and demonstrate effective teamwork skills in diverse business settings.</li>
                  <li>Demonstrate ethical awareness and make ethical decisions within the business context, considering social responsibility and sustainability.</li>
                  <li>Adapt to the dynamic business environment, embracing innovation and lifelong learning to remain competitive in the global marketplace.</li>
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
              <h4>Career Opportunities for Business Administration B.Sc. Graduates:</h4>
              <ol>
                <li><strong>Business Management:</strong> Graduates can pursue careers in business management, taking on roles such as business development manager, operations manager, project manager, or general manager. They can work in various industries, overseeing day-to-day operations, implementing strategic plans, and ensuring the smooth functioning of organizations.</li>
                <li><strong>Marketing and Sales:</strong> Graduates can pursue careers in marketing and sales, working as marketing managers, brand managers, sales representatives, or digital marketing specialists. They can develop marketing strategies, conduct market research, manage advertising campaigns, and drive sales growth for organizations.</li>
                <li><strong>Financial Analysis and Management:</strong> Graduates can work in financial institutions or corporate finance departments, focusing on financial analysis, budgeting, and investment management. They can pursue roles such as financial analyst, financial manager, or investment banker, providing insights and making informed financial decisions.</li>
                <li><strong>Entrepreneurship and Small Business Management:</strong> Graduates with an entrepreneurial spirit can start their own businesses or work in startups, managing all aspects of business operations. They can develop business plans, secure funding, and oversee marketing, finance, and operations to build successful ventures.</li>
                <li><strong>Human Resources Management:</strong> Graduates can work in human resources departments, specializing in recruitment, training and development, employee relations, and organizational development. They can pursue roles such as human resources manager, talent acquisition specialist, or training coordinator, ensuring effective workforce management</li>
                <li><strong>Consulting:</strong> Graduates can work as business consultants, providing expert advice and solutions to organizations across various industries. They can specialize in areas such as strategy, operations, marketing, or human resources, working with clients to improve efficiency, solve problems, and drive organizational growth.</li>
                <li><strong>Supply Chain and Logistics Management:</strong> Graduates can work in supply chain and logistics roles, managing the flow of goods, services, and information within organizations. They can pursue careers as supply chain managers, logistics coordinators, or procurement specialists, ensuring efficient supply chain operations and optimizing costs.</li>
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
                        <td>Introduction to Computer</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>AMS 104</td>
                        <td>Principles of Project Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 101</td>
                        <td>Introduction to Business I</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 102</td>
                        <td>Introduction to Business II</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 16</b></p>
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
                        <td>BUA 201</td>
                        <td>Principles of Business Administration I</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 202</td>
                        <td>Principles of Business Administration II</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 203</td>
                        <td>Business Statistics</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 204</td>
                        <td>Quantitative Analysis in Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 205</td>
                        <td>Leadership and Governance</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 216</td>
                        <td>Introduction to Financial Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 218</td>
                        <td>Green Management</td>
                        <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 23</b></p>
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
                        <td>BUA 302</td>
                        <td>Human Behavior in Organizations</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 303</td>
                        <td>Management Theory</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 304</td>
                        <td>Human Resource Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 305</td>
                        <td>Financial Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 310</td>
                        <td>Production and Operation Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 312</td>
                        <td>Small Business Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 313</td>
                        <td>Innovation Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 319</td>
                        <td>E-Commerce</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 321</td>
                        <td>Business Start-up</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 323</td>
                        <td>Supply Chain Management</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 29</b></p>
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
                        <td>BUA 401</td>
                        <td>Business Policy and Strategic Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 402</td>
                        <td>Strategic Thinking and Problem Solving</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 406</td>
                        <td>International Business</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 409</td>
                        <td>Management Information System</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BUA 411</td>
                        <td>Analysis for Business Decision</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BUA 420</td>
                        <td>Internship</td>
                        <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 16</b></p>
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
