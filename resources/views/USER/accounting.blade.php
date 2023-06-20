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
                                  Accounting
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
                                            <h1 class="feature-banner__title">Accounting B.Sc.</h1>

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
                <p>The Accounting B.Sc. program offers our students an in-depth understanding of the principles, concepts, and practices of accounting. This program is designed to equip students with the necessary knowledge and skills to excel in the dynamic and evolving field of accounting. Through a combination of theoretical learning and practical application, students will gain a solid foundation in financial accounting, managerial accounting, auditing, taxation, and financial analysis. The program fosters critical thinking, analytical skills, and ethical decision-making, preparing students for a wide range of career opportunities in accounting and finance.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Accounting B.Sc. program is to provide students with a rigorous and comprehensive education in accounting, enabling them to pursue successful careers in the field. The program's objectives are as follows:
                </p>
                <ol>
                  <li>
                    <strong>Develop Technical Competence:</strong> The program aims to develop students' technical skills and knowledge in areas such as financial reporting, auditing, taxation, and financial analysis. Students will learn how to apply accounting principles and standards effectively and accurately in diverse business scenarios.
                  </li>
                  <li>
                    <strong>Foster Analytical Thinking:</strong> The program aims to cultivate students' analytical and problem-solving abilities. They will learn to analyze financial data, identify trends, interpret financial statements, and make informed decisions based on financial information.
                  </li>
                  <li>
                    <strong>Cultivate Ethical and Professional Behavior:</strong> The program aims to instill ethical principles and professional values in students. They will develop an understanding of the ethical responsibilities and professional conduct expected of accountants, adhering to the highest standards of integrity and accountability.
                  </li>
                  <li>
                    <strong>Enhance Communication and Teamwork Skills:</strong> The program aims to enhance students' communication, presentation, and teamwork skills. They will learn to effectively communicate financial information, collaborate with others in a team setting, and engage in constructive professional interactions.
                  </li>
                </ol>
                <p><b>Learning Outcomes:</b> By the end of the Accounting B.Sc. program, students will be able to:</p>
                <ol>
                  <li>Demonstrate a comprehensive understanding of accounting principles, concepts, and practices.</li>
                  <li>Prepare and analyze financial statements in accordance with relevant accounting standards.</li>
                  <li>Apply advanced analytical tools and techniques to interpret financial data and make informed decisions.</li>
                  <li>Conduct effective audits and evaluate internal control systems.</li>
                  <li>Understand and apply tax regulations to individual and business entities.</li>
                  <li>Demonstrate knowledge of financial management and investment analysis principles.</li>
                  <li>Communicate financial information effectively to diverse stakeholders.</li>
                  <li>Work collaboratively in teams and demonstrate professionalism and ethical behavior in accounting practice.</li>
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
              <h4>Career Opportunities for Accounting B.Sc. Graduates:</h4>
              <ol>
                <li><strong>Public Accounting:</strong> Graduates can pursue careers in public accounting firms, working as auditors, tax consultants, or financial advisors. They can provide accounting and financial services to a wide range of clients, including corporations, government agencies, nonprofit organizations, and individuals.</li>
                <li><strong>Financial Accounting and Reporting:</strong> Graduates can work in corporate finance departments, handling financial accounting and reporting responsibilities. They can prepare financial statements, analyze financial data, ensure compliance with accounting standards, and contribute to financial decision-making within organizations.</li>
                <li><strong>Management Accounting:</strong> Graduates can pursue careers as management accountants, providing financial information and analysis to support managerial decision-making. They can work within organizations, analyzing costs, budgeting, forecasting, and providing financial insights for strategic planning and performance evaluation.</li>
                <li><strong>Taxation:</strong> Graduates can specialize in taxation and work as tax professionals. They can provide tax planning and compliance services, assist clients in managing their tax obligations, and stay updated on tax regulations and laws.</li>
                <li><strong>Internal Auditing:</strong> Graduates can work as internal auditors within organizations, evaluating internal controls, assessing risks, and ensuring compliance with policies and regulations. They can provide valuable insights to management regarding operational efficiency, risk management, and process improvement.</li>
                <li><strong>Forensic Accounting:</strong> Graduates can specialize in forensic accounting, assisting in financial investigations, fraud detection, and litigation support. They can work with law enforcement agencies, accounting firms, or consultancies, utilizing their analytical skills to uncover financial irregularities and provide expert testimony.</li>
                <li><strong>Financial Analysis and Investment Banking:</strong> Graduates can pursue careers as financial analysts or work in investment banking firms, analyzing financial data, conducting valuation assessments, and providing recommendations on investment opportunities and financial strategies.</li>
                <li><strong>Government Accounting:</strong> Graduates can work in government agencies, managing financial operations, budgeting, and financial reporting for public sector entities. They can ensure compliance with governmental accounting standards and contribute to effective financial management in the public sector.</li>
                <li><strong>Consulting and Advisory Services:</strong> Graduates can work as accounting consultants or advisors, providing specialized expertise to organizations in areas such as financial management, risk assessment, and process improvement.</li>
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
                        <td>ACC 101</td>
                        <td>Introduction to Financial Accounting I</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 102</td>
                        <td>Introduction to Financial Accounting II</td>
                        <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
                        <td>ACC 201</td>
                        <td>Financial Accounting I</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 202</td>
                        <td>Financial Accounting II</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 203</td>
                        <td>Corporate Governance & Accounting Ethics</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 204</td>
                        <td>Cost Accounting</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 205</td>
                        <td>Accounting Laboratory</td>
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
                        <td>ACC 301</td>
                        <td>Financial Reporting I</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 302</td>
                        <td>Financial Reporting II</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 303</td>
                        <td>Management Accounting</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 305</td>
                        <td>Taxation I</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 306</td>
                        <td>Taxation II</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 307</td>
                        <td>Auditing and Assurance I</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 308</td>
                        <td>Public Sector Accounting & Reporting</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 311</td>
                        <td>Entrepreneurship in Accounting</td>
                        <td>3</td>
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
                        <td>ACC 401</td>
                        <td>Advanced Financial Reporting</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 402</td>
                        <td>Corporate Reporting</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 403</td>
                        <td>Auditing and Assurance II</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 404</td>
                        <td>Financial Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 405</td>
                        <td>Bankruptcy & Liquidation</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ACC 490</td>
                        <td>Project</td>
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
