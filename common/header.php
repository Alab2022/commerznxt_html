<nav class="navbar navbar-expand-lg bo-bottom remove-padding shadow-header">
  <div class="container-fluid bg-white">
    <a class="navbar-brand" href="dashboard-se.php"><img src="img/logo-main.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr5 main">
        <li class="nav-item inner dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">CRM <span><svg xmlns="http://www.w3.org/2000/svg" width="8.015" height="4.758" viewBox="0 0 8.015 4.758">
            <path id="_9042707_nav_arrow_down_icon_1_" data-name="9042707_nav_arrow_down_icon (1)" d="M6,9l2.947,2.947L11.894,9" transform="translate(-4.939 -7.939)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
          </svg></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="crm-index.php">Customer</a></li>
            <li><a class="dropdown-item" href="#">Company</a></li>
            <li><a class="dropdown-item" href="quotes.php">Quotes</a></li>
            <li><a class="dropdown-item" href="orders.php">Order</a></li>
            <li><a class="dropdown-item" href="invoice.php">Invoice</a></li>
          </ul>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="my-sales-analysis.php">My Sales Analysis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="task.php">Task</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="nav-right-content fo-flx">
          <div class="img-wr">
            <img src="img/notification.svg" alt="">
          </div>
          <div class="content fo-flx">
            <div class="prof fo-flx">
              <div class="dd">
                <p>Welcome</p>
                <h6>Richard Welsh</h6>
              </div>       
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><img src="img/prof-1.png" alt=""></a>
                <ul class="dropdown-menu last">
                <li><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#myprofile" aria-controls="offcanvasRight"><i class="bi bi-person-circle"></i> My Profile</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-card-text"></i>Notes</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-journal-arrow-up"></i>Feeds</a></li>
                  <li><a class="dropdown-item" href="login.html"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                </ul>
              </li>
              
            </div>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav>
<!-- Add User offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="myprofile" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">My Profile</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">


    <div class="accordion" id="accordionExample">

      <div class="accordion-item">


        <div class="accordion-body">
          <div class="d-flex">
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
            <div class="ms-3">
              <h5>User Image</h5>
              <p class="text-muted">Max Image Size 10MB with Jpg, png</p>
              <!-- <h5>Status</h5>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
              </div> -->
            </div>
          </div>
          <div class="form-flex fo-flx-js-sb">
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" class="shadow-cs" readonly placeholder="Stuart">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" class="shadow-cs" readonly placeholder="Binny">
            </div>
          </div>
          <div class="form-group">
            <label for="">Designation</label>
            <input type="text" readonly placeholder="Manager">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" readonly placeholder="sample@gmail.com">
          </div>
          <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" readonly placeholder="96463 65365">
          </div>
          <div class="form-group mb-4">
            <label for="">Created Date</label>
            <input type="text" readonly placeholder="2nd sep,2022">
          </div>

          <div class="divider remove-padding mt-3 mb-3"></div>
          <div class="password-wrp">
            <h5 class="mb-3 mt-2">Change Password</h5>
            <div class="form-group">
              <label for="">Enter the Current Password</label>
              <input type="text">
            </div>
            <div class="form-group">
              <label for="">New Password</label>
              <input type="password">
            </div>
            <div class="form-group">
              <label for="">Confirm New Password</label>
              <input type="password">
            </div>
          </div>


        </div>

      </div>

    </div>
  </div>
  <div class="offcanvas-footer fil-pd">
    <button type="button" class="btn btn-secondary sec-custom">Cancel</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#ecomfilter" aria-controls="offcanvasRight">Save</button>
  </div>
</div>