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
                                    Information Technology
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
                                            <h1 class="feature-banner__title">Information Technology B.Sc</h1>

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
                <p>The Information Technology (IT) B.Sc. program is designed to equip students with the knowledge and skills necessary to excel in the dynamic field of technology. This program provides a comprehensive understanding of computer systems, software development, data management, network security, and emerging technologies. Through a combination of theoretical learning and practical application, students will develop expertise in various IT domains, preparing them for a wide range of exciting career opportunities in the rapidly evolving digital landscape.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Information Technology B.Sc. program is to foster a deep understanding of IT concepts, methodologies, and practices, empowering students to become proficient professionals in the field. The program objectives are as follows:
                </p>
                <ol>
                    <li><strong>Develop Technical Proficiency:</strong> The program aims to develop students' technical proficiency in areas such as programming, database management, network administration, cybersecurity, and software development. Students will gain hands-on experience with industry-standard tools and technologies, enabling them to effectively design, implement, and maintain IT systems.</li>
    
    <li><strong>Foster Problem-Solving Skills:</strong> The program aims to cultivate students' problem-solving skills by exposing them to real-world IT challenges. Students will learn to analyze complex problems, identify appropriate solutions, and implement them using systematic approaches. They will also develop critical thinking and decision-making abilities essential for addressing technological issues.</li>
    
    <li><strong>Enhance Collaboration and Communication:</strong> The program aims to enhance students' collaboration and communication skills, recognizing the importance of teamwork in IT projects. Students will engage in group projects to foster collaboration, effective communication, and teamwork. They will learn to effectively communicate technical concepts and ideas to both technical and non-technical stakeholders. Through collaborative projects, they will learn to work in diverse teams, leverage each team member's strengths, and effectively solve problems together.</li>

                </ol>
                <p><b>Learning Outcomes:</b> By the end of the Information Technology B.Sc. program, students will:
                </p>
                <ol>
                    <li><strong>Demonstrate Proficiency in Programming:</strong> Develop proficiency in programming languages and frameworks, enabling them to design and implement software applications to address real-world problems.</li>
<li><strong>Apply Systems Analysis and Design Principles:</strong> Apply systems analysis and design methodologies to analyze user requirements, design efficient information systems, and manage the development lifecycle.</li>
<li><strong>Implement and Manage Databases:</strong> Design and implement databases, ensuring data integrity, security, and efficient retrieval of information. Understand database management systems and their role in supporting organizational operations.</li>
<li><strong>Understand Networking and Cybersecurity:</strong> Acquire knowledge of networking principles, protocols, and architectures, and understand cybersecurity concepts to safeguard information systems from threats and vulnerabilities.</li>
<li><strong>Explore Emerging Technologies:</strong> Stay updated with the latest trends and emerging technologies in the field of IT, such as cloud computing, artificial intelligence, internet of things (IoT), and data analytics.</li>
<li><strong>Effectively Communicate Technical Concepts:</strong> Demonstrate effective communication skills to convey technical concepts to both technical and non-technical audiences, through written reports, presentations, and documentation.</li>
<li><strong>Work Effectively in Teams:</strong> Collaborate effectively in team settings, demonstrating the ability to work collaboratively on IT projects, leverage individual strengths, and contribute to the achievement of team goals.</li>
<li><strong>Demonstrate Ethical and Professional Practices:</strong> Understand and apply ethical and professional practices in IT, including respect for intellectual property, privacy and security, and adherence to legal and ethical standards.</li>
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
              <h4>Career Opportunities for Information Technology B.Sc. Graduates:

              </h4>
              <ol>
                <li><strong>Software Developer/Engineer:</strong> Graduates can pursue careers as software developers or engineers, involved in designing, coding, testing, and maintaining software applications. They can work in diverse industries, including technology companies, software development firms, and start-ups.</li>
<li><strong>Systems Analyst:</strong> Graduates can work as systems analysts, responsible for analyzing user requirements, designing information systems, and ensuring efficient and effective implementation. They can work in various organizations, including government agencies, consulting firms, and large corporations.</li>
<li><strong>Network Administrator/Engineer:</strong> Graduates can pursue careers as network administrators or engineers, responsible for managing and maintaining computer networks. They can work in industries such as telecommunications, IT services, and large organizations with complex network infrastructures.</li>
<li><strong>Database Administrator:</strong> Graduates can work as database administrators, responsible for designing, implementing, and managing databases. They can work in organizations where data management and analysis are critical, such as healthcare, finance, and e-commerce.</li>
<li><strong>IT Project Manager:</strong> Graduates can pursue careers as IT project managers, overseeing the planning, execution, and delivery of IT projects. They can work in various industries, managing projects related to software development, system implementation, infrastructure upgrades, and technology integration.</li>
<li><strong>Cybersecurity Analyst:</strong> Graduates can work as cybersecurity analysts, focusing on protecting information systems from security threats and vulnerabilities. They can work in industries such as banking, finance, healthcare, and government, ensuring the security of sensitive data and networks.</li>
<li><strong>IT Consultant:</strong> Graduates can work as IT consultants, providing expertise and guidance to organizations on technology strategies, system integration, and process improvement. They can work independently or for consulting firms, assisting clients in optimizing their IT infrastructure and aligning it with business goals.</li>
<li><strong>Web Developer:</strong> Graduates can pursue careers as web developers, creating and maintaining websites and web applications. They can work for web development agencies, media companies, e-commerce platforms, or as freelancers.</li>
<li><strong>Data Analyst/Scientist:</strong> Graduates can work as data analysts or data scientists, analyzing large datasets, extracting meaningful insights, and making data-driven decisions. They can work in industries such as finance, marketing, healthcare, and research.</li>
<li><strong>IT Trainer/Educator:</strong> Graduates can work as IT trainers or educators, sharing their knowledge and expertise with others. They can work in educational institutions, training centers, or corporate environments, providing technical training and support to individuals and organizations.</li>
<li><strong>IT Sales and Business Development:</strong> Graduates can pursue careers in IT sales and business development, promoting and selling IT solutions to organizations. They can work for technology vendors, IT service providers, or start-ups, helping businesses leverage technology for their growth and success.</li>
<li><strong>Entrepreneurship:</strong> Graduates can start their own IT-related businesses, leveraging their skills and knowledge to provide innovative solutions and services to clients.</li>

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
                  <td>GST 212</td>
                  <td>Philosophy, Logic, and Human Existence</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ENT 211</td>
                  <td>Entrepreneurship and Innovation</td>
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
                  <td>IFT 203</td>
                  <td>Introduction to Web Technologies</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 205</td>
                  <td>Introduction to Information Technology</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 211</td>
                  <td>Digital Logic Design</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 212</td>
                  <td>Computer Architecture and Organization</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 299</td>
                  <td>SIWES I</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>INS 202</td>
                  <td>Human-Computer Interface</td>
                  <td>2</td>
                </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 23</b></p>
              <p style="text-align:left; ">SIWES I takes place during the long vacation of 200 level
            </p>
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
                  <td>IFT 302</td>
                  <td>Web Application Development</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 304</td>
                  <td>Web Development using Content Management Systems</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 308</td>
                  <td>Ethics and Legal Issues in IT</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 310</td>
                  <td>Mobile Application Development</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 322 IT</td>
                  <td>Innovation and Entrepreneurship</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 342</td>
                  <td>Network Servers and Infrastructures</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 399</td>
                  <td>SIWES II</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>CSC 308</td>
                  <td>Operating Systems</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>ICT 305</td>
                  <td>Data Communications Systems and Network</td>
                  <td>3</td>
                </tr>
              </table>
              
              <p style="text-align:left; "><b>Total Unit: 25</b></p>
              <p style="text-align:left; ">SIWES II takes place during the long vacation of 300 level
            </p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">400 level</h4>
              <table>
                <tr>
                  <td>COS 409</td>
                  <td>Research Methodology and Technical Report Writing</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>IFT 403</td>
                  <td>Mobile and Pervasive Computing</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 410</td>
                  <td>System Integration and Architecture</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 442</td>
                  <td>Wireless Communications and Networking</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT 497</td>
                  <td>Final Year Student’s Project I</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>IFT 498</td>
                  <td>Final Year Student’s Project II</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>INS 401</td>
                  <td>Project Management</td>
                  <td>2</td>
                </tr>
              </table>
              
              <p style="text-align:left; "><b>Total Unit: 17</b></p>
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
