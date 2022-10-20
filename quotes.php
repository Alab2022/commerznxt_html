<?php include('common/head.php'); ?>
	<?php include('common/header.php'); ?>
		<div class="container-fluid remove-margin bg-white">
			<div class="db-top-wrapper">
				<div class="left">
					<h4>My Task</h4>
					<ul class="breadcrumb">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Task</a></li>
					</ul>
				</div>
				<div class="right">
        <div class="form-group ms-2">


</div>
<div class="inner-addon right-addon search_md ms-2">
<i class="bi bi-search"></i>
<input type="text" class="form-control" placeholder="Search" />
</div>
          <button type="button" class="btn btn-primary ms-2 filter-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-funnel-fill"></i></button>

					<button class="btn btn-primary ms-2"><i class="bi bi-file-earmark-arrow-up-fill"></i> Export to CSV</button>
				</div>
			</div>
		</div>
		<div class="container-fluid page-inner">
			<div class="row">
               <div class="col-md-3"><div class="card custom-list">
                 <div>
                 <div class="quote-message bo-primary">
                   <p> <i class="bi bi-hourglass-top"></i> Waiting for Approval</p>
                   
                 </div>
                   <h1 class="big-total"> €4,275 </h1>
                   <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                   <div class="flag_general mt-2 me-2">Qty: 100</div>
                   <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                 </div>
                 
               </div></div>

                <div class="col-md-3"><div class="card custom-list">
                 <div>
                 <div class="quote-message bo-success">
                   <p> <i class="bi bi-check-circle-fill"></i> Approved</p>
                   
                 </div>
                   <h1 class="big-total"> €4,275 </h1>
                   <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                   <div class="flag_general mt-2 me-2">Qty: 100</div>
                   <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                 </div>
                 
               </div></div>
               <div class="col-md-3"><div class="card custom-list">
                 <div>
                 <div class="quote-message bo-hold">
                   <p> <i class="bi bi-hourglass-top"></i> Hold</p>
                   
                 </div>
                   <h1 class="big-total"> €4,275 </h1>
                   <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                   <div class="flag_general mt-2 me-2">Qty: 100</div>
                   <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                 </div>
                 
               </div></div>
               <div class="col-md-3"><div class="card custom-list">
                 <div>
                 <div class="quote-message bo-primary">
                   <p> <i class="bi bi-hourglass-top"></i> Waiting for Approval</p>
                   
                 </div>
                   <h1 class="big-total"> €4,275 </h1>
                   <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                   <div class="flag_general mt-2 me-2">Qty: 100</div>
                   <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                 </div>
                 
               </div></div>

                <div class="col-md-3"><div class="card custom-list">
                 <div>
                 <div class="quote-message bo-success">
                   <p> <i class="bi bi-check-circle-fill"></i> Approved</p>
                   
                 </div>
                   <h1 class="big-total"> €4,275 </h1>
                   <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                   <div class="flag_general mt-2 me-2">Qty: 100</div>
                   <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                 </div>
                 
               </div></div>
               <div class="col-md-3"><div class="card custom-list">
                 <div>
                 <div class="quote-message bo-hold">
                   <p> <i class="bi bi-hourglass-top"></i> Hold</p>
                   
                 </div>
                   <h1 class="big-total"> €4,275 </h1>
                   <p> <strong> Id: </strong> COMNXT-Q-01 </p>
                   <div class="flag_general mt-2 me-2">Qty: 100</div>
                   <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTask"><i class="bi bi-eye-fill"></i> View </button>
                 </div>
                 
               </div></div>

			</div>

       <!-- create user offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Add User</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      

    </div>
		</div>
        
		<?php include('common/footer.php'); ?>