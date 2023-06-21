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
                                    Journalism and Media Studies
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
                                            <h1 class="feature-banner__title">Journalism and Media Studies B.Sc
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
                <p>The Journalism and Media Studies B.Sc. program offers an in-depth exploration of the dynamic and evolving field of journalism and media. This program provides students with a comprehensive understanding of the role of media in society, the principles and ethics of journalism, and the practical skills needed to succeed in the industry. Through a combination of theoretical knowledge and hands-on experience, students will develop the critical thinking, research, communication, and storytelling skills necessary to excel in the fast-paced and ever-changing media landscape.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Journalism and Media Studies B.Sc. program is to equip students with the knowledge, skills, and ethical awareness necessary for a successful career in journalism and media. The program aims to:</p>
                <ol>
                    <li><strong>Provide a Solid Foundation:</strong> The program aims to provide students with a solid foundation in journalism and media studies, encompassing both theoretical and practical aspects. Students will develop a comprehensive understanding of media ethics, journalism principles, media law, and the role of media in shaping public opinion.
                    </li>
                    <li><strong>Develop Core Skills:</strong> The program aims to develop core skills essential for journalism and media professionals. Students will learn effective news gathering, interviewing, research, writing, and editing techniques. They will also gain proficiency in digital media production, multimedia storytelling, and data journalism.
                    </li>
                    <li><strong>Foster Critical Thinking:</strong> The program aims to foster critical thinking skills in students, enabling them to analyze and evaluate information critically. Students will develop the ability to critically assess media content, identify biases, and interpret complex issues, allowing them to produce accurate and balanced news stories.
                    </li>
                    <li><strong>Cultivate Ethical Practices:</strong> The program aims to cultivate a strong sense of ethical responsibility among students. They will learn about the ethical challenges and dilemmas faced by journalists and media professionals and develop the skills to make ethical decisions in their work. Students will understand the importance of accuracy, fairness, transparency, and respect for diverse perspectives in journalism.
                    </li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Journalism and Media Studies B.Sc. program, students will:
                </p>
                <ol>
                    <li>Demonstrate an understanding of the principles, theories, and concepts related to journalism and media studies.</li>
<li>Apply research, critical thinking, and analytical skills to gather, evaluate, and interpret information for journalistic purposes.</li>
<li>Produce high-quality news stories, features, and multimedia content across various platforms, adhering to professional standards and journalistic ethics.</li>
<li>Utilize digital tools, technologies, and multimedia storytelling techniques effectively in the creation and dissemination of media content.</li>
<li>Evaluate the impact of media on society, recognize biases and ethical issues, and apply ethical principles in journalistic practice.</li>
<li>Engage in effective communication and collaboration within diverse teams, adapting to the demands of the rapidly evolving media landscape.</li>
<li>Adapt to emerging trends and technologies in journalism and media, demonstrating a commitment to lifelong learning and professional development.</li>
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
              <h4>Career Opportunities: Graduates of the Journalism and Media Studies B.Sc. program can pursue a wide range of career opportunities in the field of journalism, media production, communication, and related industries. Some potential career paths include:

              </h4>
              <ol>
                <li><strong>Journalist/Reporter:</strong> Graduates can work as journalists or reporters for newspapers, magazines, online news outlets, or broadcast media. They can cover a variety of beats such as politics, business, sports, entertainment, or investigative journalism, producing news articles, features, or broadcast segments.
                </li>
                <li><strong>News Anchor/Presenter:</strong> Graduates can pursue careers as news anchors or presenters in television or radio broadcasting. They can deliver news reports, conduct interviews, and provide analysis on current events and issues.
                </li>
                <li><strong>Multimedia Journalist:</strong> With the rise of digital media, graduates can work as multimedia journalists who create content across multiple platforms, including written articles, videos, podcasts, and social media. They can work for media organizations or as freelance journalists.
                </li>
                <li><strong>Content Writer/Copywriter:</strong> Graduates can utilize their strong writing and storytelling skills to work as content writers or copywriters for digital marketing agencies, corporate communications departments, or media organizations. They can create engaging and persuasive content for websites, blogs, social media, and advertising campaigns.
                </li>
                <li><strong>Media Producer:</strong> Graduates can pursue careers as media producers, overseeing the production of news programs, documentaries, podcasts, or online videos. They can work for television networks, production companies, or digital media platforms.
                </li>
                <li><strong>Public Relations Specialist:</strong> Graduates can work in public relations agencies, corporate communications departments, or non-profit organizations, managing media relations, crafting press releases, organizing events, and developing communication strategies to promote their clients or organizations.
                </li>
                <li><strong>Digital Content Creator/Strategist:</strong> Graduates can leverage their knowledge of digital media to work as content creators or strategists for digital platforms, social media agencies, or online publications. They can create engaging content, manage social media accounts, and analyze digital metrics to optimize content strategies.
                </li>
                <li><strong>Media Researcher/Analyst:</strong> Graduates can work as media researchers or analysts, conducting research on media trends, audience behavior, or media impact. They can provide insights and recommendations to media organizations, advertising agencies, or market research firms.
                </li>
                <li><strong>Communication Specialist:</strong> Graduates can pursue careers as communication specialists in various industries, managing internal and external communication strategies, writing press releases, creating corporate publications, and handling crisis communication.
                </li>
                <li><strong>Freelance Journalist/Content Creator:</strong> Graduates can work as freelancers, pitching stories to media outlets, creating content for online publications, or offering their services as writers, editors, or multimedia producers on a project basis.
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
                    <td>Nigerian People and Culture</td>
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
                    <td>JMS 101</td>
                    <td>Introduction to Journalism and Media Studies</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>JMS 102</td>
                    <td>Basic Reporting Techniques</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>JMS 103</td>
                    <td>Traditional African Communication System</td>
                    <td>2</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 14</b></p>
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
                  <td>CMS</td>
                  <td>History of Nigerian Media</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 201</td>
                  <td>News Writing & Reporting</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 202</td>
                  <td>Photo Journalism I</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 203</td>
                  <td>Photo Journalism II</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 204</td>
                  <td>Writing for the Print Media</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 205</td>
                  <td>Editing and Infographic in Journalism</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 206</td>
                  <td>Feature Writing</td>
                  <td>2</td>
                </tr>
              </table>              
              <p style="text-align:left; "><b>Total Unit: 18</b></p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">300 level</h4>
              <table>
                <tr>
                  <td>ENT 312</td>
                  <td>Venture Creation</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>GST 312</td>
                  <td>Peace and Conflict Resolutions</td>
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
                  <td>JMS 301</td>
                  <td>Newspaper Production</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 302</td>
                  <td>Journalism and Politics</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 303</td>
                  <td>Scientific and Data Journalism</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 304</td>
                  <td>Investigative Journalism</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 305</td>
                  <td>Multimedia and Online Journalism</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 306</td>
                  <td>Foreign Correspondence</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 307</td>
                  <td>Media Entrepreneurship</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 308</td>
                  <td>Trends and Issues in Journalism and Media Studies</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 309</td>
                  <td>Media Attachment</td>
                  <td>2</td>
                </tr>
              </table>
              
              <p style="text-align:left; "><b>Total Unit: 28</b></p>
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
                  <td>JMS 401</td>
                  <td>Magazine Production</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 402</td>
                  <td>Critical Review and Writing</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 403</td>
                  <td>Rural Community Newspaper</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 404</td>
                  <td>Specialized Reporting</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 405</td>
                  <td>Editorial Writing</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 406</td>
                  <td>Media, Economics and Management</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 407</td>
                  <td>Comparative Media System</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 408</td>
                  <td>Media Law</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 409</td>
                  <td>Media Ethics</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 410</td>
                  <td>Journalism for Development</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>JMS 499</td>
                  <td>Original Research Project</td>
                  <td>4</td>
                </tr>
              </table>              
              <p style="text-align:left; "><b>Total Unit: 28</b></p>
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
