<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="/img/studrec_logo/Logo.png" type="image/gif" sizes="16x16"> 

  <!-- Main bootstrap Core files -->
  <link rel="stylesheet" href="{{ asset('dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- FONT ROBOTO -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Customized css file -->
  <link rel="stylesheet" type="text/css" href="{{ asset('modify/css/alumni/alumni_profile.css') }}">
  <!-- Title here -->
  <title>Jobs | Reconnector</title>
</head>

<body onload="initMap()">    

  
  @include('layouts.top_navigation.alumnitn')
  @include('layouts.left_navigation.alumnisn')

  <!-- Page Content start --> 
  <div class="container-fluid contentContainer">
  <div class="container">
  <!-- Page Content start --> 


    <div class="row mb-5 pb-4" style="background:url('/img/div_bgs/abg.jpg');box-shadow:2px 0px 10px;">
      <!-- Job Card Details -->
      <div class="row w-100 p-0 m-0"><!-- FIRST ROW -->
      <div class="col-md-4 py-4">
        <div class="card">
          <img class="card-img-top mx-auto" src="/img/job_archive/globe.jpg" alt="Card image" style="min-width: 150px; max-width: 150px;">
          <div class="card-body">
          <h4 class="card-title">Globe Telecom</h4>
          <p class="card-text">Location: <em> IT.Park Qualfon Building Telstra Pizza Resto Bar </em></p>
          </div>
        </div>
      </div>
      <!-- Job Card Details End -->
      
      <div class="col-md-8 py-4 pr-0">
        <!-- Map Location -->
      <div class="col-12" style="height:100%;">
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
      <!-- Map Location END-->
        
      </div> 
      </div><!-- FIRST ROW END -->

      <div class="row p-0 m-0 w-100"> <!-- SECOND ROW -->

        <div class="col-md-5 ml-auto p-2 mb-2" style="background-color: rgba(237, 237, 237, 0.6); box-shadow: 2px 3px 8px;">
      <!-- COMPANY INFORMATION --> 
        <div class="col-12">
        <h5 class="fontRoboto"><i class="fas fa-building"></i> Company Information </h5>
        </div>
      
        <div class="col-md-12">
          <h6> Company Name:</h6> <p class="fontRoboto">Globe Telecom</p>
        </div>
        <div class="col-md-12">
          <h6> Industry:</h6> <p class="fontRoboto">Marketing</p>
        </div>
        <div class="col-12">
          <h6> Address:</h6>
        </div>
        <div class="col-12">
          <p class="fontRoboto">IT.Park Qualfon Building Telstra Pizza Resto Bar</p>
        </div>
        <div class="col-12">
          <h6> Description:</h6>
        </div>
        <div class="col-12">
          <p class="fontRoboto">This company is full of workers. This company started in 1982 and got bankrupt after 48 years and then that's what happened. But now we are the best company in colon.</p>
        </div>
        <div class="col-12">
          <h6> Services Offered:</h6>
        </div>
          <div class="col-12">
          <ul>
          <li class="fontRoboto"> Free Food </li>
          <li class="fontRoboto"> Break Time </li>
          <li class="fontRoboto"> Increased Salary </li>
          </ul>
        </div>
    </div>
    <div class="col-md-5 p-2 mb-2 mr-auto" style="background-color: rgba(237, 237, 237, 0.6); box-shadow: 2px 3px 8px;">
      <!-- JOB INFORMATION -->
        <div class="col-12"> 
          <h5 class="fontRoboto"><i class="fas fa-building"></i> Job Information </h5>
        </div>
          <div class="col-12">
            <h6> Job Title:</h6> <p class="fontRoboto">Secretary of the CEO</p>
          </div>
          <div class="col-12">
            <h6> Job Description:</h6> <p class="fontRoboto">I keep the files of our boss. I call our boss when there are meetings.</p>
          </div>
          <div class="col-12">
            <h6> Salary:</h6> <p class="fontRoboto">15,000 - 20,000</p>
          </div>
          <div class="col-12">
            <h6> Date Employed:</h6> <p class="fontRoboto">February 31, 1973</p>
          </div>
        <!-- JOB INFORMATION END -->
    </div>
      <!-- COMPANY INFORMATION END -->
    </div>
    </div>
    
      <!-- Details END-->


    <div class="row mt-3 mb-5" style="box-shadow:2px 3px 10px;"> <!-- Father Row -->

      <h4 class="fontRoboto m-3"><i class="fas fa-history"></i> Job Archives/History</h4>
      <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Company Name</th>
          <th scope="col">Job Title</th>
          <th scope="col">Date Employed</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Globe</td>
          <td>Flight Attendant</td>
          <td>February 31, 1987</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Globe</td>
          <td>Flight Attendant</td>
          <td>February 31, 1987</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Globe</td>
          <td>Flight Attendant</td>
          <td>February 31, 1987</td>
        </tr>
      </tbody>
      </table>

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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>