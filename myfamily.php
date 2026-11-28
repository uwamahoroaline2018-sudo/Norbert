<?php
session_start();

if(!isset($_SESSION['entered']) || $_SESSION['entered'] !== true){
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Norbert
  </title>
  <link rel="icon" type="image/jpg" href="_N101.jpg">
  <link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
<header>
<br>

<div class="logo-left">
  <img src="_N101.jpg" alt="Logo"><br>
</div>
<div class="blink"><span><h5 style="font-family: sans-serif;font-weight: bold;margin-left: 15px;margin-top: 10px;">Norbert</h5></span></div>

  <nav>


  <ul class="menuu">
  <li><div class="v-linee"></div></li>
    <li><a href="index.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    🏠 HOME
    </a>
    </li><li><div class="v-linee"></div></li>
    
    <li><a href="myimages.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    📸 IMAGES
    </a>
    </li><li><div class="v-linee"></div></li>

    <li><a href="gospel-audios.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    ✝️ GOSPEL 
    </a>
    </li><li><div class="v-linee"></div></li>
    <li><a href="bible-verses.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    📖 BIBLE 
    </a>
    </li><li><div class="v-linee"></div></li>
     <li><a><button onclick="unlockmylove()" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
     MY LOVE 💓
    </button></a>
    </li><li><div class="v-linee"></div></li>
     <li><a href="myfamily.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    FAMILY 👨‍👨‍👦 
    </a>
    </li><li><div class="v-linee"></div></li>
    </ul>

    
    </nav>

</header>
<br>
<hr>

<div class="layout">

<aside class="left">


<div class="lagos">

        <a href="https://www.facebook.com/norbert.1749" target="_blank">
        <img src="fbb.png" class="logoo" alt="Facebook">
        </a>
            <br><br>
        <a href="https://www.instagram.com/iam_noble_01" target="_blank">
        <img src="ig.jpg" class="logoo" alt="Instagram">
        </a>
          <br><br>
          
        <a href="https://wa.me/250787164564" target="WhatsApp">
        <img src="tsap.png" class="logoo" alt="Facebook">
        </a><br><br>

        <a href="https://www.tiktok.com/@noble_403?_r=1&_t=ZN-9AK4k0YWeaV" target="TikTok">
        <img src="tok.jpg" class="logoo" alt="TikTok">
        </a><br><br>

        <a href="https://www.youtube.com/@norbertrw" target="YouTube">
        <img src="yutube.png" alt="YouTube">
        </a>
    

    
  </div>
      <div class="lagos">

    <h2>N</h2><br><br>
    <h2>O</h2><br><br>
    <h2>B</h2><br><br>
    <h2>L</h2><br><br>
    <h2>E</h2><br><br>


    
    
  </div>

</aside>

<div class="v-line"></div>

 <main class="center">

<div class="slidder-wrap">
<div class="slidder">

  <div class="slidde" id="s1">
    <img src="_N11.jpg">
    <a href="#s31" class="arrow left">◀️</a>
    <a href="#s2" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>MY MOM<h5></div>

  </div>

  <div class="slidde" id="s2">
    <img src="_N31.jpg">
    <a href="#s1" class="arrow left">◀️</a>
    <a href="#s3" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>MY MOM<h5></div>
  </div>

  <div class="slidde" id="s3">
    <img src="_N43.jpg">
    <a href="#s2" class="arrow left">◀️</a>
    <a href="#s4" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>MY FATHER<h5></div>
  </div>
  <div class="slidde" id="s4">
    <img src="_N41.jpg">
    <a href="#s3" class="arrow left">◀️</a>
    <a href="#s5" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>SISTER LEONCIE<h5></div>
  </div>
  <div class="slidde" id="s5">
    <img src="_N37.jpg">
    <a href="#s4" class="arrow left">◀️</a>
    <a href="#s6" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>MY BIG BROTHER RIGO<h5></div>
  </div>
  <div class="slidde" id="s6">
    <img src="_N44.jpg">
    <a href="#s5" class="arrow left">◀️</a>
    <a href="#s7" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>ME AND BROTHER CLEVER<h5></div>
  </div>
  <div class="slidde" id="s7">
    <img src="_N36.jpg">
    <a href="#s6" class="arrow left">◀️</a>
    <a href="#s8" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>ME<h5></div>
  </div>
  <div class="slidde" id="s8">
    <img src="_N38.jpg">
    <a href="#s7" class="arrow left">◀️</a>
    <a href="#s9" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>SISTER FELICITHE<h5></div>
  </div>
  <div class="slidde" id="s9">
    <img src="_N39.jpg">
    <a href="#s8" class="arrow left">◀️</a>
    <a href="#s1" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>BROTHER PHILEMON<h5></div>
    
  </div>
  
</div>

</div>

</main>

<div class="v-line"></div>

<aside class="right">
   
  <script>
  function unlockmylove(){
    let pass = prompt("Enter Password to see My Girlfriend's Pictures");

    if(pass == "Noble123@!"){
      window.location.href = "aboutlove.php";
    }else{
      alert("Wrong Password Call NORBERT at 0787164564");
      window.location.href = "Location: index.php";
    }
  } 
 </script>
</aside>
</div>

 <footer class="footer">
   <div class="footer-row">

     <div class="footer-col">
       <h3>About Me</h3>
       <p>Meet me and enjoy Noble's site</p>
     </div>

     <div class="footer-col">
        <h3>Quick Links</h3>
        
        <a href="favorite-images.php">Photos</a>
        <a href="favorite-videos.php">Videos</a>
        
     </div>

     <div class="footer-col">
        <h3>Also find Me At:</h3>
        <div class="logos">

        <a href="https://www.facebook.com/norbert.1749" target="_blank">
        <img src="fbb.png" class="logoo" alt="Facebook">
        </a>

        <a href="https://www.instagram.com/iam_noble_01" target="_blank">
        <img src="ig.jpg" class="logoo" alt="Instagram">
        </a>
    
        <a href="https://wa.me/250787164564" target="WhatsApp">
        <img src="tsap.png" class="logoo" alt="Facebook">
        </a>

        <a href="https://www.tiktok.com/@noble_403?_r=1&_t=ZN-9AK4k0YWeaV" target="TikTok">
        <img src="tok.jpg" class="logoo" alt="TikTok">
        </a>

        <a href="https://www.youtube.com/@norbertrw" target="YouTube">
        <img src="yutube.png" alt="YouTube">
        </a>


        
    

        <br><br>
    
        <img src="call.jpg" alt="Call">: <p>+250 787164564</p>
        </div>
        <center>
           <div class="footer-bottom">
    
   </div></center>

     </div>

   </div>
     <p style="color: #fff;font-family: sans-serif;font-weight: bold;margin-left: 15px;margin-top: 10px;font-size: 15px;">

 I Norbert, I'am the 4<sup>th</sup>   of   6<sup>th</sup>   Kids. I currently have Mom and Dad. We have two girls and four boys<br><br>
 I am an introvert boy but not selfish one. Follow me at:<br><br>
     - Instagram: iam_noble_01<br><br>
     - Facebook: Norbert<br><br>
     - WhatsApp: +250 787164564<br><br>
     - TikTok: Noble_403<br><br>

           Thank you
    
   </p>
  <br>
   <center><span style="margin-bottom: 4px;">&copy; 2026 Norbert. All Rights Reserved.</span></center>
 </footer>

</body>
</html>

