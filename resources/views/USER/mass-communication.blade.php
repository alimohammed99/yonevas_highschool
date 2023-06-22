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
                                  Mass Communication
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
                                            <h1 class="feature-banner__title">Mass Communication B.Sc
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
                <p>The Mass Communications B.Sc. program is designed to provide students with a comprehensive understanding of the dynamic field of mass media and communication. Through a blend of theoretical knowledge and practical skills, students will explore the various aspects of mass communication, including journalism, advertising, public relations, and media production. This program aims to equip students with the necessary tools to navigate the ever-evolving media landscape and contribute to the effective dissemination of information and messages in a globalized society.
                </p>
                <p><strong>Aims and Objectives:</strong> The aims of the Mass Communications B.Sc. program are as follows:
                </p>
                <ol>
                  <li><strong>Develop a Broad Understanding of Mass Communication:</strong> The program aims to provide students with a comprehensive understanding of the theories, principles, and practices of mass communication. Students will explore the historical, social, cultural, and ethical dimensions of mass media, and develop a critical awareness of the impact of media on society.
                  </li>
                  <li><strong>Cultivate Professional Skills:</strong> The program aims to equip students with the practical skills necessary for a successful career in mass communication. Students will develop strong writing and storytelling skills, learn to create compelling content for various media platforms, gain proficiency in media production tools and techniques, and understand the principles of effective communication and persuasion.
                  </li>
                  <li><strong>Foster Media Literacy:</strong> The program aims to cultivate media literacy among students, enabling them to critically analyze and evaluate media messages, discern credible sources of information, and navigate the complexities of the digital media landscape. Students will develop the ability to engage with media in a responsible, ethical, and informed manner.
                  </li>
                  <li><strong>Promote Cross-Cultural Communication:</strong> The program aims to foster an understanding of the diverse cultural, social, and linguistic contexts in which mass communication operates. Students will learn to communicate effectively across cultures, respect and appreciate different perspectives, and address communication challenges in a multicultural society.
                  </li>
                </ol>
                <p><b>Learning Outcomes:</b> By the end of the Mass Communications B.Sc. program, students will be able to:
                </p>
                <ol>
                  <li>Demonstrate a comprehensive understanding of the theories, concepts, and models that underpin mass communication.
                  </li>
                  <li>Apply critical thinking and analytical skills to evaluate and interpret media content and its societal implications.
                  </li>
                  <li>Develop proficiency in various forms of media production, including writing, journalism, advertising, public relations, and digital media.
                  </li>
                  <li>Communicate effectively and persuasively in different media formats, adapting their communication style to various target audiences.
                  </li>
                  <li>Employ ethical principles and professional standards in their media practices, demonstrating a strong sense of social responsibility.
                  </li>
                  <li>Collaborate effectively in team environments, demonstrating strong interpersonal and communication skills.
                  </li>
                  <li>Adapt to technological advancements in the field of mass communication and stay abreast of emerging trends and industry developments.
                  </li>
                  <li>Apply research methodologies and tools to conduct media research, analyze data, and present findings in a coherent and persuasive manner.
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
              <h4>Career Opportunities for Mass Communications B.Sc. Graduates:
              </h4>
              <ol>
                <li><strong></strong>Journalism: Graduates can pursue careers in journalism, working as reporters, news anchors, editors, or correspondents for newspapers, television networks, radio stations, or online media outlets. They can cover a wide range of topics, including politics, current affairs, sports, entertainment, or specialized areas like investigative journalism or feature writing.
                </li>
                <li><strong></strong>Public Relations: Graduates can work in public relations agencies or in-house communication departments of organizations. They can develop and implement communication strategies, manage media relations, write press releases, organize events, and build positive relationships between organizations and their stakeholders.
                </li>
                <li><strong></strong>Advertising: Graduates can work in advertising agencies, creating and executing advertising campaigns for clients. They can be involved in market research, creative concept development, copywriting, graphic design, media planning, and campaign management, helping clients promote their products or services effectively.
                </li>
                <li><strong></strong>Digital Media: With the rise of digital platforms, graduates can explore opportunities in digital media companies, social media agencies, or content creation firms. They can specialize in content writing, social media management, video production, podcasting, or digital marketing, engaging audiences through various online channels.
                </li>
                <li><strong></strong>Corporate Communications: Graduates can work in corporate communication departments of companies, handling internal and external communication. They can develop communication strategies, manage corporate branding, write corporate publications, coordinate employee communications, and handle crisis communication situations.
                </li>
                <li><strong></strong>Media Production: Graduates can pursue careers in media production, working in television or film production companies, online video platforms, or multimedia organizations. They can be involved in scriptwriting, directing, producing, cinematography, editing, or visual effects, contributing to the creation of engaging and high-quality media content.
                </li>
                <li><strong></strong>Market Research: Graduates can work in market research firms, conducting studies and analyzing data to help organizations understand consumer behavior, market trends, and preferences. They can design surveys, collect and interpret data, and provide insights to guide marketing strategies and decision-making processes.
                </li>
                <li><strong></strong>Social Media Management: Graduates can specialize in social media management, working for companies or as independent consultants. They can develop social media strategies, create engaging content, manage online communities, analyze metrics, and implement digital marketing campaigns to enhance brand visibility and engagement.
                </li>
                <li><strong></strong>Event Management: Graduates can pursue careers in event management, working for event planning agencies or in-house event departments of organizations. They can coordinate and manage various types of events, including conferences, exhibitions, product launches, and promotional campaigns, ensuring smooth execution and effective communication.
                </li>
                <li><strong></strong>Academic and Research Institutions: Graduates can choose to pursue higher education or research positions in academic institutions, think tanks, or research organizations. They can contribute to the field of mass communication by conducting research, teaching courses, mentoring students, and publishing scholarly work.
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
                    <td>CMS 101</td>
                    <td>Introduction to Human Communication</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CMS 102</td>
                    <td>Writing for the Media</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MCM 101</td>
                    <td>Foundations of Broadcasting and Film</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>MCM 102</td>
                    <td>Principles of Public Relations</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MCM 103</td>
                    <td>Introduction to Advertising</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MCM 104</td>
                    <td>Introduction to News Writing</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MCM 105</td>
                    <td>Introduction to Book Publishing</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MCM 106</td>
                    <td>African Communication Systems</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MCM 107</td>
                    <td>Introduction to Photojournalism</td>
                    <td>2</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 23</b></p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">200 level</h4>
              <table><tr>
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
                <td>CMS 201</td>
                <td>History of Nigerian Media</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 201</td>
                <td>Critical and Reviewing Writing</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 202</td>
                <td>Editing and Graphics of Communication</td>
                <td>3</td>
              </tr>
              <tr>
                <td>MCM 203</td>
                <td>Feature Writing</td>
                <td>3</td>
              </tr>
              <tr>
                <td>MCM 204</td>
                <td>Advanced and Specialized Reporting</td>
                <td>3</td>
              </tr>
              <tr>
                <td>MCM 205</td>
                <td>Techniques in Book publishing</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 206</td>
                <td>Manuscript Editing, Layout and Design in Book Publishing</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 207</td>
                <td>Radio/TV News Reporting and production</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 208</td>
                <td>Radio/Television Programme Writing</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 209</td>
                <td>Drama, Film and Documentary Production</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 210</td>
                <td>Presentation and Performance</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 211</td>
                <td>Basics of Screenwriting and Film Animation</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 212</td>
                <td>Marketing Foundations for Public Relations and Advertising</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 213</td>
                <td>Writing for Public Relations</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 214</td>
                <td>Advert Copy Writing</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 215</td>
                <td>Advertising Media Planning</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MCM 216</td>
                <td>Fundamentals of Media Relations</td>
                <td>2</td>
              </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 41</b></p>
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
                  <td>CMS 301</td>
                  <td>Theories of Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 302</td>
                  <td>Foundation of Communication Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 303</td>
                  <td>Data analysis in Communication Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 301</td>
                  <td>Mass Communication and Politics</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 302</td>
                  <td>Online Journalism</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 303</td>
                  <td>Gender and Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 304</td>
                  <td>Foreign Correspondence</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 305</td>
                  <td>Newspaper /Magazine Management and Production</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 306</td>
                  <td>Investigative Journalism</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 307</td>
                  <td>Photojournalism Research and Management</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 308</td>
                  <td>Broadcast Programming, Management and Operations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 309</td>
                  <td>Commentary, Critical Writing and Public Affairs Broadcasting</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 310</td>
                  <td>International and Foreign Broadcasting</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 311</td>
                  <td>Film Production and Screen Directing</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 312</td>
                  <td>Organization and Management of Advertising and PR Agencies</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 313</td>
                  <td>Advertising and PR Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 314</td>
                  <td>International Public Relations and Advertising</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 315</td>
                  <td>Consumer Affairs</td>
                  <td>2</td>
                </tr>
              </table>
              
              <p style="text-align:left; "><b>Total Unit: 40</b></p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">400 level</h4>
              <table>
                <tr>
                  <td>CMS 401</td>
                  <td>International Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 402</td>
                  <td>Communication and Society</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 401 &amp; 402</td>
                  <td>Original Research Project</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>MCM 403</td>
                  <td>Media attachment</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 404</td>
                  <td>Mass Media Ethics</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 405</td>
                  <td>Mass Media Law</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 406</td>
                  <td>Communication for Development</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 407</td>
                  <td>Message Design for Development</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MCM 408</td>
                  <td>Community Media and Relations</td>
                  <td>2</td>
                </tr>
              </table>
              
              <p style="text-align:left; "><b>Total Unit: 20</b></p>
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
