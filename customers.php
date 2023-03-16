<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iGRIP Bank - Customers</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style type="text/css">
    button {
      transition: 1.5s;
    }

    button:hover {
      background-color: #616C6F;
      color: white;
    }
  </style>
</head>

<body style="background-image : url(./Pictures/customer.jpg)">

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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
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
  <?php
  include 'config.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>

  <!-- Body container for tables-->
  <div class="container">
    <h2 class="text-center pt-4 text-white">Our Customers</h2>
    <br>
    <div class="row">

      <div class="col">

        <div class="table-responsive-sm">

          <table class="table table-hover table-sm table-striped table-condensed table-bordered text-white text-center">
            <thead>
              <tr>
                <th scope="col" class="text-center py-2">Account No.</th>
                <th scope="col" class="text-center py-2">Account Holder Name</th>
                <th scope="col" class="text-center py-2">E-Mail</th>
                <th scope="col" class="text-center py-2">Account Balance(in &#x20B9 )</th>

              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td class="py-2"><?php echo $rows['id'] ?></td>
                  <td class="py-2"><?php echo $rows['name'] ?></td>
                  <td class="py-2"><?php echo $rows['email'] ?></td>
                  <td class="py-2">&#x20B9 <?php echo $rows['balance'] ?></td>
                  <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>">
                      <button type="button" class="btn" style="background-color : #A569BD; font-family:Georgia">Transfer Amount</button>
                    </a>
                  </td>
                </tr>
              <?php
              }
              ?>

            </tbody>

          </table>

        </div>

      </div>

    </div>

  </div>

  <footer class="text-center mt-5 py-2 text-white">
    <p>&copy 2021 <b>Tanmoy Sarkar</b> <br>Powered by iGRIP Bank</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>