<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
 
 
}
        .main-navbar{
    border-bottom: 1px solid  #cacdcf;
}

/*top nav bar*/
.main-navbar .top-navbar{
    background: linear-gradient(-130deg, blue ,red);
    padding-top: 10px;
    padding-bottom: 10px;
}
.main-navbar .top-navbar .brand-name{
    color: #fff;
}
.main-navbar .top-navbar .nav-link{
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}
.main-navbar .top-navbar .dropdown-menu{
    padding: 0px 0px;
    border-radius: 0px; 

}
.main-navbar .top-navbar .dropdown-menu:hover{
   background-color:#cacdcf;
   color:#fff ;

}#logout{
    background: blue;
    color: white;
}
#logout:hover{
   
    color: white;
}

.main-navbar .top-navbar .dropdown-menu .dropdown-item{
    padding: 8px 16px;
    border-bottom: 1px solid  #cacdcf;
    font-size: 14px; 

    
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item i{

    width: 20px;
    text-align: center;
    background: linear-gradient(-130deg, blue ,red);
    font-size: 14px;
     
    
}
.main-navbar .navbar{
    padding: 0px;
    background-color: #ddd;
}

.nav-link:hover{
    background: #f0f0f5;
    border-radius: 2px;
    color: white;
   
}
.main-navbar .navbar .nav-item .nav-link{
    padding: 8px 20px;
    color: #000;
    font-size: 15px;
}

@media only screen and (max-width: 600px) {
    .main-navbar .top-navbar .nav-link{
        font-size: 12px;
        padding: 8px 10px;

    }
}

.img{
    border-radius: 50%;
    margin-right: 10px;
}

#top-uname:hover{
    background: none;
}




    </style>
</head>
<body>
    



<div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                        <h5 class="brand-name">Manzaneque</h5>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form role="search">
                            <div class="input-group">
                                <input type="search" placeholder="Search here" class="form-control" />
                                <button class="btn bg-white" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">
                            
                           
                            </li>
                            <li class="nav-item">
                                <img class="img" src="images/1.png" width="40" height="40" alt="User Image">
                            </li>

                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="top-uname">
                            <i class="fa fa-user"></i>  Username
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Full Name</a></li>
                                <li><a class="dropdown-item" href="#">Email</a></li>
                                <li><a class="dropdown-item" href="#">Profile Setting</a></li>
                                
                                <li><a class="dropdown-item" id="logout" href="./includes/logout.inc.php">Logout</a></li>
                            </ul>
                            </li>                                                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Funda Ecom
                </a>
                <button onclick="drop()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" >
                            <a class="nav-link" href="manhome.php">Home</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="emp.reg.php">Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="help.reg.php">Helpdesk</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="tech.reg.php">Technician</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job.reg.php">Job</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="solved.view.php">Solved Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="equipment.view.php">Office & Equipment</a>
                        </li>
-->
                    </ul>
                </div>
            </div>

        </nav>
    </div>
    </body>
</html>