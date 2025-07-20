   
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
    

    font-family: "Figtree", sans-serif;
    font-size: 1.2rem;
    line-height: 1.6rem;
    background-image: linear-gradient(45deg, #7c9885, #b5b682);
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


    
    
    
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
    margin-top: 60px;
    
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
    
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 390px;
    background-color: #fff;
    overflow: hidden;
    margin-left: 130px;
    
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
    
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background: linear-gradient(-130deg, blue ,red);
    transition: all 0.3s linear;
    cursor: pointer;
    margin-top: 40px;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
   
    display: flex;
    align-items: center;
    
}

form .buttons button , .backBtn{
    margin-right: 14px;
}
@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}
@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}

.signup{
    text-align: center;
  margin-top: 10px;
  font-size: 14px;
  font-weight: 400;
  color: #232836;
}
   </style>
</head>
<body>
    <!--top bar-->
    <?php include 'topbar.php';?>
    <!--end top bar-->

    <div class="container">
        <header>Job</header>
        <form action="./includes/job.inc.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Registration</span>
                    <div class="fields">
                    <div class="input-field">
                            <label>Technician ID</label>
                            <input type="text" name="techId" placeholder="Enter Technician ID" required>
                        </div>
                        <div class="input-field">
                            <label>Equipment Type</label>
                            <input type="text" name="equipType" placeholder="Enter Equipment Type" required>
                        </div>
                        <div class="input-field">
                            <label>Serial No.</label>
                            <input type="text" name="sNo" placeholder="Enter Serial No." required>
                        </div>
                        <div class="input-field">
                            <label> Select Location</label>
                            
                            
                            <select style="border:1px solid #aaa; border-radius:5px; width: 100%;" name="locations" class="dropdown">
                            
                            <option value="colombo">Colombo</option>
                            <option value="moratuwa">Moratuwa</option>
                            <option value="gampaha">Gampaha</option>
                            <option value="kandy">Kandy</option>
                            <option value="kegalle">Kegalle</option>
                            <option value="kurunegala">Kurunegala</option>
                            <option value="galle">Galle</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Select Date</label>
                            <input type="date" name="date" placeholder="Enter Date" required>
                        </div>
                        <div class="input-field">
                            <label>Remarks</label>
                            <input type="text" name="remark" placeholder="Remarks" required>
                        </div>
                        
                        
                        <button class="sumbit" name="reg-btn">
                            Add
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                    
                </div> 
            </div>
            
        </form>
    </div>
<script src="script.js"></script>
    


</body>
</html>