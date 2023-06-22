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
                                    Marketing
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
                                            <h1 class="feature-banner__title">Marketing B.Sc.
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
                <p>The Marketing B.Sc. program offers students a comprehensive understanding of the dynamic field of marketing and its role in driving business success. This program provides students with a solid foundation in marketing principles, consumer behavior, market research, branding, advertising, and digital marketing strategies. Through a combination of theoretical knowledge and practical application, students will develop the skills necessary to navigate the evolving marketing landscape and effectively contribute to the growth and profitability of organizations. The program emphasizes real-world case studies, industry-relevant projects, and hands-on experiences to ensure that students are well-prepared to meet the challenges of the marketing industry.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Marketing B.Sc. program is to equip students with the knowledge, skills, and competencies required to succeed in the dynamic field of marketing. The objectives of the program are as follows:
                </p>
                <ol>
                    <li><strong>Develop a Strong Foundation:</strong> The program aims to provide students with a strong foundation in marketing concepts, theories, and practices. Students will gain a comprehensive understanding of the marketing mix, market segmentation, target marketing, and strategic marketing planning.
                    </li>
                    <li><strong>Understand Consumer Behavior:</strong> The program aims to deepen students' understanding of consumer behavior and its impact on marketing strategies. Students will learn to analyze consumer needs, motivations, and purchasing behavior, enabling them to develop effective marketing campaigns and customer-centric strategies.
                    </li>
                    <li><strong>Foster Analytical and Research Skills:</strong> The program aims to develop students' analytical and research skills, enabling them to conduct market research, analyze market trends, and make data-driven marketing decisions. Students will learn how to use marketing research tools and techniques to gather and interpret data for effective marketing strategies.
                    </li>
                    <li><strong>Explore Digital Marketing Strategies:</strong> The program aims to equip students with the knowledge and skills to navigate the digital marketing landscape. Students will learn about various digital marketing channels, including social media marketing, search engine optimization (SEO), content marketing, and email marketing, and understand how to leverage these channels to reach target audiences and drive business growth.
                    </li>
                </ol>
                <p><b>Learning Outcomes:</b> By the end of the Marketing B.Sc. program, students will be able to:</p>
                <ol>
                    <li>Apply marketing concepts and theories to analyze market trends, identify target markets, and develop marketing strategies.
                    </li>
                    <li>Understand consumer behavior and use consumer insights to develop effective marketing campaigns and customer-centric strategies.
                    </li>
                    <li>Conduct market research, collect and analyze data, and make data-driven marketing decisions.
                    </li>
                    <li>Develop and implement digital marketing strategies across various platforms to reach target audiences and achieve marketing objectives.
                    </li>
                    <li>Create and manage brand identities, positioning, and communication strategies.
                    </li>
                    <li>Demonstrate effective communication and presentation skills in marketing contexts.
                    </li>
                    <li>Work collaboratively in teams to solve marketing problems and develop innovative marketing solutions.
                    </li>
                    <li>Demonstrate ethical and socially responsible marketing practices.
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
              <h4>Career Opportunities for Marketing B.Sc. Graduates:
            </h4>
              <ol>
                <li><strong>Marketing Coordinator/Assistant:</strong> Graduates can start their careers as marketing coordinators or assistants, supporting marketing campaigns, conducting market research, managing social media channels, and assisting in the development of marketing strategies. This entry-level position allows graduates to gain hands-on experience and develop a strong foundation in various aspects of marketing.
                </li>
                <li><strong>Brand Manager:</strong> Graduates can pursue careers as brand managers, responsible for developing and managing brand identities, positioning strategies, and communication plans. They oversee brand campaigns, monitor brand performance, conduct market analysis, and collaborate with cross-functional teams to ensure brand consistency and growth.
                </li>
                <li><strong>Market Research Analyst:</strong> Graduates can work as market research analysts, conducting research, analyzing data, and providing insights to support marketing decision-making. They design and implement research studies, collect and interpret data, and prepare reports and presentations that inform marketing strategies and drive business growth.
                </li>
                <li><strong>Digital Marketing Specialist:</strong> Graduates can specialize in digital marketing, working as digital marketing specialists or digital marketing coordinators. They develop and implement online marketing campaigns, manage websites and social media platforms, optimize search engine rankings, analyze digital marketing metrics, and leverage various digital channels to reach target audiences and drive customer engagement.
                </li>
                <li><strong>Advertising Account Executive:</strong> Graduates can pursue careers in advertising agencies as account executives, working closely with clients to develop and execute advertising campaigns. They liaise between clients and creative teams, manage budgets, oversee campaign implementation, and monitor campaign performance to ensure client satisfaction and campaign success.
                </li>
                <li><strong>Sales Representative:</strong> Graduates can work as sales representatives, promoting and selling products or services to customers. They build relationships with clients, identify sales opportunities, negotiate contracts, and meet sales targets. A strong marketing background can help graduates understand customer needs and effectively position products or services in the market.
                </li>
                <li><strong>Market Analyst/Strategist:</strong> Graduates can work as market analysts or strategists, analyzing market trends, competitive landscapes, and consumer behavior to provide insights and recommendations for business strategies. They help organizations identify market opportunities, assess market potential, and develop strategies to gain a competitive edge.
                </li>
                <li><strong>Product Manager:</strong> Graduates can pursue careers as product managers, responsible for the development, positioning, and marketing of specific products or product lines. They conduct market research, collaborate with cross-functional teams, manage product lifecycles, and develop go-to-market strategies to ensure product success in the market.
                </li>
                <li><strong>Entrepreneurship:</strong> Graduates with a strong foundation in marketing can start their own businesses or pursue entrepreneurial ventures. They can develop and launch their own products or services, apply marketing strategies to attract customers, and manage the marketing efforts of their own ventures.
                </li>
                <li><strong>Market Development Manager:</strong> Graduates can work as market development managers, responsible for identifying and expanding into new markets. They conduct market research, analyze market potential, develop market entry strategies, and collaborate with sales and marketing teams to drive business growth in new territories or target segments.
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
                        <td>MKT 111</td>
                        <td>Elements of Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 121</td>
                        <td>Marketing of Financial Services</td>
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
                        <td>MKT 203</td>
                        <td>Introduction to Marketing Psychology</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 211</td>
                        <td>Principles of Marketing Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 212</td>
                        <td>Business to Business Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 213</td>
                        <td>Entrepreneurial Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 220</td>
                        <td>Food & Agricultural Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 221</td>
                        <td>Service and Social Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 222</td>
                        <td>Retail & Wholesale Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MKT 223</td>
                        <td>Online Public Relations & Reputation Management</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 20</b></p>
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
                        <td>2 C 30</td>
                    </tr>
                    <tr>
                        <td>ENT 312</td>
                        <td>Venture Creation</td>
                        <td>2 C 15 45</td>
                    </tr>
                    <tr>
                        <td>MKT 303</td>
                        <td>Legal Aspects of Marketing</td>
                        <td>3 C 45</td>
                    </tr>
                    <tr>
                        <td>MKT 304</td>
                        <td>Marketing Theory</td>
                        <td>2 C 30</td>
                    </tr>
                    <tr>
                        <td>MKT 311</td>
                        <td>Digital Marketing Management</td>
                        <td>3 C 45</td>
                    </tr>
                    <tr>
                        <td>MKT 312</td>
                        <td>Logistics & Distribution Management</td>
                        <td>2 C 30</td>
                    </tr>
                    <tr>
                        <td>MKT 313</td>
                        <td>Marketing Practicum</td>
                        <td>2 C 15 45</td>
                    </tr>
                    <tr>
                        <td>MKT 321</td>
                        <td>Consumer Behavior</td>
                        <td>3 C 45 -</td>
                    </tr>
                    <tr>
                        <td>MKT 322</td>
                        <td>Strategic Marketing</td>
                        <td>2 C 30</td>
                    </tr>
                    <tr>
                        <td>MKT 323</td>
                        <td>Marketing Research & Analytics</td>
                        <td>3 C 45</td>
                    </tr>
                    <tr>
                        <td>MKT 324</td>
                        <td>Marketing Operations Management</td>
                        <td>2 C 30</td>
                    </tr>
                    <tr>
                        <td>MKT 326</td>
                        <td>Sales Management</td>
                        <td>2 C 30</td>
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
                        <td>MKT 411</td>
                        <td>Analysis for Marketing Decisions</td>
                        <td>2 C 30 -</td>
                    </tr>
                    <tr>
                        <td>MKT 412</td>
                        <td>Contemporary Issues in Marketing Practice</td>
                        <td>2 C 30 -</td>
                    </tr>
                    <tr>
                        <td>MKT 413</td>
                        <td>New Product Development & Management</td>
                        <td>2 C 30 -</td>
                    </tr>
                    <tr>
                        <td>MKT 416</td>
                        <td>Marketing Persuasions</td>
                        <td>2 C 30 -</td>
                    </tr>
                    <tr>
                        <td>MKT 421</td>
                        <td>Political Marketing</td>
                        <td>2 C 30 -</td>
                    </tr>
                    <tr>
                        <td>MKT 422</td>
                        <td>Energy Marketing</td>
                        <td>2 C - -</td>
                    </tr>
                    <tr>
                        <td>MKT 423</td>
                        <td>Global Marketing</td>
                        <td>2 C - -</td>
                    </tr>
                    <tr>
                        <td>MKT 424</td>
                        <td>Research Project</td>
                        <td>6 C - 270</td>
                    </tr>
                    <tr>
                        <td>MKT 425</td>
                        <td>Integrated Marketing Communications</td>
                        <td>2 C 30 -</td>
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
