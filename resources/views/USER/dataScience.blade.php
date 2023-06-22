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
                                  Data Science
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
                                            <h1 class="feature-banner__title">
                                              Data Science B.Sc
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
                <p>The Data Science B.Sc. program is designed to equip students with the skills and knowledge required to harness the power of data and drive data-driven decision-making. In today's digital age, data has become a valuable resource, and professionals who can effectively analyze and interpret data are in high demand across industries. This program provides a comprehensive understanding of data science concepts, techniques, and tools, enabling students to become proficient in data manipulation, data visualization, statistical analysis, machine learning, and predictive modeling. Through hands-on projects and real-world applications, students will develop the expertise to uncover insights, solve complex problems, and make informed decisions based on data.
                </p>
                <p><strong>Aim and Objectives:</strong> The aim of the Data Science B.Sc. program is to develop skilled and knowledgeable professionals who can effectively harness data to drive business and societal impact. The program is designed to achieve the following objectives:
                </p>
                <ol>
                    <li><strong>Provide a Solid Foundation:</strong> The program aims to provide students with a solid foundation in data science principles, methodologies, and techniques. Students will develop a deep understanding of data collection, data management, data analysis, and data visualization, ensuring a comprehensive knowledge base to excel in the field.</li>
                    <li><strong>Foster Analytical and Problem-Solving Skills:</strong> The program aims to cultivate strong analytical thinking and problem-solving skills in students. Through practical exercises, projects, and case studies, students will learn how to identify business challenges, formulate data-driven hypotheses, apply appropriate data science techniques, and derive meaningful insights to solve complex problems.</li>
                    <li><strong>Develop Proficiency in Data Manipulation and Analysis:</strong> The program aims to equip students with the necessary skills to manipulate and analyze large and complex datasets. Students will learn various data manipulation techniques, programming languages, and statistical tools to extract valuable information, uncover patterns, and derive actionable insights from data.</li>
                    <li><strong>Explore Machine Learning and Predictive Modeling:</strong> The program aims to familiarize students with machine learning algorithms, predictive modeling techniques, and data-driven modeling approaches. Students will gain hands-on experience in building and evaluating predictive models to make accurate predictions and forecasts based on data.</li>
                    <li><strong>Enhance Communication and Visualization Skills:</strong> The program aims to develop students' ability to effectively communicate data-driven insights to stakeholders. Students will learn how to present complex data analysis results in a clear and concise manner using data visualization techniques and storytelling principles.</li>
                </ol>
                <p><strong>Learning Outcomes:</strong> By the end of the Data Science B.Sc. program, students will be able to:
                </p>
                <ol>
                    <li>Apply data science methodologies, tools, and techniques to solve complex business problems and make data-driven decisions.</li>
                    <li>Manipulate, preprocess, and analyze large and diverse datasets using appropriate programming languages, statistical methods, and machine learning algorithms.</li>
                    <li>Create insightful data visualizations that effectively communicate complex information and aid in decision-making.</li>
                    <li>Develop and evaluate predictive models to make accurate forecasts and predictions based on data.</li>
                    <li>Demonstrate strong analytical thinking, problem-solving skills, and the ability to apply data science concepts in real-world scenarios.</li>
                    <li>Work effectively in interdisciplinary teams, leveraging data science skills to contribute to collaborative projects and initiatives.</li>
                    <li>Stay abreast of emerging trends and advancements in the field of data science, continuously updating their knowledge and skills to adapt to evolving industry demands.</li>
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
              <h4>Careers in Data Science: for B.Sc. Graduates:
              </h4>
              <ol>
                <li><strong>Data Scientist:</strong> Data scientists are responsible for collecting, analyzing, and interpreting large and complex datasets to extract valuable insights. They develop predictive models, create algorithms, and use statistical techniques to solve business problems and drive data-driven decision-making.</li>
                <li><strong>Data Analyst:</strong> Data analysts focus on collecting, cleaning, and organizing data to uncover patterns, trends, and correlations. They perform exploratory data analysis, create visualizations, and provide actionable insights to support business strategies and decision-making processes.</li>
                <li><strong>Machine Learning Engineer:</strong> Machine learning engineers build and deploy machine learning models and algorithms to automate processes, improve efficiency, and develop innovative solutions. They work on developing and optimizing algorithms, implementing model training pipelines, and integrating machine learning solutions into software systems.</li>
                <li><strong>Business Intelligence Analyst:</strong> Business intelligence analysts collect and analyze data to provide insights and support strategic business decisions. They create dashboards, perform data mining, and develop reports that help organizations understand market trends, customer behavior, and business performance.</li>
                <li><strong>Data Engineer:</strong> Data engineers design, build, and maintain the systems and infrastructure needed to collect, store, and process large datasets. They develop data pipelines, ensure data quality and integrity, and optimize databases to support data analysis and decision-making.</li>
                <li><strong>Data Architect:</strong> Data architects design and manage the overall structure and organization of data within an organization. They develop data models, design data warehouses, and ensure data integration and consistency across systems. They work closely with data engineers and data scientists to ensure efficient data management.</li>
                <li><strong>Data Visualization Specialist:</strong> Data visualization specialists create visually appealing and informative visual representations of data. They use tools like Tableau, Power BI, or Python libraries to create interactive dashboards, infographics, and charts that effectively communicate complex data insights to stakeholders.</li>
                <li><strong>Data Product Manager:</strong> Data product managers identify market opportunities, define data-driven product strategies, and oversee the development and launch of data-related products. They collaborate with cross-functional teams to ensure the alignment of product goals with customer needs and business objectives.</li>
                <li><strong>Data Consultant:</strong> Data consultants provide expert advice and guidance to organizations on leveraging data to solve specific business challenges. They assess data needs, develop data strategies, and provide recommendations on data-driven solutions to improve efficiency, drive innovation, and achieve business goals.</li>
                <li><strong>Research Scientist:</strong> Research scientists focus on conducting in-depth research and developing new methodologies in the field of data science. They work in academia, research institutions, or industry research labs, contributing to advancements in data science techniques, algorithms, and applications.</li>
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
                      <td>PHY 101</td>
                      <td>General Physics I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PHY 102</td>
                      <td>General Physics II</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PHY 107</td>
                      <td>General Practical Physics I</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>PHY 108</td>
                      <td>General Practical Physics II</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>STA 111</td>
                      <td>Descriptive Statistics</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>COS 101</td>
                      <td>Introduction to Computing Sciences</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>COS 102</td>
                      <td>Problem Solving</td>
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
                      <td>Philosophy, Logic and Human Existence</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>ENT 211</td>
                      <td>Entrepreneurship and Innovation</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>MTH 201</td>
                      <td>Mathematical Methods I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>MTH 203</td>
                      <td>Sets, Logic and Algebra I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>MTH 209</td>
                      <td>Introduction to Numerical Analysis</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>COS 201</td>
                      <td>Computer Programming I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>COS 202</td>
                      <td>Computer Programming II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DTS 201</td>
                      <td>Introduction to Data Science</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DTS 204</td>
                      <td>Statistical Computing Inference and Modelling</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DTS 211</td>
                      <td>Introduction to R Programming</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DTS 299</td>
                      <td>SIWES I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>CSC 203</td>
                      <td>Discrete Structures</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 28</b></p>
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
                      <td>DTS 302</td>
                      <td>Big Data Computing</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DTS 304</td>
                      <td>Data Management I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DTS 308</td>
                      <td>Ethics and Legal Issues in Data Science</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DTS 316</td>
                      <td>Probability for Data Science</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DTS 322</td>
                      <td>Data Science Innovation and Entrepreneurship</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DTS 399</td>
                      <td>SIWES II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>CYB 201</td>
                      <td>Introduction to Cybersecurity and Strategy</td>
                      <td>2</td>
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
                      <td>COS 409</td>
                      <td>Research Methodology & Technical Report Writing</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DTS 403</td>
                      <td>Data Visualization for Data-driven Decision Making</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>DTS 497</td>
                      <td>Final Year Project I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>DTS 498</td>
                      <td>Final Year Project II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>INS 401</td>
                      <td>Project Management</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 15</b></p>
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
