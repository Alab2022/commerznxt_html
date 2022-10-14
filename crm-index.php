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
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content tab-page" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">1</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
</div>

    <?php include('common/footer.php'); ?> 

  