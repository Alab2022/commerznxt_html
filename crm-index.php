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
              <button type="button" class="btn btn-primary ms-2">Primary</button>
            </div>
            <div>A</div>
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

      </div>
    </div>


  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
</div>

<?php include('common/footer.php'); ?>