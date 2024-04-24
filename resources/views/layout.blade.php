<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <link rel="stylesheet" href="{{url('css/style4.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
       <h1 class="logo-text">MENU !!!</h1>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="{{ route('dashboard') }}">
          <i class="zmdi zmdi-archive"></i> <span>Dashboard</span>
        </a>
      </li>
      
      <li>
        <a href="{{ route('users.index') }}">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Users Data</span>
        </a>
      </li>

      <li>
        <a href="{{ route('product.index') }}">
          <i class="zmdi zmdi-invert-colors"></i> <span>Products Data</span>
        </a>
      </li>

      <li>
        <a href="{{ route('purchase.index') }}">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Purchase</span>
        </a>
      </li>

      <li>
        <a href="{{ route('selling.index') }}">
          <i class="zmdi zmdi-grid"></i> <span>Selling</span>
        </a>
      </li>

      <li>
        <a href="{{ route('calendar') }}">
          <i class="zmdi zmdi-account-calendar"></i> <span>Calendar</span>
        </a>
      </li>

      <li>
        <a href="{{ route('test') }}">
          <i class="zmdi zmdi-alert-circle"></i> <span>Test</span>
        </a>
      </li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Bayu MI22A</h5>
    </li>
  </ul>

  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item message">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-bell-o"></i></a>
    
      <ul class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item media" href="#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
            <div class="message media-body">
              <span class="name float-left">s</span>
              <span class="time float-left"> Trinanda Zalsa</span>
              <span class="time float-right">Just now</span><br>
              <span class="name float-left">s</span>
              <span class="chat">Fighting too...</span><br>
            </div>
          </a>
          <a class="dropdown-item media" href="#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
            <div class="message media-body">
              <span class="name float-left">s</span>
              <span class="time float-left">Faiz Intel</span>
              <span class="time float-right">5 Minute</span><br>
              <span class="name float-left">s</span>
              <span class="chat">Pres...ie tos aya narkoba</span><br>
            </div>
          </a>
          <a class="dropdown-item media" href="#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
            <div class="message media-body">
              <span class="name float-left">s</span>
              <span class="time float-left">Atep Ramga</span>
              <span class="time float-right">3 Minute</span><br>
              <span class="name float-left">s</span>
              <span class="chat">Info hajatan uy</span><br>
            </div>
          </a>
          <a class="dropdown-item media" href="#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
            <div class="message media-body">
              <span class="name float-left">s</span>
              <span class="time float-left">Santyo Fighter</span>
              <span class="time float-right">13 Minute</span><br>
              <span class="name float-left">s</span>
              <span class="chat">Cik order ganja 3 bengket</span><br>
            </div>
          </a>
          <a class="dropdown-item media" href="#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/5.jpg"></span>
            <div class="message media-body">
              <span class="name float-left">s</span>
              <span class="time float-left">Pak Yudi</span>
              <span class="time float-right text-xl">33 Minute</span><br>
              <span class="name float-left">s</span>
              <span class="chat">Ngeri bapak mah...</span><br>
            </div>
          </a>
      </ul>
    </li>

    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-envelope-open-o"></i></a>
      <ul class="dropdown-menu dropdown-menu-right col-md-4 offset-md-4 col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                          <h4 class="card-title box-title">Live Chat</h4>
                                    <div class="messenger-box">
                                            <li>
                                                <div class="msg-sent msg-container">
                                                    <div class="avatar">
                                                       <img src="images/avatar/7.jpg" alt="">
                                                       <div class="send-time">04.30</div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div class="inner-box">
                                                            <div class="name">
                                                                Bayu Pratama R
                                                            </div>
                                                            <div class="meg">
                                                                Fighting for today...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.msg-sent -->
                                            </li>
                                            <li>
                                                <div class="msg-received msg-container">
                                                    <div class="avatar">
                                                       <img src="images/avatar/1.jpg" alt="">
                                                       <div class="send-time">04.35</div>
                                                    </div>
                                                    <div class="msg-box">
                                                        <div class="inner-box">
                                                            <div class="name">
                                                                Trinanda Zalsa
                                                            </div>
                                                            <div class="meg">
                                                                Fighting too...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.msg-received -->
                                            </li>
                                        
                                        <div class="send-mgs">
                                            <div class="yourmsg">
                                                <input class="form-control" type="text">
                                            </div>
                                            <button class="btn msg-send-btn">
                                                <i class="pe-7s-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.messenger-box -->
                                </div>
                            </div> <!-- /.card-body -->
                        </div><!-- /.card -->
      
      </ul>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="images/avatar/7.jpg" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="images/avatar/7.jpg" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{ auth()->user()->name }}</h6>
            <p class="user-subtitle">{{ auth()->user()->email }}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="{{ route('profile') }}">
        <li class="dropdown-item"><i class="zmdi zmdi-face mr-2"></i> Profile</li>
        </a>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <a href="{{ route('logout') }}">
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
</a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">


	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</div>	


	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="themeL"></li>
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  @yield('content')
  <link  href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"
/>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>  
        <script>
            new DataTable('#users')
            const customSelect = document.querySelector(".custom-select");
const selectBtn = document.querySelector(".select-button");

const selectedValue = document.querySelector(".selected-value");
const optionsList = document.querySelectorAll(".select-dropdown li");

// add click event to select button
selectBtn.addEventListener("click", () => {
  // add/remove active class on the container element
  customSelect.classList.toggle("active");
  // update the aria-expanded attribute based on the current state
  selectBtn.setAttribute(
    "aria-expanded",
    selectBtn.getAttribute("aria-expanded") === "true" ? "false" : "true"
  );
});

optionsList.forEach((option) => {
  function handler(e) {
    // Click Events
    if (e.type === "click" && e.clientX !== 0 && e.clientY !== 0) {
      selectedValue.textContent = this.children[1].textContent;
      customSelect.classList.remove("active");
    }
    // Key Events
    if (e.key === "Enter") {
      selectedValue.textContent = this.textContent;
      customSelect.classList.remove("active");
    }
  }

  option.addEventListener("keyup", handler);
  option.addEventListener("click", handler);
});
        </script>

<script src="{{ asset('js/app.js') }}"></script>
@stack('other-scripts')
<script>
$(document).ready(function() {
  $(".drop .option").click(function() {
    var val = $(this).attr("data-value"),
        $drop = $(".drop"),
        prevActive = $(".drop .option.active").attr("data-value"),
        options = $(".drop .option").length;
    $drop.find(".option.active").addClass("mini-hack");
    $drop.toggleClass("visible");
    $drop.removeClass("withBG");
    $(this).css("top");
    $drop.toggleClass("opacity");
    $(".mini-hack").removeClass("mini-hack");
    if ($drop.hasClass("visible")) {
      setTimeout(function() {
        $drop.addClass("withBG");
      }, 400 + options*100); 
    }
    triggerAnimation();
    if (val !== "placeholder" || prevActive === "placeholder") {
      $(".drop .option").removeClass("active");
      $(this).addClass("active");
    };
  });
  
  function triggerAnimation() {
    var finalWidth = $(".drop").hasClass("visible") ? 22 : 20;
    $(".drop").css("width", "24em");
    setTimeout(function() {
      $(".drop").css("width", finalWidth + "em");
    }, 400);
  }
});

$(document).ready(function() {

handleBtnDeleteColom();
handleBtnAddColom();
handleHitung();

$('#sample_form').on('submit', function(event){
    event.preventDefault();

    const details = [];
    $('[data-area]').each(function() {
        detail = {
            "trxid": $('#notrx').val(),
            "kd_brg": $(this).find('input#kd_brg').val(),
            "nama_barang":$(this).find('input#nama_brg').val(),
            "Selling_Price": $(this).find('input#Selling_Price').val(),
            "Qty": $(this).find('input#Qty').val(),
            "Sub_Total":$(this).find('input#Sub_Total').val()
        };
        details.push(detail);
    });

    
    
    var formData = {
        "trxid": $('#notrx').val(),
        "date_sell": $('#date_sell').val(),
        "nama_customer": $('#nama_customer').val(),
        "kasir": $('#nama_customer').val(),
        "grand_total" : $('#total').val(),
        "details" : details
    }
    console.log(JSON.stringify(formData));

    $.ajax({
        url:"http://localhost:8080/konterku-main/api/penjualan/create.php",
        method:"POST",
        data: JSON.stringify(formData),
        success:function(data){
            $('#action_button').attr('disabled', false);
            window.location.href = 'http://localhost:8080/konterku-main/views/penjualan/';
        },
        error: function(err) {
            console.log(err);   
            $('#message').html('<div class="alert alert-danger">'+err.responseJSON+'</div>');  
        }
    });
});

function handleBtnAddColom(){
    var target_area = $("#target_area");
    $("button#add_colom").off("click").on("click", function(){
        var _this = $(this),
        currentArea = _this.parent().parent(),
        cloningan = currentArea.clone();

        // Clear input values in the cloned area
        cloningan.find('input').val('');

        target_area.append(cloningan);
        setTimeout(() => {
            handleBtnAddColom();
            handleHitung();
            handleBtnDeleteColom();
        }, 500);
    });
}

function handleBtnDeleteColom(){
    $("button#delete_colom").off("click").on("click", function(){
        var el_count = $('[data-area]').length;
        //alert(el_count);
        if(el_count < 2){
            return false;
        }

        var _this = $(this),
        currentArea = _this.parent().parent();

        currentArea.remove();
        gotoView();
    });
}

function handleHitung(){
  $('input#Qty').off("input").on("input", function(){
    var _this = $(this),
    currentArea = _this.parent().parent();
    harga = currentArea.find('input[name="Price[]"]').val();
    qty = currentArea.find('input[name="Qty[]"]').val();

    // Check if harga or qty is not a number
    if (isNaN(harga) || isNaN(qty)) {
      currentArea.find('input[name="Sub_Total[]"]').val("SALAH INPUT!");
      hitungTotal();
      return;
    }

    total = harga*qty;

    currentArea.find('input[name="Sub_Total[]"]').val(total);
    hitungTotal();
  });
}

function hitungTotal(){
  var total = 0;
  var hasWrongValue = false; // Flag to track if there's a "Wrong!" value

  $('[data-area="area_50"]').each(function(){
    var _this = $(this);
    var subtot = _this.find("input[name='Sub_Total[]']").val();

    // Check if subtot is "Wrong!" or not a number
    if (subtot === "Wrong!" || isNaN(subtot)) {
      hasWrongValue = true; // Set the flag to true if a "Wrong!" value is found
      return true; // Continue the .each() loop to check all inputs
    }

    // If subtot is a valid number or can be converted to a number, add it to the total
    total += parseFloat(subtot);
  });

  // If there was a "Wrong!" value, set the total to "Wrong!", otherwise set it to the calculated total
  $('#Grand_Total').val(hasWrongValue ? "Bodoh ! tingal SUB TOTAL" : total);
}

function gotoView(){
    var el = $('[data-area="area_50"]').find(".row:last-child")[0];
    el.scrollIntoView();
}
});

</script>
</body>
</html>