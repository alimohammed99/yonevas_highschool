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
                                  Entrepreneurship
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
                                            <h1 class="feature-banner__title">Entrepreneurship B.Sc.
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
                <p>The Entrepreneurship B.Sc. program is designed to equip students with the knowledge, skills, and mindset necessary to thrive in the dynamic world of business and innovation. This comprehensive program provides a solid foundation in entrepreneurship principles, business management, and strategic thinking, empowering students to navigate the challenges and opportunities of starting and growing their own ventures. Through a combination of theoretical knowledge, practical application, and real-world case studies, students will develop a deep understanding of the entrepreneurial process and gain the tools needed to turn innovative ideas into successful businesses. Whether aspiring to launch their own startups or drive innovation within existing organizations, this program prepares students to become creative, adaptable, and forward-thinking entrepreneurs.
                </p>
                <p><strong>Aims and Objectives:</strong> The aim of the Entrepreneurship B.Sc. program is to cultivate a new generation of entrepreneurial leaders who can drive economic growth, innovation, and social impact. The program is designed to achieve the following objectives:
                </p>
                <ol>
                  <li>
                    <strong>Develop Entrepreneurial Mindset:</strong> Foster an entrepreneurial mindset characterized by creativity, resilience, problem-solving, and a willingness to take calculated risks.
                  </li>
                  <li>
                    <strong>Enhance Business Management Skills:</strong> Equip students with foundational business management skills, including strategic planning, marketing, finance, operations, and human resource management, necessary for launching and managing successful ventures.
                  </li>
                  <li>
                    <strong>Foster Innovation and Creativity:</strong> Stimulate students' innovative thinking and creative problem-solving abilities, enabling them to identify market opportunities, develop innovative business ideas, and create value in rapidly changing environments.
                  </li>
                  <li>
                    <strong>Cultivate Ethical and Sustainable Practices:</strong> Promote ethical and socially responsible entrepreneurship, emphasizing the importance of sustainable business practices, social impact, and responsible leadership.</li>
                  <li>
                    <strong>Encourage Collaborative and Networking Abilities:</strong> Foster teamwork, collaboration, and networking skills, enabling students to effectively collaborate with diverse stakeholders, build partnerships, and access valuable resources and expertise.</li>
                </ol>
                <p><b>Learning Outcomes:</b> Upon completion of the Entrepreneurship B.Sc. program, students will be able to:</p>
                <ol>
                  <li>Demonstrate a comprehensive understanding of entrepreneurship theories, principles, and best practices.</li>
                  <li>Apply critical thinking and problem-solving skills to identify business opportunities, evaluate market potential, and develop viable business plans.</li>
                  <li>Utilize effective communication and presentation skills to articulate business ideas, pitch to investors, and engage with stakeholders.</li>
                  <li>Employ strategic management techniques to launch, scale, and manage entrepreneurial ventures.</li>
                  <li>Apply ethical and sustainable practices in business operations, taking into account environmental, social, and governance considerations.</li>
                  <li>Collaborate effectively with diverse teams and leverage networking opportunities to support business growth and innovation.</li>
                  <li>Adapt to and navigate the challenges of the entrepreneurial ecosystem, demonstrating resilience, agility, and a willingness to embrace change.</li>
                  <li>Evaluate and manage risks associated with entrepreneurial ventures, employing appropriate risk mitigation strategies.</li>
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
              <h4>Career Opportunities for Entrepreneurship B.Sc. Graduates:</h4>
              <ol>
                <li><strong>Startup Founder/Entrepreneur:</strong> Graduates can start their own businesses and become entrepreneurs, applying their knowledge and skills to identify market opportunities, develop innovative business ideas, and build successful ventures.</li>
                <li><strong>Business Development Manager:</strong> Graduates can work as business development managers, responsible for identifying and pursuing growth opportunities for existing companies. They can contribute to expanding market reach, establishing strategic partnerships, and driving revenue growth.</li>
                <li><strong>Innovation Manager:</strong> Graduates can work as innovation managers in established organizations, leading initiatives to foster a culture of innovation, drive product development, and explore new business opportunities.</li>
                <li><strong>Small Business Consultant:</strong> Graduates can provide consulting services to small businesses, offering expertise in areas such as business planning, market research, financial management, and growth strategies.</li>
                <li><strong>Venture Capitalist/Investor:</strong> Graduates with a strong understanding of entrepreneurship and business growth can work as venture capitalists or investors, providing funding and mentorship to promising startups.</li>
                <li><strong>Social Entrepreneur:</strong> Graduates can pursue careers as social entrepreneurs, starting ventures that address social or environmental challenges while also generating sustainable revenue.</li>
                <li><strong>Entrepreneurship Educator:</strong> Graduates can become entrepreneurship educators, teaching and mentoring aspiring entrepreneurs in academic institutions or entrepreneurship training programs.</li>
                <li><strong>Business Incubator Manager:</strong> Graduates can work in business incubators or accelerators, providing guidance, resources, and mentorship to early-stage startups, helping them grow and succeed.</li>
                <li><strong>Product Manager:</strong> Graduates can work as product managers, responsible for developing and managing product lines, conducting market research, and driving product innovation within organizations.</li>
                <li><strong>Corporate Innovation Manager:</strong> Graduates can work in corporations, leading innovation initiatives, fostering a culture of intrapreneurship, and exploring new business opportunities to keep the organization competitive in the market.</li>
                <li><strong>E-commerce Entrepreneur:</strong> Graduates can specialize in e-commerce and start their own online businesses or work in roles related to e-commerce operations, digital marketing, and customer experience.</li>
                <li><strong>Business Analyst:</strong> Graduates can work as business analysts, analyzing market trends, conducting market research, and providing strategic insights to support decision-making within organizations.</li>
                <li><strong>Strategic Partnerships Manager:</strong> Graduates can work in roles focused on developing strategic partnerships and collaborations, facilitating business growth and expansion through effective relationship-building.</li>
                <li><strong>Franchise Owner/Operator:</strong> Graduates can explore opportunities in franchise ownership or operation, leveraging established business models and systems to run their own business.</li>
                <li><strong>Entrepreneurial Support Organizations:</strong> Graduates can work in organizations that provide support and resources to entrepreneurs, such as entrepreneurship centers, startup incubators, and innovation hubs.</li>
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


        <div style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
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
                      <td>AMS 101</td>
                      <td>Principles of Management</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>AMS 102</td>
                      <td>Basic Mathematics</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>AMS 103</td>
                      <td>Introduction to Computers</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>AMS 104</td>
                      <td>Principles of Project Management</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ECO 101</td>
                      <td>Principles of Economics</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ECO 102</td>
                      <td>Elements of Book keeping</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>ENT 121</td>
                      <td>Introduction to Entrepreneurship & venture Creation</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>ENT 122</td>
                      <td>The Nigerian Entrepreneurial Environment</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 124</td>
                      <td>Basic Financial Literacy</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>ENT 125</td>
                      <td>Business Statistics</td>
                      <td>2</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 27</b></p>
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
                      <td>ENT 223</td>
                      <td>Introduction to Entrepreneurial Financing</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 224</td>
                      <td>Entrepreneurship and Change Management</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 225</td>
                      <td>Entrepreneurial Marketing</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 227</td>
                      <td>Theories of Entrepreneurship</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 232</td>
                      <td>Industrial Learning and Tours I</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>ENT 234</td>
                      <td>Biographical Studies of Entrepreneurial Thinkers and Giants</td>
                      <td>3</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 18</b></p>
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
                      <td>ENT 315</td>
                      <td>Business Opportunity Scouting and Evaluation</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 323</td>
                      <td>Sociology of Entrepreneurship</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 325</td>
                      <td>Small Scale Business Management</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 328</td>
                      <td>Family Business and Succession Plan</td>
                      <td>2</td>
                  </tr>
                  <tr>
                      <td>ENT 332</td>
                      <td>Feasibilities and Business Planning</td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>ENT 334</td>
                      <td>Research Methods/td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td>ENT 336</td>
                      <td>Industrial Learning and Tours II</td>
                      <td>3</td>
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
                      <td>ENT 416</td>
                      <td>Social Entrepreneurship and Community Development</td>
                      <td>2</td>
                  </tr>
                  <tr>
                    <td>ENT 417</td>
                    <td>Technology Entrepreneurship and Intellectual Property Rights</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ENT 424</td>
                    <td>Management of Creativity and Innovation</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ENT 427</td>
                    <td>E-Business</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ENT 428</td>
                    <td>Entrepreneurship and Gender Issues</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ENT 429</td>
                    <td>Strategic Thinking, Problem Solving and Negotiation Skills</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ENT 432</td>
                    <td>Risk Management and Insurance</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>ENT 442</td>
                    <td>Research for Enterprise</td>
                    <td>4</td>
                  </tr>
              </table>
              <p style="text-align:left; "><b>Total Unit: 19</b></p>
          </div>
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
