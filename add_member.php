<?php 
  include './api/config/config.php';
  if(isset($_GET['id'])){
    $pageName = 'Update Member';  
    $sql = "SELECT * FROM `members` where id = '".$_GET['id']."'";

    $result = $conn->query($sql);
    $userData;
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $userData = $row;
        }
      }
      $conn->close();
  }else{
    $pageName = 'Add Member';
  }
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<?php include 'head.php' ?>

<body class="">
  <div class="wrapper ">
    <?php include 'sidebar.php' ?>
    <div class="main-panel">
      <?php include 'navbar.php' ?>
      <div class="content">
        <div class="content">
          <div class="container-fluid">






         <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">mail_outline</i>
                  </div>
                  <h4 class="card-title"><?php echo  $pageName; ?></h4>
                </div>
                <div class="card-body ">
                  <form >
                    <div class=row> 
                      
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="firstName" class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" id="firstName" value="<?php if(isset($userData)) echo $userData['first_name']; ?>">
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="lastName" class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" id="lastName" value="<?php if(isset($userData)) echo $userData['last_name']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="medication" class="bmd-label-floating">Medication</label>
                        <input type="text" class="form-control" id="medication" value="<?php if(isset($userData)) echo $userData['medication']; ?>">
                      </div>
                    </div>


                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="address" class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" id="address" value="<?php if(isset($userData)) echo $userData['address']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="marc" class="bmd-label-floating">Instructor</label>
                        <input type="text" class="form-control" id="marc" value="<?php if(isset($userData))  echo $userData['marc']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="clubArea" class="bmd-label-floating">Club Area</label>
                        <input type="text" class="form-control" id="clubArea" value="<?php if(isset($userData)) echo $userData['club_area']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="email" class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php if(isset($userData))  echo $userData['email']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="phoneNumber" class="bmd-label-floating">Phone Number</label>
                        <input type="text" class="form-control " id="phoneNumber" value="<?php if(isset($userData))  echo $userData['phone_number']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="mobileNumber" class="bmd-label-floating">Mobile Number</label>
                        <input type="text" class="form-control" id="mobileNumber" value="<?php if(isset($userData))  echo $userData['mobile_number']; ?>">
                      </div>
                    </div>


 <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="grade" class="bmd-label-floating">Grade</label>
                        <input type="text" class="form-control" id="grade" value="<?php if(isset($userData)) echo $userData['grade']; ?>">
                      </div>
                    </div>

</div>
<div class=row style="margin-top: 3%;">
<div class="col-md-6 col-sm-12 col-xs-12">
                      
                      <label for="dob" style="margin:0">Date of Birth</label>
                      <input type="text" id=dob class="form-control datepicker" value="">
                   
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12">
                    
                      <label for="dateJoined" style="margin:0">Date Joined</label>
                      <input type="text" id=dateJoined class="form-control datepicker" value="">
                  
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12">
                  
                      <label for="feko" style="margin:0">FEKO</label>
                      <input type="text" id=feko class="form-control yearAheadDate datepicker" value="">
                 
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12">
                   
                      <label for="renewalDate" style="margin:0">Renewal Date</label> 
                      <input type="text" id=renewalDate class="form-control yearAheadDate datepicker" value="">
                   
                  </div>

                  
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                  
                          <?php
                            if(isset($_GET['id'])){
                              if($userData['photos'] == 'true'){
                                echo '<label> Photos </label> <input type="checkbox" name="photos" id=photos value="true"> ';
                              }else{
                                echo '<label> Photos </label> <input type="checkbox" name="photos" id=photos value="false"> ';
                              }
                            } else{
                              echo '<label> Photos </label> <input type="checkbox" name="photos" id=photos value="on"> ';
                            } 
                          ?>
                        
                        
                        
                      </div>
                    </div>
</div>


                  

<div class=row>
                   

                  
                    


                    </div>
                  </form>
                </div >
                
                <div class="card-footer" style="display: flex; justify-content: space-around">
                  <button type="button" id="save" class="btn btn-fill btn-rose">Save</button>
                </div>

              </div>
            </div>
          </div>














          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <!-- <script src="../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> -->
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="assets/js/plugins/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.minf066.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      $().ready(function () {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function (event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function () {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function () {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function () {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function () {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            // $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            // $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function () {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <!-- Sharrre libray -->
  <script src="assets/demo/jquery.sharrre.js"></script>
 
  <script>
    $(document).ready(function () {

<?php
  if(isset($_GET['id'])){
    echo '$(".datepicker").datetimepicker({
      format: "YYYY/MM/DD",
      icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: "fa fa-chevron-left",
          next: "fa fa-chevron-right",
          today: "fa fa-screenshot",
          clear: "fa fa-trash",
          close: "fa fa-remove"
      }
    });
    
    $("#dob").val("'.$userData['dob'].'");
    $("#dateJoined").val("'.$userData['date_joined'].'");
    $("#feko").val("'.$userData['feko'].'");
    $("#renewalDate").val("'.$userData['renewal_date'].'");
   
    
    ';

    
    
  }else{
    echo '$("#dob").datetimepicker({
      format: "YYYY/MM/DD",
      icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: "fa fa-chevron-left",
          next: "fa fa-chevron-right",
          today: "fa fa-screenshot",
          clear: "fa fa-trash",
          close: "fa fa-remove"
      }
    });
     $("#dateJoined").datetimepicker({
      format: "YYYY/MM/DD",
      defaultDate: new Date(),
      icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: "fa fa-chevron-left",
          next: "fa fa-chevron-right",
          today: "fa fa-screenshot",
          clear: "fa fa-trash",
          close: "fa fa-remove"
      }
    });
              var d = new Date();
          var year = d.getFullYear();
          var month = d.getMonth();
          var day = d.getDate();
          var c = new Date(year + 1, month, day)
    
          $(".yearAheadDate").datetimepicker({
      format: "YYYY/MM/DD",
      defaultDate: c,
      icons: {
          time: "fa fa-clock-o",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: "fa fa-chevron-left",
          next: "fa fa-chevron-right",
          today: "fa fa-screenshot",
          clear: "fa fa-trash",
          close: "fa fa-remove"
      }
    });
';
  }

?>
          



          $( "#save" ).click(function() {


            

            
             
$.post("api/add_member.php",
              {
                first_name: $('#firstName').val(),
                last_name: $('#lastName').val(),
                medication: $('#medication').val(),
                address: $('#address').val(),
                marc: $('#marc').val(),
                club_area: $('#clubArea').val(),
                email: $('#email').val(),
                phone_number: $('#phoneNumber').val(),
                mobile_number: $('#mobileNumber').val(),
                dob: $('#dob').val(),
                date_joined: $('#dateJoined').val(),
                feko: $('#feko').val(),
                renewal_date: $('#renewalDate').val(),
            
                photos: $('#photos').is(':checked'),
                grade: $('#grade').val()
                <?php if(isset($_GET['id'])) echo ',id: '. $_GET['id']; ?>
              },
              function(data, status){
                  if(data == '1'){
                    <?php 
                    if(isset($_GET['id'])) 
                        echo "window.location = 'members_list.php?updated=true'";
                    else
                      echo "window.location = 'members_list.php?added=true'";
                    
                    ?>
                   
                }else{
               
                  $.notify({
                      icon: 'add_alert',
                      <?php 
                    if(isset($_GET['id'])) 
                        echo "message: 'Updating member failed!'";
                    else
                      echo "message: 'Adding member failed!'";
                    
                    ?>
                      
                  }, {
                      type: 'rose',
                      timer: 3e3,
                      placement: {
                          from: 'top',
                          align: 'right'
                      }
                  })
                }
            });










          });

    });

  </script>
</body>

</html>