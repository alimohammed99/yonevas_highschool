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
                                    Information and Media Studies
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
                                            <h1 class="feature-banner__title">Information and Media Studies B.Sc                                            </h1>

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
                <p>The Information and Media Studies B.Sc. program is designed to provide students with a comprehensive understanding of the dynamic field of information and media in today's digital age. This interdisciplinary program explores the various aspects of information management, media communication, and digital technologies. Students will gain insights into how information is created, organized, disseminated, and consumed, and how media shapes our society. Through a combination of theoretical knowledge and practical skills, students will be prepared to navigate the rapidly evolving landscape of information and media industries.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Information and Media Studies B.Sc. program is to equip students with a solid foundation in the theories, concepts, and practices related to information and media. The program aims to:
                </p>
                <ol>
                    <li><strong>Foster Critical Thinking:</strong> Develop students' critical thinking skills to analyze and evaluate information and media content critically. Students will learn to assess credibility, biases, and ethical considerations in the production and consumption of information and media.
                    </li>
                    <li><strong>Enhance Digital Literacy:</strong> Enhance students' digital literacy skills to effectively navigate and utilize digital technologies, platforms, and tools. Students will gain hands-on experience with various media technologies, software applications, and digital communication platforms.
                    </li>
                    <li><strong>Develop Information Management Skills:</strong> Equip students with the knowledge and skills to effectively manage and organize information in various contexts. Students will learn about information retrieval, database management, information architecture, and information ethics.
                    </li>
                    <li><strong>Explore Media Communication:</strong> Provide students with a deep understanding of media communication theories, processes, and practices. Students will examine the role of media in shaping public opinion, influencing social change, and fostering cultural understanding.
                    </li>
                    <li><strong>Foster Media Production Skills:</strong> Develop students' media production skills in areas such as journalism, digital content creation, multimedia storytelling, and media design. Students will have the opportunity to engage in hands-on projects to create compelling media content.
                    </li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Information and Media Studies B.Sc. program, students will:
                </p>
                <ol>
                    <li>Demonstrate a comprehensive understanding of the theories, concepts, and practices in information and media studies.</li>
                    <li>Apply critical thinking skills to analyze and evaluate information and media content critically.</li>
                    <li>Effectively utilize digital technologies, platforms, and tools to navigate and engage with information and media.</li>
                    <li>Apply information management principles and techniques to effectively organize and retrieve information.</li>
                    <li>Understand and analyze media communication processes, including the role of media in society, the influence of media on public opinion, and the ethical implications of media practices.</li>
                    <li>Demonstrate proficiency in media production skills, including journalism, digital content creation, multimedia storytelling, and media design.</li>
                    <li>Communicate effectively through various media channels and adapt to evolving communication technologies.</li>
                    <li>Apply ethical and legal considerations in the production and dissemination of information and media content.</li>

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
              <h4>Career Opportunities for Information and Media Studies B.Sc. Graduates:

              </h4>
              <ol>
                <li><strong>Digital Content Creator:</strong> Graduates can pursue careers as digital content creators, producing engaging and relevant content for websites, social media platforms, and online publications. They can work as bloggers, social media managers, content strategists, or video producers, utilizing their skills in storytelling, multimedia production, and audience engagement.
                </li>
                <li><strong>Information Manager:</strong> Graduates can work as information managers in organizations, ensuring effective organization, retrieval, and dissemination of information. They can contribute to knowledge management, digital archiving, information governance, and database administration, utilizing their expertise in information organization and information ethics.
                </li>
                <li><strong>Media Analyst:</strong> Graduates can work as media analysts, conducting research and analysis on media trends, audience behavior, and media impact. They can provide insights and recommendations to media organizations, advertising agencies, or market research firms, helping them make informed decisions about media strategies and campaigns.
                </li>
                <li><strong>Journalist:</strong> Graduates can pursue careers in journalism, working as reporters, news writers, or editors for traditional or online media outlets. They can cover a wide range of topics, including politics, culture, technology, or investigative reporting, utilizing their skills in research, storytelling, and media ethics.
                </li>
                <li><strong>Public Relations Specialist:</strong> Graduates can work in public relations departments or agencies, managing communication strategies, developing media campaigns, and building relationships with stakeholders. They can utilize their knowledge of media dynamics and effective communication to shape public perception and maintain a positive image for organizations or individuals.
                </li>
                <li><strong>Information Consultant:</strong> Graduates can work as information consultants, providing expertise and guidance on information management, data analysis, and digital transformation. They can assist organizations in optimizing their information systems, improving information accessibility, and implementing effective data-driven strategies.
                </li>
                <li><strong>Digital Marketing Specialist:</strong> Graduates can pursue careers in digital marketing, leveraging their understanding of media consumption habits and digital platforms. They can work in areas such as search engine optimization (SEO), content marketing, social media marketing, or digital advertising, helping organizations reach their target audiences and achieve marketing goals.
                </li>
                <li><strong>User Experience (UX) Designer:</strong> Graduates can work as UX designers, focusing on creating user-friendly and engaging digital experiences. They can collaborate with software development teams, conduct user research, design interfaces, and ensure optimal user interactions with digital products and platforms.
                </li>
                <li><strong>Market Research Analyst:</strong> Graduates can work as market research analysts, collecting and analyzing data to understand consumer behavior, market trends, and competitive landscapes. They can help organizations make informed business decisions, develop marketing strategies, and identify growth opportunities.
                </li>
                <li><strong>Media Planner:</strong> Graduates can work as media planners, collaborating with advertising agencies or media buying firms to strategize and execute effective media campaigns. They can analyze target audience demographics, media consumption patterns, and budget considerations to recommend optimal media placements and maximize campaign impact.
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
                    <td>Communication in English</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>GST 112</td>
                    <td>Nigerian Peoples and Culture</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CMS 111</td>
                    <td>Introduction to Human Communication</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CMS 112</td>
                    <td>Writing for the Media</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ISM 111</td>
                    <td>Introduction to Information Science</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ISM 112</td>
                    <td>Basic Computer Tools</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ISM 113</td>
                    <td>Computer Aided Design in Media Production</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ISM 121</td>
                    <td>Web-based Technologies & Multimedia</td>
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
                  <td>CMS 211</td>
                  <td>History of Nigerian Media</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 211</td>
                  <td>Introduction to Image Processing & Application</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 212</td>
                  <td>Applied Computer Graphics</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 213</td>
                  <td>Fundamentals of Film & Cinematography</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 214</td>
                  <td>Introduction to Academic Information Resources</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 221</td>
                  <td>Media Production Process</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 223</td>
                  <td>Introduction to Multimedia Scripting</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 224</td>
                  <td>Introduction to online and investigative Journalism</td>
                  <td>2</td>
                </tr>
              </table>             
              
              <p style="text-align:left; "><b>Total Unit: 20</b></p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">300 level</h4>
              <table>
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
                  <td>CMS 311</td>
                  <td>Theories of Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 312</td>
                  <td>Foundation of Communication Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 313</td>
                  <td>Data analysis in Communication Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 311</td>
                  <td>Interactive & Motion Graphics</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>ISM 312</td>
                  <td>Computer Animation Production</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 313</td>
                  <td>Introduction to Social Media Network</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 314</td>
                  <td>E-commerce/Business Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 321</td>
                  <td>Fundamentals of Television & Display Technologies</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 322</td>
                  <td>E-publishing (Digital Media Production)</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 323</td>
                  <td>Digital Audio & Video System Technology</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 324</td>
                  <td>SIWES</td>
                  <td>4</td>
                </tr>
              </table>              
              <p style="text-align:left; "><b>Total Unit: 29</b></p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">400 level</h4>
              <table>
                <tr>
                  <td>CMS 411</td>
                  <td>International Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 412</td>
                  <td>Communication and Society</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 411</td>
                  <td>Media Economics and Management</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 412</td>
                  <td>Media Ethics</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 413</td>
                  <td>Media Law & Policy</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 414</td>
                  <td>3D Modelling & Technology and Digital Rendering</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 421</td>
                  <td>New Media, Politics and Democracy</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 422</td>
                  <td>ICT and Development</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ISM 423</td>
                  <td>Entrepreneurship</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>ISM 429</td>
                  <td>Project</td>
                  <td>4</td>
                </tr>
              </table>
                       
              <p style="text-align:left; "><b>Total Unit: 23</b></p>
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
