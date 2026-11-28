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
    <img src="_N28.jpg">
    <a href="#s31" class="arrow left">◀️</a>
    <a href="#s2" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>

  <div class="slidde" id="s2">
    <img src="_N36.jpg">
    <a href="#s1" class="arrow left">◀️</a>
    <a href="#s3" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>
  </div>

  <div class="slidde" id="s3">
    <img src="_N3.jpg">
    <a href="#s2" class="arrow left">◀️</a>
    <a href="#s4" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>
  </div>
  <div class="slidde" id="s4">
    <img src="_N4.jpg">
    <a href="#s3" class="arrow left">◀️</a>
    <a href="#s5" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>
  </div>
  <div class="slidde" id="s5">
    <img src="_N5.jpg">
    <a href="#s4" class="arrow left">◀️</a>
    <a href="#s6" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble & Caleb<h5></div>
  </div>
  <div class="slidde" id="s6">
    <img src="_N6.jpg">
    <a href="#s5" class="arrow left">◀️</a>
    <a href="#s7" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>
  </div>
  <div class="slidde" id="s7">
    <img src="_N7.jpg">
    <a href="#s6" class="arrow left">◀️</a>
    <a href="#s8" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble & Thierry<h5></div>
  </div>
  <div class="slidde" id="s8">
    <img src="_N8.jpg">
    <a href="#s7" class="arrow left">◀️</a>
    <a href="#s9" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Fiacre<h5></div>
  </div>
  <div class="slidde" id="s9">
    <img src="_N9.jpg">
    <a href="#s8" class="arrow left">◀️</a>
    <a href="#s10" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>
  </div>
  <div class="slidde" id="s10">
    <img src="_N10.jpg">
    <a href="#s9" class="arrow left">◀️</a>
    <a href="#s11" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s11">
    <img src="_N11.jpg">
    <a href="#s10" class="arrow left">◀️</a>
    <a href="#s12" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>My Mom<h5></div>

  </div>
  <div class="slidde" id="s12">
    <img src="_N12.jpg">
    <a href="#s11" class="arrow left">◀️</a>
    <a href="#s13" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s13">
    <img src="_N13.jpg">
    <a href="#s12" class="arrow left">◀️</a>
    <a href="#s14" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s14">
    <img src="_N14.jpg">
    <a href="#s13" class="arrow left">◀️</a>
    <a href="#s15" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s15">
    <img src="_N15.jpg">
    <a href="#s14" class="arrow left">◀️</a>
    <a href="#s16" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s16">
    <img src="_N16.jpg">
    <a href="#s15" class="arrow left">◀️</a>
    <a href="#s17" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s17">
    <img src="_N17.jpg">
    <a href="#s16" class="arrow left">◀️</a>
    <a href="#s18" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s18">
    <img src="_N18.jpg">
    <a href="#s17" class="arrow left">◀️</a>
    <a href="#s19" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s19">
    <img src="_N19.jpg">
    <a href="#s18" class="arrow left">◀️</a>
    <a href="#s20" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s20">
    <img src="_N33.jpg">
    <a href="#s19" class="arrow left">◀️</a>
    <a href="#s21" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble & Eric<h5></div>

  </div>
  <div class="slidde" id="s21">
    <img src="_N21.jpg">
    <a href="#s20" class="arrow left">◀️</a>
    <a href="#s22" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s22">
    <img src="_N22.jpg">
    <a href="#s21" class="arrow left">◀️</a>
    <a href="#s23" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s23">
    <img src="_N34.jpg">
    <a href="#s22" class="arrow left">◀️</a>
    <a href="#s24" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s24">
    <img src="_N35.jpg">
    <a href="#s23" class="arrow left">◀️</a>
    <a href="#s25" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s25">
    <img src="_NELE.jpg">
    <a href="#s24" class="arrow left">◀️</a>
    <a href="#s26" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>My Fav Producer<h5></div>

  </div>
  <div class="slidde" id="s26">
    <img src="_N26.jpg">
    <a href="#s25" class="arrow left">◀️</a>
    <a href="#s27" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s27">
    <img src="_N27.jpg">
    <a href="#s26" class="arrow left">◀️</a>
    <a href="#s28" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s28">
    <img src="_N28.jpg">
    <a href="#s27" class="arrow left">◀️</a>
    <a href="#s29" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s29">
    <img src="_N29.jpg">
    <a href="#s28" class="arrow left">◀️</a>
    <a href="#s30" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble, Fiacre & Theogen<h5></div>

  </div>
  <div class="slidde" id="s30">
    <img src="_N30.png">
    <a href="#s29" class="arrow left">◀️</a>
    <a href="#s31" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>Noble<h5></div>

  </div>
  <div class="slidde" id="s31">
    <img src="_N31.jpg">
    <a href="#s30" class="arrow left">◀️</a>
    <a href="#s1" class="arrow right">▶️</a>
    <div class="txtonimage"><h5>My Mom<h5></div>

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


