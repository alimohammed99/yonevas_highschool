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
                                  Computer Science
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
                                              Computer Science B.Sc
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
                <p>The Computer Science B.Sc. program is designed to equip students with a strong foundation in the principles and practices of computer science. This program combines theoretical knowledge with practical skills to prepare students for a wide range of exciting career opportunities in the dynamic field of technology. Through a comprehensive curriculum and hands-on learning experiences, students will develop the critical thinking, problem-solving, and technical skills necessary to thrive in the rapidly evolving world of computer science.
                </p>
                <p><strong>Aim and Objectives:</strong> The aim of the Computer Science B.Sc. program is to provide students with a well-rounded education in computer science, enabling them to understand and apply fundamental concepts and principles in the field. The program aims to:
                </p>
                <ol>
                  <li><strong>Foster a Strong Theoretical Foundation:</strong> The program aims to provide students with a deep understanding of core computer science concepts, algorithms, and theories. Students will gain a solid foundation in areas such as data structures, programming languages, computer architecture, algorithms, and operating systems.</li>
                  
                  <li><strong>Develop Practical Skills:</strong> The program aims to develop students' practical skills in software development, programming, database management, and system design. Students will gain hands-on experience in coding, software engineering, web development, and other relevant technical skills necessary for real-world applications.</li>
                  
                  <li><strong>Promote Critical Thinking and Problem-Solving:</strong> The program aims to enhance students' critical thinking and problem-solving abilities. Students will learn to analyze complex problems, design efficient algorithms, and develop innovative solutions using computational thinking and logical reasoning.</li>
                  
                  <li><strong>Cultivate Collaboration and Communication Skills:</strong> The program aims to develop students' ability to work effectively in teams and communicate technical concepts and ideas. Students will engage in group projects, presentations, and collaborative assignments to enhance their teamwork and communication skills.</li>
                  
                  <li><strong>Keep Pace with Technological Advancements:</strong> The program aims to expose students to emerging technologies, trends, and advancements in the field of computer science. Students will be encouraged to stay updated with the latest developments, adapt to new technologies, and embrace lifelong learning.</li>
                </ol>
                <p><strong>Learning Outcomes:</strong> By the end of the Computer Science B.Sc. program, students will be able to:
                </p>
                <ol>
                  <li>Demonstrate a solid understanding of core computer science principles, theories, and concepts.</li>
                  <li>Apply problem-solving strategies and algorithms to design and develop efficient software solutions.</li>
                  <li>Utilize programming languages, frameworks, and tools to implement and test computer programs.</li>
                  <li>Design and manage databases, ensuring efficient data storage and retrieval.</li>
                  <li>Analyze system requirements and design software systems that meet user needs.</li>
                  <li>Work effectively in teams, collaborating with others to solve complex problems and complete projects.</li>
                  <li>Communicate technical concepts and ideas clearly and concisely.</li>
                  <li>Adapt to new technologies and learn independently to stay abreast of advancements in the field.</li>
                  <li>Apply ethical and professional standards in computer science practice, considering social and ethical implications.</li>
                  <li>Pursue further studies or professional certifications in specialized areas of computer science.</li>
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
              <h4>Careers for Computer Science B.Sc. Graduates:
              </h4>
              <ol>
                <li><strong>Software Engineer/Developer:</strong> Graduates can pursue careers as software engineers or developers, designing, coding, and testing software applications. They can work in various industries, including technology companies, software development firms, and startups, developing innovative solutions and improving existing software systems.</li>
                
                <li><strong>Data Scientist/Analyst:</strong> With a strong background in programming and data analysis, graduates can pursue careers as data scientists or analysts. They can work with large datasets, extract insights, and apply machine learning algorithms to solve complex problems. Industries such as finance, healthcare, e-commerce, and marketing rely on data professionals for data-driven decision making.</li>
                
                <li><strong>Web Developer:</strong> Graduates can specialize in web development, creating and maintaining websites and web applications. They can work as front-end or back-end developers, using programming languages like HTML, CSS, JavaScript, and frameworks such as React or Angular. They can work in web development agencies, IT departments, or as freelancers.</li>
                
                <li><strong>Systems Analyst/Architect:</strong> Graduates can work as systems analysts or architects, analyzing organizational needs, designing and implementing IT systems. They can collaborate with stakeholders to understand requirements, recommend suitable technologies, and ensure efficient system integration.</li>
                
                <li><strong>Network Administrator/Engineer:</strong> Graduates can pursue careers in network administration or engineering, managing and maintaining computer networks within organizations. They can configure network infrastructure, troubleshoot issues, and ensure network security and performance.</li>
                
                <li><strong>Cybersecurity Analyst:</strong> Graduates with a focus on cybersecurity can work as cybersecurity analysts, protecting computer systems and networks from security breaches. They can assess vulnerabilities, implement security measures, monitor threats, and respond to incidents to safeguard sensitive data.</li>
                
                <li><strong>Artificial Intelligence (AI) Engineer:</strong> With expertise in algorithms, machine learning, and AI technologies, graduates can work in the field of AI. They can develop AI models, build intelligent systems, and contribute to areas such as natural language processing, computer vision, and robotics.</li>
                
                <li><strong>Database Administrator:</strong> Graduates can pursue careers as database administrators, managing and organizing databases to ensure data integrity, security, and performance. They can optimize data storage, create backup strategies, and develop data retrieval systems.</li>
                
                <li><strong>IT Project Manager:</strong> With a combination of technical skills and project management expertise, graduates can work as IT project managers, leading teams and overseeing the successful implementation of IT projects. They can manage timelines, budgets, and resources while ensuring project objectives are met.</li>
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
                    <td>MTH 202</td>
                    <td>Elementary Differential Equations</td>
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
                    <td>CSC 203</td>
                    <td>Discrete Structures</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CSC 299</td>
                    <td>SIWES I</td>
                    <td>3</td>
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
                    <td>SEN 201</td>
                    <td>Introduction to Software Engineering</td>
                    <td>2</td>
                  </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 25</b></p>
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
                    <td>CSC 301</td>
                    <td>Data Structures</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>CSC 308</td>
                    <td>Operating Systems</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>CSC 309</td>
                    <td>Artificial Intelligence</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CSC 322</td>
                    <td>Computer Science Innovation and New Technologies</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CSC 399</td>
                    <td>SIWES II</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>CYB 201</td>
                    <td>Introduction to Cybersecurity and Strategy</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>DTS 304</td>
                    <td>Data Management I</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>ICT 305</td>
                    <td>Data Communication System & Network</td>
                    <td>3</td>
                  </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 25</b></p>
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
                    <td>Research Methodology and Technical Report Writing</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>CSC 401</td>
                    <td>Algorithms and Complexity Analysis</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CSC 402</td>
                    <td>Ethics and Legal Issues in Computer Science</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>CSC 497</td>
                    <td>Final Year Project I</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>CSC 498</td>
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
