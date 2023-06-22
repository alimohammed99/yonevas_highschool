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
                                    Educational Management


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
                                            <h1 class="feature-banner__title">Educational Management B. (Ed)

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
                <p>The Educational Management B.Ed. program offered at Yonevas Open University is designed to equip aspiring educational leaders with the knowledge, skills, and competencies required to effectively manage educational institutions. This program provides a comprehensive understanding of educational management principles, policies, and practices, preparing students for leadership roles in schools, colleges, universities, and other educational organizations. Through a combination of theoretical study, practical application, and critical analysis, students will gain the necessary tools to navigate the complexities of the education sector and contribute to the enhancement of educational systems.</p>

                <h5>Aim and Objectives</h5>

                <p>The <b>aim</b> of the Educational Management B.Ed. program is to develop competent and visionary educational leaders who can lead and manage educational institutions effectively. <br> The <b>objectives</b>  of the program are as follows:
                </p>

                <p>1. Develop Knowledge and Understanding: Provide students with a strong foundation of knowledge and understanding of educational management theories, principles, and practices. This includes examining key concepts such as leadership, organizational behavior, policy development, strategic planning, and resource management.




                </p>

                <p>2. Enhance Leadership Skills: Cultivate leadership skills in students, enabling them to effectively lead and motivate diverse teams of educators, administrators, and other stakeholders. Students will develop skills in decision-making, problem-solving, communication, collaboration, and change management.





                </p>

                <p>3. Foster Ethical and Professional Conduct: Promote ethical and professional conduct in educational leadership. Students will be encouraged to uphold principles of integrity, fairness, inclusivity, and social responsibility in their roles as educational managers. They will also develop an understanding of legal and ethical issues relevant to educational institutions.





                </p>

                <p>4. Develop Strategic Management Abilities: Equip students with strategic management abilities to effectively plan, implement, and evaluate educational programs and initiatives. Students will learn to analyze educational needs, develop strategic goals, allocate resources efficiently, and assess the impact of their management decisions on organizational effectiveness.




                </p>

                <p>5. Promote Effective School and Community Partnerships: Foster students' abilities to establish and maintain effective partnerships between educational institutions, families, communities, and relevant stakeholders. Students will learn strategies for building positive relationships, engaging community resources, and promoting collaboration to enhance the educational experience of students.
</p>



                <h5>Learning Outcomes:
                </h5>

                <p>Upon completion of the Educational Management B.Ed. program, students will be able to:


                </p>

                <p>1. Demonstrate a comprehensive understanding of educational management theories, principles, and practices.





                </p>

                <p>2. Apply leadership skills and competencies to effectively manage educational institutions and promote positive organizational cultures.




                </p>

                <p>3. Analyze and evaluate educational policies, practices, and systems, and make informed decisions based on evidence and best practices.




                </p>

                <p>4. Develop and implement strategic plans and initiatives to improve educational institutions' performance and achieve educational goals.





                </p>

                <p>5. Demonstrate ethical and professional conduct in educational leadership, considering legal, ethical, and social implications.




                </p>

                <p>6. Foster effective school and community partnerships, engaging stakeholders to support student learning and well-being.




                </p>

                <p>7. Communicate effectively with diverse stakeholders, utilizing various communication channels and strategies.



                </p>

                <p>8. Engage in reflective practice, continuously seeking professional growth and development as educational leaders.




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
                <h4>Career Opportunities for Educational Management B.Ed. Graduates:




                </h4>
                <ol>
                    <li>School Principal/Administrator: Graduates can pursue careers as school principals or administrators, leading educational institutions at various levels. They will be responsible for managing overall school operations, implementing policies, supervising staff, and ensuring effective teaching and learning environments.





                    </li>
                    <li>Educational Consultant: Graduates can work as educational consultants, providing expertise and guidance to schools, districts, or educational organizations. They can offer advice on strategic planning, curriculum development, teacher professional development, and school improvement initiatives.




                    </li>
                    <li>Education Policy Analyst: Graduates can work as policy analysts, researching and analyzing education policies and their impact on educational systems. They can contribute to policy development, evaluate policy effectiveness, and provide recommendations for educational reforms.





                    </li>
                    <li>Education Program Manager: Graduates can pursue careers as program managers in educational organizations or non-profit entities. They can be responsible for designing, implementing, and evaluating educational programs, ensuring their alignment with organizational goals and objectives.






                    </li>
                    <li>Higher Education Administrator: Graduates can work in administrative roles in colleges and universities, managing academic departments, student affairs, admissions, or institutional research. They can contribute to the development and implementation of institutional policies and procedures.






                    </li>
                    <li>Education Policy Advocate: Graduates can work as advocates for educational policy reform, lobbying for changes in education systems to promote equity, access, and quality education. They can work with non-profit organizations, government agencies, or advocacy groups to influence educational policies and practices.





                    </li>
                    <li>Education Researcher: Graduates can pursue careers in educational research, conducting studies and evaluations to inform educational practices and policies. They can work in research institutions, think tanks, or educational foundations, contributing to evidence-based decision-making in the field of education.





                    </li>

                    <li>Education Entrepreneur: Graduates with an entrepreneurial mindset can establish their own educational consulting firms, training centers, or education technology startups. They can develop innovative solutions and services to address educational challenges and meet the needs of schools and educators.







                    </li>


                    <li>Education Program Coordinator: Graduates can work as program coordinators or managers in educational organizations, overseeing the planning, implementation, and evaluation of specific educational programs or initiatives. They can specialize in areas such as curriculum development, teacher training, assessment, or educational technology integration.






                    </li>

                    <li>Education Policy Advisor: Graduates can work as advisors to government agencies or international organizations, providing expertise on educational policies, strategies, and reforms. They can contribute to policy analysis, program evaluation, and the development of evidence-based recommendations.








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
                        <td> Nigerian Peoples and Culture 	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 101</td>
                        <td>  Introduction to Teaching and Foundations of Education 	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 101 	 </td>
                        <td>History of Educational Management in Nigeria	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 102  </td>
                        <td>Introduction to Management and Human resources’
behaviors in organizations	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 103  </td>
                        <td> 	Introduction to Administrative and Management theories 	 </td>
                        <td>2</td>
                    </tr>
                                  </table>
                                  <p style="text-align:left; ">8 Course units in relevant teaching areas of Arts, Sciences or Social Science 08
</p>
                <p style="text-align:left; "><b>Total Unit: 20</b></p>
            </div>
            <div style="width: 80%;">
                <h4 style="text-align:left; ">200 level</h4>
                <table>
                    <tr>
                        <td>GST 211</td>
                        <td> Nigerian Peoples and Culture 	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>GST 212	</td>
                        <td> Philosophy, Logic and Human Existence</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 201</td>
                        <td> Curriculum, Curriculum Delivery and Teaching Methods </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 201	</td>
                        <td> Introduction to Human Resource Management and Communication
 Skills in Education  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 202 </td>
                        <td> 	Program organization and time-tabling in Nigeria Schools </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 203 </td>
                        <td> 	 Contextual Management of Primary, Secondary and Tertiary Institutions 	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 204</td>
                        <td> Introduction to Educational Planning and Policy	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 205 </td>
                        <td>	Leadership and Interpersonal Relationships in Organizations 	 </td>
                        <td>2</td>
                    </tr>

                </table>
                <p>6 Course units in relevant teaching areas of Arts, Science or Social Science 06
</p>
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
                        <td>GST 311	</td>
                        <td> Entrepreneurship	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>GST 312 </td>
                        <td>Peace and Conflict Resolutions </td>
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
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EDM 301	 </td>
                        <td> Educational Finance and Economics 	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 302	 </td>
                        <td> Legal Basis of Educational Management  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 303  </td>
                        <td>	Statistical and Quantitative Methods in Educational Management 	 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 304		</td>
                        <td> Educational Supervision and Quality Control in Nigeria	</td>
                        <td>2</td>
                    </tr>


                </table>
                <p>6 Course units in relevant teaching areas in Arts, Science or Social Sciences. 06
</p>
                     <p style="text-align:left; "><b>Total Unit: 24</b></p>


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
                        <td> Teaching Practice II  </td>
                        <td> 3</td>
                    </tr>
                    <tr>
                        <td>EDU 404	 </td>
                        <td>Project 																		 </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EDM 400</td>
                        <td>	 Internship/Practicum  </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EDM 402 		</td>
                        <td>Educational Costs and Financial Matters 		</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 403		</td>
                        <td>	 Human Resource, Office and Record Management 	</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 404	 </td>
                        <td> Educational System Analysis and Demographics 		 																		 </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 405 </td>
                        <td>	 Comparative Perspectives in Educational Management  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 406 		</td>
                        <td>Change and Innovative Processes in Organizations 		</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDM 407	</td>
                        <td>	 Institutional Headship 	</td>
                        <td>2</td>
                    </tr>




                </table>



                <p style="text-align:left; "><b>Total Unit: 21</b></p>


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
