
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Resources\CSS\styles1.css">

</head>
<body>
    
<div class="navbarmain">
        <div class="menu-icon" onclick="return toggleNavbar()">
            <span>
                ☰
            </span>
        </div>
    <script>
        function toggleNavbar(){
    let nav= document.getElementById('navbar');
    nav.style.display ='block';
        }
    </script>

    <nav class="nav" id="navbar">
      
            <ul>
            <!-- <li><img height= 30px width=30px src="me1.jpg" alt="profile pic"></li> -->
             <!-- <img class="profilenav" border-radius="50%" width= "50px" height="50px"src="Resources\CSS\zaks1.jpg" alt="My Profile"><br><br><br> -->
             <li fontsize="xx-large">
            <a href=""onclick="return navDisappear"> 
                <center>
                    >>>
                </center>
            </a></li><br><br><br>
             <script>
                function navDisappear(){
                    let nav=document.getElementById('navbar');
                    nav=setAttribute('navbar')
                   
                }
                console.log(navDisappear)
             </script>
             <li>
                        <a class="navlinks" href="index.php"><i class="fas fa-home"></i>Home
                                <!-- <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16" >
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                                </svg> -->
                        </a>
                </li><br><br>

                
                <li><a class="navlinks" href="MyProjects.php">Projects    </a></li><br><br>
                <li><a class="navlinks" href="contacts.php" >Contact        </a></li><br><br>
                <li><a class="navlinks" href="About.php">About Zak      </a></li><br><br>
                
            
                
                <!-- <li><a href="about.php">About Me</a></li>
                <li><a href="about.php">About Me</a></li> -->
            </ul>
        </nav>
</div>

        <!-- https://photos.google.com/search/_cAF1QipMoJs34ykXzip44B-1L5w70R~uDn4dLAIA_zakaria -->