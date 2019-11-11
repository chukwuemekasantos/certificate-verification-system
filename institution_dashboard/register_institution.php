<?php

    include_once '../contoller/insert.php';
	// if ($_GET['ins'] == "" && $_GET['email'] == ""):
	// 	header("location:login.php");
	// endif;



	$insert = new insert(); 
	$reg = $insert->institution_register();


?>
<!DOCTYPE html>
<?php
   
    include("./include/header.php");
?>

<style>
    :required:focus{
        border: 1px solid red;
        outline: none;
    }

    .c{
        color: darkred;
    }
    .s{
        color: darkgreen;
    }


</style>
<body>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">
   
    <div class="">
      <!-- Navbar -->
     
        <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">
  
  
</div> -->
      <div class="content">
        <div class="col-md-8 mr-auto ml-auto" style="margin-top:20px;">
          <!--      Wizard container        -->
          <div class="wizard-container">
            <div class="card card-wizard" data-color="primary" id="wizardProfile">
              <form method="POST" enctype="multipart/form-data">
                <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="card-header text-center">
                  <h3 class="card-title">
                    Institution Registeration Form
                  </h3>
                  <h5 class="description">This information will let us know more about the student.</h5>
                    
			<?php
                                 switch ($reg) {
                                        case "too_large":
                                           echo '
                                                
                                                <h6 class="text-center" style="color:darkred;">Image is too large</h6>
                                     
                                                 ';
                                            break;
                                        case "success":
                                           echo '
                                           
                                            <h6 class="text-center" style="color:darkgreen;">Your Are Now Fully Registered <span><a href="login.php" class="btn btn-success btn-sm">Click To Login</a></span></h6>
                                            <style>
                                                .card-body{
                                                    display:none;
                                                }
                                            </style>
                                           ';
                                            
                                            break;
                                        default:
                                            echo "";
                                }
                                ?>
                </div>
                <div class="card-body " style="margin-top:-40px;">
                  <div class="tab-content">
                    <div class="tab-pane show active" id="about">
                      <div class="row justify-content-center">
                        <div class="col-sm-4">
                          <div class="picture-container">
                            <div class="picture">
                              <img src="./assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                              <input name="institution_logo" type="file" id="wizard-picture" >
                            </div>
                            <h6 class="description">Choose Logo</h6>
                               <h6 class="description" style="font-size:9px; color:darkred; font-weight:bold;">Maximum Size 2Mb</h6>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Institution Name" name="name" value="<?=$_REQUEST['ins']?>" readonly required>
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="nc-icon nc-circle-10"></i></span>
                            </div>
                            <input type="text" placeholder="Address (required)" class="form-control" name="institution_address" required />
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="nc-icon nc-circle-10"></i></span>
                            </div>
                            <input type="text" placeholder="city (required)" class="form-control" name="city" required/>
                          </div>
                        </div>
                    
                      
                        
                        <div class="col-sm-5">
                            <label>State</label>
                            <div class="form-group">
                            <input type="text" class="form-control" name="state" placeholder="state (required)" required>
                            </div>
                        </div>
                         <div class="col-sm-5">
                            <label>Country</label>
                            <div class="form-group">
                                 <input type="text" class="form-control" name="country" placeholder="country (required)" value="Nigeria" required>
                            </div>
                        </div>    
                          
                         <div class="col-sm-5">
                            <label>Zip Code</label>
                            <div class="form-group">
                            <input type="text" class="form-control" name="zip_code" placeholder="zip Code (required)" required>
                            </div>
                        </div>
                         <div class="col-sm-5">
                            <label>Email</label>
                            <div class="form-group">
                                 <input type="email" class="form-control" name="email" value="<?=$_REQUEST['email']?>" placeholder="country (required)" readonly required>
                            </div>
                        </div>    
                          
                          
                        <div class="col-sm-5">
                            <label>Password</label>
                            <div class="form-group">
                            <input  type="password" name="password" class="form-control" placeholder="Password (required)" required>
                            </div> 
                        </div>
                         <div class="col-sm-5">
                            <label>Phone</label>
                            <div class="form-group">
                                 <input type="text"  name="phone" class="form-control" placeholder="Phone (required)" required>
                            </div>
                        </div>    
                        
                        <div class="col-sm-10">
                            <label>Verification Method</label>
                            <div class="form-group">
                              <select class="form-control" name="veri_method" required>
                                <option value="Reference Number">Reference Number</option>
                                <option value="Registration Number">Registration Number</option>
                              </select>
                                 
                            </div>
                        </div>    
                        
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-success form-control" value="Register" name="register" style="background-color:darkgreen; color:white;"/>
                        </div>    
                        
                          
                      </div>
                    </div>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
          <!-- wizard container -->
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com/" target="_blank">Cert Verify</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank"></a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank"></a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> 
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="./assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="./assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="./assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="./assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Bootstrap Table -->
  <script src="./assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../../buttons.github.io/buttons.js"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min790f.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <!-- Sharrre libray -->
  <script src="./assets/demo/jquery.sharrre.js"></script>
    
    <script>
    
        function updateUserData(){
            
                let facultyid = $("#faculty").val();

               let ajaxReq = 

                 $.ajax({
                    url: "postapi.php?page=selectDepartment&faculty="+facultyid,
                    type: "post"
                    //data : data

                 });

                ajaxReq.done(function(res, statusText,callback){
                    
                    console.log(res);
                    
                    let i, x = ""; 
                    
                    let s = JSON.stringify(res);
                    let v = JSON.parse(res);
                    
                     console.log(v);
                    
                    $.each(v, function(index, value){
                        
                        console.log(value.department_id);
                        
                        $(".state-list").append("<option value="+value.department_id+">"+value.department_name+"</option>").val(value.department_id);
//                        $('.state-list').each(function(){
//                          x =  document.createElement("option");
//                            x.append(value.department_name);
//                            //$(this).html(value.department_name);
//                        })
                        //$("option").text();
                        
                        //x = x + '<option>'+ value.department_name + '</option>'
                       // $("#state-list").text($("#state-list").text()+ " "+value.department_name)
                           // x = value.department_name;
                           //  console.log(x)
//                         document.getElementById("state-list").innerHTML = x;
                    })
                    
                   
                    
                 
                });

                ajaxReq.fail(function(){
                    console.log("sum tin went wrog")
                });
                    event.preventDefault();

        }
        
        $('#faculty').click(function(){
           $('#change').find('option').remove().end().append('<option>Select Department</option>');
            
        });
        
    
    </script>
  <script>
    $(document).ready(function() {


      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard.html'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard.html'
      });


      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46172202-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {

      $sidebar = $('.sidebar');
      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');
      sidebar_mini_active = true;

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
      //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
      //         $('.fixed-plugin .dropdown').addClass('show');
      //     }
      //
      // }

      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-active-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('data-active-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-active-color', new_color);
        }
      });

      $('.fixed-plugin .background-color span').click(function() {
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

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
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

      $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
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


      $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
        $body = $('body');

        $input = $(this);

        if (paperDashboard.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          paperDashboard.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            paperDashboard.misc.sidebar_mini_active = true;
          }, 300);
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);

      });

    });
  </script>
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
</body>


<!-- Mirrored from demos.creative-tim.com/paper-dashboard-2-pro/examples/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 13:58:51 GMT -->
</html>