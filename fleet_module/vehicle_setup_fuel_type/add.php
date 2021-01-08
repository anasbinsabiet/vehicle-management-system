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
              <h4>Fuel Type</h4>
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
          <form method="POST" id="fuel_type_forms" class="fuel_type_forms">

          <div class="form-group">
            <input type="text" class="form-control" name="fuel_type" id="fuel_type" placeholder="Fuel Type" required>
            <input type="hidden" class="form-control" name="fuel_type_id" id="fuel_type_id">
          </div>



        </div>
      </div>

      <div class="float-right mb-5">
        <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add"/>
        <button type="submit" id="action" name="action" class="btn btn-primary">Add</button>
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
    var fuel_type_id = '';
    fuel_type_id = id;

    if (fuel_type_id != Number.isNaN(NaN) || fuel_type_id != '') {

      var btn_action = 'fetch_single';

      $.ajax({
        url: 'action.php',
        method: "POST",
        data: {fuel_type_id: fuel_type_id, btn_action: btn_action},
        dataType: "json",
        success: function (data) {
          // alert(fuel_type_id);
          // alert(data);

          $('#fuel_type_id').val(data.fuel_type_id);
          $('#fuel_type').val(data.fuel_type);


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
$(document).on('submit', '#fuel_type_forms', function (event) {
  event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
// alert(form_data);
$.ajax({
  url: "action.php",
  method: "POST",
  data: form_data,
  success: function (data) {
    $('#fuel_type_forms')[0].reset();
    $('#alert_action').fadeIn().html('<div>' + data +
      '</div>');
          // alert(data);
        }
      })

$('html, body').animate({
  scrollTop: $(".content-header").offset().top
}, 200);

});


});


</script>
