<?php
$servername   = "localhost";
$database = "demo";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
<style type="text/css">
 ul {
        width: auto;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: transparent;
}

li {
  float: left;
}

li a {
    cursor: pointer;
  display: block;
  color: white;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
}
.ab {
     cursor: pointer;
  display: block;
  color: white;
  font-size: 21px;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
  max-width: 100px;
  
}


li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>

<ul>
         <li><div class="ab">
        <a id="logo" href="#home"><img src="uploads/upc.png" style="height:37px;width: 100px;"></a>
      </div></li>
      <li style="float:right;padding: 16px 14px;"><a href="login.php"><i class="fa fa-user" style="font-size:18px;"></i></a></li>
        <li style="float:right"><a href="search.php"><i class="fa fa-search" style="font-size: 19px;padding: 16px 14px;"></i></a></li>
      </ul>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upages</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</head>
<body>
  <div class="wrapper">

       <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Most Searched Pages</h1>
          <div class="box">
            <label>Title: Doctor Strange 2
              <a href="http://localhost/ok/public.php?page_name=Doctor%20Strange%202"><img src="uploads/Doctor strange.jpg" alt="">🎬 Title: Doctor Strange 2 (2022) <br>         
                                                 🎧 Language : #Hindi + English<br>
                                                 👀 Quality : 480p, 720p, 1080p<br>
                                                 🎭 Genres : #Action #Crime</a>  
            </label>
            <label>Title: Moon Knite
              <a href="http://localhost/ok/public.php?page_name=Moon%20Knite"><img src="uploads/Moon Knight.jpg " alt="">Moon knight (2022)<br>
                                       Language : English Hindi Tamil Telugu Malayalam<br>
                                       Watch online or download 👇
              </a>
            </label>
             
            <label>Title: IMDB
              <a href="http://localhost/ok/public.php?page_name=IMDB"><img src="uploads/Bat.jpg " alt="">▪️The Batman Movie (2022)<br>
                      📣 Languages:  English 
                      💯 Movie Quality: 480p, 720p & 1080p Web-dl</a>
            </label>

            <label>Title: Apps
              <a href="http://localhost/ok/public.php?page_name=Apps"><img src="uploads/gb.jpg " alt="">Gb WhatsApp<br>
                     Mod apk MxPlayer</a>
            </label>

             <label>Title: Movies 2022
               <a href="http://localhost/ok/public.php?page_name=Movies%202022"><img src="uploads/rs.jpg " alt="">📽Title:  R@Dhe Shy@m<br>
                                🎭Year  2022              <br>                                🎙Language: #Hindi ORG<br>
                                💽 Quality:  #HDrip</a>
             </label>
              <label>Title: Anime
                <a href="http://localhost/ok/public.php?page_name=Anime"><img src="uploads/itachi.jfif " alt=""><br>Genres: Action, Adventure, Comedy, Super Power,                 Martial         Arts, Shounen<br>
                                      Video resolution :<br>
                                        Naruto: 480p & 720p<br>
                                      Naruto Shippuden: 720p
                </a>  
              </label>

              <label>Title: Beast
                <a href="http://localhost/ok/public.php?page_name=Beast" alt=""><img src="uploads/beast.jpg " alt="">📽Title: Beast <br>
                                    🎭Year 2022 <br>
                                    🎙Language: #Hindi ORG <br>
                                    💽 Quality: #HDrip
              </label>   
          </div>
      </div>
      
     
    <!-- END OF MAIN CONTAINER -->

     <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Terms & Cond</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

     <!-- FOOTER -->
    <footer>
      <p>copyright@upage</p>
      <p>2022/01/11 site creation</p>
    </footer>
  </div>

</body>
</html>

<style type="text/css">
:root {
  --primary: #141414;
  --light: #F3F3F3;
  --dark:   #686868;
}
html, body {
  width: 100vw;
  min-height: 100vh;
  margin: 0;
  padding: 0;
  background: linear-gradient(#141e30, #243b55);
  font-family: Arial, Helvetica, sans-serif;
  box-sizing: border-box;
  line-height: 1.4;
}

img {
  max-width: 100%;
}

h1 {
  padding-top: 0px;  
}

.netflixLogo {
  grid-area: nt;
  object-fit: cover;
  width: 100px;
  max-height: 100%;
  
  padding-left: 30px;
  padding-top: 0px;  
}

.netflixLogo img {  
  height: 35px;     
}

#logo {
  color: #E50914;  
  margin: 0; 
  padding: 0; 
}


.sub-nav {
  grid-area: sb;
  padding: 0 20px 0 20px;
}

.sub-nav a {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}

.sub-nav a:hover {
  color: var(--dark);
}


/* MAIN CONTIANER */
.main-container {
  padding: 5px;
  color: beige;
  font-family:monospace ;
  margin-left: 10%;
  margin-right: 10%;
}

.box {

  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(6, minmax(100px, 1fr));
}
label {
  text-align: left;
  color: black;
  padding: 1%;
  background-color: whitesmoke;
}

.box a {
  transition: transform .3s;  
}

.box a:hover {
 
}

.box img {
  border-radius: 2px;
}

/* LINKS */
.link {
  padding: 50px;
 
}

.sub-links ul {
  list-style: none;
  padding: 0;
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(4, 1fr);
}

.sub-links a {
  color: var(--dark);
  text-decoration: none;
}

.sub-links a:hover {
  color: var(--dark);
  text-decoration: underline;
}

.logos a{
  padding: 10px;
}

.logo {
  color: var(--dark);
}


/* FOOTER */
footer {
  padding: 20px;
  text-align: center;
  color: var(--dark);
  margin: 10px;
}

/* MEDIA QUERIES */

@media(max-width: 900px) {

  header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas: 
    "nt nt nt  .  .  . sb . . . "
    "mn mn mn mn mn mn  mn mn mn mn";
  }

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(4, minmax(100px, 1fr));
  }

}

@media(max-width: 700px) {

  header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas: 
    "nt nt nt  .  .  . sb . . . "
    "mn mn mn mn mn mn  mn mn mn mn";
  }

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(3, minmax(100px, 1fr));
  }

  .sub-links ul {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(3, 1fr);
  }
   
}

@media(max-width: 500px) {

  .wrapper {
    font-size: 15px;
  }

  header {
    margin: 0;
    padding: 20px 0 0 0;
    position: static;
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    grid-template-areas: 
    "nt"    
    "mn"
    "sb";
    text-align: center;
  }

  .netflixLogo {
    max-width: 100%;
    margin: auto;
    padding-right: 20px;
  }

  .main-nav {
    display: grid;
    grid-gap: 0px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
  }

  h1 {
    text-align: center;
    font-size: 18px;
  }

 

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;    
  }

  .box a:hover {
   
  }

  .logos {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    text-align: center;
  }

  .sub-links ul {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
    font-size: 15px;
  }

  

  
   
}

</style>
