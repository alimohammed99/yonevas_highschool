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
                                    Hospitality and Tourism
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
                                            <h1 class="feature-banner__title">Hospitality and Tourism Management B.Sc.</h1>
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
                <p>The Hospitality and Tourism Management B.Sc. program is designed to provide students with a comprehensive understanding of the dynamic and ever-growing hospitality and tourism industry. This program offers a multidisciplinary approach, combining business management principles with specialized knowledge in the hospitality and tourism sector. Students will explore various aspects of the industry, including hotel management, tourism marketing, event planning, and sustainable tourism practices. Through a combination of theoretical coursework, practical training, and industry exposure, students will develop the necessary skills and knowledge to excel in this exciting field.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Hospitality and Tourism Management B.Sc. program is to equip students with the essential skills and knowledge to succeed in the hospitality and tourism industry. The program aims to:
                </p>
                <ol>
                    <li><strong>Provide a comprehensive understanding:</strong> The program aims to provide students with a comprehensive understanding of the hospitality and tourism industry, including its structure, functions, and current trends. Students will gain insights into the various sectors within the industry and develop a holistic view of its operations.</li>
                    <li><strong>Develop managerial and leadership skills:</strong> The program aims to develop students' managerial and leadership skills, enabling them to effectively lead teams, manage resources, and make strategic decisions in a dynamic and customer-oriented industry. Students will learn essential business management principles, including marketing, finance, human resources, and operations management.</li>
                    <li><strong>Foster a customer-centric approach:</strong> The program aims to cultivate a customer-centric mindset, emphasizing the importance of providing exceptional service and creating memorable experiences for guests. Students will learn how to anticipate and meet customer needs, manage customer relationships, and deliver high-quality hospitality and tourism services.</li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Hospitality and Tourism Management B.Sc. program, students will be able to:</p>
                <ol>
                    <li>Demonstrate a comprehensive understanding of the hospitality and tourism industry, including its structure, operations, and key stakeholders.</li>
                    <li>Apply business management principles and techniques to effectively manage hospitality and tourism organizations.</li>
                    <li>Develop and implement marketing strategies to promote tourism destinations, hotels, and other hospitality services.</li>
                    <li>Understand and apply sustainable tourism practices to minimize negative impacts on the environment and local communities.</li>
                    <li>Demonstrate effective communication and interpersonal skills to interact with guests, colleagues, and industry professionals.</li>
                    <li>Analyze and evaluate industry trends, challenges, and opportunities, and propose innovative solutions.</li>
                    <li>Apply ethical and professional standards in the hospitality and tourism industry.</li>
                    <li>Demonstrate critical thinking and problem-solving skills in the context of hospitality and tourism management.</li>
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
                <li><strong>Hotel and Resort Management:</strong> Graduates can pursue careers in hotel and resort management, working in various departments such as front office, housekeeping, food and beverage, sales and marketing, and event management. They can take on roles such as hotel manager, guest relations manager, event coordinator, or revenue manager.</li>
                <li><strong>Tourism Development and Destination Management:</strong> Graduates can work in tourism development agencies and destination management organizations, contributing to the planning, promotion, and management of tourist destinations. They can work as destination managers, tourism consultants, tourism marketing executives, or destination event planners</li>
                <li><strong>Event Planning and Management:</strong> Graduates can pursue careers in event planning and management companies, organizing and coordinating conferences, exhibitions, conventions, and special events. They can work as event managers, conference coordinators, or wedding planners, ensuring seamless execution and delivering exceptional guest experiences</li>
                <li><strong>Travel and Tour Operations:</strong> Graduates can work in travel agencies, tour operators, or online travel platforms, assisting clients with travel arrangements, creating itineraries, and organizing tours. They can work as travel consultants, tour operators, travel sales executives, or destination specialists</li>
                <li><strong>Hospitality and Tourism Consultancy:</strong> Graduates can work as consultants, providing specialized expertise and advice to hospitality and tourism organizations. They can assist in areas such as business development, strategic planning, marketing, and sustainability, helping organizations enhance their operations and achieve their goals.</li>
                <li><strong>Airline and Airport Management:</strong> Graduates can explore career opportunities in the airline and airport industry, working in areas such as passenger services, airport operations, customer experience, and airline management. They can work for airlines, airports, or aviation management companies, ensuring smooth operations and delivering excellent customer service</li>
                <li><strong>Event Venue Management:</strong> Graduates can work in event venues such as convention centers, exhibition halls, hotels, or entertainment venues, managing the overall operations and ensuring successful events. They can take on roles as venue managers, event coordinators, or operations executives, overseeing logistical arrangements, staff management, and customer satisfaction</li>
                <li><strong>Sustainable Tourism and Ecotourism:</strong> Graduates with a focus on sustainable tourism can work in organizations dedicated to promoting environmentally and socially responsible tourism practices. They can contribute to sustainable tourism development, eco-lodge management, community-based tourism initiatives, and environmental conservation efforts</li>
                <li><strong>Cruise Line Management:</strong> Graduates can pursue careers in the cruise industry, working in various departments such as guest services, entertainment, operations, or sales and marketing. They can work for cruise lines, managing onboard operations and delivering exceptional guest experiences</li>
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
                        <td>HTM 101</td>
                        <td>The Travel concept</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 102</td>
                        <td>Nigeria Culture and Tourism</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 103</td>
                        <td>Earth and Environment </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 104</td>
                        <td>Fundamentals of leisure and recreation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 105</td>
                        <td>Tourism movements and historical developments</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 22</b></p>
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
                        <td>HTM 201</td>
                        <td>Introduction to Nutrition and food production</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 203</td>
                        <td>Introduction to tourism and hospitality Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 205</td>
                        <td>Introductory tour operations Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 207</td>
                        <td>Food and Beverage Production</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 209</td>
                        <td>Fundamentals of Hotel and Catering I</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 210</td>
                        <td>Introduction to Tourism</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 212</td>
                        <td>Tourism Resources and Destinations in Nigeria</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
                        <td>HTM 302</td>
                        <td>Environment and Ecology</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 303</td>
                        <td>Tourism Planning and Development</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 305</td>
                        <td>Tourism Organizations and travel management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 307</td>
                        <td>Ecotourism and protected area management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 309</td>
                        <td>Fundamental of Hotel and Catering II </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 311</td>
                        <td>Entrepreneurship education in Hospitality and Tourism Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 312</td>
                        <td>Research Methodology</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 313</td>
                        <td>Aquatic Tourism Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 300</td>
                        <td>SIWES (24 Weeks)</td>
                        <td>6</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 26</b></p>
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
                        <td>HTM 401</td>
                        <td>Culinary Cultures</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 402</td>
                        <td>Catering and Hotel Business Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 403</td>
                        <td>Tourism and Foodservice Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 405</td>
                        <td>Recipe Development and Sensory Evaluation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 406</td>
                        <td>Catering and Hotel Service Laws</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 408</td>
                        <td>Tourism Economics, trade and Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 410</td>
                        <td>Tourism and Hospitality administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 499</td>
                        <td>Project</td>
                        <td>62</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 20</b></p>
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
                        <td>HTM 403</td>
                        <td>Tourism and Foodservice Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRM 401</td>
                        <td>Tourism Planning and Environment</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRM 403</td>
                        <td>Tourism and Globalization</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRM 407</td>
                        <td>Tourism Laws, Policy and Legislation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRM 408</td>
                        <td>Tourism Economics, trade and Marketing</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>HTM 410</td>
                        <td>Tourism and Hospitality administration</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRM 412</td>
                        <td>Coastal zone Tourism Management</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRM 499</td>
                        <td>Project</td>
                        <td>6</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 20</b></p>
            </div>
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
