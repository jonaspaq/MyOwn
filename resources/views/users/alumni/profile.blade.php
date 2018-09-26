<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://txt-dynamic.static.1001fonts.net/txt/dHRmLjMyLjAwMDAwMC5WVk5ELjAAAAAA/sedgwick-ave-display.regular.png" type="image/gif" sizes="16x16"> 

  <!-- Main bootstrap Core files -->
  <link rel="stylesheet" href="{{ asset('dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- FONT ROBOTO -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Customized css file -->
  <link rel="stylesheet" type="text/css" href="{{ asset('modify/css/alumni/alumni_profile.css') }}">
  <!-- Profile Name here -->
  <title>Alumni Profile | Reconnector</title>
</head>

<body onload="initMap()">    

  
  @include('layouts.top_navigation.alumnitn')
  @include('layouts.left_navigation.alumnisn')

  <!-- Page Content start --> 
  <div class="container-fluid contentContainer">
  <div class="container">
  <!-- Page Content start --> 


    <div class="row mt-3 mb-5">
      <!-- Alumni Profile Details -->
      <div class="col-sm-2 col-md-4 py-4" style="background:url('/img/div_bgs/abg.jpg');">
        <div class="card border border-light position-absolute align-middle">
          <img class="card-img-top mx-auto" src="/img/homepage_images/Girl.jpg" alt="Card image" style="width: 150px;">
          <div class="card-body">
          <h4 class="card-title fontRoboto">Romeo X. Yapzor</h4>
          <p class="card-text">Location: <em> IT.Park Qualfon Building Telstra Pizza Resto Bar </em></p>
          </div>
        </div>
      </div>
      <!-- Alumni Profile Details END-->

      <!-- Alumni Map Location -->
      <div class="col-md-8 p-0">
        <!-- This is only a test map for visual purposes only no back end -->
        <div id="map" class="w-100 bg-dark">
        </div>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap">
        </script>
        <script>
          function initMap() {
            // The location of San Carlos
            var SanCarlosTalamban = {lat: 10.3304499, lng: 123.9073923};
            // The map, centered at San Carlos
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 17, center: SanCarlosTalamban});
            // The marker, positioned at San Carlos
            //var marker = new google.maps.Marker({position: SanCarlosTalamban, map: map});
          }
        </script>
      </div>
      <!-- Alumni Map Location END-->

    </div>


    <div class="row" style="position: relative;"> <!-- Father Row -->
    <div class="col-md-8"> <!-- Job archive/history separator -->


    <!-- JOB INFORMATION -->
    <div class="row mb-5">
    <div class="col-md-12 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h5 class="fontRoboto"><i class="fas fa-user-md"></i> Personal Information (Alumnus)</h5>
      </div>
      <div class="row px-3 mb-3">
        <div class="col-sm-12 col-md-6 p-0">
          <h6  class="d-inline"> Name:</h6> <p class="fontRoboto d-inline">Romeo X. Yapzor</p>
        </div>
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> ID Number:</h6> <p class="fontRoboto d-inline"> 20134497 </p>
        </div>
      </div>
      <div class="row px-3 mb-3">
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> Course Taken: </h6> <p class="fontRoboto d-inline">Bachelor in Information and Communication Technology</p>
        </div>
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> Batch Graduated:</h6> <p class="fontRoboto d-inline"> March 2018 </p>
        </div>
      </div> 
      <div class="row px-3 mb-3">
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> Email:</h6> <p class="fontRoboto d-inline"> jonasgwapo@gmail.com </p>
        </div>
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> Phone Number:</h6> <p class="fontRoboto d-inline"> 0901001010 </p>
        </div>
      </div>

      <div class="row px-3 mb-3">
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> Date of Birth:</h6> <p class="fontRoboto d-inline"> 20134497 </p>
        </div>
        <div class="col-sm-12 col-md-6 p-0">
          <h6 class="d-inline"> Gender:</h6> <p class="fontRoboto d-inline"> Not Specified </p>
        </div>
      </div>
    </div>
    </div>
    <!-- JOB INFORMATION END-->


    <!-- COMPANY INFORMATION ->
    <div class="row mb-5">
    <div class="col-md-12 border-bottom shadow-lg divInfoBg">
      <div class="row p-3"> 
        <h5 class="fontRoboto"><i class="fas fa-building"></i> Company Information </h5>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Company Name:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">Chooks To Go</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Industry:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">Marketing</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Address:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">IT.Park Qualfon Building Telstra Pizza Resto Bar</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Description:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">This company is full of workers</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Services Offered:</h6>
        </div>
          <div class="col-12 p-0">
          <ul>
          <li class="fontRoboto"> Free Food </li>
          <li class="fontRoboto"> Break Time </li>
          <li class="fontRoboto"> Increased Salary </li>
          </ul>
        </div>
      </div>
      <div class="row p-3"> 
        <h5 class="fontRoboto"><i class="fas fa-building"></i> Job Information </h5>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Job Title:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">Secretary of the CEO</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Salary:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">15,000 - 20,000</p>
        </div>
      </div>
      <div class="row px-3">
        <div class="col-12 p-0">
          <h6> Date Employed:</h6>
        </div>
        <div class="col-12 p-0">
          <p class="fontRoboto">February 31, 1973</p>
        </div>
      </div>
    </div>
    </div>
    <!-- COMPANY INFORMATION END -->

    </div><!-- Job archive/history separator end-->
    

    <div class="col-md-1">
      <!-- This container should be empty, do not put anything here -->
      <!-- Div separator only -->
    </div>


    <!-- Job archive/history container-->
    <div class="col-md-3 mb-3 divInfoBg d-block archiveContainer"> 
      <div class="row mt-3">
        <div class="col-md-12">
          <h5 class="fontRoboto"><i class="fas fa-file-archive"></i> Job Archive/History </h5>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-md-12">
          <ul class="list-unstyled">
            <li> <img src="/img/job_archive/lexmark-logo.png" class="align-middle rounded-circle" width="20px"><a href="#" class="linkSize"> Lexmark (August 2018)</a></li>
            <li> <img src="/img/job_archive/globe.jpg" class="rounded-circle" width="20px"><a href="#" class="linkSize"> Globe (January 2018)</a></li>
            <li> <img src="/img/job_archive/beats.png" class="align-middle rounded-circle" width="20px"><a href="#" class="linkSize"> Beats (July 2018)</a></li>
            <li> <img src="/img/job_archive/lexmark-logo.png" class="align-middle rounded-circle" width="20px"><a href="#" class="linkSize"> Lexmark (August 2018)</a></li>
            <li> <img src="/img/job_archive/globe.jpg" class="rounded-circle" width="20px"><a href="#" class="linkSize"> Globe (January 2018)</a></li>
            <li> <img src="/img/job_archive/beats.png" class="align-middle rounded-circle" width="20px"><a href="#" class="linkSize"> Beats (July 2018)</a></li>
            
            <li class="mt-2"><a href="#" class="linkSize">See more...</a> </li>
          </ul>
        </div>
      </div>
    </div><!-- Job archive/history container END-->




    </div> <!-- Father Row  End-->


  <!-- Page Content END --> 
  </div><!-- container --> <!-- DO NOT TOUCH THIS -->
  </div><!-- container-fluid contentContainer -->
  <!-- Page Content END --> 
  
  
  <!-- Script check if aria value is true -->
  <script type="text/javascript">
    function deToggle(){
      var ariaValue = document.getElementById('classCollapse').getAttribute("aria-expanded");
      if(ariaValue==="true"){
        document.getElementById('classCollapse').click()
      }
    }
  </script>

  <!-- Data feather icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
      feather.replace();
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>