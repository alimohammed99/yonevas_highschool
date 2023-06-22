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
                                    Health Education



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
                                            <h1 class="feature-banner__title"> Health Education B. (Ed)


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
                <p>The Health Education B.Ed. program at Yonevas Open University is designed to equip aspiring educators
                    with the knowledge, skills, and competencies needed to promote and enhance health education in schools
                    and communities. This program offers a comprehensive curriculum that explores various aspects of health
                    education, including health promotion, disease prevention, lifestyle choices, and public health
                    strategies. Through a combination of theoretical learning and practical experiences, students will
                    develop a deep understanding of the importance of health education and its role in fostering healthy
                    behaviors and improving overall well-being.</p>

                <h5>Aim and Objectives</h5>

                <p>The <b>aim</b> of the Health Education B.Ed. program is to prepare graduates to become competent and
                    effective health education professionals. The <b>objectives</b> of the program include:
                </p>

                <p>1. Develop Knowledge: Provide students with a solid foundation of knowledge in the field of health
                    education, including the principles of health promotion, epidemiology, behavioral sciences, and public
                    health policies. This knowledge will enable them to critically analyze health-related issues and make
                    informed decisions.





                </p>

                <p>2. Enhance Pedagogical Skills: Equip students with pedagogical skills and instructional strategies
                    necessary for planning, implementing, and evaluating effective health education programs. Students will
                    learn how to design engaging lessons, use appropriate teaching methods, and create a supportive learning
                    environment for diverse learners.






                </p>

                <p>3. Promote Health Literacy: Foster health literacy among students by developing their ability to access,
                    understand, and apply health information. Students will learn how to communicate health concepts
                    effectively, promote healthy behaviors, and advocate for health equity in their educational settings.







                </p>

                <p>4. Address Health Disparities: Equip students with the knowledge and skills to address health disparities
                    in various communities. They will learn about the social determinants of health, cultural competence,
                    and strategies for promoting health equity among diverse populations.





                </p>

                <p>5. Collaborate and Engage: Foster collaboration and engagement among students by providing opportunities
                    for teamwork, group projects, and community-based initiatives. Students will develop their interpersonal
                    skills, leadership abilities, and the capacity to work effectively with individuals, families, and
                    community stakeholders.


                </p>



                <h5>Learning Outcomes:
                </h5>

                <p>Upon completion of the Health Education B.Ed. program, students will be able to:


                </p>

                <p>1. Demonstrate a comprehensive understanding of the key concepts, theories, and principles related to
                    health education and promotion.







                </p>

                <p>2. Apply instructional strategies and teaching methods to effectively deliver health education content to
                    diverse learners.






                </p>

                <p>3. Design, implement, and evaluate health education programs and interventions that address the needs of
                    specific populations.






                </p>

                <p>4. Analyze health-related data, research findings, and evidence-based practices to inform decision-making
                    and program planning.







                </p>

                <p>5. Promote health literacy and empower individuals and communities to make informed decisions about their
                    health and well-being.






                </p>

                <p>6. Advocate for health equity, social justice, and the reduction of health disparities through
                    educational and policy initiatives.






                </p>

                <p>7. Collaborate with interdisciplinary teams and community stakeholders to address health challenges and
                    promote healthy behaviors.





                </p>

                <p>8. Demonstrate ethical and professional conduct in the field of health education, adhering to relevant
                    codes of practice and standards.






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
                <h4>Career Opportunities in Health Education:






                </h4>
                <ol>
                    <li>Health Educator/Health Promotion Specialist: Graduates of the Health Education B.Ed. program can
                        work as health educators or health promotion specialists in schools, community organizations, public
                        health agencies, and healthcare settings. They design and implement health education programs,
                        conduct workshops, and provide resources to promote healthy lifestyles and disease prevention.







                    </li>
                    <li>School Health Coordinator: Health Education graduates can work as school health coordinators,
                        overseeing health education programs and initiatives within educational institutions. They
                        collaborate with teachers, administrators, and healthcare professionals to develop policies,
                        implement health education curricula, and create a healthy school environment.






                    </li>
                    <li>Community Health Worker: Graduates can work as community health workers, supporting and educating
                        individuals and communities on health-related issues. They may focus on specific populations or
                        communities, promoting health literacy, providing resources, and advocating for access to healthcare
                        services.






                    </li>
                    <li>Health Program Coordinator: Graduates can work as health program coordinators for non-profit
                        organizations, government agencies, or healthcare institutions. They manage and coordinate health
                        programs, develop partnerships, secure funding, and evaluate program effectiveness to address
                        community health needs.








                    </li>
                    <li>Public Health Educator: Health Education graduates can contribute to public health initiatives as
                        public health educators. They may work in government health departments, community health
                        organizations, or research institutions, designing and implementing health education campaigns,
                        conducting community assessments, and advocating for public health policies.








                    </li>
                    <li>Health Promotion Consultant: Graduates can work as independent consultants, offering their expertise
                        in health promotion and education to organizations, businesses, and communities. They provide
                        guidance on health promotion strategies, conduct needs assessments, and develop customized health
                        education programs.







                    </li>
                    <li>Research and Policy Analyst: Graduates with a strong research background can work as research or
                        policy analysts in public health organizations, think tanks, or government agencies. They analyze
                        health data, evaluate health programs, and contribute to the development of evidence-based policies
                        and guidelines.







                    </li>

                    <li>Health Communication Specialist: Graduates can pursue careers in health communication, working for
                        healthcare institutions, public health agencies, or media organizations. They develop health
                        communication materials, write health-related content, and engage in public awareness campaigns to
                        disseminate health information effectively.








                    </li>


                    <li>Healthcare Advocate: Graduates can work as healthcare advocates, promoting health education and
                        patient empowerment within healthcare systems. They may work for patient advocacy organizations,
                        helping individuals navigate the healthcare system, understand their rights, and make informed
                        decisions about their health.








                    </li>

                    <li>Further Education and Research: Graduates can pursue advanced degrees such as Master's or Doctoral
                        programs in health education, public health, or related fields. This can lead to opportunities in
                        academia, research, policy development, or specialized roles in public health organizations.










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
                        <td>EDU 101</td>
                        <td> Introduction to Teaching and Foundations of Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 111 </td>
                        <td> Introduction to Health Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 113 </td>
                        <td> Personal Health & Dental Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 114 </td>
                        <td> Environmental Health </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE117 </td>
                        <td> Human Growth and Development </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE120 </td>
                        <td> Introduction to Community and Public Health </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BIO 101 </td>
                        <td> General Biology I </td>
                        <td>2</td>
                    </tr>
                </table>

                <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
                        <td> Curriculum, Curriculum Delivery and Teaching Methods </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 211 </td>
                        <td> Methods and Resources in Health Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 212 </td>
                        <td> School Health Education Program </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 213 </td>
                        <td> Human Anatomy and Physiology </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 215 </td>
                        <td> Family Life, Reproductive Health & Population Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 218 </td>
                        <td> Human Diseases & Health Protection </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 219 </td>
                        <td> Health Education Practicum </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 220 </td>
                        <td> Food and Human Nutrition </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 222 </td>
                        <td> Emotional, Mental and Social Health </td>
                        <td>2</td>
                    </tr>


                </table>

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
                        <td>ENT 312/td>
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
                        <td> Educational Measurements, Tests,
                            Research Methods and Statistics </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EHE 313 </td>
                        <td> Research Methods in Health Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 314 </td>
                        <td> Substance Use and Abuse Prevention </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 315 </td>
                        <td> Maternal, Infant & Child Health </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 317 </td>
                        <td> Health Psychology and Counselling </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 320 </td>
                        <td> First Aid, Accident Prevention and safety Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 321 </td>
                        <td> Application of Computer Skills & Informatics in Health Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 322 </td>
                        <td> Life Skills & Skilled-Based Health Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EHE 324 </td>
                        <td> Epidemiology of Public Health & Human Biometrics </td>
                        <td>2</td>
                    </tr>


                </table>

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
                            <td>EHE 401 </td>
                            <td> Contemporary National Health Program, Issues
                                and Problems in Public Health </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 402 </td>
                            <td> Occupational and Industrial Health </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 403 </td>
                            <td> Health Economics & Consumerism </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 404 </td>
                            <td> Organization, Planning and Evaluation of Health Education Program </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 407 </td>
                            <td> Seminar in Health Education </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 408 </td>
                            <td> Global Health, National Health Laws, Policies and Advocacy </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 409 </td>
                            <td> Curriculum Development & Innovation in Health Education </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>EHE 410 </td>
                            <td> Geriatrics & Death Education </td>
                            <td>2</td>
                        </tr>





                    </table>



                    <p style="text-align:left; "><b>Total Unit: 22</b></p>


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
