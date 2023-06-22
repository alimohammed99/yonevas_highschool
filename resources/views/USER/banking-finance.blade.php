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
                                    Banking & Finance
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
                                            <h1 class="feature-banner__title">Banking and Finance B.Sc.
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
                <p>The B.Sc. in Finance/Banking and Finance program offers a comprehensive study of the financial sector, equipping students with the knowledge and skills necessary to excel in the dynamic world of finance. This program provides a solid foundation in financial theory, banking operations, investment management, risk analysis, and financial markets. Students will gain a deep understanding of financial concepts, regulatory frameworks, and emerging trends shaping the global financial landscape. Through a combination of theoretical knowledge, practical applications, and industry insights, students will be prepared for a wide range of careers in finance and banking.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the B.Sc. in Finance/Banking and Finance program is to develop competent professionals who can effectively navigate the complexities of the financial industry and contribute to its growth and stability. The program aims to:
                </p>
                <ol>
                    <li><strong>Provide a Solid Understanding of Financial Principles:</strong> The program aims to equip students with a comprehensive understanding of financial principles, theories, and concepts. This includes knowledge of financial markets, investment strategies, financial analysis, risk management, and banking operations.
                    </li>
                    <li><strong>Foster Analytical and Critical Thinking Skills:</strong> The program aims to develop students' analytical and critical thinking abilities to evaluate complex financial scenarios, make informed decisions, and solve financial problems. Students will learn to analyze financial data, assess risks, and develop strategic financial plans.
                    </li>
                    <li><strong>Develop Ethical and Professional Practices:</strong> The program aims to instill ethical values and professional practices in students, emphasizing the importance of integrity, accountability, and responsibility in the financial industry. Students will be encouraged to adhere to ethical standards and regulatory frameworks while making financial decisions.
                    </li>
                    <li><strong>Enhance Quantitative and Analytical Skills:</strong> The program aims to enhance students' quantitative and analytical skills, enabling them to interpret financial data, perform financial calculations, and utilize financial models. Students will gain proficiency in using financial software and tools to analyze and interpret financial information.
                    </li>
                    <li><strong>Cultivate Communication and Teamwork Abilities:</strong> The program aims to cultivate effective communication and teamwork skills in students, as these are essential for success in the finance and banking industry. Students will engage in group projects, presentations, and case studies to enhance their collaboration and communication skills.
                    </li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon successful completion of the B.Sc. in Finance/Banking and Finance program, students will be able to:
                </p>
                <ol>
                    <li>Apply financial theories and concepts to analyze and solve complex financial problems.
                    </li>
                    <li>Evaluate and assess risks associated with financial decisions and develop risk management strategies.
                    </li>
                    <li>Utilize financial tools and software to analyze financial data and make informed investment decisions.
                    </li>
                    <li>Demonstrate a comprehensive understanding of banking operations, financial markets, and regulatory frameworks.
                    </li>
                    <li>Effectively communicate financial information and analysis to stakeholders in a clear and concise manner.
                    </li>
                    <li>Collaborate and work effectively in teams to solve financial challenges and achieve common goals.
                    </li>
                    <li>Demonstrate ethical and professional behavior in financial decision-making and adhere to regulatory standards.
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
              <h4>Career Opportunities for B.Sc. Finance/Banking and Finance Graduates:
            </h4>
              <ol>
                <li><strong>Financial Analyst:</strong> Graduates can pursue careers as financial analysts, analyzing financial data, evaluating investment opportunities, and providing recommendations to individuals and organizations. They can work in financial institutions, investment firms, corporations, or consulting companies.
                </li>
                <li><strong>Investment Banker:</strong> Graduates can work in investment banking, assisting companies in raising capital, structuring mergers and acquisitions, and providing financial advisory services. They can work in investment banks, private equity firms, or venture capital companies.
                </li>
                <li><strong>Risk Manager:</strong> Graduates can pursue careers as risk managers, identifying and assessing financial risks within organizations. They can work in banks, insurance companies, or financial institutions, developing risk management strategies and ensuring regulatory compliance.
                </li>
                <li><strong>Financial Planner:</strong> Graduates can work as financial planners, helping individuals and families create personalized financial plans, manage investments, and achieve financial goals. They can work in financial planning firms or establish their own practices.
                </li>
                <li><strong>Commercial Banker:</strong> Graduates can pursue careers in commercial banking, working with individuals and businesses to provide loans, manage accounts, and offer financial advice. They can work in retail banks, corporate banks, or credit unions.
                </li>
                <li><strong>Corporate Finance Officer:</strong> Graduates can work in the finance departments of corporations, managing financial operations, analyzing financial performance, and making strategic financial decisions. They can work in various industries, including manufacturing, technology, healthcare, or energy.
                </li>
                <li><strong>Financial Consultant:</strong> Graduates can work as financial consultants, providing advisory services to clients on financial planning, investment strategies, and wealth management. They can work independently or in consulting firms.
                </li>
                <li><strong>Portfolio Manager:</strong> Graduates can pursue careers as portfolio managers, managing investment portfolios on behalf of clients or organizations. They can work in asset management firms, pension funds, or investment companies.
                </li>
                <li><strong>Financial Compliance Officer:</strong> Graduates can work in financial institutions or regulatory bodies, ensuring compliance with financial regulations, assessing risks, and implementing internal control systems.
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
                        <td>FIN 101</td>
                        <td>Introduction to Finance</td>
                        <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 15</b></p>
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
                        <td>FIN 202</td>
                        <td>Principles of Insurance</td>
                        <td>2</td>
                    <tr>
                        <td>FIN 204</td>
                        <td>Quantitative Analysis</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 209</td>
                        <td>Elements of Banking</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 210</td>
                        <td>Banking Methods and Process</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 215</td>
                        <td>Applications of Computer in Finance and Banking</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 216</td>
                        <td>Fundamentals of Deposit Insurance</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 217</td>
                        <td>Law of Banking</td>
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
                        <td>FIN 303</td>
                        <td>Principles of Finance</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 304</td>
                        <td>Development Finance</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 305</td>
                        <td>Financial Systems in Nigeria</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 308</td>
                        <td>Bank Lending and Credit Administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 313</td>
                        <td>Financial Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 315</td>
                        <td>Management of Financial Institutions</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 316</td>
                        <td>Practice of Deposit Insurance</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 317</td>
                        <td>Entrepreneurship of Finance</td>
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
                        <td>FIN 404</td>
                        <td>Research Project</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>FIN 408</td>
                        <td>Project Evaluation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 409</td>
                        <td>Financial Technology (FINTEC)</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 410</td>
                        <td>Investment Analysis and Portfolio Management</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 411</td>
                        <td>Structure and Management of Insurance</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 413</td>
                        <td>Quantitative Finance</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>FIN 414</td>
                        <td>Marketing of Financial Services</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>FIN 416</td>
                        <td>International Trade and Finance</td>
                        <td>4</td>
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
