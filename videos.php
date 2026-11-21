<?php
session_start();
$_SESSION['entered'] = true;
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
<center><div class="blnk">WELCOME TO NORBERT'S SITE</div></center>

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
   
    <li><a href="audios.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    🎶 AUDIOS
    </a>
    </li><li><div class="v-linee"></div></li>
   
    <li><a href="videos.php" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    📽️ VIDEOS
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


<div class="vid-wrap">

<div class="cont" id="videoLayout">
  
  <div class="player-box" id="playerBox" style="display: none;">
    <video id="mainVideo" controls width="100%">
      <source src="" type="video/mp4">
    </video>
    <h3 id="videoTitle"></h3>
  </div>

  <ul class="video-list">

    <li onclick="playVideo('AMALON_-_N_IMANA_[Official_Music_Video](720p).mp4',this)">
    <p style="font-weight: bold;font-size: 15px;
  font-family: Arial;">AMALON_-_N_IMANA_[Official_Music_Video](720p)</p>
    </li>

  
    <li onclick="playVideo('Low_Key_by_Yvan_Buravan(720p).mp4',this)">
    <p style="font-weight: bold;font-size: 15px;
  font-family: Arial;">Low_Key_by_Yvan_Buravan(720p)</p>
    </li>
    <li onclick="playVideo('Ni_Yesu___Buravan__official_Music_Video_(720p).mp4',this)">
    <p style="font-weight: bold;font-size: 15px;
  font-family: Arial;">Ni_Yesu___Buravan__official_Music_Video_(720p)</p>
    </li>
    <li onclick="playVideo('Ntacyo_Nzaba_by_Adrien_ft_Meddy__Official_Video_(720p).mp4',this)">
    <p style="font-weight: bold;font-size: 15px;
  font-family: Arial;">Ntacyo_Nzaba_by_Adrien_ft_Meddy__Official_Video_(720p)</p>
    </li>
    
    <li onclick="playVideo('Lady.mp4',this)">
    <p style="font-weight: bold;font-size: 15px;
  font-family: Arial;">Saphila's Vibe</p>
  
  
    <li onclick="playVideo('See_u_again👋🏻.mp4',this)">
    <p style="font-weight: bold;font-size: 15px;
  font-family: Arial;"><span>See_u_again👋🏻</span></p>
    </li>

  </ul>

</div>


<script>
  function playVideo(videoSrc, title, clickedItem){
    ///Show player

    const playerBox = document.getElementById('playerBox');
    playerBox.style.display = 'block';


    //Change video source

    const video = document.getElementById('mainVideo');
    video.src = videoSrc;
    video.play();

   
    //Highlight clicked one

    document.querySelectorAll('.video-list li').forEach(li =>{li.classList.remove('active');});

    clickedItem.classList.add('active');

    //Make layout go LEFT

    document.getElementById('videoLayout').style.display = 'flex';
  }

</script>





 
</main>



<div class="v-line"></div>

<aside class="right">
  <button style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    <a href="noble.html"> LOVE</a> 
    </button>
    <br><br>
<button style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
   <a href="famy.html"> FAM</a>    
    </button>
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
  <br>
   <center><span style="margin-bottom: 4px;">&copy; 2026 Norbert. All Rights Reserved.</span></center>
 </footer>

</body>
</html>
