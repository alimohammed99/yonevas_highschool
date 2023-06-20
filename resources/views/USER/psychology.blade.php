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
                                    Psychology
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
                                            <h1 class="feature-banner__title">Psychology B.Sc</h1>

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
                <p>The Psychology B.Sc. program offers students a comprehensive understanding of the human mind and behavior. Through the study of psychology, students delve into the fascinating field of mental processes, emotions, cognition, and social interactions. This program equips students with theoretical knowledge, research skills, and practical applications in various areas of psychology. Students explore topics such as developmental psychology, cognitive psychology, social psychology, abnormal psychology, and neuroscience. By examining the complexities of human behavior, students gain insights into individual and group dynamics, paving the way for a deeper understanding of themselves and others.</p>
                <p><strong>Aim and Objectives:</strong> The aim of the Psychology B.Sc. program is to provide students with a solid foundation in the field of psychology and equip them with the necessary knowledge, skills, and competencies to excel in various professional settings. The program aims to</p>
                <ul>
                    <li>Develop a comprehensive understanding of the major theoretical approaches, concepts, and research methodologies in psychology.</li>
                    <li>Foster critical thinking and analytical skills to evaluate psychological theories, research studies, and real-world applications.</li>
                    <li>Cultivate ethical awareness and sensitivity in the practice of psychology, ensuring the well-being and confidentiality of individuals.</li>
                    <li>Enhance students' research abilities through hands-on experience in designing, conducting, and analyzing psychological research.</li>
                    <li>Promote effective communication and interpersonal skills to engage in professional interactions and collaborations within multidisciplinary teams.</li>
                    <li>Provide opportunities for personal and professional development, encouraging students to reflect on their own attitudes, beliefs, and biases.</li>
                </ul>
                <p><strong>Learning Outcomes: </strong> Upon completion of the Psychology B.Sc. program, students will be able to</p>
                <ul>
                    <li>Demonstrate a comprehensive understanding of the major theories, concepts, and approaches within the field of psychology.</li>
                    <li>Apply research methodologies and statistical analysis techniques to design and conduct psychological research studies.</li>
                    <li>Critically evaluate and interpret psychological research findings and their implications for theory and practice.</li>
                    <li>Analyze and explain human behavior from a psychological perspective, considering various factors such as cognition, emotions, and social interactions.</li>
                    <li>Apply ethical principles and guidelines in conducting psychological research and professional practice.</li>
                    <li>Communicate effectively, both orally and in writing, about psychological theories, research findings, and practical applications.</li>
                    <li>Collaborate and work effectively within multidisciplinary teams to address psychological issues and challenges.</li>
                    <li>Demonstrate self-awareness and reflexivity in understanding their own attitudes, biases, and values in relation to psychological phenomena.</li>
                </ul>
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
                <h4>Career Opportunities for Psychology B.Sc. Graduates:</h4>
                <ol>
                    <li><strong>Clinical Psychology:</strong> Graduates can pursue careers in clinical psychology, working in hospitals, mental health clinics, and private practices. They can assess and treat individuals with psychological disorders, conduct therapy sessions, and provide counseling services.</li>
                    <li><strong>Counseling and Psychotherapy:</strong> Graduates can work as counselors or psychotherapists in educational institutions, community centers, and counseling agencies. They can provide guidance, support, and therapeutic interventions to individuals facing personal, emotional, or behavioral challenges.</li>
                    <li><strong>Research and Academia:</strong> Graduates can pursue research-oriented careers in academic institutions, think tanks, and research organizations. They can conduct research studies, analyze data, and contribute to the advancement of psychological knowledge. They can also teach and mentor students in universities or colleges.</li>
                    <li><strong>Industrial and Organizational Psychology:</strong> Graduates can work in human resources departments or consulting firms, applying psychological principles to improve workplace dynamics, employee well-being, and organizational performance. They can conduct job analysis, design selection processes, assess employee satisfaction, and provide training and development programs.</li>
                    <li><strong>School Psychology:</strong> Graduates can pursue careers as school psychologists, working in educational settings to support students' academic, social, and emotional well-being. They can conduct assessments, provide counseling services, and collaborate with teachers and parents to address students' needs.</li>
                    <li><strong>Mental Health Services:</strong> Graduates can work in mental health centers, rehabilitation facilities, or community clinics, providing support and interventions for individuals with mental health challenges. They can assist in crisis intervention, case management, and advocacy for individuals seeking mental health services.</li>
                    <li><strong>Social Services:</strong> Graduates can work in social service organizations, addressing social issues and providing support to vulnerable populations. They can contribute to programs focused on child welfare, substance abuse, domestic violence, or community development, working as case managers, program coordinators, or policy analysts.</li>
                    <li><strong>Market Research and Consumer Behavior:</strong> Graduates can work in marketing research firms or market analysis departments of companies, using their understanding of human behavior to analyze consumer trends, conduct surveys, and develop effective marketing strategies.</li>
                    <li><strong>Human Resources:</strong> Graduates can pursue careers in human resources departments, utilizing their knowledge of psychology to recruit and select candidates, develop employee training programs, and promote employee well-being and satisfaction.</li>
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
                      <td>PSY 101</td>
                      <td>Introduction to Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 103</td>
                      <td>Learning Processes</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 105</td>
                      <td>Ethics in Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 102</td>
                      <td>Determinants of Behaviour</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 104</td>
                      <td>Quantitative Methods in Psychology</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 14</b></p>
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
                      <td>SSC 202</td>
                      <td>Introduction to Computer and its Application</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>PSY 201</td>
                      <td>General Experimental Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 203</td>
                      <td>Industrial / Organisational Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 205</td>
                      <td>Developmental Psychology I: Childhood and Adolescence</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 207</td>
                      <td>Psychology of Personality and Assessment</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 209</td>
                      <td>Health Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 202</td>
                      <td>Physiological Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 204</td>
                      <td>Introduction to Social Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 206</td>
                      <td>Developmental Psychology II: Adulthood and Aging</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 208</td>
                      <td>Positive Psychology</td>
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
                      <td>SSC 301</td>
                      <td>Innovation in the Social Sciences</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SSC 302</td>
                      <td>Research Method I</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 301</td>
                      <td>Clinical Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 303</td>
                      <td>Gender Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 305</td>
                      <td>Psychological Testing and Test Construction</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 307</td>
                      <td>Statistical Methods in Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 309</td>
                      <td>Cognitive Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 302</td>
                      <td>Psychology of Mental Challenge</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 304</td>
                      <td>Psychology of Substance use disorder</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 306</td>
                      <td>Research Methods in Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 308</td>
                      <td>Environmental Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 310</td>
                      <td>Field Experience</td>
                      <td>2</td>
                    </tr>
                  </table>
                <p style="text-align:left; "><b>Total Unit: 28</b></p>
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
                      <td>SSC 401</td>
                      <td>Research Method II</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 401</td>
                      <td>Psychology of Terrorism and Trauma Management</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 403</td>
                      <td>Practicum in Psychotherapy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 405</td>
                      <td>Forensic Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 407</td>
                      <td>Psychology of Social Change</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 402</td>
                      <td>Advanced Psycho-Biological Study of Behaviour and Psychopharmacology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 404</td>
                      <td>Advanced Clinical Psychology</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>PSY 406</td>
                      <td>Research Project</td>
                      <td>4</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
