<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'link/links.php' ?>
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

<section class="corona-update container-fluid">
  <div class="my-5">
    <h3 class="text-center">COVID-19 UPDATES INDIA</h3>
  </div>

  <div class="table table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>Last Updated Time</th>
        <th>State/UT</th>
        <th>Confirmed Cases</th>
        <th>Active Cases</th>
        <th>Total Deaths</th>
        <th>Recovered</th>
      </tr>

<?php

$data = file_get_contents("https://api.covid19india.org/data.json");
$coronaindlive = json_decode($data,true);

//echo"<pre>";

//print_r($coronaindlive);

//echo"</pre>";

$statescount = count($coronaindlive['statewise']);

$i=1;
while($i < $statescount){
  ?>
    <tr>
        <td><?php echo $coronaindlive['statewise'][$i]['lastupdatedtime'] ?> </td>
        <td><?php echo $coronaindlive['statewise'][$i]['state']  ?> </td>
        <td><?php echo $coronaindlive['statewise'][$i]['confirmed']  ?> </td>
        <td><?php echo $coronaindlive['statewise'][$i]['active']   ?> </td>
        <td><?php echo $coronaindlive['statewise'][$i]['deaths'] ?> </td>
        <td><?php echo $coronaindlive['statewise'][$i]['recovered'] ?> </td>
    </tr>
  <?php
  $i++;
}

 ?>
    </table>

  </div>

  </div>

</section>

<!-- top cursor-->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
  <div class="footer-style text-white text-center container-fluid">
  <p>Copyright by WayneEntreprises</p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script type="text/javascript">



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



</script>

</body>
</html>
