<!DOCTYPE html>
<html lang="en">

<head>
  <title>iGRIP Bank - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color:#a8dfed;">

  <!-- Navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark font-weight-bold">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="./Pictures/icon.svg" width="30" height="30" alt="iGRIP_logo" class="mb-1">
        iGRIP Bank
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="customers.php">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="transactions.php">Transfer Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" target="_blank" href="https://internship.thesparksfoundation.info/">Spark Foundation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Caraousel-->

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner font-weight-bold">
      <div class="carousel-item active">
        <img src="./Pictures/Banking_System.jpg" alt="Easy Transfer" width="100%" height="500">
        <div class="carousel-caption">
          <h3 class="text-danger font-weight-bold">Easy Money Transfer</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Pictures/Secure_transactions.jpg" alt="Secure Transaction" width="100%" height="500">
        <div class="carousel-caption">
          <h3 class="font-weight-bold">Secure Transaction</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Pictures/Quick_Deposit.jpg" alt="Easy Deposit" width="100%" height="500">
        <div class="carousel-caption">
          <h3 class="font-weight-bold">Easy Deposit</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Pictures/Customer_Satisfaction.jpg" alt="Low interests" width="100%" height="500">
        <div class="carousel-caption ">
          <h3 class="font-weight-bold">Customer Satisfaction</h3>
        </div>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!--About us-->
  <div class="container" style="font-family: 'Lucida Sans'">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 py-5">
        <h4><u>iGRIP Bank</u></h4>
        <p class="font-weight-bold">iGRIP Bank is a part of GRIP foundation. It is one of leading private banks and was among the first to receive approval from the Central bank of GRIP Foundation (CBGF) to set up a private sector bank in 559 ZY.
          Today, iGRIP Bank has a banking network of 8,702 branches and 30k + ATM's in 5k cities/towns. iGRIP Bank offers a diverse range of financial products and banking services to customer through a growing branch and ATM network and digital channels such as Net Banking and Mobile Banking.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <img src="./Pictures/aboutus_bank.jpg" class="img-fluid">
      </div>
    </div>

    <section class="my-5">
      <div class="py-5">
        <h4 class="text-center"><u>Disclaimer</u></h4>
        <p class="font-weight-bold">This website is the part of my internship project, and does not necessarily represent the views of any organisation or any other individuals referenced or acknowledged within the website. Anyone may reproduce, distribute, adapt, translate the content on the website, without explicit permission, provided that the content is accompanied by an acknowledgement that iGRIP Bank website is the source and that it is clearly indicated if changes were made to the original content.</p>
      </div>
  </div>


  <footer class="text-center mt-2 py-5">
    <p>&copy 2023 <b>Tanmoy Sarkar</b> </br>Powered by iGRIP Bank</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>