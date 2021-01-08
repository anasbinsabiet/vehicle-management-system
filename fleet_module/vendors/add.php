<?php
include_once "../navbar.php";

include_once "../sidebar.php";
$id = 0;

if (isset($_GET['id'])) {
$id = $_GET['id'];
}

// echo $id;
?>



<?php
include_once "../footer.php";
?>


<div class="container">

  <div class="col-sm-9 mx-auto">
    
    <div class="card">
<span id="alert_action"></span>

      <div class="card-body">



        <div class="row">

          <div class="col-md-6">
            <h4>Details</h4>
          </div>
          <div class="col-md-6">
            <div class="float-right">
              <a href="index.php">
                <button class="btn btn-xs btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Back</button>
              </a>
            </div>
          </div>
        </div>
        <form method="POST" id="vendors" class="vendors">

        <div class="form-group">

          <label for="name">Name *</label>
      <input type="hidden" class="form-control" name="vendors_id" id="vendors_id">

          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" name="website">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="labels">Labels</label>
          <select name="labels" id="labels" class="form-control">
            <?php echo filled_labels_name($connect); ?>
          </select>

        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address">
          <span style="font-size: 14px;">Street address, P.O. box, etc.</span>
        </div>
        <div class="form-group">
          <label for="address_line_2">Address Line 2</label>
          <input type="text" class="form-control" id="address_line_2" name="address_line_2">
          <span style="font-size: 14px;">Suite, unit, building, floor, etc.</span>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" name="city">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="state">State/Province/Region</label>
              <input type="text" class="form-control" id="state" name="state">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="zip_postal_code">Zip/Postal Code</label>
              <input type="text" class="form-control" id="zip_postal_code" name="zip_postal_code">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Country</label>
              <select name="country" id="country" class="form-control">
                <?php echo filled_country_name($connect); ?>

              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- second card -->
        <div class="card">
      <div class="card-body">
        <h4>Contact Person</h4>
        <div class="form-group">
          <label for="contact_name">Contact Name</label>
          <input type="text" class="form-control" id="contact_name" name="contact_name">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone_2">Phone</label>
              <input type="text" class="form-control" id="phone_2" name="phone_2">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>
        </div>
        <span style="font-size: 14px;" style="font-size: 14px;">Contact person's direct line or mobile number</span>
        
       
      </div>
    </div>
    <!-- third card -->
       <div class="card">
      <div class="card-body">
        <h4>Classification</h4>
        <div class="form-check mt-2">
          <input type="checkbox" class="form-check-input" name="fuel" id="fuel">
          <label class="form-check-label" for="fuel">Fuel</label><br>
          <span style="font-size: 14px;" style="font-size: 14px;">Fuel classification allows vendor to be listed on Fuel Entries</span>
        </div>
        <div class="form-check mt-2">
          <input type="checkbox" class="form-check-input" name="service" id="service">
          <label class="form-check-label" for="service">Service</label><br>
          <span style="font-size: 14px;" style="font-size: 14px;">Service classification allows vendor to be listed on Service Entries and Work Orders</span>
        </div>
        <div class="form-check mt-2">
          <input type="checkbox" class="form-check-input" name="vehicle" id="vehicle">
          <label class="form-check-label" for="vehicle">Vehicle</label><br>
          <span style="font-size: 14px;" style="font-size: 14px;">Vehicle classification allows vendor to be listed on Vehicle Acquisitions</span>
        </div>
        
       
      </div>
    </div>
    <div class="float-right mb-5">
              <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add"/>
            <button type="submit" id="action" name="action" class="btn btn-primary">Add Vendors</button>
    </div>
  </div>

</div>

</form>
<?php if(isset($_GET['id'])){ ?>
<script type="text/javascript">
  $(document).ready(function () {


    var url = document.URL;
    // alert(url);
    var id = url.substring(url.lastIndexOf('=') + 1);
    // alert(id);
    var vendors_id = '';
    vendors_id = id;

    if (vendors_id != Number.isNaN(NaN) || vendors_id != '') {

      var btn_action = 'fetch_single';

      $.ajax({
        url: 'action.php',
        method: "POST",
        data: {vendors_id: vendors_id, btn_action: btn_action},
        dataType: "json",
        success: function (data) {
          // alert(vendors_id);
          // alert(data);

          $('#vendors_id').val(data.vendors_id);

          $('#name').val(data.name);
          $('#phone').val(data.phone);
          $('#website').val(data.website);
          $('#labels').val(data.labels);
          $('#address').val(data.address);
          $('#address_line_2').val(data.address_line_2);
          $('#city').val(data.city);
          $('#state').val(data.state);
          $('#zip_postal_code').val(data.zip_postal_code);
          $('#country').val(data.country);
          $('#contact_name').val(data.contact_name);
          $('#phone_2').val(data.phone_2);
          $('#email').val(data.email);
          $('#fuel').val(data.fuel);
          $('#service').val(data.service);
          $('#vehicle').val(data.vehicle);
          if (data.fuel=='on') {
            $('#fuel').val(data.fuel).prop('checked', true);
          }
          if (data.service=='on') {
            $('#service').val(data.service).prop('checked', true);
          }
          if (data.vehicle=='on') {
            $('#vehicle').val(data.vehicle).prop('checked', true);
          }

          $('#heading').html("Vendors Forms Edit");
          $('#action').val('Edit');
          $('#action').html('Edit');
          $('#btn_action').val('Edit');
        }
      })

    }


  });

</script>

<?php } ?>

<script type="text/javascript">
  $(document).ready(function () {



    // alert("LOL");
////////////// Insert vehicle details
    $(document).on('submit', '#vendors', function (event) {
      event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
// alert(form_data);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $('#vendors')[0].reset();
          $('#alert_action').fadeIn().html('<div style="margin-top:30px; margin-bottom:0px;" class="alert alert-success">' + data + '</div>');
          // alert(data);
        }
      })

       $('html, body').animate({
        scrollTop: $(".content-header").offset().top
    }, 200);

    });

 
  });


</script>
