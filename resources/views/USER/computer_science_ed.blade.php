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
                                            <h1 class="feature-banner__title">Computer Science B. Sc. (Ed)
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
                <p>The Computer Science B.Sc. (Ed) program at Yonevas Open University is designed to provide students with a
                    comprehensive understanding of computer science principles and applications. This program combines
                    theoretical knowledge with practical skills, preparing students for a wide range of career opportunities
                    in the dynamic field of computer science. Through engaging coursework, hands-on projects, and exposure
                    to the latest technologies, students will develop the critical thinking, problem-solving, and technical
                    skills necessary to thrive in the ever-evolving world of computing.</p>

                <h5>Aim and Objectives</h5>

                <p>The <b>aim</b> and <b>objectives</b> of the Computer Science B.Sc. (Ed) program are as follows:
                </p>

                <p>1. Provide a Strong Foundation: The program aims to provide students with a strong foundation in computer
                    science concepts, theories, and methodologies. Through a comprehensive curriculum, students will develop
                    a deep understanding of fundamental topics such as programming languages, algorithms, data structures,
                    computer architecture, and software engineering.




                </p>

                <p>2. Foster Problem-Solving Skills: The program aims to foster students' problem-solving skills by
                    equipping them with the ability to analyze complex problems and devise efficient and innovative
                    solutions. Through hands-on projects and practical assignments, students will gain experience in
                    applying computational thinking and logical reasoning to solve real-world challenges.




                </p>

                <p>3. Develop Technical Expertise: The program aims to develop students' technical expertise in various
                    areas of computer science. Students will acquire practical skills in programming, database management,
                    networking, artificial intelligence, cybersecurity, and other emerging fields. This will enable them to
                    adapt to the rapidly changing technological landscape and excel in their future careers.




                </p>

                <p>4. Cultivate Collaborative and Communication Skills: The program aims to cultivate students'
                    collaborative and communication skills, recognizing the importance of teamwork and effective
                    communication in the field of computer science. Students will participate in group projects,
                    presentations, and discussions, developing their ability to work effectively in teams and effectively
                    convey technical concepts to diverse audiences.




                </p>



                <h5>Learning Outcomes:
                </h5>

                <p>Upon completion of the Computer Science B.Sc. (Ed) program, students will be able to:

                </p>

                <p>1. Demonstrate a deep understanding of core computer science concepts, theories, and principles.




                </p>

                <p>2. Design, develop, and implement computer-based solutions using appropriate programming languages and
                    tools.



                </p>

                <p>3. Apply critical thinking and problem-solving skills to analyze and solve complex computing problems.



                </p>

                <p>4. Utilize software engineering principles and practices to develop reliable and scalable software
                    applications.




                </p>

                <p>5. Evaluate and select appropriate algorithms and data structures to optimize computational efficiency.



                </p>

                <p>6. Design and manage databases for efficient storage, retrieval, and manipulation of data.



                </p>

                <p>7. Apply networking principles to design and configure computer networks for efficient communication.


                </p>

                <p>8. Understand the ethical and societal implications of computing technologies and demonstrate responsible
                    and ethical behavior in their professional practice.



                </p>

                <p>9. Continuously update their knowledge and skills in the field of computer science to adapt to emerging
                    technologies and industry trends.



                </p>


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

                <p>Note: English and Mathematics are compulsory in some areas of study, contact the department if you are
                    not sure where to begin.

                </p>
            </div>

            <div id="tab3" class="tab-content">
                <h4>Career Opportunities for Computer Science B.Sc. (Ed) Graduates:



                </h4>
                <ol>
                    <li>Software Engineer/Developer: Graduates can pursue careers as software engineers or developers,
                        designing, coding, and testing software applications. They can work in various industries such as
                        technology companies, software development firms, finance, healthcare, and e-commerce.




                    </li>
                    <li>Web Developer: Graduates can specialize in web development, creating and maintaining websites and
                        web applications. They can work as front-end or back-end developers, utilizing programming languages
                        such as HTML, CSS, JavaScript, and frameworks like React or Angular. Etc.




                    </li>
                    <li>Data Scientist: With knowledge of data analysis and programming, graduates can work as data
                        scientists, extracting insights from large datasets and utilizing machine learning algorithms. They
                        can work in industries such as finance, healthcare, marketing, and research.




                    </li>
                    <li>Cybersecurity Specialist: Graduates can pursue careers in cybersecurity, protecting computer systems
                        and networks from threats and developing security measures. They can work as cybersecurity analysts,
                        consultants, or ethical hackers in industries ranging from government and defense to finance and
                        technology.





                    </li>
                    <li>Systems Analyst: Graduates can work as systems analysts, analyzing organizational needs and
                        designing information systems to meet those requirements. They can collaborate with teams to
                        implement and maintain efficient and effective computer systems in various industries.





                    </li>
                    <li>Database Administrator: Graduates can specialize in database administration, managing and
                        maintaining databases to ensure data integrity and optimal performance. They can work in
                        organizations that rely on large amounts of data, such as government agencies, finance, healthcare,
                        and e-commerce.




                    </li>
                    <li>IT Project Manager: Graduates can pursue careers as IT project managers, overseeing the planning,
                        execution, and delivery of technology projects. They can work in industries such as consulting,
                        software development, and telecommunications.




                    </li>

                    <li>AI and Machine Learning Engineer: Graduates with knowledge of artificial intelligence and machine
                        learning can work in roles focused on developing and implementing AI solutions. They can work on
                        projects involving natural language processing, computer vision, robotics, and automation.






                    </li>


                    <li>Researcher and Academic: Graduates can pursue research-oriented careers in academia or research
                        institutions, contributing to the advancement of computer science knowledge through innovative
                        research and publications.






                    </li>

                    <li>Entrepreneurship: Graduates with an entrepreneurial mindset can start their own technology-related
                        businesses, leveraging their knowledge in computer science to develop innovative products or
                        services.







                    </li>




                </ol>
            </div>

            <div id="tab4" class="tab-content">
                <p>The program cost at Yonevas Open University typically includes tuition fees, administrative fees, and
                    access to digital learning resources. These resources includes course materials, online libraries, and
                    other digital platforms that support the learning process. The cost structure may vary depending on the
                    specific program and its duration.
                </p>
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


        <div class="program-requirements"
            style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
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
                        <td>EDU 101</td>
                        <td> Introduction to Teaching Profession </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>COS 101 </td>
                        <td>Introduction to Computing Sciences </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>COS 102 </td>
                        <td>Problem Solving </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>MTH 101 </td>
                        <td> General Mathematics </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PHY 102 </td>
                        <td>General Physics </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PHY 107 </td>
                        <td>General Physics Laboratory </td>
                        <td>1</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 17</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">200 level</h4>
                <table>
                    <tr>
                        <td>GST 211</td>
                        <td>Environment & Sustainable Development </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ENT 211</td>
                        <td>Entrepreneurship and Innovation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 201</td>
                        <td> Curriculum, Curriculum Delivery and Teaching Methods </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>COS 201 </td>
                        <td>Computer Programming I </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>COS 202 </td>
                        <td> Computer Programming II </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>CSC 203 </td>
                        <td> Discrete Structures </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>IFT 211 </td>
                        <td> Digital Logic Design </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>IFT 212 </td>
                        <td>Computer Architecture and Organization </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MTH 201</td>
                        <td>Mathematical Methods I </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>MTH 202 </td>
                        <td> Mathematical Methods II </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>SEN 201 </td>
                        <td> Introduction to Software Engineering </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>CSC 299 </td>
                        <td> SIWES I </td>
                        <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 27</b></p>
                <p>[ SIWES I, hold during the long vacation of 200L ]
                </p>
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
                        <td>ENT 312 </td>
                        <td>Venture Creation </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>GST 312 </td>
                        <td>Peace and Conflict Resolution </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 301</td>
                        <td>Teaching Practice I </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EDU 302 </td>
                        <td> Educational Measurements, Tests, Research Methods and Statistics </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>CSC 301 </td>
                        <td>Data Structures </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>CSC 308	 </td>
                        <td>Operating Systems 	 </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>CSC 309  </td>
                        <td>Artificial Intelligence  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>CSC 322  </td>
                        <td>Computer Science Innovation and New Technologies 	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>CYB 201	 </td>
                        <td>	 Introduction to Cyber Security and Strategy	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>DTS 304  </td>
                        <td>Data Management  </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>ICT 305 	 </td>
                        <td>Data Communication System & Network </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>CSC 399 	 </td>
                        <td>SIWES II 	 </td>
                        <td>3</td>
                    </tr>

                </table>
                     <p style="text-align:left; "><b>Total Unit: 30</b></p>
                <p>[ SIWES now holds during the long vacation of 300L ]

                </p>

            <div style="width: 80%;">
                <h4 style="text-align:left; ">400 level</h4>
                <table>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr>
                    <tr>
                        <td>EDU 400 </td>
                        <td> Project </td>
                        <td> 3</td>
                    </tr>
                    <tr>
                        <td>EDU 401 </td>
                        <td>Teaching Practice II </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>CSC 401	</td>
                        <td>	 Algorithms and Complexity Analysis	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>INS 401 		</td>
                        <td>Project Management 		</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>CSC 402		</td>
                        <td>Ethics and Legal Issues in Computer Science	</td>
                        <td>2</td>
                    </tr>




                </table>



                <p style="text-align:left; "><b>Total Unit: 12</b></p>


            </div>
        </div>
        <div class="certificate-advert"
            style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
            <h2>LOOKING FOR SOMETHING ELSE?</h2>
            <p style="font-size: 15px; margin:5px;">Check out our 10 months professional certificate programs</p>

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
