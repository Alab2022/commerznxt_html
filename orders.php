<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Orders</h4>
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

      <button class="btn btn-primary ms-2"><span><img src="img/create.svg" alt=""></span> Create</button>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
<div class="card card-pd">
          <!-- <div class="crm-cd-header fo-flx-center remove-padding mb-3">
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

            </div>
          </div> -->
          <div class="card-body remove-padding">
          <div class="table-wrapper">
                    <table id="tb-border-radius" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Order ID</th>
                          <th>Date</th>
                          <th>Order Total</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>#009-01</td>
                          <td>08 Oct 2022 $ </td>
                          <td>$5000</td>
                          <td>-</td>
                          <td><a href="order-view.php"><i class="bi bi-eye-fill"></i></a></td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>#009-01</td>
                          <td>08 Oct 2022 $ </td>
                          <td>$5000</td>
                          <td class="text-primary">Waiting for Approval </td>
                          <td><i class="bi bi-eye-fill"></i></td>
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