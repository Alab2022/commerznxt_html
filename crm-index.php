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
        <div class="card">
          <div class="card-body">
            <!-- Search Contacts -->
            <div class="d-flex">
              <div class="inner-addon right-addon search_md">
                <i class="bi bi-search"></i>
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="button" class="btn btn-primary ms-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add</button>
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
          <div class="card-body">
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
        <ul class="nav nav-pills custom mt-4" id="myTabPills" role="tablist">
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
              <div class="card">
                <div class="card-body">

                  <div class="page-content page-container" id="page-content">
                    <div class="padding">
                      <div class="row">

                        <div class="col-lg-12">
                          <p>Basic Timeline</p>
                          <div class="timeline p-4 mb-4">
                            <div class="tl-item">
                              <div class="tl-dot b-email"><i class="bi bi-envelope-open-fill"></i></div>
                              <div class="tl-content">
                                <div class="">Email has been sent by <b>David (Role:Sales Exec1)</b> </div>
                                <div class="tl-date text-muted mt-1">13 june 18</div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-primary"><i class="bi bi-envelope-open-fill"></i></div>
                              <div class="tl-content">
                                <div class="">Do you know how Google search works.</div>
                                <div class="tl-date text-muted mt-1">45 minutes ago</div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-danger"><i class="bi bi-envelope-open-fill"></i></div>
                              <div class="tl-content">
                                <div class="">Thanks to <a href="#" data-abc="true">@apple</a>, for iphone 7</div>
                                <div class="tl-date text-muted mt-1">1 day ago</div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-danger"><i class="bi bi-envelope-open-fill"></i></div>
                              <div class="tl-content">
                                <div class="">Order placed <a href="#" data-abc="true">@eBay</a> you will get your products</div>
                                <div class="tl-date text-muted mt-1">1 Week ago</div>
                              </div>
                            </div>
                            <div class="tl-item">
                              <div class="tl-dot b-warning"><i class="bi bi-envelope-open-fill"></i></div>
                              <div class="tl-content">
                                <div class="">Learn how to use <a href="#" data-abc="true">Google Analytics</a> to discover vital information about your readers.</div>
                                <div class="tl-date text-muted mt-1">3 days ago</div>
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
                  <h4>All Activities</h4>
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
                      <button type="button" class="btn btn-secondary mr1">Cancel</button>
                      <button type="button" class="btn btn-secondary-light">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Email Content -->
          <div class="tab-pane fade show " id="email" role="tabpanel" aria-labelledby="email-tab">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  email
                </div>
              </div>
            </div>
          </div>

          <!-- Quotes Content -->
          <div class="tab-pane fade show " id="quotes" role="tabpanel" aria-labelledby="quotes-tab">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  quotes
                </div>
              </div>
            </div>
          </div>

          <!-- Orders Content -->
          <div class="tab-pane fade show " id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  orders
                </div>
              </div>
            </div>
          </div>

          <!-- Invoice Content -->
          <div class="tab-pane fade show " id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  invoice
                </div>
              </div>
            </div>
          </div>

          <!-- SMS Content -->
          <div class="tab-pane fade show " id="sms" role="tabpanel" aria-labelledby="sms-tab">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  SMS
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
                    <input type="text">
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