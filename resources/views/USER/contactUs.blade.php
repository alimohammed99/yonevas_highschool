@extends('layouts.pages')
@section('content')
<head>
    <style>
        
            /* container */
.responsive-two-column-grid {
    display:block;
    background-color: #00142d
}

/* columns */
.responsive-two-column-grid > * {
    padding:1rem;
}

/* tablet breakpoint */
@media (min-width:768px) {
    .responsive-two-column-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
}
.responsive-one-column-grid {
    display:block;
    background-color: #00142d
}

/* columns */
.responsive-one-column-grid > * {
    padding:0.5%;
}

/* tablet breakpoint */
@media (min-width:768px) {
    .responsive-one-column-grid {
        display: grid;
        grid-template-columns: 1fr;
    }
}
  /* container */
  .right-sidebar {
    display:flex;
    flex-wrap:wrap;
}

/* columns */
.right-sidebar > * {
    width:100%;
    padding:1rem;
}

/* tablet breakpoint */
@media (min-width:768px) {
    .right-sidebar > *:nth-child(1) {
        width:calc(100% / 3 * 2);
    }
    .right-sidebar > *:nth-child(2) {
        width:calc(100% / 3);
    }
}
.card-category-2 ul{
    padding: 0;
}
.card-category-2 ul li{
    list-style-type: none;
    display: inline-block;
    vertical-align: top;
}
.card-category-2 ul li{
    margin: 10px 15px;
}
.card-category-2{
    font-family: sans-serif;
    margin-bottom: -16px;
    text-align: center;
}
.card-category-2 div {
        display:inline-block;
    }
.card-category-2 > div:not(:last-child) {
        margin: 10px 5px;
        text-align: left;
    }
    /* Image Card */
    .img-card {
        width:400px;
        position: relative;
        border-radius: 5px;
        text-align: left;

        -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        -o-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
        box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);        
    }

        .img-card .card-image {
            position: relative;
            margin: auto;
            overflow: hidden;
            border-radius: 5px 5px 0px 0px;
            height: 200px;
        }

        .img-card .card-image img {
            width:100%;
            border-radius: 5px 5px 0px 0px;
            
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            transition: all 0.8s;
        }

        .img-card .card-image:hover img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }        

        .img-card .card-text {
            padding: 0 15px 15px;
            line-height: 1.5;   
        }

        .img-card .card-link {
            padding: 20px 15px 30px;
            width: -webkit-fill-available;
        }

            .img-card .card-link a {
                text-decoration: none;
                position: relative;
                padding: 10px 0;
            }

            .img-card .card-link a:after {
                top: 30px;
                content: "";
                display: block;
                height: 2px;
                left: 50%;
                position: absolute;
                width: 0;

                -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
                -moz-transition: width 0.3s ease 0s, left 0.3s ease 0s;
                -o-transition: width 0.3s ease 0s, left 0.3s ease 0s;
                transition: width 0.3s ease 0s, left 0.3s ease 0s;
            }

            .img-card .card-link a:hover:after { 
                width: 100%; 
                left: 0; 
            }        
        
        .img-card.iCard-style1 .card-title {
            position: absolute;
            font-family: 'Open Sans', sans-serif;
            z-index: 1;
            top: 10px;
            left: 10px;
            font-size: 30px;
            color: #fff;
        }
        
        .img-card.iCard-style1 .card-text {            
            color: #795548;
        }

        .img-card.iCard-style1 .card-link a {
            color: #FF9800;                
        }

        .img-card.iCard-style1 .card-link a:after {            
            background: #FF9800;
        }

        .img-card.iCard-style2 .card-title {
            padding: 15px;
            font-size: 25px;
            font-family: 'Roboto', sans-serif;
        }

        .img-card.iCard-style2 .card-image {
            margin-bottom: 15px;
        }
        
        .img-card.iCard-style2 .card-caption {
            text-align: center;
            top: 80%;
            font-size: 17px;
            color: #fff;
            position: absolute;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            z-index: 1;
        }
        
        .img-card.iCard-style2 .card-link a {
            border: 1px solid;
            padding: 8px;
            border-radius: 3px;
            color: black;
            font-size: 13px;

            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
        }

        .img-card.iCard-style2 .card-link a:hover {            
            background: black;
        }

        .img-card.iCard-style2 .card-link a:hover span {            
            color:#fff;            
        }

        .img-card.iCard-style3 {
            text-align: center;
        }

        .img-card.iCard-style3 .card-title {
            top: 80%;
            font-size: 30px;
            color: #fff;
            position: absolute;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            z-index: 1;
        }

        .img-card.iCard-style3 .card-text {
            color: #636060;
        }

        .img-card.iCard-style3 .card-link {
            border-top: 1px solid #e8e8e8;
        }
            .img-card.iCard-style3 .card-link a {
                color: #585858;
            }
            .img-card.iCard-style3 .card-link a:after {            
                background: #585858;
            }

    .img-card.iCard-style4 {
        text-align: right;
    }

    .img-card.iCard-style4 .card-caption {
        position: absolute;
        width: 100%;
        font-family: 'Open Sans', sans-serif;
        z-index: 1;
        top: 10px;
        right: 10px;
        color: #fff;
    }

    .img-card.iCard-style4 .card-title {
        width: 100%;
        padding: 20px 0px 12px 0;
        color: #E91E63;
    }

        .img-card.iCard-style4 .card-title span {
            font-size: 25px;
            margin-right: 12px;
        }

    .img-card.iCard-style4 .toggle {
        cursor: pointer;
        padding: 8px 0px 13px 0px;
        width: 55px;
    }
    
    .img-card.iCard-style4 .toggle span, .img-card.iCard-style4 .toggle span:nth-child(2), .img-card.iCard-style4 .toggle span:nth-child(3) {
        position: absolute;
        width: 8px;
        height: 8px;
        background: #E91E63;
        cursor: pointer;
    }

    .img-card.iCard-style4 .toggle span:nth-child(1) {
        right: 15px;
    }

    .img-card.iCard-style4 .toggle span:nth-child(2) {
        right: 27px;
    }

    .img-card.iCard-style4 .toggle span:nth-child(3) {
        right: 39px;
    }

    .img-card.iCard-style4 .card-text {
        opacity: 0;
        line-height: 0;
        padding-bottom: 0;
        color: #4c4c4c;

        -webkit-transition: ease-in-out 0.5s;
        -moz-transition: ease-in-out 0.5s;
        -o-transition: ease-in-out 0.5s;
        transition: ease-in-out 0.5s;
    }

    .img-card.iCard-style4 .toggle.active ~ .card-text{
        opacity: 1;
        line-height: 1.5;
        padding-bottom: 10px;
    }

    .img-card.iCard-style4 .card-link {
        border-top:1px solid #e8e8e8;
    }

        .img-card.iCard-style4 .card-link a {
            color: #E91E63;
        }
        .img-card.iCard-style4 .card-link a:after {            
            background: #E91E63;
        }
        img.logo {float: left; height: 90px;}
        img.logo.large {height: 90px;}
        img.logo.small {margin-top: 10px; height: 30px;
  }
    </style>
</head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <main id="main" class="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="region region-breadcrumb">
            <div data-drupal-messages-fallback class="hidden"></div>
        </div>

        @if (session()->has('success_message'))
            <div class="alert alert-success alert-dismissible">
                <button class="close" type="button" data-dismiss="alert">x</button>
                {{ session()->get('success_message') }}
            </div>
        @endif


        @if (session()->has('error_message'))
            <div class="alert alert-danger alert-dismissible">
                <button class="close" type="button" data-dismiss="alert">x</button>
                {{ session()->get('error_message') }}
            </div>
        @endif

        <div class="main-region">
            <div class="region region-content">
                <div id="block-mainpagecontent" class="block block-system block-system-main-block">



                    <article data-history-node-id="275" role="article" about="/contact-us"
                        class="node node--type-landing-page node--promoted node--view-mode-full">



                        <div class="responsive-two-column-grid" >
                            <div>
                                <img src="{{ asset('assets/newImages/wepik-export-20230704123903JmXa.png') }}" alt="computer system" />
                            </div>
                            <div style="margin: auto; color:white; padding-left:5%;">
                                <h2 style="padding-bottom: 3%;">General Inquiries:</h2>
                                <h4 style="padding-bottom: 3%;">For general inquiries about Yonevas Open University, please email us at: <a href = "mailto: info@yonevas.institute" style="color: #e4d018">info@yonevas.institute</a>.</h4>
                                <h4>We strive to respond to inquiries within 12-24 hours.</h4>
                            </div>
                        </div>
                    

                        <div class="node__content">

                            <div
                                class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item" tabindex="0">
                                    <div class="content-group block-contact">
                                        <div class="container">
                                            <div class="content-left">
                                                <div class="contact" style="background: #fefefd">
                                                    <div class="contact__form">
                                                        <h1 class="contact__label">Message us</h1>
                                                        {{-- <form
                                                            class="webform-submission-form webform-submission-add-form webform-submission-contact-form webform-submission-contact-add-form webform-submission-contact-paragraph-766-form webform-submission-contact-paragraph-766-add-form js-webform-details-toggle webform-details-toggle antibot"
                                                            data-drupal-selector="webform-submission-contact-paragraph-766-add-form"
                                                            data-action="/contact-us" action="/antibot" method="post"
                                                            id="webform-submission-contact-paragraph-766-add-form"
                                                            accept-charset="UTF-8">
                                                                @csrf --}} 
                                                        <div class="formbold-main-wrapper">
                                                        <!-- Author: FormBold Team -->
                                                        <!-- Learn More: https://formbold.com -->
                                                        <div class="formbold-form-wrapper">
                                                            <form action="{{ route('contact.send') }}" method="POST">
                                                                @csrf
                                                                <div class="formbold-input-flex">
                                                                    <div>
                                                                        <input type="text" name="name" id="firstname" placeholder="Jhon Chukwuemeka" class="formbold-form-input" required />
                                                                        <label for="firstname" class="formbold-form-label"> Full name </label>
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="phone" id="subject" placeholder="Phone Number" class="formbold-form-input" required />
                                                                        <label for="phone" class="formbold-form-label"> Phone Number </label>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="formbold-textarea" style="padding-bottom: 3%;">
                                                                    <input type="email" name="email" id="email" placeholder="jhon@gmail.com" class="formbold-form-input" required />
                                                                        <label for="email" class="formbold-form-label"> Email </label>
                                                                </div>

                                                                <div class="formbold-textarea" style="padding-bottom: 3%;">
                                                                        <input type="text" name="subject" id="subject" placeholder="Enquiry about process" class="formbold-form-input" required />
                                                                        <label for="subject" class="formbold-form-label"> Subject </label>
                                                                </div>
                                                                <div class="formbold-textarea" style="padding-bottom: 3%;">
                                                                    <textarea rows="6" name="message" id="message" placeholder="Write your message..."
                                                                        class="formbold-form-input" required ></textarea>
                                                                    <label for="message" class="formbold-form-label"> Message </label>
                                                                </div>
                                                                <div>
                                                                    <input type="checkbox" class="formbold-form-input" required/><p>I consent to the collection and processing of my data</p>
                                                                </div>
                                                                <button class="formbold-btn">
                                                                    Send Message
                                                                </button>
                                                            </form>
                                                        </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="content-right contact-img " style="position: relative">
                                        
                                                <img src="{{ asset('assets/newImages/Y-03.png') }}" alt="yonevas logo" style="position: absolute; top:0; left:0; width:100%; height:auto; z-index: 20;" />
                                                <img src="{{ asset('assets/newImages/contact.png') }}" alt="computer system" />
                                                <img src="{{ asset('assets/newImages/Y-04.png') }}" alt="yonevas logo" style="position: absolute; bottom:0; left:0; width:100%; height:auto; z-index: 20;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="responsive-one-column-grid" style="background-color:#00142d; ">
                            <div style="margin: auto;">
                                <h5 style="margin: auto; color:white;">Looking for something else?</h5>
                            </div>
                        </div>
                        <div class="card-category-2" style="background-color: #e4d018">
                            <ul>
                              <li>
                                <div class="img-card iCard-style2">
                                  <div class="card-content">
                                    <div class="card-image">
                                      <!-- <span class="card-caption">Image Caption</span> -->
                                      <img src="{{ asset('assets/newImages/wepik-export-20230704124409YV7f.png') }}"/>
                                    </div>
                                     <span class="card-title"> LEARNING WITH EASE</span>
                                     {{-- <div class="card-text">
                                       <p>Enrollment into any of Yonevas Open University's programs assures the best learning experience through the use of cutting-edge technology, offering state-of-the-art virtual classrooms, interactive platforms, and a curriculum aligned with industry advancements.</p>
                                     </div> --}}
                                    </div>
                                   </div>                    
                                  </li>
                                 <li>
                                <div class="img-card iCard-style2">
                                  <div class="card-content">
                                    <div class="card-image">
                                      <!-- <span class="card-caption">Image Caption</span> -->
                                      <img src="{{ asset('assets/newImages/wepik-export-20230704125452otDA.png') }}"/>
                                    </div>
                                     <span class="card-title">   STUDENT COLLABORATION</span>
                                     {{-- <div class="card-text">
                                       <p>Experiencing diversity and global collaborationis one of the key aspects that students enjoy at Yonevas Open University, providing a rich and immersive educational environment.</p>
                                     </div> --}}
                                   </div>
                                 </div>                    
                               </li>              
                             </ul>
                          </div>
                          <div class="responsive-two-column-grid" style="background-color: #795548 !important;">
                            <div>
                                <img src="{{ asset('assets/newImages/DSC_7741.jpg') }}" alt="computer system" />
                            </div>
                            <div style="margin: auto; color:white; padding-left:5%;">
                                <h2 style="padding-bottom: 3%;">ACADEMIC FACULTIES:</h2>
                                <ul>
                                    <li>FACULTY OF SOCIAL SCIENCES</li> 
                                    <li>FACULTY OF BUSINESS AND MANAGEMENT </li>
                                    <li>FACULTY  OF LAW</li>
                                    <li>FACULTY OF EDUCATION </li>
                                    <li>FACULTY OF COMPUTING</li>
                                    <li> FACULTY OF COMMUNICATION STUDIES </li>
                                </ul>
                            </div>
                        </div>
                        <div class="responsive-one-column-grid" style="background-color:#00142d; ">
                            <div style="margin: auto; text-align: center; color:white;">
                                <h2 style="margin: auto;">Admissions:</h2><br>
                                <p>For admission-related queries, please contact our Admissions Office:</p>
                                <p>Phone: <a href="tel:+2347048778559" style="color: #e4d018">+2347048778559</a></p>
                                <p>Email: <a href = "mailto:admissions@yonevas.institute" style="color: #e4d018">admissions@yonevas.institute</a></p>
                                <h2 style="margin: auto; color:white;">Faculty and Staff Directory:</h2><br>
                                <p>Visit our <a href="#" style="color: #e4d018">Faculty and Staff Directory</a> to find contact information for specific individuals.</p>
                            </div>
                        </div>
                        <div class="right-sidebar" style="background-color:#ddddff;">
                            <div>    
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63423.10865598365!2d3.278095974547719!3d6.528720603338735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8fec0b49b669%3A0x319744c1775084f2!2sYonevas%20Open%20University!5e0!3m2!1sen!2sng!4v1688059601015!5m2!1sen!2sng" width="100%" height="300" style="border:0; marging-left:-10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                 
                            </div>
                            <div style="padding-top:5%;">
                            <p style="font-size: 2.5em;">Contact Information</p>
                                        <ul style="font-size: 1.1em;">
                                                <li><i class="icon-home"></i> Block 223 low cost H/Estate Isolo-lagos</li>
                                                <li><i class="icon-phone"></i> Telephone: (+234)7048778559</li>
                                                <li><i class="icon-envelope"></i> Email: <a href="info@yonevas.institute">info@yonevas.institute</a></li>
                                            </ul>  
                                            <a href="https://www.facebook.com/Yonevascollege"><i class='fab fa-facebook-square' style='font-size:48px;color:blue'></i></a>
                                            
                                            <a href="https://www.youtube.com/channel/UC7--ERLy6wd7UjvDqepxReA"><i class="fab fa-youtube"></i></a>
                                            
                            </div>
                        </div>
                    </article>

                </div>

            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
