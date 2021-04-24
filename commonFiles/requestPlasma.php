<!-- ==========================
        contact layout 1
    =========================== -->
<section class="contact-layout1 pt-0 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h4>To request plasma please fill below form</h4>
                </div>
                <div class="contact-panel d-flex flex-wrap">
                    <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">How Can We Help? </h4>
                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                    reception staff
                                    with any general or medical enquiry. Our doctors will receive or return any urgent
                                    calls.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-user form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Name" id="plasma-request-name"
                                        name="contact-name" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-email form-group-icon"></i>

                                    <select class="form-control" id="plasma-request-blood-group">
                                        <option value="0">A+</option>
                                        <option value="1">B+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B-</option>
                                        <option value="4">AB+</option>
                                        <option value="5">AB-</option>
                                        <option value="6">O+</option>
                                        <option value="7">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-phone form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Phone"
                                        id="plasma-request-Phone" name="contact-phone" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Address"
                                        id="plasma-request-address" name="contact-phone" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">

                                    <div class="">
                                        <p>Do you have a COVID19 negative report? </p>
                                        <input type="radio" id="covid_report_1" name="report" value="yes">
                                        <label for="yes">Yes</label><br>
                                        <input type="radio" id="covid_report_0" name="report" value="no">
                                        <label for="no">No</label><br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <div class="">
                                        <p>If you have been discharged from a COVID19 Care Centre and have completed 28
                                            Days? </p>
                                        <input type="radio" id="discharged_28_1" name="discharged" value="yes">
                                        <label for="yes">Yes</label><br>
                                        <input type="radio" id="discharged_28_0" name="discharged" value="no">
                                        <label for="no">No</label><br>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">

                                    <div class="">
                                        <p>Do you have any co morbidities (Hypertension, Diabetes, Heart Issues, Renal
                                            Issues) </p>
                                        <input type="radio" id="issue_1" name="issue" value="yes">
                                        <label for="yes">Yes</label><br>
                                        <input type="radio" id="issue_0" name="issue" value="no">
                                        <label for="no">No</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control"
                                        placeholder="How many days passed since discharge from COVID19 Care Centre? "
                                        id="plasma-request-days" name="contact-phone" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control"
                                        placeholder="Patients Alternate Phone Number" id="plasma-request-alt-phone"
                                        name="plasma-request-alt-phone" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control"
                                        placeholder="If you need plasma, please enter Patients name"
                                        id="plasma-request-patients-name" name="contact-phone" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Patients Phone Number"
                                        id="plasma-request-patients-address" name="contact-phone" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                    <div
                        class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                        <div>
                            <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                            <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                contact our
                                friendly staff with any medical enquiry.
                            </p>
                        </div>
                        <div>
                            <ul class="contact__list list-unstyled mb-30">
                                <li>
                                    <i class="icon-phone"></i><a href="tel:+18001022716">Tollfree
                                        Helpline:18001022716</a>
                                </li>
                                <li>
                                    <i class="icon-location"></i><a href="#">Location: Belgaum/Karnataka</a>
                                </li>
                                <li>
                                    <i class="icon-clock"></i><a href="contact.php">Mon - Fri: 8:00 am - 7:00 pm</a>
                                </li>
                            </ul>
                            <a href="contact.php" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 1 -->