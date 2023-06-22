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
                                  Public Relations
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
                                            <h1 class="feature-banner__title">Public Relations B.Sc                                            </h1>

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
                <p>The Public Relations B.Sc. program is designed to provide students with a comprehensive understanding of the field of public relations and equip them with the necessary skills and knowledge to thrive in this dynamic and influential industry. Through a combination of theoretical foundations and practical applications, students will gain insights into the strategic communication techniques used to build and maintain positive relationships between organizations and their stakeholders. This program aims to develop competent and ethical public relations professionals who can effectively manage reputation, shape public perception, and navigate the evolving media landscape.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Public Relations B.Sc. program is to prepare students for successful careers in the field of public relations by:
                </p>
                <ol>
                  <li><strong>Providing a Solid Foundation:</strong> The program aims to provide students with a solid theoretical and conceptual foundation in public relations, encompassing key principles, theories, and models that form the basis of effective communication strategies.
                  </li>
                  <li><strong>Developing Practical Skills:</strong> The program aims to equip students with practical skills in various areas of public relations, including media relations, crisis communication, event management, digital marketing, and strategic planning. Students will gain hands-on experience through case studies, simulations, and real-world projects.
                  </li>
                  <li><strong>Fostering Critical Thinking and Problem-Solving:</strong> The program aims to foster critical thinking skills and the ability to analyze complex communication challenges. Students will learn to identify stakeholder needs, anticipate potential issues, and develop strategic solutions to enhance organizational reputation and achieve communication objectives.
                  </li>
                  <li><strong>Cultivating Ethical Practices:</strong> The program aims to cultivate ethical values and professional standards among students, emphasizing the importance of integrity, transparency, and responsible communication. Students will explore ethical dilemmas in public relations and develop ethical decision-making skills.
                  </li>
                  <li><strong>Enhancing Digital Literacy:</strong> The program aims to enhance students' digital literacy skills, equipping them with the knowledge and tools to effectively navigate the digital landscape, engage with online audiences, and leverage digital platforms for strategic communication.
                  </li>
                  <li><strong>Promoting Collaboration and Teamwork:</strong> The program aims to develop students' collaboration and teamwork skills, recognizing the significance of working effectively with colleagues, clients, and stakeholders. Students will engage in group projects and presentations to enhance their interpersonal and communication skills.
                  </li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Public Relations B.Sc. program, students will be able to:
                </p>
                <ol>
                  <li>Demonstrate a comprehensive understanding of the principles, theories, and practices of public relations.</li>
<li>Apply strategic communication techniques to build and maintain positive relationships between organizations and stakeholders.</li>
<li>Utilize effective media relations strategies and techniques to enhance organizational reputation and influence public perception.</li>
<li>Develop and execute comprehensive public relations campaigns, considering the needs of diverse audiences and utilizing a range of communication channels.</li>
<li>Employ digital tools and platforms to engage with online audiences, monitor conversations, and measure the impact of communication efforts.</li>
<li>Analyze and respond to crisis situations by developing proactive and effective communication strategies.</li>
<li>Apply ethical frameworks and professional standards to make responsible and ethical decisions in public relations practice.</li>
<li>Demonstrate effective teamwork, collaboration, and communication skills in a professional setting.</li>
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
              <h4>Career Opportunities for Public Relations B.Sc. Graduates:
              </h4>
              <ol>
                <li><strong>Public Relations Specialist:</strong> Graduates can pursue careers as public relations specialists in various industries, including corporate, non-profit, government, and agency settings. They will be responsible for developing and implementing communication strategies, managing media relations, crafting press releases, organizing events, and maintaining positive relationships with stakeholders.
                </li>
                <li><strong>Media Relations Manager:</strong> Graduates can work as media relations managers, representing organizations and managing their interactions with the media. They will be responsible for building relationships with journalists, coordinating interviews and press conferences, and ensuring positive media coverage to enhance the organization's reputation.
                </li>
                <li><strong>Corporate Communications Officer:</strong> Graduates can work in corporate communications departments, handling internal and external communications for organizations. They will be responsible for crafting messages, managing employee communications, developing content for websites and social media platforms, and maintaining consistent brand messaging.
                </li>
                <li><strong>Digital PR Specialist:</strong> With the increasing importance of digital platforms in communication, graduates can specialize in digital PR. They can work on developing and implementing digital strategies, managing online reputation, engaging with audiences through social media, and monitoring online conversations to enhance brand image and engagement.
                </li>
                <li><strong>Event Manager:</strong> Graduates can pursue careers as event managers, organizing and coordinating public relations events, conferences, and promotional activities. They will be responsible for planning logistics, managing budgets, coordinating with vendors, and ensuring successful execution of events to promote organizations and build relationships.
                </li>
                <li><strong>Crisis Communication Specialist:</strong> Graduates can specialize in crisis communication, working with organizations to develop strategies and protocols to manage and mitigate crises. They will be responsible for rapid response, message development, stakeholder communication, and reputation repair during crisis situations.
                </li>
                <li><strong>Social Media Manager:</strong> With the growing influence of social media, graduates can work as social media managers, overseeing organizations' social media presence, creating engaging content, managing online communities, and monitoring brand sentiment. They will be responsible for developing social media strategies aligned with public relations objectives.
                </li>
                <li><strong>Government Relations Specialist:</strong> Graduates can work in government relations, representing organizations' interests and building relationships with government entities. They will be responsible for monitoring policy developments, advocating for organizations' positions, and facilitating communication between organizations and government officials.
                </li>
                <li><strong>Non-Profit PR Manager:</strong> Graduates can work in non-profit organizations, managing public relations efforts to raise awareness, secure funding, and engage stakeholders. They will be responsible for crafting compelling stories, managing media relations, coordinating fundraising campaigns, and promoting the organization's mission and impact.
                </li>
                <li><strong>Communication Consultant:</strong> Graduates can work as communication consultants, providing strategic advice and services to clients from various industries. They will offer expertise in public relations, reputation management, crisis communication, and media relations, helping organizations enhance their communication strategies and achieve their goals.
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
                    <td>PRS 111</td>
                    <td>Introduction to Public Relations</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>PRS 112</td>
                    <td>History of Public Relations</td>
                    <td>2</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 12</b></p>
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
                  <td>CMS 201</td>
                  <td>History of Nigerian Media</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 201</td>
                  <td>Principle of Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 202</td>
                  <td>Media Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 203</td>
                  <td>Digital and Social Media for Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 204</td>
                  <td>Writing for Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 205</td>
                  <td>Public Relations for not-for-Profit sector</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 206</td>
                  <td>Public Relations and the Society</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 207</td>
                  <td>Marketing and Advertising in Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 209</td>
                  <td>Public Relations in a Multi-cultural Society</td>
                  <td>2</td>
                </tr>
              </table>
              
              <p style="text-align:left; "><b>Total Unit: 22</b></p>
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
                  <td>Venture creation</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 301</td>
                  <td>Theories of Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 302</td>
                  <td>Foundation of Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>CMS 303</td>
                  <td>Data Analysis in Communication Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 301</td>
                  <td>Public Relations Research</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 303</td>
                  <td>Brand Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 304</td>
                  <td>Corporate Social Responsibility</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 305</td>
                  <td>Financial Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 306</td>
                  <td>Crisis Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 307</td>
                  <td>SIWES</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>PRS 308</td>
                  <td>PR for Business Organizations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 309</td>
                  <td>Stakeholders and Community Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 310</td>
                  <td>Political Communication</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 311</td>
                  <td>Media and Communication Planning and Strategy</td>
                  <td>2</td>
                </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 32</b></p>
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
                  <td>PRS 401</td>
                  <td>Public Relations Campaign Planning and Execution</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 402</td>
                  <td>International Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 403</td>
                  <td>Ethics and Professionalism in PR</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 404</td>
                  <td>Public Relations Production Techniques (Multimedia/Interactive)</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 405</td>
                  <td>Entrepreneurship in Public Relations</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 409</td>
                  <td>Comparative Public Relations Systems</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 410</td>
                  <td>Public Relations Law</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>PRS 499</td>
                  <td>Final Year Project</td>
                  <td>4</td>
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
