<!DOCTYPE html>
<html lang="en">
    
<?php

    include("./include/header.php");

?>

<body class="login-page">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">CERT VERIFY</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
        <style>
            .login-page{
                
            }
            .dropdown-item a :hover{
                background-color: #fbc658;
            }
            
            #l{
                cursor: pointer;
            }
            
            #l:hover{
                color: red;
            }
        </style>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
            
            <li class="nav-item active">
             <div class="dropdown">
              <a class="dropdown-toggle nav-link" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">
                            <i class="fa fa-sign-in"></i> Login
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuc_dashboard/login.php">NUC Login</a>
                <a class="dropdown-item" href="institution_dashboard/login.php">Institution Login</a>
              </div>
            </div>
            </li>
            
          <li class="nav-item ">
            <a href="user.html" class="nav-link">
            <!--   <i class="nc-icon nc-satisfied"></i> User -->
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <style>
        .list-group a{
            color : darkgreen !important;
        }
    </style>
    
<div class="wrapper wrapper-full-page">
     <div class="full-page register-page section-image" filter-color="red" data-image="./institution_dashboard/assets/img/bg/fabio-mangione.jpg">
      <div class="content">
        <div class="container">
          <div class="row">
               <div class="col-lg-6 col-md-6 mr-auto"  style="margin-top:90px;">
              <div class="card card-signup text-center" style="background-color:;">
                <div class="card-header ">
                  <h4 class="card-title">Enter Institution Name</h4>
                </div>
                <div class="card-body ">
                  <form class="form" method="post">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-search"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Search For Institution" id="searchid" required>
                    </div>
<!--
                    <div class="form-group" style="border-style:none;">
                         <ul id="list_i" style='list-style:none;'>
                        </ul>
                    </div>
-->                     
                  

                   <div class="list-group" id="list_i" style="display:none;">

                    </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-info btn-round" style="background-color:#fbc658;" value="Search"/>
                </div>
              </form>
            </div>
          </div>
        </div>
            <div class="col-lg-5 col-md-5 ml-auto">
              <div class="info-area info-horizontal mt-5">
                <div class="icon icon-primary">
                  <i class=""></i>
                </div>
                <div class="description">
                  <h5 class="info-title">ABOUT CERT VERIFY</h5>
                  <p class="description">
                    Number Online Certificate Verification System in Nigeria.
                  </p>
                </div>
              </div>
              <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                  <i class=""></i>
                </div>
                <div class="description">
                  <h5 class="info-title">HOW IT WORKS</h5>
                  <p class="description">
                    Search Institution, Enter the institution verification and verify
                  </p>
                </div>
              </div>
              <div class="info-area info-horizontal">
                <div class="icon icon-info">
                  <i class=""></i>
                </div>
                <div class="description">
                  <!-- <h5 class="info-title">Concact Us</h5>
                  <p class="description">
                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                  </p> -->
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>
  <!-- End Navbar -->
  
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="#" target="_blank">CERT VERIFY</a>
                </li>
<!--
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
-->
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
  <script src="./institution_dashboard/assets/js/core/jquery.min.js"></script>
  <script src="./institution_dashboard/assets/js/core/popper.min.js"></script>
  <script src="./institution_dashboard/assets/js/core/bootstrap.min.js"></script>
  <script src="./institution_dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="./institution_dashboard/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./institution_dashboard/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="./institution_dashboard/assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="./institution_dashboard/assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="./institution_dashboard/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./institution_dashboard/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./institution_dashboard/assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="./institution_dashboard/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./institution_dashboard/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./institution_dashboard/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="./institution_dashboard/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="./institution_dashboard/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Bootstrap Table -->
  <script src="./institution_dashboard/assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../../buttons.github.io/buttons.js"></script>
  <!-- Chart JS -->
  <script src="./institution_dashboard/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./institution_dashboard/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./institution_dashboard/assets/js/paper-dashboard.min790f.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./institution_dashboard/assets/demo/demo.js"></script>
  <!-- Sharrre libray -->
  <script src="./institution_dashboard/assets/demo/jquery.sharrre.js"></script>
  <script src="./institution_dashboard/assets/js/plugins/fuse.js"></script>
  <script>
    
      
     
//	let books = [{
//		'title': "old man's war",
//		'author': {
//			'name' : 'john script',
//		'tag' : [{
//			value: 'American'
//		}] 
//		}
//	}]
//
//	let option = {
//		keys : ['author.name'],
//	};
//
//	let fuse = new Fuse(books,option);
//	let v = fuse.search('jh');
//
//	console.log(v);

    
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
/    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
        
        $(document).ready(function(){
            
//            function myfunction(item,index){
//                document.getElementById("list_i").innerHTML += "<a href='#' class='list-group-item data-toggle='modal' data-target='#myModal' style='color:darkgreen;'>"+item.institution_name+"</a>";
//                        
//            }
            
            $('#searchid').on('keyup',function(){
                
                
                let search  =  $("#searchid").val();
            
             if(search.length <  1){
                 $("#list_i").hide();
             }else{
                 $("#list_i").show();
             }
        
               let ajaxReq = 

                 $.ajax({
                    url: "./institution_dashboard/getapi.php?page=selectInstitution&searchvalue="+search,
                    type: "post"
                    //data : data

                 });

                ajaxReq.done(function(res, statusText,callback){
                    
                    
                    let r =  JSON.parse(res);
                    
                    //console.log(r);
                    
                            let x;
        //                    
                            let option = {
                                keys : ['institution_name'],
                            };
        //                    
                            let fuse = new Fuse(r,option);
                            let f = fuse.search(search);
                            let text;
                            
//                    $.each(f,function(index,value){
//                        
//                         document.getElementById("list_i").innerHTML += "<a href='#' class='list-group-item data-toggle='modal' data-target='#myModal' id='l' style='color:darkgreen;'>"+value.institution_name+"</a>";
//                        
//                       // console.log(value.institution_name);
//                        
//                    });
                    
                    for(i = 0; i < f.length; i++){
                        
                        let link = '<a href="./institution_dashboard/institution_verify.php?id='+f[i].institution_id+'&name='+f[i].institution_name+'" class="list-group-item" id="l" style="color:darkgreen;">'+f[i].institution_name+'</a>';
                        document.getElementById("list_i").innerHTML += link;
                        
                        console.log(f[i].institution_id);
                        
                    }
                           //let li =  document.createElement('a');
                            //let listitem = $("#l");
//                            let ind, len, ins;
//                            for(ind = 0, f.length = listitem.length, ind++){
//                                text += $(listitem[ind].institution_name);
//                            }
//                            console.log(text);
                            
//                        f.forEach(myfunction);
                    
                        
                         $("#list_i").filter("#l");
                                 
                });

                ajaxReq.fail(function(){
                    console.log("sum tin went wrog")
                });
                    event.preventDefault();

                
            });
        });
            
        
       
      
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
      demo.checkFullPageBackgroundImage();
    });
  </script>
</body>


<!-- Mirrored from demos.creative-tim.com/paper-dashboard-2-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 13:58:05 GMT -->
</html>