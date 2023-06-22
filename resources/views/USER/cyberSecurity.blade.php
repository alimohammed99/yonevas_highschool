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
                                  Cybersecurity
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
                                              Cybersecurity B.Sc
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
                <p>The Cybersecurity B.Sc. program is designed to equip students with the knowledge and skills necessary to navigate the complex landscape of cybersecurity threats and protect digital systems and information from unauthorized access. In this program, students will gain a comprehensive understanding of cybersecurity principles, technologies, and best practices. Through a combination of theoretical knowledge and hands-on practical experience, students will develop the expertise required to analyze, detect, prevent, and respond to cyber threats. This program prepares students for a rewarding career in the rapidly evolving field of cybersecurity.
                </p>
                <p><strong>Aim and Objectives:</strong> The aim of the Cybersecurity B.Sc. program is to provide students with a strong foundation in cybersecurity principles, methodologies, and technologies. The program is designed to:
                </p>
                <ol>
                    <li><strong>Develop In-Depth Knowledge:</strong> Provide students with a comprehensive understanding of cybersecurity concepts, including network security, information assurance, digital forensics, cryptography, ethical hacking, and risk management. The program aims to equip students with a broad range of knowledge to tackle various cybersecurity challenges.</li>
                    
                    <li><strong>Foster Analytical and Technical Skills:</strong> Develop students' analytical and technical skills to assess vulnerabilities, identify cyber threats, and implement effective security measures. Students will gain hands-on experience in using industry-standard tools and techniques to protect digital systems and networks.</li>
                    
                    <li><strong>Cultivate Ethical and Professional Practices:</strong> Instill ethical and professional practices in students to ensure responsible use of cybersecurity knowledge and tools. The program emphasizes the importance of ethical hacking, legal considerations, and compliance with privacy regulations.</li>
                    
                    <li><strong>Promote Critical Thinking and Problem-Solving:</strong> Enhance students' critical thinking and problem-solving abilities to analyze complex cybersecurity issues, develop effective strategies, and make informed decisions. The program encourages students to evaluate emerging threats, assess risks, and devise proactive security measures.</li>
                    
                    <li><strong>Encourage Collaboration and Communication:</strong> Foster collaborative skills and effective communication among students to work as part of a team in addressing cybersecurity challenges. Students will engage in group projects, simulations, and presentations to enhance their teamwork and communication skills.</li>
                </ol>
                <p><strong>Learning Outcomes:</strong> By the end of the Cybersecurity B.Sc. program, students will be able to:
                </p>
                <ol>
                    <li>Demonstrate a deep understanding of cybersecurity concepts, principles, and technologies.</li>
                    <li>Analyze and assess vulnerabilities in digital systems and networks, and develop strategies to mitigate cyber threats.</li>
                    <li>Apply industry-standard tools and techniques for network security, intrusion detection, and incident response.</li>
                    <li>Conduct ethical hacking activities to identify system weaknesses and recommend appropriate security measures.</li>
                    <li>Evaluate and implement risk management strategies to protect digital assets and maintain data confidentiality, integrity, and availability.</li>
                    <li>Conduct digital forensics investigations to identify and gather evidence of cybercrimes.</li>
                    <li>Stay abreast of emerging cybersecurity trends, technologies, and regulations through continuous learning and professional development.</li>
                    <li>Communicate effectively with stakeholders, including technical and non-technical audiences, to convey cybersecurity concepts, risks, and solutions.</li>
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
              <h4>Career Opportunities for Cybersecurity B.Sc. Graduates:
              </h4>
              <ol>
                <li><strong>Cybersecurity Analyst:</strong> Graduates can work as cybersecurity analysts, responsible for monitoring and analyzing security incidents, conducting vulnerability assessments, and implementing security measures to protect digital systems and networks. They can work in various industries, including finance, healthcare, government, and technology companies.</li>
                
                <li><strong>Security Consultant:</strong> Graduates can pursue careers as security consultants, providing expert advice and guidance to organizations on cybersecurity strategies, risk assessments, and compliance with industry standards and regulations. They can work with clients to identify vulnerabilities, develop security policies, and recommend appropriate security solutions.</li>
                
                <li><strong>Ethical Hacker/Penetration Tester:</strong> Graduates can work as ethical hackers or penetration testers, responsible for identifying and exploiting vulnerabilities in digital systems to assess their security levels. They perform controlled attacks to test system defenses and recommend improvements to enhance security posture.</li>
                
                <li><strong>Incident Responder:</strong> Graduates can work as incident responders, focusing on detecting, analyzing, and responding to cybersecurity incidents. They investigate security breaches, develop incident response plans, and coordinate with relevant stakeholders to mitigate the impact of cyber threats.</li>
                
                <li><strong>Security Engineer:</strong> Graduates can pursue careers as security engineers, responsible for designing and implementing secure infrastructure, systems, and applications. They work closely with development teams to integrate security controls, perform risk assessments, and ensure compliance with security standards.</li>
                
                <li><strong>Risk Analyst:</strong> Graduates can work as risk analysts, assessing and managing cybersecurity risks within organizations. They evaluate the potential impact of threats, develop risk mitigation strategies, and establish risk management frameworks to protect critical assets.</li>
                
                <li><strong>Cybersecurity Consultant:</strong> Graduates can work as cybersecurity consultants, offering their expertise to organizations in developing and implementing effective cybersecurity programs. They assess security postures, conduct audits, provide training, and help organizations meet regulatory requirements.</li>
                
                <li><strong>Security Operations Center (SOC) Analyst:</strong> Graduates can work as SOC analysts, responsible for monitoring and responding to security events and incidents in real-time. They analyze log data, investigate alerts, and coordinate with incident response teams to mitigate threats.</li>
                
                <li><strong>Digital Forensics Analyst:</strong> Graduates can pursue careers in digital forensics, specializing in collecting and analyzing digital evidence in cases of cybercrimes. They work with law enforcement agencies, legal firms, and private investigation firms to uncover evidence, trace cyber attacks, and support criminal investigations.</li>
                
                <li><strong>Security Manager:</strong> Graduates can work in managerial roles, overseeing and managing cybersecurity operations within organizations. They develop security policies, lead incident response teams, ensure compliance with regulations, and communicate with stakeholders on security matters.</li>
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
                      <th>Lecture Hours</th>
                      <th>Tutorial/Practical Hours</th>
                    </tr>
                    <tr>
                      <td>GST 212</td>
                      <td>Philosophy, Logic and Human Existence</td>
                      <td>2</td>
                      <td>30</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>ENT 211</td>
                      <td>Entrepreneurship and Innovation</td>
                      <td>2</td>
                      <td>15</td>
                      <td>45</td>
                    </tr>
                    <tr>
                      <td>COS 201</td>
                      <td>Computer Programming I</td>
                      <td>3</td>
                      <td>30</td>
                      <td>45</td>
                    </tr>
                    <tr>
                      <td>COS 202</td>
                      <td>Computer Programming II</td>
                      <td>3</td>
                      <td>30</td>
                      <td>45</td>
                    </tr>
                    <tr>
                      <td>CYB 201</td>
                      <td>Introduction to Cybersecurity and Strategy</td>
                      <td>2</td>
                      <td>30</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>CYB 203</td>
                      <td>Cybercrime, Law and Countermeasures</td>
                      <td>2</td>
                      <td>30</td>
                      <td>0</td>
                    </tr>
                    <tr>
                      <td>CYB 299</td>
                      <td>SIWES I</td>
                      <td>3</td>
                      <td>0</td>
                      <td>135</td>
                    </tr>
                    <tr>
                      <td>INS 204</td>
                      <td>Systems Analysis and Design</td>
                      <td>3</td>
                      <td>30</td>
                      <td>45</td>
                    </tr>
                    <tr>
                      <td>SEN 201</td>
                      <td>Introduction to Software Engineering</td>
                      <td>2</td>
                      <td>30</td>
                      <td>0</td>
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
                      <td>CYB 301</td>
                      <td>Cryptography Techniques, Algorithms and Applications</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 302</td>
                      <td>Biometrics Security</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 303</td>
                      <td>Cybersecurity Risks Analysis, Challenges and Mitigation</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 304</td>
                      <td>Information and Big Data Security</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 305</td>
                      <td>Digital Forensics and Investigation Methods</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 322</td>
                      <td>Cybersecurity Innovation and New Technologies</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 399</td>
                      <td>SIWES II</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>CSC 309</td>
                      <td>Artificial Intelligence</td>
                      <td>2</td>
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
                      <td>COS 409</td>
                      <td>Research Methodology and Technical Report Writing</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>CYB 401</td>
                      <td>Systems Vulnerability Assessment and Testing</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 402</td>
                      <td>Steganography-Access Methods and Data Hiding</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 403</td>
                      <td>Cyber Threat Intelligence and Cyber Conflict</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 404</td>
                      <td>Cloud Computing Security</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 405</td>
                      <td>Ethical Hacking and Reverse Engineering</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 406</td>
                      <td>Deep and Dark Web Security</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>CYB 497</td>
                      <td>Final Year Project I</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>CYB 498</td>
                      <td>Final Year Project II</td>
                      <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 21</b></p>
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
