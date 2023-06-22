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
                                    Business Education
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
                                            <h1 class="feature-banner__title">Business Education B. Sc. (Ed)</h1>

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
                <p>The Business Education B.Sc. (Ed) program at Yonevas Open University is designed to provide students with
                    a comprehensive understanding of business principles, practices, and pedagogy. This program combines
                    theoretical knowledge with practical skills to prepare aspiring educators for successful careers in
                    teaching business subjects at the secondary and post-secondary levels. Students will explore various
                    areas of business, including economics, accounting, marketing, management, and entrepreneurship, while
                    also gaining expertise in effective teaching methodologies and curriculum development.</p>
                <h5>Aim and Objectives</h5>
                <p>The <b>aim</b> of the Business Education B.Sc. (Ed) program is to equip students with the knowledge,
                    skills, and pedagogical techniques required to excel as business educators.
                </p>

                <p>The specific <b>objectives</b> of the program are:
                </p>

                <p>1. Provide a Strong Foundation in Business: The program aims to develop students' understanding of core
                    business concepts, theories, and practices. Students will gain insights into areas such as accounting,
                    finance, marketing, management, and economics, enabling them to effectively teach these subjects to
                    students in a classroom setting.



                </p>

                <p>2. Foster Effective Teaching and Learning: The program aims to develop students' pedagogical skills and
                    instructional strategies to engage and inspire learners. Students will learn effective teaching
                    methodologies, assessment techniques, and classroom management strategies, with a focus on creating a
                    conducive learning environment for diverse learners.



                </p>

                <p>3. Enhance Communication and Presentation Skills: The program aims to enhance students' communication and
                    presentation skills, both written and verbal. Students will learn how to effectively convey complex
                    business concepts and ideas to students, utilizing various teaching tools, technologies, and resources.



                </p>

                <p>4. EFoster Critical Thinking and Problem-Solving Abilities: The program aims to cultivate students'
                    critical thinking and problem-solving abilities within the context of business education. Students will
                    develop skills in analyzing real-world business scenarios, evaluating different perspectives, and
                    proposing innovative solutions, enabling them to guide students in developing strong analytical skills.



                </p>

                <p>5. Promote Ethical Business Practices: The program aims to instill in students a strong sense of ethics
                    and integrity within the realm of business education. Students will explore ethical considerations in
                    business and learn how to incorporate ethical discussions and dilemmas into their teaching practices,
                    nurturing future business professionals with a strong ethical foundation.



                </p>

                <h5>Learning Outcomes:
                </h5>

                <p>Upon successful completion of the Business Education B.Sc. (Ed) program, students will be able to:

                </p>

                <p>1. Demonstrate a deep understanding of key business concepts, theories, and practices across various
                    areas of business.



                </p>

                <p>2. Apply effective teaching methodologies, instructional strategies, and assessment techniques in the
                    field of business education.



                </p>

                <p>3. Effectively communicate and present complex business concepts to diverse audiences, utilizing
                    appropriate teaching tools and technologies.



                </p>

                <p>4. Foster critical thinking skills in students, enabling them to analyze business scenarios, evaluate
                    options, and propose effective solutions.



                </p>

                <p>5. Integrate ethical considerations and discussions into business education, promoting a strong sense of
                    ethics and integrity among students.


                </p>

                <p>6. Design and develop engaging and student-centered business education curricula, aligning with national
                    standards and educational objectives.
                    Demonstrate professionalism,


                </p>

                <p>7. Demonstrate professionalism, collaboration, and leadership skills within the context of business
                    education.




                </p>

                <p>The Business Education B.Sc. (Ed) program at Yonevas Open University prepares students to become
                    competent and effective business educators, equipped with the necessary knowledge, skills, and
                    pedagogical expertise to make a positive impact in the field of education.
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
                <h4>Career Opportunities for Business Education B.Sc. (Ed) Graduates:


                </h4>
                <ol>
                    <li>Business Educator: Graduates can pursue careers as business educators at secondary schools,
                        vocational institutes, community colleges, and other educational institutions. They can teach
                        business subjects such as accounting, economics, marketing, entrepreneurship, and management,
                        equipping students with essential knowledge and skills for future careers in business.



                    </li>
                    <li>Curriculum Developer: Graduates can work as curriculum developers or instructional designers,
                        creating engaging and up-to-date business education curricula. They can collaborate with educational
                        institutions, textbook publishers, and curriculum development organizations to design relevant and
                        effective instructional materials and resources.



                    </li>
                    <li>Education Consultant: Graduates can work as education consultants, providing expertise in business
                        education pedagogy and curriculum development. They can assist schools and educational institutions
                        in enhancing their business education programs, conducting needs assessments, and implementing best
                        practices in teaching and learning.



                    </li>
                    <li>Corporate Trainer: Graduates with a strong background in business education can work as corporate
                        trainers, delivering professional development programs to employees in various organizations. They
                        can design and deliver training sessions on business-related topics, such as leadership,
                        communication, marketing, and financial literacy.




                    </li>
                    <li>Entrepreneurship Educator: Graduates can specialize in entrepreneurship education and work as
                        instructors or facilitators in entrepreneurship programs, business incubators, or startup
                        accelerators. They can guide aspiring entrepreneurs, providing them with the knowledge and skills to
                        start and manage their own businesses.




                    </li>
                    <li>Educational Administrator: Graduates can pursue administrative roles within educational
                        institutions, such as department heads, program coordinators, or educational administrators. They
                        can contribute to the strategic planning, policy development, and management of business education
                        programs.




                    </li>
                    <li>Educational Technology Specialist: Graduates with knowledge of educational technology and its
                        integration into teaching can work as educational technology specialists. They can assist schools
                        and educational institutions in incorporating technology tools, learning management systems, and
                        digital resources into business education classrooms.



                    </li>

                    <li>Corporate Education Coordinator: Graduates can work in corporate settings as corporate education
                        coordinators, developing and implementing training programs for employees. They can design
                        workshops, seminars, and courses on business-related topics to enhance employee skills and
                        knowledge.





                    </li>


                    <li>Corporate Education Coordinator: Graduates can work in corporate settings as corporate education
                        coordinators, developing and implementing training programs for employees. They can design
                        workshops, seminars, and courses on business-related topics to enhance employee skills and
                        knowledge.





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
                        <td>Introduction to Teaching and Education Foundations </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 114 </td>
                        <td>Financial Accounting for Business Educators I </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 121 </td>
                        <td>Office Administration and Management </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 124 </td>
                        <td> Principles of Marketing for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 122 </td>
                        <td> Business Mathematics </td>
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
                        <td>EDU 201</td>
                        <td> Curriculum, Curriculum Delivery and Teaching Methods </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BED 211 </td>
                        <td>Financial Accounting for Business Educators II </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 213 </td>
                        <td> Principles of Business Finance </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 214 </td>
                        <td>Business Communication & Report Writing </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 222 </td>
                        <td> Cost Accounting for Business Educators</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 223 </td>
                        <td>Office Information Technology </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 204</td>
                        <td>Introduction to Macroeconomics ll</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ECO 206</td>
                        <td>Statistics for Economists</td>
                        <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 16</b></p>
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
                        <td>Peace and Conflict Resolution </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>ENT 312 </td>
                        <td>Venture Creation </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>EDU 301</td>
                        <td>Teaching Practice I </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>EDU 302 </td>
                        <td>Educational Measurement, Tests, Research Methods and Statistics </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>BED 329 </td>
                        <td>SIWES </td>
                        <td>4</td>
                    </tr>


                </table>
                <h4 style="text-align:left; "><b>Courses for Specialization ( choose from the list)
                    </b></h4>
                <h4 style="text-align:left; "><b>Accounting Education:
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 312 </td>
                        <td>Financial Reporting for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 321 </td>
                        <td>Management Accounting for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 322</td>
                        <td>Public Sector Accounting for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 323 </td>
                        <td>Management Information System</td>
                        <td>2 </td>
                    </tr>


                </table>

                <h4 style="text-align:left; "><b> Entrepreneurial Education:
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 315 </td>
                        <td>Theories of Entrepreneurship </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 325 </td>
                        <td>Creativity & Innovation in Business </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 326 </td>
                        <td>Nigerian Business Environment </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 323 </td>
                        <td>Management Information System </td>
                        <td>2 </td>
                    </tr>


                </table>

                <h4 style="text-align:left; "><b> Marketing and Distributive Education
                        :
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 313 </td>
                        <td>Nigerian Marketing System </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 324 </td>
                        <td>Sales Management </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 320 </td>
                        <td>Marketing Management for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 323 </td>
                        <td>Management Information System </td>
                        <td>2 </td>
                    </tr>


                </table>

                <h4 style="text-align:left; "><b> Office Management Education

                        :
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 311 </td>
                        <td>Fundamentals of Data Processing </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 327 </td>
                        <td>Digital Skills in Business Education </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 328 </td>
                        <td>Word Processing for Business Educators II </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 323 </td>
                        <td>Management Information System </td>
                        <td>2 </td>
                    </tr>


                </table>

                <p style="text-align:left; "><b>Total Unit: 21</b></p>


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
                        <td>BED 411 </td>
                        <td>Business Law </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 415 </td>
                        <td>Vocational Guidance </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 416 </td>
                        <td>Career Development and Professional Ethics </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 422 </td>
                        <td> Seminar in Business Education </td>
                        <td>2</td>
                    </tr>



                </table>
                <h4 style="text-align:left; "><b>Courses for Specialization ( choose from the list)
                    </b></h4>
                <h4 style="text-align:left; "><b>Accounting Education:
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 426 </td>
                        <td>Taxation for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 413 </td>
                        <td>Auditing & Assurance for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 421 </td>
                        <td> Financial Management for Business Educators</td>
                        <td>2</td>
                    </tr>



                </table>

                <h4 style="text-align:left; "><b> Entrepreneurial Education:
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 412	</td>
                        <td> Risk Management in Small Business </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 427	 </td>
                        <td> Industrial Relations for Business Educators </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 423 </td>
                        <td> International Marketing for Business Educators </td>
                        <td>2</td>
                    </tr>



                </table>

                <h4 style="text-align:left; "><b> Marketing and Distributive Education
                        :
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 414	</td>
                        <td>Digital Marketing for Business Educators  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 425</td>
                        <td>Business to Business Marketing for Educators  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 423	 </td>
                        <td>International Marketing for Business Educators  </td>
                        <td>2</td>
                    </tr>



                </table>

                <h4 style="text-align:left; "><b> Office Management Education

                        :
                    </b></h4>

                <table>
                    {{-- <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                    </tr> --}}
                    <tr>
                        <td>BED 424  </td>
                        <td>Organizational Behavior </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 417 </td>
                        <td>Human Resource Management for Business Educators  </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>BED 427		 </td>
                        <td> Industrial Relations for Business Educators	</td>
                        <td>2</td>
                    </tr>


                </table>

                <p style="text-align:left; "><b>Total Unit: 20</b></p>


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
