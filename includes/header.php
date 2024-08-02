<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Resources\CSS\styles1.css">
</head>
<body>
    
</body>
</html>
<script>
      
</script>
<!-- <h4 id="info"></h4> -->
    <!-- <header>
        <h1>Zakaria</h1>
        
        <div class="horizontalline">
          
        </div>
        <div class="HeadermainS">
       
            <div class="Headercontent">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <p><h2>Hi there, I'm Zak</h2></p><br>
                <p><h3>A bit about me</h3></p>
                <p><h4>I am a student, freelancer and website Programmer too</h4></p>
                <h5><a href="MyProjects.php" class="seemore"> What I do?</a></h5>            
                <p><h5><a href="about.php">Know more about me...</a></h5></p>
            </div>
            <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <img class=Mypic1 src="zaks1.jpg" alt="this is zak's gallery">
                <h6><a href="gallery.php">Visit My gallery</a></h6>
            </div>
        </div>
    </header> -->
    <header>
        <!-- <h1>Zakaria</h1> -->
        
        <div class="horizontalline">
          
        </div>
        <!-- <div class="menu-icon" onclick="return toggleNavbar()">
            ☰
        </div> -->
        <div class="HeadermainS">
       
            <div class="Headercontent">
           
                        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                <div>
                    <img class=Mypic1 src="Resources\CSS\zaxprofile.png" alt="this is zak's profile">
                </div>
            
                <p><h2>Hi there, I'm Zak</h2></p>
                <p>
                    <h3>I am</h3>
                    <h1 id= "info">A</h1>
                </p>
                <h5><a href="MyProjects.php" class="seemore"> What I do?</a></h5>            
                <p><h5><a href="about.php">Know more about me...</a></h5></p>
                <p>                
                    <h5>
                        <a href="https://photos.google.com/search/_cAF1QipMoJs34ykXzip44B-1L5w70R~uDn4dLAIA_zakaria" target="_blank">
                            Visit My gallery
                        </a>
                    </h5>
                </p>
                    <button class="button" type="button" color="#0099cc"
                        onclick="document.getElementById('demo').innerHTML = Date()">
                        Time?
                    </button>
                    
                    <p id="demo"></p>
               
            </div>
            
        </div>
        <div class="content">
            <script>
                const information = [
    "Of couse, a student",
    "A web developer",
    "An artist",
    "A web designer",
    "A Computer scientist"
  ];
  
  const infoElement = document.getElementById('info');
  let index = 0;
  
  function updateInfo() {
    infoElement.textContent = information[index];
    index = (index + 1) % information.length; // Move to the next information or wrap around
  }
  
  // Initial update
  updateInfo();
  
  // Schedule automatic update every 3 seconds (3000 milliseconds)
  setInterval(updateInfo, 3000);
  
            </script>
            
            <div id="info"></div>
    
  </div>

                    <div class="typewriter">
                        <div><center>Welcome to my portfolio</center></div>
                        <div></div>
                        <!-- <div>To Nairobi city, Kenya...</div>
                        <div>Zakaria will bring his best of him to you</div> -->
                        <!-- <div>h</div>
                        <div>e</div>
                        <div>r</div>
                        <div>e</div>
                        <div> </div>
                        <div>a</div>
                        <div>m</div>
                        <div> </div>
                        <div>z</div>
                        <div>a</div>
                        <div>k</div> -->
                    </div>
                    <div class="typewriter">
                        <div><center>Created on 24th of August</center></div>
                    </div>

  
    </header>