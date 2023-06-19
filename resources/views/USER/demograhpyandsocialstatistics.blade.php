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
                                    Demography and Social Statistics B.Sc.
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
                                            <h1 class="feature-banner__title">Demography and Social Statistics B.Sc.</h1>

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
            <button class="tab-button" onclick="openTab(event, 'tab1')"><h4>Course info</h4></button>
            <button class="tab-button" onclick="openTab(event, 'tab2')"><h4>Program Requirements</h4></button>
            <button class="tab-button" onclick="openTab(event, 'tab3')"><h4>Career Opportunities</h4> </button>
            <button class="tab-button" onclick="openTab(event, 'tab4')"><h4>Program Cost</h4></button>
          </div>
        
          <div id="tab1" class="tab-content">
            <p>Our Demography and Social Statistics program is designed to provide students with a strong foundation in both demographic analysis and social statistics. The program combines theoretical knowledge with practical skills to enable students to understand and analyze population dynamics, social trends, and statistical data. The curriculum covers various topics such as population composition, migration, fertility, mortality, social inequality, survey design, data collection, and data analysis techniques.</p>
            <p><b>Program Structure:</b> </p>
            <ol>
                <li>
                  <strong>Core Courses:</strong> The program includes a set of core courses that provide a comprehensive understanding of demography and social statistics. These courses cover foundational concepts, theories, and methodologies in both fields.
                </li>
                <li>
                  <strong>Elective Courses:</strong> Students can choose from a range of elective courses based on their interests and career goals. Electives may include advanced topics in demography, social statistics, research methods, data visualization, and programming for data analysis.
                </li>
                <li>
                  <strong>Internship/Practicum:</strong> The program may include an internship or practicum component where students gain hands-on experience working with real-world data and applying statistical techniques in a professional setting.
                </li>
                <li>
                  <strong>Research Project:</strong> Students may be required to complete a research project in their final year, allowing them to demonstrate their ability to apply their knowledge and skills to a specific area of demography or social statistics.
                </li>
            </ol>
            <p><b>Program Outcomes:</b> Upon completion of the Demography and Social Statistics B.Sc. program, graduates will be able to:</p>
            <ol>
                <li>Understand and analyze population dynamics and social trends using demographic and statistical concepts and theories.</li>
                <li>Collect, manage, and analyze data using appropriate statistical software and techniques.</li>
                <li>Design and implement surveys and other data collection methods.</li>
                <li>Interpret and present statistical findings effectively through written reports, visualizations, and presentations.</li>
                <li>Apply statistical methods to address research questions related to population, social inequality, and other relevant areas.</li>
                <li>Work collaboratively and ethically in multidisciplinary teams to tackle real-world problems.</li>
                <li>Utilize critical thinking and problem-solving skills to address issues related to population and social statistics.</li>
                <li>Pursue advanced studies or careers in demography, social statistics, public policy, market research, social sciences, and related fields.</li>
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
            <h4>Career Opportunities for Demography and Social Statistics B.Sc. Graduates:</h4>
            <p>Demography and Social Statistics graduates possess a unique skill set that equips them for a range of exciting career opportunities. Here are some potential career paths for graduates with a B.Sc. in Demography and Social Statistics:</p>
            <ol>
                <li><strong>Demographer:</strong> Work as a demographer for government agencies, research institutions, or non-profit organizations, analyzing population data, conducting demographic research, and providing insights into population trends and patterns.</li>
                <li><strong>Data Analyst:</strong> Use your statistical and analytical skills to work as a data analyst in various sectors such as market research, social research, healthcare, or government agencies. Analyze data sets, extract meaningful insights, and provide data-driven recommendations.</li>
                <li><strong>Researcher:</strong> Conduct research on social issues, population dynamics, or public policy. Work in academic institutions, think tanks, or research organizations to contribute to the understanding of social phenomena and inform policy decisions.</li>
                <li><strong>Social Statistician:</strong> Apply statistical techniques to analyze and interpret social data related to education, healthcare, employment, or other social indicators. Provide valuable insights to organizations for evidence-based decision-making.</li>
                <li><strong>Survey Researcher:</strong> Plan, design, and implement surveys to collect social and demographic data. Analyze survey data, interpret findings, and prepare reports. Work in market research firms, government agencies, or consulting companies.</li>
                <li><strong>Policy Analyst:</strong> Use your understanding of population dynamics and social statistics to assess and evaluate public policies. Work in government agencies, non-profit organizations, or research institutions to contribute to evidence-based policy-making.</li>
                <li><strong>Data Manager:</strong> Manage and maintain large datasets related to population or social indicators. Ensure data integrity, implement data quality control measures, and design databases. Work in government agencies, research organizations, or data management firms.</li>
                <li><strong>Project Manager:</strong> Use your strong analytical and organizational skills to manage research projects or social programs. Coordinate data collection efforts, oversee data analysis, and ensure project objectives are met.</li>
                <li><strong>Market Research Analyst:</strong> Apply demographic and statistical knowledge to analyze consumer behavior, market trends, and demographics for marketing purposes. Provide insights to businesses on target markets and customer preferences.</li>
                <li><strong>Policy Planner:</strong> Collaborate with government agencies or urban planning organizations to analyze population trends and contribute to urban and regional planning initiatives. Use demographic data to inform policy decisions related to housing, transportation, and infrastructure.</li>
            </ol>
          </div>
    
          <div id="tab4" class="tab-content">
            <p>The program cost at Yonevas Open University typically includes tuition fees, administrative fees, and access to digital learning resources. These resources  includes course materials, online libraries, and other digital platforms that support the learning process. The cost structure may vary depending on the specific program and its duration.</p>
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
                    <td>DSS 101</td>
                    <td>Introduction to Population Studies and Demography</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 103</td>
                    <td>Mathematics for Social Sciences I (Algebra and Trigonometry)</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 105</td>
                    <td>Introduction to Sociology</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 102</td>
                    <td>Introduction to Demography and Social Statistics</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 104</td>
                    <td>Mathematics for Social Sciences II (Vectors: Geometry and Dynamics)</td>
                    <td>2</td>
                  </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 14</b></p>
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
                    <td>DSS 201</td>
                    <td>Population Growth (theories and patterns)</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 203</td>
                    <td>Social and Economic Statistics</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 205</td>
                    <td>Demographic Data Evaluation and Appraisal</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 202</td>
                    <td>Concepts of Population (composition, structure and processes)</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 204</td>
                    <td>Census Principles, Editing and Management</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 206</td>
                    <td>Introduction to Cartography</td>
                    <td>2</td>
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
                    <td>DSS 301</td>
                    <td>Measures of Population Change and Measurements of Population Growth</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 303</td>
                    <td>Social Statistics for Demographers</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 305</td>
                    <td>Social Investigation (nature, evolution and organization)</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 307</td>
                    <td>Labor Force – Concepts, Measurement and Problems</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 309</td>
                    <td>Population and Cartography</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 302</td>
                    <td>The Quality of Population and New Family Life</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 304</td>
                    <td>Computer Applications in Demography</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 306</td>
                    <td>Data Collection and Analysis (Research methodology)</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 308</td>
                    <td>Labor Force –Theoretical Consideration</td>
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
                    <td>DSS 401</td>
                    <td>Demographic Data Evaluation</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>DSS 403</td>
                    <td>Population Theories</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 405</td>
                    <td>Advanced Social Statistics I</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 407</td>
                    <td>Sexual and Reproductive Health</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>DSS 402</td>
                    <td>Demographic Estimation</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 404</td>
                    <td>Population Trends and Policies</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>DSS 406</td>
                    <td>Advanced Social Statistics II</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DSS 408</td>
                    <td>Research Project</td>
                    <td>6</td>
                  </tr>
                  <tr>
                    <td>SSC 401</td>
                    <td>Research Method II</td>
                    <td>2</td>
                  </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 25</b></p>
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
