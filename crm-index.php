<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Customer Status Overview</h4>
      <ul class="breadcrumb">
        <li><a href="#">CRM</a></li>
        <li><a href="#">Customer Status Overview</a></li>
      </ul>
    </div>
  </div>
</div>


<ul class="nav nav-tabs page-nav" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-star-fill"></i> New</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-circle-half"></i> In Progress</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-chat-square-quote-fill"></i> Quotes</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-shield-fill-check"></i> Won</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-shield-slash-fill"></i> Lost</button>
  </li>
</ul>
<div class="tab-content tab-page" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
      <div class="col-md-4">
        <div class="card sticky">
          <div class="card-body">
            <!-- Search Contacts -->
            <div class="d-flex">
              <div class="inner-addon right-addon search_md">
                <i class="bi bi-search"></i>
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="button" class="btn btn-primary ms-2 d-flex align-items-center plus" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-plus"></i> Add</button>
            </div>
            <div class="name_filter">A</div>
            <ul class="cont-list">
              <li>
                <a class="d-flex justify-content-between align-items-center" href="#">
                  <div class="d-flex">
                    <div class="avatar-wrapper">
                      <img src="img/faces/face23.jpg" class="avatar-med" />
                    </div>
                    <div>
                      <h4 class="cont-name-sml">Amelia</h4>
                      <h4 class="cont-desc-sml">Sales Executive</h4>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
              <li>
                <a class="d-flex justify-content-between align-items-center" href="#">
                  <div class="d-flex">
                    <div class="avatar-wrapper">
                      <img src="img/faces/face23.jpg" class="avatar-med" />
                    </div>
                    <div>
                      <h4 class="cont-name-sml">Amelia</h4>
                      <h4 class="cont-desc-sml">Sales Executive</h4>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
              <li>
                <a class="d-flex justify-content-between align-items-center" href="#">
                  <div class="d-flex">
                    <div class="avatar-wrapper">
                      <img src="img/faces/face23.jpg" class="avatar-med" />
                    </div>
                    <div>
                      <h4 class="cont-name-sml">Amelia</h4>
                      <h4 class="cont-desc-sml">Sales Executive</h4>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
            </ul>
            <div class="name_filter">B</div>
            <ul class="cont-list">
              <li>
                <a class="d-flex justify-content-between align-items-center" href="#">
                  <div class="d-flex">
                    <div class="avatar-wrapper">
                      <img src="img/faces/face23.jpg" class="avatar-med" />
                    </div>
                    <div>
                      <h4 class="cont-name-sml">Amelia</h4>
                      <h4 class="cont-desc-sml">Sales Executive</h4>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
              <li>
                <a class="d-flex justify-content-between align-items-center" href="#">
                  <div class="d-flex">
                    <div class="avatar-wrapper">
                      <img src="img/faces/face23.jpg" class="avatar-med" />
                    </div>
                    <div>
                      <h4 class="cont-name-sml">Amelia</h4>
                      <h4 class="cont-desc-sml">Sales Executive</h4>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
              <li>
                <a class="d-flex justify-content-between align-items-center" href="#">
                  <div class="d-flex">
                    <div class="avatar-wrapper">
                      <img src="img/faces/face23.jpg" class="avatar-med" />
                    </div>
                    <div>
                      <h4 class="cont-name-sml">Amelia</h4>
                      <h4 class="cont-desc-sml">Sales Executive</h4>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
            </ul>



          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card cd-custom-pd crm">
          <div class="card-body card-pad-avatar ">
            <button type="button" class="btn btn-secondary bg-drk-blue"> <span><img src="img/edit.svg" alt=""></span> Edit</button>
            <div class="db-top-wrapper">
              <div class="left d-flex">
                <div class="profile-sec">
                  <img src="img/prof-big.png" alt="">
                </div>
                <div class="content">
                  <h3>Amelia</h3>
                  <h6>Sales Executive</h6>
                  <div class="casualities d-flex">
                    <div class="content d-flex mr2">
                      <span class="mr1"><img src="img/mail.svg" alt=""></span>
                      <div>
                        <p>Email</p>
                        <h4>test@gmail.com</h4>
                      </div>
                    </div>
                    <div class="content d-flex mr2">
                      <span class="mr1"><img src="img/phone.svg" alt=""></span>
                      <div>
                        <p>Phone</p>
                        <h4>64578 76476</h4>
                      </div>
                    </div>
                    <div class="content d-flex mr2">
                      <span class="mr1"><img src="img/location.svg" alt=""></span>
                      <div>
                        <p>Country</p>
                        <h4>UK</h4>
                      </div>
                    </div>
                    <div class="content d-flex mr2">
                      <span class="mr1"><img src="img/date.svg" alt=""></span>
                      <div>
                        <p>Created On</p>
                        <h4>Jun 24, 2022</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <!-- Inner Nav pills -->
        <ul class="nav nav-pills custom mt-4 mb-2" id="myTabPills" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="true"><i class="bi bi-activity"></i> All</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false"><i class="bi bi-chat-left-text"></i> Comments</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-envelope"></i> Email</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-chat-square-quote"></i> Quotes</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-bag-check"></i> Orders</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#invoice" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-file-text"></i> Invoice</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#sms" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-chat-square-dots"></i> SMS</button>
          </li>
        </ul>
        <div class="tab-content tab-page-inner" id="myTabContentPills">
          <!-- All Activity Content -->
          <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>All Activities</h4>
                  <div>
                    <h6 class="fo-flx-center">Sales Executive: <p>Liam Olivia</p> <span><img src="img/prof-1.png" alt=""></span> </h6>
                  </div>
                </div>
                <div class="card-body">

                  <div class="page-content page-container" id="page-content">
                    <div class="padding">
                      <div class="row">

                        <div class="col-lg-12">
                          <div class="timeline mb-4">
                            <div class="tl-item">
                              <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>
                                <div class="tl-content-inner">
                                  <h5>SUBJECT: BETA CRM LTD</h5>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-quote"><i class="bi bi-file-earmark-arrow-up-fill"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">Quotation <a href="#">#QTE0097</a> created on <b>16.07.2022 07:20:09 AM </b> by <b>Adam</b> Requested for Approval</div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>
                                <div class="tl-content-inner">View or Download as PDF <i class="bi bi-file-earmark-pdf-fill pdf"></i></div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-quote"><i class="bi bi-file-earmark-check-fill"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">Quotation <a href="#">#QTE0097</a> Approved by <b>Adam</b></div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>

                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-sms"><i class="bi bi-check-square-fill"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">SMS has been sent by <b>Adam</b></div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>
                                <div class="tl-content-inner">
                                  <p>Hi John, Hope you are doing good! we are waiting for your reply for the latest quotation</p>
                                </div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-sms"><i class="bi bi-arrow-right-square-fill"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">SMS has been received by <b>Adam</b></div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>
                                <div class="tl-content-inner">
                                  <p>Hi Adam, Currently I'm not available for a week, Kindly call me next week on 26/10/2022</p>
                                </div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-comment"><i class="bi bi-chat-left-text-fill"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">Comment added by <b>Adam</b></div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>
                                <div class="tl-content-inner">
                                  <p>The call via google meet went well. He is expecting 20% on product 1 for min 10 qty</p>
                                </div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-payment"><i class="bi bi-currency-euro"></i></div>
                              <div class="tl-content">
                                <div class="tl-title">1st installment payment has been received for invoice <a href="#"> #INV0097 </a> <b>€ 10,000</b> Submitted by <b>Adam</b></div>
                                <div class="tl-date text-muted mt-1">
                                  <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                  <span><i class="bi bi-clock"></i>12:30 PM</span>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>


                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <!-- Comments Content -->
          <div class="tab-pane fade show " id="comments" role="tabpanel" aria-labelledby="comments-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>Comments</h4>
                  <div>
                    <h6 class="fo-flx-center">Sales Executive: <p>Liam Olivia</p> <span><img src="img/prof-1.png" alt=""></span> </h6>
                  </div>
                </div>
                <div class="card-body fo-padding">
                  <div class="comments">
                    <h6>Leave Comment</h6>
                    <textarea name="" id="" cols="30" rows="10"></textarea>

                    <div class="button-wrapper mt-3 fo-flx-right align-center">
                      <h6>attachments if any <span><i class="bi bi-paperclip"></i></span></h6>
                      <button type="button" class="btn btn-secondary mr1 btn-sm">Cancel</button>
                      <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
                    </div>
                  </div>
                  <!-- Comments Activity Content -->
                  <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <div class="page-content page-container" id="page-content">
                      <div class="padding">
                        <div class="row">

                          <div class="col-lg-12">
                            <div class="timeline mb-4">


                              <div class="tl-item">
                                <div class="tl-dot b-comment"><i class="bi bi-chat-left-text-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Comment added by <b>Adam</b></div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <p>The call via google meet went well. He is expecting 20% on product 1 for min 10 qty</p>
                                  </div>
                                </div>
                              </div>
                              <div class="tl-item">
                                <div class="tl-dot b-comment"><i class="bi bi-chat-left-text-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Comment added by <b>Adam</b></div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <p>The call via google meet went well. He is expecting 20% on product 1 for min 10 qty</p>
                                  </div>
                                </div>
                              </div>
                              <div class="tl-item">
                                <div class="tl-dot b-comment"><i class="bi bi-chat-left-text-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Comment added by <b>Adam</b></div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <p>The call via google meet went well. He is expecting 20% on product 1 for min 10 qty</p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Email Content -->
          <div class="tab-pane fade show " id="email" role="tabpanel" aria-labelledby="email-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>Emails</h4>
                  <div>
                    <h6 class="fo-flx-center">Sales Executive: <p>Liam Olivia</p> <span><img src="img/prof-1.png" alt=""></span> </h6>
                  </div>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-secondary-light btn-sm mail-cm"> <i class="bi bi-envelope-fill"></i> Compose</button>
                  <p class="ps-3">Today</p>
                  <!-- Email Activity Content -->
                  <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <div class="page-content page-container" id="page-content">
                      <div class="padding">
                        <div class="row">

                          <div class="col-lg-12">
                            <div class="timeline mb-4">


                              <div class="tl-item">
                                <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <h5>SUBJECT: BETA CRM LTD</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                  </div>
                                </div>
                              </div>
                              <div class="tl-item">
                                <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <h5>SUBJECT: BETA CRM LTD</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                  </div>
                                </div>
                              </div>
                              <div class="tl-item">
                                <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <h5>SUBJECT: BETA CRM LTD</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="ps-3">Yesterday</p>
                  <!-- Email Activity Content -->
                  <div class="tab-pane fade show active" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <div class="page-content page-container" id="page-content">
                      <div class="padding">
                        <div class="row">

                          <div class="col-lg-12">
                            <div class="timeline mb-4">


                              <div class="tl-item">
                                <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <h5>SUBJECT: BETA CRM LTD</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                  </div>
                                </div>
                              </div>
                              <div class="tl-item">
                                <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                                <div class="tl-content">
                                  <div class="tl-title">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                  <div class="tl-date text-muted mt-1">
                                    <span><i class="bi bi-calendar-check"></i>Oct 03</span>
                                    <span><i class="bi bi-clock"></i>12:30 PM</span>
                                  </div>
                                  <div class="tl-content-inner">
                                    <h5>SUBJECT: BETA CRM LTD</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body mail">
                  <div class="mail-template">
                    <div class="mail-header fo-flx-js-sb mail-cm-pad">
                      <h6>Mail Title</h6>
                      <span><i class="bi bi-x-lg"></i></span>
                    </div>
                    <div class="mail-input mail-cm-pad">
                      <div class="fo-flx">
                        <p class="mr1">Recepients:</p>
                        <div class="capsules">
                          <p>Sahil <span><i class="bi bi-x fl-rht"></i></span></p>
                        </div>
                        <div class="capsules">
                          <p>Santhosh <span><i class="bi bi-x fl-rht"></i></span></p>
                        </div>
                        <div class="capsules">
                          <p>Alaghappan <span><i class="bi bi-x fl-rht"></i></span></p>
                        </div>
                        <div class="fl-actions fo-flx">
                          <a href="#" class="mr1">Cc</a>
                          <a href="#">Bcc</a>
                        </div>
                      </div>
                    </div>
                    <div class="divider remove-padding"></div>
                    <div class="mail-input mail-cm-pad">
                      <p>Subject:</p>
                    </div>
                    <div class="divider remove-padding"></div>
                    <div class="mail-body-input">
                      <textarea cols="10" rows="10"></textarea>
                    </div>
                    <div class="divider remove-padding"></div>
                    <div class="mail-footer mail-cm-pad">
                      <div class="mail-options fo-flx">
                        <div class="set fo-flx">
                          <i class="bi bi-type-bold"></i>
                          <i class="bi bi-type-italic"></i>
                          <i class="bi bi-type-underline"></i>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle remove-bg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              More <span><i class="bi bi-caret-down-fill fl-rht"></i></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Option 1</a></li>
                              <li><a class="dropdown-item" href="#">Option 2</a></li>
                              <li><a class="dropdown-item" href="#">Option 3</a></li>
                            </ul>
                          </div>
                          <i class="bi bi-link-45deg mr1"></i>
                          <i class="bi bi-image-fill mr1"></i>
                          <i class="bi bi-paperclip"></i>
                        </div>
                        <button type="button" class="btn btn-secondary mr1 btn-sm">Send</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Quotes Content -->
          <div class="tab-pane fade show " id="quotes" role="tabpanel" aria-labelledby="quotes-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>Quotes </h4>
                  <div>
                    <h6 class="fo-flx-center">Sales Executive: <p>Liam Olivia</p> <span><img src="img/prof-1.png" alt=""></span> </h6>
                  </div>
                </div>
                <div class="crm-cd-header fo-flx-center sub">
                  <h4>Total Quotes Created<span>06</span></h4>
                  <div class="d-flex">
                    <div class="inner-addon right-addon search_md">
                      <i class="bi bi-search"></i>
                      <input type="text" class="form-control" placeholder="Search" />
                    </div>
                    <button type="button" class="btn btn-secondary ms-2">Create</button>
                  </div>
                </div>
                <div class="card-body fo-padding">
                  <div class="list-view ">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-primary">
                              <p> <i class="bi bi-hourglass-top"></i> Waiting for Approval</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                            <div class="flag_general mt-4 me-2">Qty: 100</div>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-success">
                              <p> <i class="bi bi-check-circle-fill"></i> Approved</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                            <div class="flag_general mt-4 me-2">Qty: 100</div>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-hold">
                              <p> <i class="bi bi-hourglass-top"></i> Hold</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                            <div class="flag_general mt-4 me-2">Qty: 100</div>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-primary">
                              <p> <i class="bi bi-hourglass-top"></i> Waiting for Approval</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                            <div class="flag_general mt-4 me-2">Qty: 100</div>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-success">
                              <p> <i class="bi bi-check-circle-fill"></i> Approved</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                            <div class="flag_general mt-4 me-2">Qty: 100</div>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-hold">
                              <p> <i class="bi bi-hourglass-top"></i> Hold</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                            <div class="flag_general mt-4 me-2">Qty: 100</div>
                            <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                          </div>

                        </div>
                      </div>

                    </div>







                  </div>
                </div>
              </div>



              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center ">
                  <h4>Quote Detail View </h4>
                  <div class="button-wrapper mt-3 fo-flx-right align-center">
                    <div class="fo-tooltip" data-bs-toggle="tooltip" title="Lorem Ipsum has been the industry's standard">

                      <h6 class="text-green">Approved <span><i class="bi bi-info-circle-fill"></i></span></h6>
                    </div>
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Create</button>
                    <button type="button" class="btn btn-secondary-light btn-sm">Edit</button>
                  </div>


                </div>
                <div class="divider w-100 remove-padding"></div>
                <div class="card-body fo-padding">
                  <div class="brand-wrapper fo-flx-bottom">
                    <div class="left fo-flx-top">
                      <div class="img-sec mr3">
                        <img src="img/br1.png" alt="">
                      </div>
                      <div class="casualities">
                        <h1 class="mb-3">Blue Bridge</h1>
                        <div class="details fo-flx">
                          <h6 class="st-wi">QUOTE NO </h6>
                          <h6>#009-01</h6>
                        </div>
                        <div class="details fo-flx">
                          <h6 class="st-wi">QUOTE DATE</h6>
                          <h6>Jul 19,2022</h6>
                        </div>
                      </div>
                    </div>
                    <div class="right">
                      <p>TOTAL</p>
                      <h1 class="big-total"> €4,275 </h1>
                    </div>
                  </div>
                  <div class="divider w-100 mb-3"></div>
                  <div class="address-wrapper fo-flx-top mb-4">
                    <div class="left">
                      <p>Supplier Address</p>
                      <h5>Richard Welsh</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                    <div class="right">
                      <p>Delivery Address</p>
                      <h5>Amelia</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                  </div>
                  <div class="table-wrapper">
                    <table id="tb-border-radius" class="table">
                      <thead>
                        <tr>
                          <th class="fo-bo-topl-bottoml">PRODUCT NAME</th>
                          <th>SKU ID</th>
                          <th>QTY</th>
                          <th>PRICE/QTY</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>

                      </tbody>
                    </table>

                    <div class="table-footer fo-flx-top mt-4">
                      <div class="left">
                        <div class="content-1 mb-3">
                          <h5 class="mb-2">Payment Method</h5>
                          <h6> <strong>Paypal:</strong> payment@company.com <br>
                            <strong> Card ayment we accept:</strong> Visa, Mastercard
                          </h6>
                        </div>
                        <div class="content-2">
                          <h5 class="mb-2">Terms & Conditions</h5>
                          <h6>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry. Lorem
                            Ipsum has been the industry's <br> standard dummy text ever since the 1500s, when an
                            unknown</h6>
                        </div>
                      </div>
                      <div class="right">
                        <div class="bg-tb-bottom">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Sub Total</td>
                                <td>4500</td>
                              </tr>
                              <tr>
                                <td>Discount(5%)</td>
                                <td>225</td>
                              </tr>
                              <tr>
                                <td class="remove-bo"><b>Total</b></td>
                                <td class="remove-bo"><b>4275</b></td>
                              </tr>
                            </tbody>
                          </table>


                        </div>
                        <div class="alert">
                          <p>*This quotation does not required any seal or signature </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="button-wrapper align-right mt-3">
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Cancel</button>
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Save & Send Email</button>
                    <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Orders Content -->
          <div class="tab-pane fade show " id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>Orders List <span>06</span></h4>
                  <div class="d-flex align-center">
                    <h6>Show</h6>
                    <div class="form-group ms-2">

                      <div class="dropdown">
                        <span><i class="bi bi-chevron-down"></i></span>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          50
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">10</a></li>
                          <li><a class="dropdown-item" href="#">20</a></li>
                          <li><a class="dropdown-item" href="#">30</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="inner-addon right-addon search_md ms-2">
                      <i class="bi bi-search"></i>
                      <input type="text" class="form-control" placeholder="Search" />
                    </div>
                    <button type="button" class="btn btn-secondary ms-2">Create</button>
                  </div>
                </div>
                <div class="card-body fo-padding">
                  <div class="table-wrapper">
                    <table id="tb-border-radius" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Order ID</th>
                          <th>Date</th>
                          <th>Order Total</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>#009-01</td>
                          <td>08 Oct 2022 $ </td>
                          <td>$5000</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>#009-01</td>
                          <td>08 Oct 2022 $ </td>
                          <td>$5000</td>
                          <td class="text-primary">Waiting for Approval </td>
                        </tr>
                      </tbody>
                    </table>


                  </div>

                  <div class="fo-flx-center">
                    <h6>Showing 50 of 200</h6>
                    <nav aria-label="Page navigation example">

                      <ul class="pagination justify-content-end">
                        <li class="page-item">
                          <a class="page-link"> <span><i class="bi bi-chevron-left"></i></span> Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next <span><i class="bi bi-chevron-right"></i></span></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center ">
                  <h4>Order Detail View </h4>
                  <div class="button-wrapper mt-3 fo-flx-right align-center">
                    <div class="fo-tooltip" data-bs-toggle="tooltip" title="Lorem Ipsum has been the industry's standard">

                      <h6 class="text-primary">Waiting for Approval</h6>
                    </div>
                    <button type="button" class="btn btn-secondary mr1">Create</button>
                    <button type="button" class="btn btn-secondary-light">Edit</button>
                  </div>


                </div>
                <div class="divider w-100 remove-padding"></div>
                <div class="card-body fo-padding">
                  <div class="brand-wrapper fo-flx-bottom">
                    <div class="left fo-flx-top">
                      <div class="img-sec mr3">
                        <img src="img/br1.png" alt="">
                      </div>
                      <div class="casualities">
                        <h1 class="mb-3">Blue Bridge</h1>
                        <div class="details fo-flx">
                          <h6 class="st-wi">ORDER NO </h6>
                          <h6>#009-01</h6>
                        </div>
                        <div class="details fo-flx">
                          <h6 class="st-wi">ORDER DATE</h6>
                          <h6>Jul 19,2022</h6>
                        </div>
                      </div>
                    </div>
                    <div class="right">
                      <p>TOTAL</p>
                      <h1 class="big-total"> €4,275 </h1>
                    </div>
                  </div>
                  <div class="divider w-100 mb-3"></div>
                  <div class="address-wrapper fo-flx-top mb-4">
                    <div class="left">
                      <p>Supplier Address</p>
                      <h5>Richard Welsh</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                    <div class="right">
                      <p>Delivery Address</p>
                      <h5>Amelia</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                  </div>
                  <div class="table-wrapper">
                    <table id="tb-border-radius" class="table">
                      <thead>
                        <tr>
                          <th class="fo-bo-topl-bottoml">PRODUCT NAME</th>
                          <th>SKU ID</th>
                          <th>QTY</th>
                          <th>PRICE/QTY</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>

                      </tbody>
                    </table>

                    <div class="table-footer fo-flx-top mt-4">
                      <div class="left">
                        <div class="content-1 mb-3">
                          <h5 class="mb-2">Payment Method</h5>
                          <h6> <strong>Paypal:</strong> payment@company.com <br>
                            <strong> Card ayment we accept:</strong> Visa, Mastercard
                          </h6>
                        </div>
                        <div class="content-2">
                          <h5 class="mb-2">Terms & Conditions</h5>
                          <h6>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry. Lorem
                            Ipsum has been the industry's <br> standard dummy text ever since the 1500s, when an
                            unknown</h6>
                        </div>
                      </div>
                      <div class="right">
                        <div class="bg-tb-bottom">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Sub Total</td>
                                <td>4500</td>
                              </tr>
                              <tr>
                                <td>Discount(5%)</td>
                                <td>225</td>
                              </tr>
                              <tr>
                                <td class="remove-bo"><b>Total</b></td>
                                <td class="remove-bo"><b>4275</b></td>
                              </tr>
                            </tbody>
                          </table>


                        </div>
                        <div class="alert">
                          <p>*This quotation does not required any seal or signature </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="button-wrapper align-right mt-3">
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Cancel</button>
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Save & Send Email</button>
                    <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Invoice Content -->
          <div class="tab-pane fade show " id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>Invoices <span>06</span></h4>
                  <div class="d-flex align-center">
                    <h6>Show</h6>
                    <div class="form-group ms-2">

                      <div class="dropdown">
                        <span><i class="bi bi-chevron-down"></i></span>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          50
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">10</a></li>
                          <li><a class="dropdown-item" href="#">20</a></li>
                          <li><a class="dropdown-item" href="#">30</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="inner-addon right-addon search_md ms-2">
                      <i class="bi bi-search"></i>
                      <input type="text" class="form-control" placeholder="Search" />
                    </div>
                    <button type="button" class="btn btn-secondary ms-2">Generate Invoice</button>
                  </div>
                </div>
                <div class="card-body fo-padding">

                  <div class="list-view fo-flx-top">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-primary">
                              <p> <i class="bi bi-hourglass-top"></i> Waiting for Approval</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>

                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                              <label class="form-check-label" for="flexCheckDefault1">
                                Generate Invoice
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-success">
                              <p> <i class="bi bi-check-circle-fill"></i> Approved</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>

                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                              <label class="form-check-label" for="flexCheckDefault2">
                                Generate Invoice
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-hold">
                              <p> <i class="bi bi-stopwatch-fill"></i> Hold</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>

                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                              <label class="form-check-label" for="flexCheckDefault3">
                                Generate Invoice
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-primary">
                              <p> <i class="bi bi-hourglass-top"></i> Waiting for Approval</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>

                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                              <label class="form-check-label" for="flexCheckDefault4">
                                Generate Invoice
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-success">
                              <p> <i class="bi bi-check-circle-fill"></i> Approved</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>

                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                              <label class="form-check-label" for="flexCheckDefault5">
                                Generate Invoice
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card custom-list">
                          <div>
                            <div class="quote-message bo-hold">
                              <p> <i class="bi bi-stopwatch-fill"></i> Hold</p>

                            </div>
                            <h1 class="big-total"> €4,275 </h1>
                            <p> <strong> Id: </strong> COMNXT-Q-01 </p>

                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                              <label class="form-check-label" for="flexCheckDefault6">
                                Generate Invoice
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>


                    </div>

                  </div>
                  <div class="fo-flx-center">
                    <h6>Showing 50 of 200</h6>
                    <nav aria-label="Page navigation example">

                      <ul class="pagination justify-content-end">
                        <li class="page-item">
                          <a class="page-link"> <span><i class="bi bi-chevron-left"></i></span> Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next <span><i class="bi bi-chevron-right"></i></span></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>

              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center ">
                  <h4>Invoice Detail View </h4>
                  <div class="button-wrapper mt-3 fo-flx-right align-center">


                    <button type="button" class="btn btn-secondary-light">Edit</button>
                  </div>


                </div>
                <div class="divider w-100 remove-padding"></div>
                <div class="card-body fo-padding">

                  <div class="brand-wrapper fo-flx-bottom">
                    <div class="left fo-flx-top">
                      <div class="img-sec mr3">
                        <img src="img/br1.png" alt="">
                      </div>
                      <div class="casualities">
                        <h1 class="mb-3">Blue Bridge</h1>
                        <div class="details fo-flx">
                          <h6 class="st-wi">INVOICE NO </h6>
                          <h6>#009-01</h6>
                        </div>
                        <div class="details fo-flx">
                          <h6 class="st-wi">INVOICE DATE</h6>
                          <h6>Jul 19,2022</h6>
                        </div>
                      </div>
                    </div>
                    <div class="right">
                      <div class="details inv-detail-fl-right">
                        <div class="fo-flx-right">
                          <h6 class="st-wi mr2">ORDER NO </h6>
                          <h6>#009-01</h6>
                        </div>
                      </div>
                      <p>TOTAL</p>
                      <h1 class="big-total"> €4,275 </h1>
                    </div>
                  </div>
                  <div class="divider w-100 mb-3"></div>
                  <div class="address-wrapper fo-flx-top mb-4">
                    <div class="left">
                      <p>Supplier Address</p>
                      <h5>Richard Welsh</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                    <div class="right">
                      <p>Delivery Address</p>
                      <h5>Amelia</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                  </div>
                  <div class="table-wrapper">
                    <table id="tb-border-radius" class="table">
                      <thead>
                        <tr>
                          <th class="fo-bo-topl-bottoml">PRODUCT NAME</th>
                          <th>SKU ID</th>
                          <th>QTY</th>
                          <th>PRICE/QTY</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>

                      </tbody>
                    </table>

                    <div class="table-footer fo-flx-top mt-4">
                      <div class="left">
                        <div class="content-1 mb-3">
                          <h5 class="mb-2">Payment Method</h5>
                          <h6> <strong>Paypal:</strong> payment@company.com <br>
                            <strong> Card ayment we accept:</strong> Visa, Mastercard
                          </h6>
                        </div>
                        <div class="content-2">
                          <h5 class="mb-2">Terms & Conditions</h5>
                          <h6>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry. Lorem
                            Ipsum has been the industry's <br> standard dummy text ever since the 1500s, when an
                            unknown</h6>
                        </div>
                      </div>
                      <div class="right">
                        <div class="bg-tb-bottom">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Sub Total</td>
                                <td></td>
                                <td>4500</td>

                              </tr>
                              <tr>
                                <td>Tax(%)</td>
                                <td>16</td>
                                <td>1000</td>
                              </tr>
                              <tr>
                                <td>Discount(5%)</td>
                                <td>5</td>
                                <td>500</td>
                              </tr>
                              <tr>
                                <td>Advance Received</td>
                                <td></td>
                                <td>500</td>

                              </tr>
                              <tr>
                                <td>Credit Period</td>
                                <td></td>
                                <td>30</td>

                              </tr>
                              <tr>
                                <td class="remove-bo"><b>Total</b></td>
                                <td class="remove-bo"></td>
                                <td class="remove-bo"><b>4275</b></td>
                              </tr>
                            </tbody>
                          </table>


                        </div>
                        <div class="alert">
                          <p>*This quotation does not required any seal or signature </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="button-wrapper align-right mt-3">
                    <button type="button" class="btn btn-secondary mr1 btn-sm">View Payment Plan</button>
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Create Payment Paln</button>
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Save & Send Email</button>
                    <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Invoice Content -->
          <div class="tab-pane fade show " id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>SMS</h4>
                  <div>
                    <h6 class="fo-flx-center">Sales Executive: <p>Liam Olivia</p> <span><img src="img/prof-1.png" alt=""></span> </h6>
                  </div>
                </div>
                <div class="card-body fo-padding">

                  <div class="list-view fo-flx-top">
                    <div class="card custom-list inv">
                      <div class="fo-flx-js-sb mb-1">
                        <h1 class="big-total cl-b"> €4,275 </h1>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                      </div>
                      <div class="divider remove-padding"></div>
                      <div class="fo-flx-js-sb mt-2">
                        <p style="color: #3E3E3E;"><strong>Order Id:</strong> <br> CNXT008</p>
                        <div class="quote-message bo-primary">
                          <p>Waiting for Approval</p>
                        </div>
                      </div>

                    </div>
                    <div class="card custom-list inv">
                      <div class="fo-flx-js-sb mb-1">
                        <h1 class="big-total cl-b"> €4,275 </h1>
                        <!-- <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div> -->

                      </div>
                      <div class="divider remove-padding"></div>
                      <div class="fo-flx-js-sb mt-2">
                        <p style="color: #3E3E3E;"><strong>Order Id:</strong> <br> CNXT008</p>
                        <img src="img/pdf.svg" alt="">
                      </div>

                    </div>
                    <div class="card custom-list inv">
                      <div class="fo-flx-js-sb mb-1">
                        <h1 class="big-total cl-b"> €4,275 </h1>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                      </div>
                      <div class="divider remove-padding"></div>
                      <div class="fo-flx-js-sb mt-2">
                        <p style="color: #3E3E3E;"><strong>Order Id:</strong> <br> CNXT008</p>
                        <div class="quote-message bo-hold">
                          <p>Hold</p>
                        </div>
                      </div>

                    </div>
                    <div class="card custom-list inv">
                      <div class="fo-flx-js-sb mb-1">
                        <h1 class="big-total cl-b"> €4,275 </h1>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                      </div>
                      <div class="divider remove-padding"></div>
                      <div class="fo-flx-js-sb mt-2">
                        <p style="color: #3E3E3E;"><strong>Order Id:</strong> <br> CNXT008</p>
                        <div class="quote-message bo-success">
                          <p>Approved</p>
                        </div>
                      </div>

                    </div>
                    <div class="card custom-list inv">
                      <div class="fo-flx-js-sb mb-1">
                        <h1 class="big-total cl-b"> €4,275 </h1>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                      </div>
                      <div class="divider remove-padding"></div>
                      <div class="fo-flx-js-sb mt-2">
                        <p style="color: #3E3E3E;"><strong>Order Id:</strong> <br> CNXT008</p>
                        <div class="quote-message bo-primary">
                          <p>Waiting for Approval</p>
                        </div>
                      </div>

                    </div>
                    <div class="card custom-list inv">
                      <div class="fo-flx-js-sb mb-1">
                        <h1 class="big-total cl-b"> €4,275 </h1>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                      </div>
                      <div class="divider remove-padding"></div>
                      <div class="fo-flx-js-sb mt-2">
                        <p style="color: #3E3E3E;"><strong>Order Id:</strong> <br> CNXT008</p>
                        <div class="quote-message bo-primary">
                          <p>Waiting for Approval</p>
                        </div>
                      </div>

                    </div>


                  </div>
                  <div class="fo-flx-center">
                    <h6>Showing 50 of 200</h6>
                    <nav aria-label="Page navigation example">

                      <div class="button-wrapper mt-3 fo-flx-right align-center">

                        <button type="button" class="btn btn-secondary mr1 btn-sm">Cancel</button>
                        <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
                      </div>
                  </div>
                </div>
              </div>

              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center ">
                  <h4>Invoice Detail View </h4>
                  <div class="button-wrapper mt-3 fo-flx-right align-center">


                    <button type="button" class="btn btn-secondary-light">Edit</button>
                  </div>


                </div>
                <div class="divider w-100 remove-padding"></div>
                <div class="card-body fo-padding">

                  <div class="brand-wrapper fo-flx-bottom">
                    <div class="left fo-flx-top">
                      <div class="img-sec mr3">
                        <img src="img/br1.png" alt="">
                      </div>
                      <div class="casualities">
                        <h1 class="mb-3">Blue Bridge</h1>
                        <div class="details fo-flx">
                          <h6 class="st-wi">INVOICE NO </h6>
                          <h6>#009-01</h6>
                        </div>
                        <div class="details fo-flx">
                          <h6 class="st-wi">INVOICE DATE</h6>
                          <h6>Jul 19,2022</h6>
                        </div>
                      </div>
                    </div>
                    <div class="right">
                      <div class="details inv-detail-fl-right">
                        <div class="fo-flx-right">
                          <h6 class="st-wi mr2">ORDER NO </h6>
                          <h6>#009-01</h6>
                        </div>
                      </div>
                      <p>TOTAL</p>
                      <h1 class="big-total"> €4,275 </h1>
                    </div>
                  </div>
                  <div class="divider w-100 mb-3"></div>
                  <div class="address-wrapper fo-flx-top mb-4">
                    <div class="left">
                      <p>Supplier Address</p>
                      <h5>Richard Welsh</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                    <div class="right">
                      <p>Delivery Address</p>
                      <h5>Amelia</h5>
                      <h6>83 Park Row, Egbury, United Kingdom <br>
                        amelia@abccompany.com <br>
                        +44 078 7102 4793</h6>
                    </div>
                  </div>
                  <div class="table-wrapper">
                    <table id="tb-border-radius" class="table">
                      <thead>
                        <tr>
                          <th class="fo-bo-topl-bottoml">PRODUCT NAME</th>
                          <th>SKU ID</th>
                          <th>QTY</th>
                          <th>PRICE/QTY</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td> <strong> PowerHouse 100 mmAngle Grinder 670W
                              PHAG100 with 6 <strong> </td>
                          <td>W3089GTA</td>
                          <td>30</td>
                          <td>1500</td>
                        </tr>

                      </tbody>
                    </table>

                    <div class="table-footer fo-flx-top mt-4">
                      <div class="left">
                        <div class="content-1 mb-3">
                          <h5 class="mb-2">Payment Method</h5>
                          <h6> <strong>Paypal:</strong> payment@company.com <br>
                            <strong> Card ayment we accept:</strong> Visa, Mastercard
                          </h6>
                        </div>
                        <div class="content-2">
                          <h5 class="mb-2">Terms & Conditions</h5>
                          <h6>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry. Lorem
                            Ipsum has been the industry's <br> standard dummy text ever since the 1500s, when an
                            unknown</h6>
                        </div>
                      </div>
                      <div class="right">
                        <div class="bg-tb-bottom">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Sub Total</td>
                                <td></td>
                                <td>4500</td>

                              </tr>
                              <tr>
                                <td>Tax(%)</td>
                                <td>16</td>
                                <td>1000</td>
                              </tr>
                              <tr>
                                <td>Discount(5%)</td>
                                <td>5</td>
                                <td>500</td>
                              </tr>
                              <tr>
                                <td>Advance Received</td>
                                <td></td>
                                <td>500</td>

                              </tr>
                              <tr>
                                <td>Credit Period</td>
                                <td></td>
                                <td>30</td>

                              </tr>
                              <tr>
                                <td class="remove-bo"><b>Total</b></td>
                                <td class="remove-bo"></td>
                                <td class="remove-bo"><b>4275</b></td>
                              </tr>
                            </tbody>
                          </table>


                        </div>
                        <div class="alert">
                          <p>*This quotation does not required any seal or signature </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="button-wrapper align-right mt-3">
                    <button type="button" class="btn btn-secondary mr1">View Payment Plan</button>
                    <button type="button" class="btn btn-secondary mr1">Create Payment Paln</button>
                    <button type="button" class="btn btn-secondary mr1">Save & Send Email</button>
                    <button type="button" class="btn btn-secondary-light">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- SMS Content -->
          <div class="tab-pane fade show " id="sms" role="tabpanel" aria-labelledby="sms-tab">
            <div class="row">
              <div class="card remove-padding">
                <div class="crm-cd-header fo-flx-center bo-bottom">
                  <h4>SMS</h4>
                  <div>
                    <h6 class="fo-flx-center">Sales Executive: <p>Liam Olivia</p> <span><img src="img/prof-1.png" alt=""></span> </h6>
                  </div>
                </div>
                <div class="card-body fo-padding">
                  <div class="comments remove-margin">
                    <h6>Send Message</h6>
                    <textarea name="" id="" cols="30" rows="10"></textarea>

                    <div class="button-wrapper mt-3 fo-flx-right align-center">

                      <button type="button" class="btn btn-secondary mr1 btn-sm">Cancel</button>
                      <button type="button" class="btn btn-secondary-light btn-sm">Save</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- create user offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Add User</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="profile-upload">
          <img src="img/prof-big.png" alt="">
          <div class="prof-ess">
            <div class="settings">
              <div>
                <i class="bi bi-trash3 mr1"></i>
                <i class="bi bi-camera-fill"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Basic Detail
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">


                <div class="form-flex fo-flx-js-sb">
                  <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="shadow-cs">
                  </div>
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text">
                </div>
                <div class="form-group">
                  <label for="">Mobile</label>
                  <input type="text">
                </div>
                <div class="form-group">
                  <label for="">Designation</label>
                  <input type="text">
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Company Detail
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="form-group">
                  <label for="">Company Name</label>
                  <input type="text">
                </div>

                <div class="form-group">
                  <label for="">About the Deal</label>
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Status</label>
                  <div class="dropdown">
                    <span><i class="bi bi-chevron-down"></i></span>
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="form-flex fo-flx-js-sb">
                  <div class="form-group cutom-wi">
                    <label for="">Industry</label>
                    <input type="text">
                  </div>
                  <div class="form-group">
                    <label for="">No.of Employees</label>
                    <input type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Lead Source</label>
                  <input type="text">
                </div>
                <div class="form-group">
                  <label for="">Deal Value</label>
                  <input type="text">
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text">
                </div>
                <div class="form-group">
                  <label for="">Street</label>
                  <input type="text">
                </div>
                <div class="form-flex fo-flx-js-sb">
                  <div class="form-group">
                    <label for="">State/ Province</label>
                    <div class="dropdown">
                      <span><i class="bi bi-chevron-down"></i></span>
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        State/ Province
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Country</label>
                    <div class="dropdown">
                      <span><i class="bi bi-chevron-down"></i></span>
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        State/ Province
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="offcanvas-footer align-right">

          <button type="button" class="btn btn-primary ms-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Save</button>
        </div>
      </div>

    </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
</div>

<?php include('common/footer.php'); ?>