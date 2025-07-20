   
</head>
<body>

<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <title>Responsive Regisration Form </title>
   <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
}
body {
    

   
    font-size: 1.2rem;
    line-height: 1.6rem;
    
    background-image: url('images/back3.jpg');
    min-height: 100vh;
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

  }

.container{
    position: relative;
    max-width: 900px;
    width: 80%;
    border-radius: 6px;
    padding: 0px;
    margin-left: 100px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0);
    margin-top: 20px;
    


    
    
    
}tbody td {
  /* 1. Animate the background-color
     from transparent to white on hover */
  background-color: rgba(255,255,255,0);
  transition: all 0.2s linear; 
  transition-delay: 0.2s, 2s;
  /* 2. Animate the opacity on hover */
  opacity: 0.6;
  
}
tbody tr:hover td {
    
  background-color: #cacdcf;
  transition-delay: 0.2s, 0.2s;
  /*opacity: 1;*/
  font-size: 17px;
  cursor: pointer;
  
}

td {
  /* 3. Scale the text using transform on hover */
  transform-origin: center left;
  transition-property: transform;
  transition-duration: 0.2s;
  transition-timing-function: ease-in-out;
  color: #0a0a0a;
  font-weight: bold;
  
  
}
/*
tr:hover td {
  transform: scale(1.1);
}
*/




/* Codepen styling */
/*
* { box-sizing: border-box }
*/
table {
  width: 90%;
  margin: 0 5%;
  text-align: left;
}
th, td {
  padding: 0.5em;
}

/*body {
  display: flex;
  height: 100vh;
  background: hsl(232, 22%, 90%);
  color: rgba(95, 17, 232, 1);
}*/



   </style>
</head>
<body>
    <!--top bar-->
    <?php include 'topbar.php';?>
    <!--end top bar-->

    <div class="container">
    <table>
  <thead>
    <tr>
    <th>Job ID</th>
      <th>Technician ID</th>
      <th>Equipment Type</th>
      <th>Serial No</th>
      <th>Location</th>
      <th>Start Date</th>
      <th>Remarks</th>
     
    </tr>
  </thead>
  <?php
  include './includes/dbconnect.php';

  $sql = "SELECT * FROM job ";
  $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                        
                                ?>
  
 
  <tbody>
    <a>
    <tr>
      <td><?php echo $row["jobID"];?></td>
      <td><?php echo $row["technicianID"];?></td>
      <td><?php echo $row["equipmentType"];?></td>
      <td><?php echo $row["serialNo"];?></td>
      <td><?php echo $row["locations"];?></td>
      <td><?php echo $row["dat"];?></td>
      <td><?php echo $row["remarks"];?></td>
      
    </tr>
    </a>
    </tbody>
    <?php 
                }
            }else {
                echo "No Record Found in the Database";
            }
            ?>
    
 
</table>




    </div>
<script src="script.js"></script>
    


</body>
</html>