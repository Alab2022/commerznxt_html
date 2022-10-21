<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Invoice</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Task</a></li>
      </ul>
    </div>
    <div class="right">
      <div class="form-group ms-2 d-flex align-center">
        <h6 class="mr1" style="margin-bottom: 0;">Show</h6>
        <div class="dropdown">
          <span><i class="bi bi-chevron-down"></i></span>
          <button class="btn btn-secondary dropdown-toggle fl-dd" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
      <button type="button" class="btn btn-primary ms-2 filter-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-funnel-fill"></i></button>

      <a href="invoice-view.php" class="btn btn-secondary ms-2"><span><img src="img/ad-invoice.svg" alt=""></span> Generate Invoice</a>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">

  <div class="row">
    <div class="col-md-3">
      <div class="card custom-list">
        <div>
          <div class="quote-message bo-primary">
            

          </div>
          <h1 class="big-total"> €4,275 </h1>
          <p> <strong> Id: </strong> COMNXT-Q-01 </p>

          <div class="mt-4">
           
            <button class="btn btn-light btn-sm"><i class="bi bi-file-earmark-pdf-fill pdf"></i> View PDF</button>
          </div>
        </div>

      </div>
    </div>
    <div class="col-md-3">
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
    <div class="col-md-3">
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
    <div class="col-md-3">
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
    <div class="col-md-3">
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
    <div class="col-md-3">
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



  <!-- create user offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Choose Filter</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
<div class="offcanvas-body">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>
        
        <div class="mb-3">
        <div class="date-picker">
          <label for="">Date</label>
            <form action="/action_page.php">
              <input type="date" id="birthday" name="birthday">
            </form>
          </div>
        </div>
        <div class="mb-3">
          <label for="">User Type</label>
          <div class="d-flex radio-custom mt-3">
      <div class="form-check me-3 ">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            General
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Customer
        </label>
        </div>
        </div>
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Country</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">State/Provice</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

  </div>
  <div class="offcanvas-footer fil-pd">
  <button type="button" class="btn btn-secondary sec-custom">Clear</button>
  <button type="button" class="btn btn-primary ms-2 ">Filter</button>
  </div>
</div>
</div>
<?php include('common/footer.php'); ?>