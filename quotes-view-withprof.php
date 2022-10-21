<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>Quote</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Task</a></li>
      </ul>
    </div>
    <div class="right align-center">
      <!-- <h6 class="text-warning">Waiting for Approval</h6>
      <button type="button" class="btn btn-primary ms-2 bg-drk-blue"> <span><img src="img/edit.svg" alt=""></span> Edit</button> -->

      <button class="btn btn-primary ms-2"><i class="bi bi-arrow-left"></i> Back</button>
    </div>
  </div>
</div>
<div class="container-fluid page-inner">
  <div class="row">
    <div class="col-md-3">
      <div class="card sticky">
        <div class="card-body">
          <div class="d-flex radio-custom">
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

          <div class="inner-addon right-addon search_md cus-wi">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Search" />
          </div>

          <div class="card-body card-pad-avatar remove-padding">

            <div class="db-top-wrapper">
              <div class="left outer-wi">
                <div class="profile-sec">
                  <img src="img/prof-big.png" alt="">
                </div>
                <div class="content">
                  <h3>Amelia</h3>
                  <h6>Sales Executive</h6>
                </div>
                <div class="divider remove-padding mt-3"></div>
                <div class="content">
                  <div class="casualities">
                    <div class="content d-flex mb-3">
                      <span class="mr1"><img src="img/mail.svg" alt=""></span>
                      <div>
                        <p>Email</p>
                        <h4>test@gmail.com</h4>
                      </div>
                    </div>
                    <div class="content d-flex mb-3">
                      <span class="mr1"><img src="img/phone.svg" alt=""></span>
                      <div>
                        <p>Phone</p>
                        <h4>64578 76476</h4>
                      </div>
                    </div>
                    <div class="content d-flex mb-3">
                      <span class="mr1"><img src="img/location.svg" alt=""></span>
                      <div>
                        <p>Address</p>
                        <h4>83 Park Row, Egbury, United Kingdom
                          richard@abccompany.com
                          +44 078 7102 4793</h4>
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
    <div class="col-md-9">
      <div class="card remove-padding">
        <!-- <div class="crm-cd-header fo-flx-center ">
                  <h4>Quote Detail View </h4>
                  <div class="button-wrapper mt-3 fo-flx-right align-center">
                    <div class="fo-tooltip" data-bs-toggle="tooltip" title="Lorem Ipsum has been the industry's standard">

                      <h6 class="text-green">Approved <span><i class="bi bi-info-circle-fill"></i></span></h6>
                    </div>
                    <button type="button" class="btn btn-secondary mr1 btn-sm">Create</button>
                    <button type="button" class="btn btn-secondary-light btn-sm">Edit</button>
                  </div>


                </div> -->
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
</div>
</div>

<?php include('common/footer.php'); ?>