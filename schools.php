
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal Home Page</title>
    <!-- Bootstrap Core CSS -->


    <!-- Customizable CSS -->
    <style>
  
 
     .item{
      color: black !important;
    }

    .item:hover {
        color: black !important;
        transform: scale(1.1);
    } 
    .list{
        margin-right:40%;
    }

    .nav-link {
        font-size: 17px;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(65, 114, 15, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E") !important;
    }
   .items{
    background-color: #c0f090;
  
   }
   .infof{
    margin-top: 5%;
   }
  
  

    </style>



    <!-- Demo Purpose Only. Should be removed in production -->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>




</head>

<body>
<header>
        <?php include('includes/header.php');?>
    </header>

    <div class="body-content outer-top-xs items">
    <div class="container ">
        <nav class="navbar navbar-expand-lg">
          
            <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

               
                <ul class="navbar-nav">


                    <li class="nav-item list">
                        <a class="nav-link  item" href="hospitals.php">Hospitals</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link  item" href="#">Schools</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link  item" href="markets.php">Markets</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link  item" href="parks.php">Parks</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link item" href="vacanthouses.php">Vacant Houses</a>
                    </li>

                </ul>
           </div>
    </nav>
    </div>
    </div>


    <div class="row infof">
        <div class="col d-flex justify-content-center">
            <h4>Schools</h4>
        </div>
        <div class="col d-flex justify-content-center">
            <h4>Address</h4>
        </div>
    </div>

 

  
</body>


</html>