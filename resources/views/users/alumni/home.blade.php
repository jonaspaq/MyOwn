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
  <link rel="stylesheet" type="text/css" href="{{ asset('modify/css/alumni/home_nf.css') }}">
  <!-- Title here -->
  <title>Home | Reconnector</title>
</head>

  
  <body>    
  
  @include('layouts.top_navigation.alumnitn')
  @include('layouts.left_navigation.alumnisn')

  <!-- Page Content start --> 
  <div class="container-fluid contentContainer">
  <div class="container">
  <!-- Page Content start --> 

  <div class="row mb-3 d-md-none">
      <div class="col-md-12">
        <button type="button" class="addJobBtn w-100 p-2"> <i class="fas fa-plus"></i> Add a Job Offer</button>
      </div>
      <div class="col-md-12 mt-2">
        <button type="button" class="addJobBtn w-100 p-2"> <i class="fas fa-plus"></i> Add an Announcement</button>
      </div>
  </div>

  <div class="row"><!-- Father Row -->
  <div class="col-md-8 mb-5"> <!-- Separator column -->


  <div class="row"><!-- School Ann Header -->
    <div class="col-9 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#32C275, #1CBB66)">
      <p class="m-auto text-white"> Latest School Announcement </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- School Ann Header END-->

  <!-- Div latest announcement container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 rounded-top postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p> No classes tomorrow. Due to heavy rainfall. Always be alert and avoid going outside your house to avoid injuries. </p>
      </div>
    </div>

  </div>
  </div><!-- Div latest announcement container end -->



  <div class="row mt-5"><!-- Alumni Job Header -->
    <div class="col-8 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#1C72BB, #0A5492)">
      <p class="m-auto text-white"> Latest Alumni Job Post </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- Alumni Job Header END-->

  <!-- Div latest job container -->
  <div class="row">
  <div class="col-md-12 mt-3 pb-2 rounded-top postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Girl.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p class="m-0"> Company: Kwek-kwek Websites </p>
      <p class="m-0"> Location: Fuente Colon Mandaue City </p>
      <p class="m-0"> Job Title: Front-end Developer </p>
      <p class="m-0"> Job Description: Just Code and Code </p>
      <p class="m-0"> Salary Range: 90,000 - 500,000 </p>
      <p class="m-0"> Contact: 0922511511 </p>
      <p class="m-0"> Email: test@gmail.mail.com </p>

      <img src="/img/homepage_images/Pic5.jpg" width="150px">
      </div>
    </div>

  </div>
  </div><!-- Div latest job container end -->



  <div class="row mt-5"><!-- Recent Posts Header -->
    <div class="col-6 col-md-4 py-2 rounded-top" style="background-image: linear-gradient(90deg, #1CBB66, #0A5492)" onmouseover = "this.style.cursor = 'pointer'">
      <p class="m-auto text-white d-inline"> Announcements </p> <i class="fas fa-arrow-down text-white"></i>
    </div>
    <div class="col-5 col-md-4 py-2 ml-1 rounded-top" style="background-image: linear-gradient(90deg, #0A5492, #1CBB66)" onmouseover = "this.style.cursor = 'pointer'">
      <p class="m-auto text-white"> Job Posts </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- Recent Posts Header END-->

  <!-- Div Recent Posts container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p> No classes tomorrow. Due to heavy rainfall. Always be alert and avoid going outside your house to avoid injuries. </p>
      </div>
    </div>

  </div>
  </div><!-- Div Recent Posts container end -->

  <!-- Div latest job container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Girl.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p class="m-0"> Company: Kwek-kwek Websites </p>
      <p class="m-0"> Location: Fuente Colon, Mandaue City </p>
      <p class="m-0"> Job Title: Front-end Developer </p>
      <p class="m-0"> Job Description: Just Code and Code </p>
      <p class="m-0"> Salary Range: 90,000 - 500,000 </p>
      <p class="m-0"> Contact: 0922511511 </p>
      <p class="m-0"> Email: test@gmail.mail.com </p>

      <img src="/img/homepage_images/Pic5.jpg" width="150px">
      </div>
    </div>

  </div>
  </div><!-- Div latest job container end -->

    <!-- Div Recent Posts container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p> No classes tomorrow. Due to heavy rainfall. Always be alert and avoid going outside your house to avoid injuries. </p>
      </div>
    </div>

  </div>
  </div><!-- Div Recent Posts container end -->


  <center> <p class="fontRoboto text-muted mt-5"> You have seen all the recent posts! </p></center>
  </div><!-- Separator Column END -->


  <div class="col-md-3 ml-auto">
    <div class="row d-none d-md-block">
      <div class="col-md-12">
        <button type="button" class="addJobBtn w-100 p-2"> <i class="fas fa-plus"></i> Add a Job Offer</button>
      </div>
      <div class="col-md-12 mt-2">
        <button type="button" class="addJobBtn w-100 p-2"> <i class="fas fa-plus"></i> Add an Announcement</button>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-12">
      <p> Featured Video</p>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <video width="100%" controls>
        <source src="/vid/vid1.mp4.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
       </video>
       <p> University of San Carlos Tour - LRC & Stadium </p>

      </div>
    </div>


  </div>


  </div><!-- Father row END -->


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