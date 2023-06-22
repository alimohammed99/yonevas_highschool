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
                                    Social Work 
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
                                            <h1 class="feature-banner__title">Social Work B.Sc.</h1>

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
                <p><strong>Course Introduction: </strong> The Social Work B.Sc. program is designed to equip students with the knowledge, skills, and values necessary to make a positive impact on individuals, families, and communities. This program combines theoretical learning with practical experiences, preparing students for a rewarding career in the field of social work. Students will gain a deep understanding of social issues, learn effective intervention strategies, and develop the ability to advocate for social justice and equality. Through engaging coursework, field placements, and experiential learning opportunities, students will graduate with the necessary competencies to address the complex challenges faced by vulnerable populations and contribute to the well-being of society.</p>
                <p><strong>Aims and Objectives:</strong> The aim of the Social Work B.Sc. program is to develop compassionate and competent professionals who are committed to promoting social justice, human rights, and social change. The program strives to</p>
                <ol>
                    <li><strong>Comprehensive Understanding of Social Work:</strong> The program aims to provide students with a solid foundation in the theories, values, and ethics of social work. Students will develop a critical understanding of social systems, social policies, and the impact of social inequalities on individuals and communities.</li>
                    <li><strong>Practical Skills for Effective Social Work Practice:</strong> The program aims to equip students with the practical skills required for competent social work practice. Students will learn assessment, intervention, and evaluation techniques, as well as effective communication, problem-solving, and case management skills.</li>
                    <li><strong>Professional Values and Ethical Conduct:</strong> The program aims to foster a strong sense of professional values and ethical conduct in students. Students will develop an understanding of the importance of cultural competence, respect for diversity, and the ethical principles guiding social work practice.</li>
                    <li><strong>Community Engagement and Advocacy:</strong> The program aims to promote community engagement and social advocacy among students. Students will learn how to collaborate with individuals, groups, and organizations to address social issues, promote social change, and advocate for the rights of marginalized populations.</li>
                </ol>
                <p><strong>Learning Outcomes: </strong> Upon completion of the Social Work B.Sc. program, students will be able to:</p>
                <ol>
                    <li>Apply theoretical knowledge and critical thinking skills to social work practice.</li>
                    <li>Demonstrate effective interpersonal communication and professional relationship-building skills.</li>
                    <li>Conduct comprehensive assessments and develop appropriate intervention plans.</li>
                    <li>Advocate for social justice, human rights, and equality in diverse contexts.</li>
                    <li>Engage in culturally competent and ethical social work practice.</li>
                    <li>Collaborate with multidisciplinary teams and community stakeholders to address social issues.</li>
                    <li>Utilize research and evidence-based practices to inform social work interventions.</li>
                    <li>Reflect on personal and professional development, identifying areas for growth and improvement.</li>
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
                <h4>Career Opportunities for Social Work B.Sc. Graduates:</h4>
                <ol>
                    <li><strong>Social Worker:</strong> Graduates can pursue careers as social workers in a variety of settings such as hospitals, community health centers, schools, government agencies, and non-profit organizations. They work directly with individuals, families, and communities to provide support, intervention, and resources to address social challenges and promote well-being.</li>
                    <li><strong>Child and Family Services:</strong> Graduates can work in child and family service agencies, specializing in child protection, foster care, adoption, and family counseling. They assess the needs of at-risk children and families, develop intervention plans, and provide support to promote child safety, welfare, and family stability.</li>
                    <li><strong>Mental Health and Substance Abuse Counselor:</strong> Graduates can work as counselors in mental health centers, rehabilitation facilities, and substance abuse treatment centers. They provide counseling, therapy, and support to individuals struggling with mental health issues, addiction, and substance abuse disorders.</li>
                    <li><strong>Community Development and Outreach:</strong> Graduates can work in community development organizations, engaging in community organizing, capacity building, and social advocacy. They collaborate with community members to identify needs, develop programs, and advocate for social change and policy reforms.</li>
                    <li><strong>Medical and Healthcare Social Worker:</strong> Graduates can work in healthcare settings, such as hospitals, clinics, and hospices, as medical social workers. They provide psychosocial support to patients and their families, assist with discharge planning, connect patients to resources, and advocate for their rights and well-being.</li>
                    <li><strong>School Social Worker:</strong> Graduates can work in educational institutions as school social workers, supporting students' academic, social, and emotional well-being. They provide counseling, intervention services, and coordinate with teachers, parents, and community resources to address students' needs and ensure a positive learning environment.</li>
                    <li><strong>Geriatric Social Worker:</strong> Graduates can work with elderly populations, providing support and services to older adults in nursing homes, senior centers, and home care agencies. They assess the needs of seniors, coordinate services, advocate for their rights, and address issues related to aging, caregiving, and end-of-life care.</li>
                    <li><strong>Policy Analyst and Researcher:</strong> Graduates can work in government agencies, research institutes, and advocacy organizations as policy analysts and researchers. They analyze social policies, conduct research on social issues, and contribute to the development of evidence-based policies and programs to address social challenges.</li>
                    <li><strong>Nonprofit Management:</strong> Graduates can pursue careers in nonprofit organizations, working in program management, grant writing, fundraising, and community outreach. They ensure the effective implementation of social service programs, engage in strategic planning, and manage resources to support the organization's mission.</li>
                    <li><strong>Private Practice and Counseling:</strong> Graduates can establish private practices and work as counselors or therapists, providing individual, family, or group therapy. They can specialize in areas such as marriage and family therapy, trauma counseling, or addiction counseling, serving clients in need of mental health support.</li>
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
                      <td>Communication Skills in English</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>GST 112</td>
                      <td>Nigerian Peoples and Culture</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 111</td>
                      <td>Introduction to Social Work</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 112</td>
                      <td>Introduction to Indigenous Social Welfare</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SOC 111</td>
                      <td>Introduction to Sociology</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>PSY 111</td>
                      <td>Introduction to Psychology</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 122</td>
                      <td>Social Deviance and Social Organization</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 16</b></p>
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
                      <td>SWK 211</td>
                      <td>History of Social Work</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 212</td>
                      <td>Social Work Theories</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 214</td>
                      <td>Social Case Work Principles, Ethics and Values</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 213</td>
                      <td>Forensic Social Work</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 224</td>
                      <td>Communication Skills in Social Work</td>
                      <td>2</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 21</b></p>
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
                      <td>SWK 311</td>
                      <td>Social Work Research Methods</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 312</td>
                      <td>Community Development</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 314</td>
                      <td>Social Problems and Social Work</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 325</td>
                      <td>Social Policy, Legislation and Administration</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 315</td>
                      <td>Gender and Social Policy</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 328</td>
                      <td>Social Work and Pandemics (Lassa fever, Ebola and HIV/AIDS)</td>
                      <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 24</b></p>
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
                      <td>SWK 401</td>
                      <td>Field Work Practicum</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 402</td>
                      <td>Research Project</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>SWK 412</td>
                      <td>Social Work Intervention with Individuals, Families and vulnerable persons</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 414</td>
                      <td>Social Group Work and Youth Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 415</td>
                      <td>Women and Child Development</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>SWK 421</td>
                      <td>Social Policy Legislation and Administration</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>SWK 426</td>
                      <td>Case Conference and Integrative Social Work (Seminars)</td>
                      <td>3</td>
                    </tr>
                </table>
                <p style="text-align:left; "><b>Total Unit: 23</b></p>
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
