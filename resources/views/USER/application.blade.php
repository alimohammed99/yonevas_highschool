@extends('layouts.pages')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<main id="main" class="main">
    <a id="main-content" tabindex="-1"></a>


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



                <article data-history-node-id="275" role="article" about="/contact-us" class="node node--type-landing-page node--promoted node--view-mode-full">
                    <div class="node__content">
                        <div class="field field--name-field-paragraphs field--type-entity-reference-revisions field--label-hidden field__items">
                            <div class="field__item" tabindex="0">

                                <div class="container">
                                    <div class="content-left text--align" >
                                        <div class="contact" style="margin-bottom: 20px;">
                                            <div class="contact__form" >
                                                <h1  style="margin-top:5rem" class="contact__label">Application</h1>
                                                {{-- <form
                                                            class="webform-submission-form webform-submission-add-form webform-submission-contact-form webform-submission-contact-add-form webform-submission-contact-paragraph-766-form webform-submission-contact-paragraph-766-add-form js-webform-details-toggle webform-details-toggle antibot"
                                                            data-drupal-selector="webform-submission-contact-paragraph-766-add-form"
                                                            data-action="/contact-us" action="/antibot" method="post"
                                                            id="webform-submission-contact-paragraph-766-add-form"
                                                            accept-charset="UTF-8" style="margin-bottom: 20px;">
                                                                @csrf --}}
                                                <form action="{{ route('contact.send') }}" method="post">
                                                    @csrf

                                                    <noscript>
                                                        <div class="antibot-no-js antibot-message antibot-message-warning">
                                                            You must have JavaScript enabled to use this form.</div>
                                                    </noscript>
                                                    <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                        <label for="position" class="js-form-required form-required">Position Applied For:</label>
                                                        <select name="position" id="Position">
                                                            <option value="addmission_counsellor">Admission Counsellor</option>
                                                            <option value="event_director">Event Director</option>
                                                            <option value="academic_staff">Academic Staff</option>
                                                            <option value="tech_support">Tech Support</option>
                                                            <option value="tech_support">Research</option>
                                                        </select>

                                                    </div>
                                                    <h4>Personal Information:</h4>
                                                    <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                        <label for="edit-name" class="js-form-required form-required">Full Name</label>
                                                        <input data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" />

                                                    </div>
                                                    <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                        <label for="address" class="js-form-required form-required">Address</label>
                                                        <input data-drupal-selector="address" type="text" id="address" name="address" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" />

                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label for="city" class="js-form-required form-required">City</label>
                                                            <input data-drupal-selector="city" type="text" id="city" name="city" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label for="state" class="js-form-required form-required">State</label>
                                                            <input data-drupal-selector="state" type="text" id="state" name="state" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                                            <label for="zip_code" class="js-form-required form-required">Zip Code</label>
                                                            <input data-drupal-selector="zip_code" type="text" id="zip_code" name="zip_code" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="number" class="js-form-required form-required">Phone Number</label>
                                                            <input data-drupal-selector="number" type="text" id="number" name="number" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="edit-email" class="js-form-required form-required">Email
                                                                address</label>
                                                            <input data-drupal-selector="edit-email" type="email" id="edit-email" name="email" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <h4>Education:</h4>
                                                    <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                        <label for="degree" class="js-form-required form-required">Highest Degree Obtained</label>
                                                        <input data-drupal-selector="degree" type="text" id="degree" name="degree" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                    </div>
                                                    <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                        <label for="institution" class="js-form-required form-required">Name of Institution</label>
                                                        <input data-drupal-selector="institution" type="text" id="institution" name="institution" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="major" class="js-form-required form-required">Major</label>
                                                            <input data-drupal-selector="major" type="text" id="major" name="major" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="graduation" class="js-form-required form-required">Graduation Date:</label>
                                                            <input data-drupal-selector="graduation" type="text" id="graduation" name="graduation" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <h4>Previous Employment</h4>
                                                    <p>Please list your previous employment history, beginning with your most recent position:</p>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="company_name" class="js-form-required form-required">Company Name</label>
                                                            <input data-drupal-selector="company_name" type="text" id="company_name" name="company_name" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="position" class="js-form-required form-required">Position</label>
                                                            <input data-drupal-selector="position" type="text" id="position" name="position" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="date_employed" class="js-form-required form-required">Date Employed</label>
                                                            <input data-drupal-selector="date_employed" type="date" id="date_employed" name="date_employed" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reason" class="js-form-required form-required">Reason for leaving</label>
                                                            <input data-drupal-selector="reason" type="text" id="reason" name="reason" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="company_name" class="js-form-required form-required">Company Name</label>
                                                            <input data-drupal-selector="company_name" type="text" id="company_name" name="company_name" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="position" class="js-form-required form-required">Position</label>
                                                            <input data-drupal-selector="position" type="text" id="position" name="position" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="date_employed" class="js-form-required form-required">Date Employed</label>
                                                            <input data-drupal-selector="date_employed" type="date" id="date_employed" name="date_employed" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reason" class="js-form-required form-required">Reason for leaving</label>
                                                            <input data-drupal-selector="reason" type="text" id="reason" name="reason" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <h4>References</h4>
                                                    <p>Please provide the names and contact information for three professional references:</p>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_name1" class="js-form-required form-required">Name</label>
                                                            <input data-drupal-selector="reference_name1" type="text" id="reference_name1" name="reference_name1" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_number1" class="js-form-required form-required">Phone Number</label>
                                                            <input data-drupal-selector="reference_number1" type="text" id="reference_number1" name="reference_number1" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="refrence_relationship1" class="js-form-required form-required">Relationship</label>
                                                            <input data-drupal-selector="refrence_relationship1" type="text" id="refrence_relationship1" name="refrence_relationship1" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_email1" class="js-form-required form-required">Email</label>
                                                            <input data-drupal-selector="reference_email1" type="text" id="reference_email1" name="reference_email1" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_name2" class="js-form-required form-required">Name</label>
                                                            <input data-drupal-selector="reference_name2" type="text" id="reference_name2" name="reference_name2" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_number2" class="js-form-required form-required">Phone Number</label>
                                                            <input data-drupal-selector="reference_number2" type="text" id="reference_number2" name="reference_number2" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="refrence_relationship2" class="js-form-required form-required">Relationship</label>
                                                            <input data-drupal-selector="refrence_relationship2" type="text" id="refrence_relationship2" name="refrence_relationship2" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_email2" class="js-form-required form-required">Email</label>
                                                            <input data-drupal-selector="reference_email2" type="text" id="reference_email2" name="reference_email2" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_name3" class="js-form-required form-required">Name</label>
                                                            <input data-drupal-selector="reference_name3" type="text" id="reference_name3" name="reference_name3" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_number3" class="js-form-required form-required">Phone Number</label>
                                                            <input data-drupal-selector="reference_number3" type="text" id="reference_number3" name="reference_number3" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="refrence_relationship3" class="js-form-required form-required">Relationship</label>
                                                            <input data-drupal-selector="refrence_relationship3" type="text" id="refrence_relationship3" name="refrence_relationship3" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="reference_email3" class="js-form-required form-required">Email</label>
                                                            <input data-drupal-selector="reference_email3" type="text" id="reference_email3" name="reference_email3" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>
                                                    <h4>Certifications and Licenses:</h4>
                                                    <p>Please list any relevant certifications or licenses you hold:</p>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="certification" class="js-form-required form-required">Certification/License:</label>
                                                            <input data-drupal-selector="certification" type="text" id="certification" name="certification" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />
                                                        </div>
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="issuing_organization" class="js-form-required form-required"> Issuing Organization:</label>
                                                            <input data-drupal-selector="issuing_organization" type="text" id="issuing_organization" name="issuing_organization" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                        </div>
                                                    </div>

                                                    <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-subject form-item-subject">
                                                        <label for="expiration" class="js-form-required form-required">Expiration Date:</label>
                                                        <input data-drupal-selector="expiration" type="text" id="expiration" name="expiration" value="" size="60" maxlength="255" class="form-text required" required="required" aria-required="true" />
                                                    </div>
                                                    <h4>E-SIGN: You may put your initials in the space provided and date below</h4>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                            <label for="sign" class="js-form-required form-required">Sign:</label>
                                                            <input data-drupal-selector="sign" type="text" id="sign" name="sign" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />
                                                        </div>

                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                    <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                                                        <label for="date" class="js-form-required form-required">Date:</label>
                                                        <input data-drupal-selector="date" type="date" id="date" name="date" value="" size="10" maxlength="254" class="form-email required" required="required" aria-required="true" />

                                                    </div>
                                                    </div>
                                                    <div style="display:flex; flex-direction:row; justify-content:space-between">
                                                    <input type="checkbox" id="agreement" name="agreement" value="agreement">
                                                    <p>By signing this application, I certify that the information provided is true and complete to the best
of my knowledge. I understand that any misrepresentation or omission may result in
disqualification from employment</p>
                                                    </div>

                                                    <div data-drupal-selector="edit-actions" class="form-actions webform-actions js-form-wrapper form-wrapper" id="edit-actions" style="padding-bottom: 10px;"><input class="webform-button--submit button button--primary js-form-submit form-submit" data-drupal-selector="edit-actions-submit" type="submit" id="edit-actions-submit" name="op" value="Submit" />

                                                    </div>

                                                    <input data-drupal-selector="edit-antibot-key" type="hidden" name="antibot_key" value="" />
                                                    <input autocomplete="off" data-drupal-selector="form-ocsxrydayg8s5zktfy-7nq4ruvy4sg58o39qhlgui2q" type="hidden" name="form_build_id" value="form-ocSxrydAYG8s5zkTfY_7Nq4rUVY4sG58O39qHlgUI2Q" />
                                                    <input data-drupal-selector="edit-webform-submission-contact-paragraph-766-add-form" type="hidden" name="form_id" value="webform_submission_contact_paragraph_766_add_form" />



                                                </form>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </article>

            </div>

        </div>

    </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
@endsection
