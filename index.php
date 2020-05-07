<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'link/links.php'?>
    <?php include 'css/style.php'?>
  </head>
  <body onload="fetch()">
    <nav class="navbar navbar-expand-lg nav-style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Preventions</a>
      </li>
        <a class="nav-link" href="indcorona.php">India Corona LIVE</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>

    </ul>

  </div>
</nav>

<!-- Main-header-->

<div class="main-header">
  <div class="row h-100 w-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="images/eksath.jpg" width="300" height="300" alt="People">
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Home & Fight Together Against Cor<span class="cviru"><img src="images/cvirus.png" width="50" height="50"</span>na Virus</h1>

        </div>

      </div>

    </div>

</div>


<!-- corona updates -->

<section class="corona-update container-fluid">
  <div class="mb-5">
    <h3 class="text-center">GLOBAL COVID-19 UPDATES</h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>Country</th>
        <th>Total Confirmed Cases</th>
        <th>New Confirmed Cases</th>
        <th>New Deaths</th>
        <th>Total Deaths</th>
        <th>New Recovered</th>
        <th>Total Recovered</th>
      </tr>
    </table>

  </div>

  </div>

</section>

<!-- about section -->

<div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
  <div class="section-header text-center mb-5 mt-4">
    <h1>ABOUT COVID-19</h1>
  </div>

  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/corona-structure.jpg" class="img-fluid">
    </div>
    <div class="col-lg-5 col-md-6 col-12">
      <h2>WHAT IS COVID-19?</h2>
      <p>
        Coronavirus disease 2019 (COVID-19) is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2).The disease was first identified in December 2019 in Wuhan, the capital of China's Hubei province, and has since spread globally, resulting in the ongoing 2019–20 coronavirus pandemic.
      </p>
      <p>
        Coronaviruses are a group of related viruses that cause diseases in mammals and birds. In humans, coronaviruses cause respiratory tract infections that can range from mild to lethal. Mild illnesses include some cases of the common cold (which is caused also by certain other viruses, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19.
      </p>

    </div>

  </div>

</div>

<!-- SYMPTOMS-->
<div class="container-fluid pt-5 pb-5" id="sympid">
  <div class="section-header text-center mb-5 mt-4">
    <h1>COVID-19 SYMPTOMS</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/cough.jpeg" class="img-fluid" width="120" height="120">
        <figcaption>COUGH</figcaption>
      </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/nose.jpg" class="img-fluid" width="120" height="120">
        <figcaption>RUNNY NOSE</figcaption>
      </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/fever.jpg" class="img-fluid" width="120" height="120">
        <figcaption>FEVER</figcaption>
      </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/cold.jpg" class="img-fluid" width="120" height="120">
        <figcaption>COLD</figcaption>
      </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/fatigue.jpg" class="img-fluid" width="120" height="120">
        <figcaption>FATIGUE</figcaption>
      </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/breathe.jpg" class="img-fluid" width="120" height="120">
        <figcaption>DIFFICULTY IN BREATHING</figcaption>
      </figure>
      </div>
    </div>

  </div>


<!-- Prevention against covid19-->
<div class="container-fluid sub-section pt-5 pb-5" id="preventid">
  <div class="section-header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against COVID-19</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/handwash.jpg" class="img-fluid" width="90" height="90">
            </figure>
          </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Wash your hands regularly for 20 seconds with soap and  water or alcohol-based hand rub.</p>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/mask.jpg" class="img-fluid" width="90" height="90">
            </figure>
          </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Always wear a mask or cover your face while coughing/sneezing.</p>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/sd.jpg" class="img-fluid" width="90" height="90">
            </figure>
          </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Avoid close contact with diseased patient and maintain social distancing.</p>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/home.png" class="img-fluid" width="90" height="90">
            </figure>
          </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay home and only go out for essential work.</p>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/news.png" class="img-fluid" width="90" height="90">
            </figure>
          </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay well informed and follow the guidelines given by government.</p>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images/doc.jfif" class="img-fluid" width="90" height="90">
            </figure>
          </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>If you have any covid-19 symptoms contact your doctor and self isolate yourself.</p>
            </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

  <!-- Contact us asap-->
<div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section-header text-center mb-5 mt-4">
      <h1>CONTACT US ASAP</h1>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">

            <form action="" method="POST">

              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="name" name="username"  autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Mobile No.</label>
                <input type="number" class="form-control" placeholder="Mobile No." name="mobile"  autocomplete="off" required>
              </div>

              <div class="form-group">
              <label>Select Symptoms</label><br>
              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customCheck1"  name="coronasym[]" value="cough">
                <label class="custom-control-label" for="customCheck1">Cough</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customCheck2" name="coronasym[]" value="fever">
                <label class="custom-control-label" for="customCheck2">Fever</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customCheck3" name="coronasym[]" value="fatigue">
                <label class="custom-control-label" for="customCheck3">Feeling weak</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customCheck4" name="coronasym[]" value="breathe">
                <label class="custom-control-label" for="customCheck4">Difficulty in breathing</label>
              </div>

            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">How you're feeling?</label>
              <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

<!-- footer -------->

  <footer class="mt-5">
    <div class="footer-style text-white text-center container-fluid">
    <p>Copyright by WayneEntreprises</p>
    </div>
  </footer>

  <!-- top cursor-->
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  </div>


<script type="text/javascript">

$('.count').counterUp({
  delay:10,
  time:3000
})

  mybutton = document.getElementById("myBtn");
  //when the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      mybutton.style.display = "block";
    }
    else
    {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

function fetch(){
  $.get("https://api.covid19api.com/summary",

    function (data){
    //  console.log(data['Countries'].length);
      var tbval = document.getElementById('tbval');

      for(var i=1; i<(data['Countries'].length);i++){
        var x = tbval.insertRow();
        x.insertCell(0);

        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background = '#D3D3D3';
        tbval.rows[i].cells[0].style.color = '#000000';

        x.insertCell(1);

        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background = '#4bb7d8';

        x.insertCell(2);

        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[2].style.background = '#FFFF99';

        x.insertCell(3);

        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[3].style.background = '#FF0000';

        x.insertCell(4);

        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[4].style.background = '#808080';

        x.insertCell(5);

        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background = '#008000';

        x.insertCell(6);

        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[6].style.background = '#32CD32';
      }
    }
  );
}

</script>

</body>
</html>



<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk = "";

  foreach($symp as $chk1){
    $chk .= $chk1.",";
  }
  $insertquery = "insert into coronacase(username, email,	mobile,	sympt,	message	)
  values('$username', '$email', '$mobile', '$chk', '$msg')";

  $query = mysqli_query($con, $insertquery);


  if($query){
    ?>
    <script>
      alert("Submitted Successfully");
    </script>
    <?php
  }else{
      ?>
      <script>
        alert("UNSUCCESSFULL");
      </script>
      <?php
    }

}
?>
