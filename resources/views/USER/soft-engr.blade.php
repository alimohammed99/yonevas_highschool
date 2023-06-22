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
                                    Software Engineering
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
                                            <h1 class="feature-banner__title">Software Engineering B.Sc
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
                <p>The Software Engineering B.Sc. program is designed to provide students with a comprehensive understanding of software development processes, principles, and technologies. In this program, students will learn the theoretical foundations and practical skills required to design, develop, and maintain software systems efficiently and effectively. Through a combination of theoretical coursework and hands-on projects, students will gain the knowledge and expertise needed to excel in the dynamic field of software engineering.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Software Engineering B.Sc. program is to equip students with the necessary skill</p>
                <ol>
                    <li><strong>Provide a Solid Foundation:</strong> The program aims to provide students with a solid foundation in software engineering principles, methodologies, and best practices. Students will gain a deep understanding of software development life cycles, software architecture, algorithms, data structures, and quality assurance.</li>
<li><strong>Develop Technical Competence:</strong> The program aims to develop students' technical competence in software engineering tools, languages, and frameworks. Students will gain hands-on experience in programming languages such as Java, C++, Python, and learn to utilize industry-standard tools and technologies such as integrated development environments (IDEs) and version control systems.</li>
<li><strong>Foster Problem-Solving and Analytical Skills:</strong> The program aims to foster students' problem-solving and analytical skills, enabling them to identify, analyze, and solve complex software engineering problems. Students will learn to apply critical thinking and logical reasoning to design efficient and scalable software solutions.</li>
<li><strong>Enhance Collaboration and Communication Skills:</strong> The program aims to enhance students' collaboration and communication skills, as these are essential in the software engineering field. Students will work on team projects, engaging in effective communication, teamwork, and project management practices.</li>
<li><strong>Promote Ethical and Professional Practices:</strong> The program aims to promote ethical and professional practices in software engineering. Students will learn about software engineering ethics, intellectual property rights, and the importance of privacy and security in software development.</li>
                </ol>
                <p><b>Learning Outcomes:</b> By the end of the Software Engineering B.Sc. program, students will be able to:
                </p>
                <ol>
                    <li>Apply software engineering principles, methodologies, and tools to design, develop, and maintain software systems.</li>
<li>Analyze user requirements and translate them into software design specifications.</li>
<li>Implement software solutions using programming languages, frameworks, and development tools.</li>
<li>Apply quality assurance techniques to ensure the reliability, efficiency, and security of software systems.</li>
<li>Collaborate effectively in multidisciplinary teams to develop software projects.</li>
<li>Evaluate and select appropriate software development approaches based on project requirements and constraints.</li>
<li>Demonstrate critical thinking and problem-solving skills in identifying and resolving software engineering issues.</li>
<li>Communicate effectively, both orally and in writing, about software engineering concepts, designs, and project outcomes.</li>
<li>Adhere to ethical and professional standards in software engineering practices, including respect for intellectual property rights and user privacy.</li>
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
              <h4>Career Opportunities for Software Engineering B.Sc. Graduates:
              </h4>
              <ol>
                <li><strong>Software Developer/Engineer:</strong> Graduates can pursue careers as software developers or engineers, working on the design, development, and maintenance of software systems. They can specialize in areas such as web development, mobile app development, database management, or software testing.</li>
<li><strong>Software Architect:</strong> Graduates with strong analytical and design skills can work as software architects, responsible for designing the overall structure and framework of complex software systems. They analyze requirements, develop system architectures, and ensure scalability, reliability, and maintainability of software solutions.</li>
<li><strong>Systems Analyst:</strong> Graduates can work as systems analysts, responsible for analyzing user requirements, defining system specifications, and recommending appropriate software solutions. They bridge the gap between business needs and technical implementation, ensuring software systems meet organizational objectives.</li>
<li><strong>Quality Assurance Engineer:</strong> Graduates can specialize in quality assurance and work as software testers or quality assurance engineers. They ensure the quality and reliability of software systems by designing and implementing testing procedures, identifying bugs and issues, and working closely with development teams to resolve them.</li>
<li><strong>Project Manager:</strong> Graduates with strong leadership and organizational skills can pursue careers as project managers in software development. They oversee the planning, execution, and delivery of software projects, managing teams, budgets, timelines, and ensuring successful project outcomes.</li>
<li><strong>DevOps Engineer:</strong> Graduates can work as DevOps engineers, responsible for bridging the gap between software development and IT operations. They focus on automating processes, implementing continuous integration and deployment, and ensuring the smooth functioning of software systems.</li>
<li><strong>Data Scientist:</strong> Graduates with a strong background in software engineering and data analysis can pursue careers as data scientists. They utilize software engineering principles to develop data-driven models and algorithms, extract insights from large datasets, and provide valuable business intelligence.</li>
<li><strong>Entrepreneurship and Startups:</strong> Graduates can venture into entrepreneurship and start their own software development companies or tech startups. They can develop innovative software solutions, provide consulting services, or create software products to meet market demands.</li>
<li><strong>Research and Development:</strong> Graduates can pursue research-oriented careers in academia, research institutions, or industrial research and development (R&D) departments. They can contribute to advancing software engineering methodologies, developing new algorithms, or improving software development processes.</li>
<li><strong>Consulting and Freelancing:</strong> Graduates can work as software engineering consultants, providing expertise and guidance to organizations on software development practices, technology adoption, and process improvement. They can also work as freelancers, taking on projects and providing software development services on a contract basis.</li>
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
                    <td>GST111</td>
                    <td>Communication in English</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>GST112</td>
                    <td>Nigerian Peoples & Culture</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MTH101</td>
                    <td>Elementary Mathematics I</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>MTH102</td>
                    <td>Elementary Mathematics II</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>PHY101</td>
                    <td>General Physics I</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>PHY102</td>
                    <td>General Physics II</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>PHY107</td>
                    <td>General Practical Physics I</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>PHY108</td>
                    <td>General Practical Physics II</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>STA111</td>
                    <td>Descriptive Statistics</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>COS101</td>
                    <td>Introduction to Computing Sciences</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>COS102</td>
                    <td>Introduction to Problem Solving</td>
                    <td>3</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 23</b></p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">200 level</h4>
              <table>
                <tr>
                  <td>GST212</td>
                  <td>Philosophy, Logic And Human Existence</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ENT212</td>
                  <td>Entrepreneurship and Innovation</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MTH201</td>
                  <td>Mathematical Methods I</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>MTH202</td>
                  <td>Mathematical Methods II</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>COS201</td>
                  <td>Computer Programming I</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>COS202</td>
                  <td>Computer Programming II</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>SEN201</td>
                  <td>Introduction to Software Engineering</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN299</td>
                  <td>SIWES I</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>CSC203</td>
                  <td>Discrete Structures</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>INS204</td>
                  <td>System Analysis and Design</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>IFT211</td>
                  <td>Digital Logic Design</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>IFT212</td>
                  <td>Computer Architecture and Organization</td>
                  <td>2</td>
                </tr>
              </table>              
              <p style="text-align:left; "><b>Total Unit: 28</b></p>
              <p style="text-align:left; ">SIWES I takes place during the long vacation of 200 level
            </p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">300 level</h4>
              <table>
                <tr>
                  <td>GST312</td>
                  <td>Peace and Conflict Resolution</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>ENT312</td>
                  <td>Venture Creation</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN301</td>
                  <td>Object-Oriented Analysis and Design</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN304</td>
                  <td>Software Testing and Quality Assurance</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN306</td>
                  <td>Software Construction</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN322</td>
                  <td>Software Engineering Innovation and New Technology</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN399</td>
                  <td>SIWES II</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>CSC301</td>
                  <td>Data Structures</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>CSC308</td>
                  <td>Operating Systems</td>
                  <td>3</td>
                </tr>
              </table>              
              <p style="text-align:left; "><b>Total Unit: 21</b></p>
              <p style="text-align:left; ">SIWES II takes place during the long vacation of 300 level
            </p>
          </div>
            <div style="width: 80%;">
              <h4 style="text-align:left; ">400 level</h4>
              <table>
                <tr>
                  <td>COS409</td>
                  <td>Research Methodology and Technical Report Writing</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>SEN401</td>
                  <td>Software Configuration Management and Maintenance</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN410</td>
                  <td>Software Architecture and Design</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>SEN497</td>
                  <td>Final Year Student’s Project I</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>SEN498</td>
                  <td>Final Year Student’s Project II</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>INS401</td>
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
