<?php include('common/head.php'); ?>  
<?php include('common/header.php'); ?>     
    <div class="container-fluid remove-margin bg-white">
      <div class="db-top-wrapper">
        <div class="left">                   
            <h4>Customer Status Overview</h4>    
            <ul class="breadcrumb">
                <li><a href="#">CRM</a></li>
                <li><a href="#">Customer Status Overview</a></li>
                <li>Customer Detail</li>               
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
                <div class="d-flex">
                <div class="inner-addon right-addon search_md">
        <i class="bi bi-search"></i>
          <input type="text" class="form-control" placeholder="Search" />
        </div>
        <button type="button" class="btn btn-primary ms-2">Primary</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              This is some text within a card body.
            </div>
          </div>

          </div>
        </div>


      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
    </div>

    <?php include('common/footer.php'); ?> 

  