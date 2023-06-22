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
                                    Human Kinetics/Physical Education




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
                                            <h1 class="feature-banner__title"> Human Kinetics/Physical Education B. Sc. (Ed)



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
                <p>The Human Kinetics/Physical Education B.Sc. (Ed) program at Yonevas Open University offers an exciting
                    and comprehensive curriculum that combines the fields of human kinetics and physical education. This
                    program is designed to provide students with a deep understanding of human movement, physical fitness,
                    and the importance of promoting an active and healthy lifestyle. Through a combination of theoretical
                    knowledge and practical skills, students will develop the expertise needed to excel in various career
                    paths related to sports, fitness, education, and health promotion.
                </p>

                <h5>Aim and Objectives</h5>

                <p>The <b>aim</b> of the Human Kinetics/Physical Education B.Sc. (Ed) program is to equip students with the
                    necessary knowledge, skills, and competencies to excel in the field of human kinetics and physical
                    education. The program aims to:

                </p>

                <p>1. Provide a comprehensive understanding of human anatomy, physiology, biomechanics, and exercise
                    physiology, enabling students to analyze and evaluate human movement and physical performance.





                </p>

                <p>2. Develop teaching and coaching skills necessary for effective physical education instruction and sports
                    coaching. Students will learn pedagogical techniques, lesson planning, and assessment strategies to
                    engage and inspire learners in physical activities.







                </p>

                <p>3. Promote an understanding of the socio-cultural and psychological aspects of physical education and
                    sports, including the role of physical activity in personal, social, and community development.








                </p>

                <p>4. Foster an appreciation for the importance of lifelong physical activity and healthy lifestyle choices,
                    equipping students with the tools to promote and advocate for physical activity and health in various
                    contexts.





                </p>



                <h5>Learning Outcomes:
                </h5>

                <p>By the end of the Human Kinetics/Physical Education B.Sc. (Ed) program, students will be able to:



                </p>

                <p>1. Apply knowledge of human anatomy, physiology, and biomechanics to analyze and evaluate human movement
                    patterns and physical performance.








                </p>

                <p>2. Demonstrate proficiency in instructional techniques, lesson planning, and assessment strategies for
                    effective physical education instruction and sports coaching.







                </p>

                <p>3. Analyze and evaluate the socio-cultural and psychological factors influencing participation in
                    physical activity and sports, and develop strategies to address diverse needs and interests.






                </p>

                <p>4. Design and implement physical education programs and initiatives that promote physical activity,
                    health, and well-being in various populations and settings.








                </p>

                <p>5. Demonstrate critical thinking and problem-solving skills in addressing challenges and opportunities
                    related to human kinetics and physical education.







                </p>

                <p>6. Communicate effectively, both orally and in writing, to convey knowledge, ideas, and research findings
                    related to human kinetics and physical education.







                </p>

                <p>7. Demonstrate ethical and professional behavior in accordance with the principles of human kinetics,
                    physical education, and the code of conduct for educators and coaches.






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
                <h4>Career Opportunities for Human Kinetics/Physical Education B.Sc. (Ed) Graduates:







                </h4>
                <ol>
                    <li>Physical Education Teacher: Graduates can pursue careers as physical education teachers in primary
                        and secondary schools. They can design and deliver physical education curricula, promote healthy
                        lifestyles, and inspire students to engage in physical activity.








                    </li>
                    <li>Sports Coach: Graduates can work as sports coaches in schools, community centers, or sports clubs.
                        They can specialize in coaching specific sports, developing athletes' skills, and fostering a love
                        for sports and competition.







                    </li>
                    <li>Fitness Instructor/Trainer: Graduates can become fitness instructors or personal trainers in fitness
                        centers, gyms, or wellness facilities. They can guide individuals in achieving their fitness goals,
                        creating customized exercise programs, and providing guidance on proper form and technique.





                    </li>
                    <li>Athletic Director: Graduates can work as athletic directors in educational institutions or sports
                        organizations. They can oversee sports programs, manage budgets, organize competitions, and
                        coordinate coaching staff.









                    </li>
                    <li>Sports Development Officer: Graduates can pursue careers as sports development officers in
                        government organizations, NGOs, or sports federations. They can promote sports participation,
                        organize grassroots programs, and develop talent identification initiatives.









                    </li>
                    <li>Sports Event Manager: Graduates can work in event management companies or sports organizations,
                        organizing and coordinating sports events, tournaments, and championships.








                    </li>
                    <li>Corporate Wellness Coordinator: Graduates can work in corporate settings, coordinating wellness
                        programs and initiatives to promote employee health and well-being. They can develop fitness
                        programs, organize sports events, and provide educational resources on healthy lifestyles.








                    </li>

                    <li>Exercise Physiologist: Graduates can work as exercise physiologists in healthcare settings,
                        designing and implementing exercise programs for individuals with medical conditions or those
                        undergoing rehabilitation.









                    </li>


                    <li>Sports Marketing and Sponsorship: Graduates can pursue careers in sports marketing and sponsorship,
                        working with sports organizations, brands, or agencies to promote sports events, secure
                        sponsorships, and manage marketing campaigns.









                    </li>

                    <li>Sports Journalism and Media: Graduates can work as sports journalists, broadcasters, or media
                        professionals, covering sports events, conducting interviews, and providing analysis and commentary
                        on sports-related topics.

                    </li>

                    <li>Sports Researcher or Analyst: Graduates can work in research institutions, think tanks, or sports
                        organizations, conducting research, analyzing data, and providing insights into sports performance,
                        exercise science, or sports policy.


                    </li>

                    <li>Sports Equipment and Apparel Industry: Graduates can work in the sports equipment or apparel
                        industry, specializing in product development, marketing, sales, or distribution.


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
                        <td> Nigerian Peoples and Culture </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 102</td>
                        <td> Introduction to Teaching and Education Foundation </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 101</td>
                        <td> Foundations of Physical Education, Exercise and Sport Development </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 102 </td>
                        <td> Skill development and Techniques of (Track and Field Events) </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED /HKE103 </td>
                        <td> Fundamentals of Human Anatomy and Physiology </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 104 </td>
                        <td> Skill development and Techniques in Gymnastics </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 105 </td>
                        <td> Introduction to Psychology and Sociology of Sport and Exercise </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED /HKE106 </td>
                        <td> Inclusive Physical Education and Sport </td>
                        <td>2</td>
                    </tr>
                </table>

                <p> 2 Compulsory courses as teaching subjects of choices as approved by the departmental boards. 4 units
                </p>

                <p style="text-align:left; "><b>Total Unit: 22</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">200 level</h4>
                <table>
                    <tr>
                        <td>GST 212 </td>
                        <td> Philosophy, Logic and Human Existence </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ENT 211 </td>
                        <td>Entrepreneurship and Innovation </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 201</td>
                        <td> Curriculum and Teaching Methods/Strategies </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 201 </td>
                        <td> Skill development and Techniques in Swimming </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 202 </td>
                        <td> Introduction to Biomechanics and Kinesiology </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 203 </td>
                        <td> Organization and Administration and facility construction in Sport </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 204 </td>
                        <td> First Aids and Accident Prevention in Sports </td>
                        <td>2</td>
                    </tr>



                </table>

                <p> 3 Compulsory courses as teaching subjects of choices as approved by the departmental board 6 units</p>

                <p style="text-align:left; "><b>Total Unit: 22</b></p>

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
                        <td>GST 312 </td>
                        <td>Peace and Conflict Resolutions </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ENT 312</td>
                        <td>Venture Creation </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 301 </td>
                        <td> Teaching Practice I </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EDU 302 </td>
                        <td> Research Methods, Measurement and Statistics </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 301 </td>
                        <td> Skill development and Techniques in Selected Ball Games </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE 302 </td>
                        <td> Nutrition in Sport and Exercise </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE303 </td>
                        <td> Business of Sport Management and Communication, Community
                            Recreation, Leisure and Tourism.</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/HKE304 </td>
                        <td> Skill development and Techniques in Selected
                            Racquet and Stick Games </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>PED/ HKE305 </td>
                        <td> Research Methods and Statistics in Sports
                            Exercise and Physical Activity </td>
                        <td>2</td>
                    </tr>



                </table>

                <p> 3 Compulsory courses as teaching subjects of choices as approved by the departmental boards. 6 units</p>

                <p style="text-align:left; "><b>Total Unit: 26</b></p>


                <div style="width: 80%;">
                    <h4 style="text-align:left; ">400 level</h4>
                    <table>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Unit</th>
                        </tr>
                        <tr>
                            <td>EDU 401 </td>
                            <td> Teaching Practice II </td>
                            <td> 3</td>
                        </tr>
                        <tr>
                            <td>EDU 400 </td>
                            <td>Project </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>PED/HKE 401 </td>
                            <td> Alcohol and Drugs and Doping in Sports </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>PEDHKE 402 </td>
                            <td> Physical activity, wellness exercise physiology and physical conditioning. </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>PED/HKE 403 </td>
                            <td> Psychology of Coaching and Mental Skill Training. </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>PED/HKE 404 </td>
                            <td> Test, Monitoring and Evaluation in Sport and Physical Education. </td>
                            <td>2</td>
                        </tr>






                    </table>

                    <p> 2 Compulsory courses as teaching subjects of choices as approved by the departmental boards. 4 units
                    </p>

                    <p style="text-align:left; "><b>Total Unit: 18</b></p>

                    <p style="font-weight: bolder; font-size:25px">Grand Total 86
                    </p>


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
