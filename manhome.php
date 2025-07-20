<?php 
session_start();

if(!isset($_SESSION['userName'])){
  header("Location:./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
      
article {
    --img-scale: 1.001;
    --title-color: black;
    --link-icon-translate: -20px;
    --link-icon-opacity: 0;
    position: relative;
    border-radius: 5px;
    box-shadow: none;
    background: #cacdcf;
    transform-origin: center;
    transition: all 0.4s ease-in-out;
    overflow: hidden;
    
  }
  
  article a::after {
    position: absolute;
    inset-block: 0;
    inset-inline: 0;
    cursor: pointer;
    content: "";
  }
  
  /* basic article elements styling */
  article h2 {
    margin: 0 0 18px 0;
    font-family: "Bebas Neue", cursive;
    font-size: 1.9rem;
    letter-spacing: 0.06em;
    color: var(--title-color);
    transition: color 0.3s ease-out;
  }
  
  figure {
    margin: 0;
    padding: 0;
    aspect-ratio: 16 / 9;
    overflow: hidden;
  }
  
  article img {
    max-width: 100%;
    transform-origin: center;
    transform: scale(var(--img-scale));
    transition: transform 0.4s ease-in-out;
    height: 236px;
  }
  
  .article-body {
    padding: 24px;
  }
  
  article a {
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    color: #28666e;
  }
  
  article a:focus {
    outline: 1px dotted #28666e;
  }
  
  article a .icon {
    min-width: 24px;
    width: 24px;
    height: 24px;
    margin-left: 5px;
    transform: translateX(var(--link-icon-translate));
    opacity: var(--link-icon-opacity);
    transition: all 0.3s;
  }
  
  /* using the has() relational pseudo selector to update our custom properties */
  article:has(:hover, :focus) {
    --img-scale: 1.1;
    --title-color: #28666e;
    --link-icon-translate: 0;
    --link-icon-opacity: 1;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    background: linear-gradient(-130deg, blue ,white);
  }
  
  #first-card:hover{
    background: linear-gradient(-130deg, red ,white);
  }

  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }
  
  body {
    

    font-family: 'Poppins', sans-serif;
    font-size: 1.2rem;
    line-height: 1.6rem;
    background-image: linear-gradient(45deg, #7c9885, #b5b682);
    background-image: url('images/back3.jpg');
    min-height: 100vh;
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
  
  .articles {
    display: grid;
    max-width: 2000px;
    margin-inline: auto;
    padding-inline: 24px;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 24px;
    margin-top: 15px;
    height: 550 px;
  }
  
  @media screen and (max-width: 960px) {
    article {
      container: card/inline-size;
    }
    .article-body p {
      display: none;
    }
  }
  
  @container card (min-width: 380px) {
    .article-wrapper {
      display: grid;
      grid-template-columns: 100px 1fr;
      gap: 16px;
    }
    .article-body {
      padding-left: 0;
    }
    figure {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    figure img {
      height: 100%;
      aspect-ratio: 1;
      object-fit: cover;
    }
  }
  
  .sr-only:not(:focus):not(:active) {
    clip: rect(0 0 0 0); 
    clip-path: inset(50%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap; 
    width: 1px;
  }

   /* second section*/
   @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 4fr));
    max-width: 100%;
    
    padding: 20px;
    gap: 20px;
}
.card-list .card-item {
    background:  #cacdcf;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
    list-style: none;
    cursor: pointer;
    text-decoration: none;
    border: 2px solid transparent;
    transition: border 0.5s ease;
    height: 190px;
   
    
}

#palweni{
  background-image: url(images/job4.jpg);
    background-position: right center;
    background-size: 82%;
}
#palweni:hover {
  border: 4px solid red;
  border-radius: 10px;
}
#deweni{
  background-image: url(images/solved1.jpg);
  background-position: right center;
  background-size: 68%;

}
#deweni:hover{
  border: 4px solid red;
  border-radius: 10px;
}
#thunweni{
  background-image: url(images/unsolved3.webp);
  background-position: right center;
  background-size: 78%;

}
#thunweni:hover{
  border: 4px solid blue;
  border-radius: 10px;
}
#hathraweni{
  background-image: url(images/call3.webp);
  background-position: right center;
  background-size: 82%;

}
#hathraweni:hover{
  border: 4px solid blue;
  border-radius: 10px;
}
.card-list .card-item:hover {
  
 
}


.card-list .card-item img {
    width: 100%;
    aspect-ratio: 16/9;
    border-radius: 8px;
    object-fit: cover;
}
.card-list span {
    display: inline-block;
    background: #F7DFF5;
    margin-top: 32px;
    padding: 8px 15px;
    font-size: 0.75rem;
    border-radius: 50px;
    font-weight: 600;
}
.card-list .developer {
    background-color: #F7DFF5; 
    color: #B22485;
}   
.card-list .designer {
    background-color: #d1e8ff;
    color: #2968a8;
}
.card-list .editor {
    background-color: #d6f8d6; 
    color: #205c20;
}
.card-item h3 {
    color: #000;
    font-size: 1.438rem;
    margin-top: 28px;
    font-weight: 600;
}
.card-item .arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(-35deg);
    height: 30px;
    width: 30px;
    color: #000;
    border: 1px solid #000;
    border-radius: 50%;
    margin-top: 25px;
    transition: 0.2s ease;
  
}
.card-list .card-item:hover .arrow  {
    background: #000;
    color: #fff; 
}
@media (max-width: 1200px) {
    .card-list .card-item {
        padding: 15px;
    }
}
@media screen and (max-width: 980px) {
    .card-list {
        margin: 0 auto;
    }
}




        </style>
</head>
<body>

    <?php include 'topbar.php';?>
    <!--section one start -->
    <section class="articles">
  <article id="first-card">
    <div class="article-wrapper">
      <figure>
        <img src="./images/employee.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Employees</h2>
        <p>
          50 Employees work
        </p>
       
        <a href="emp.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article id="first-card">
    <div class="article-wrapper">
      <figure>
        <img src="./images/manager.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Managers</h2>
        <p>
          10 Managers work
        </p>
        
        <a href="mang.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="./images/help.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Helpdesk</h2>
        <p>
          20 Helpdesk work
        </p>
      
        <a href="help.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  
  
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="./images/tech.jpg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Technician</h2>
        <p>
          20 Technicians work
        </p>
     
        <a href="tech.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article id="first-card">

    <div class="article-wrapper">
     
      <div class="article-body">
        <h2>Job</h2>
        <p>
          20 Jobs
        </p>
     
        <a href="job.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article id="first-card">

    <div class="article-wrapper">
    
      <div class="article-body">
        <h2>Solved Job</h2>
        <p>
          20 Solved Job
        </p>
     
        <a href="solved.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
   
      <div class="article-body">
        <h2>Office & Equipment</h2>
        <p>
          20 Records
        </p>
     
        <a href="equipment.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      
      <div class="article-body">
        <h2>Calls</h2>
        <p>
          20 Calls
        </p>
     
        <a href="call.view.php" class="read-more">
          View <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
</section>
<!--section one end -->




<!--section two start -->



<!--section two end -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 