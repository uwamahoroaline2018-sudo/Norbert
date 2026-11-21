<?php
session_start();
if(empty($_SESSION['entered')){
  header.laction('href="home.php"')
}

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
    <li><a onclick="goPage('index.php')" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    🏠 HOME
    </a>
    </li><li><div class="v-linee"></div></li>
   
    <li><a onclick="goPage('audios.php')" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    🎶 AUDIOS
    </a>
    </li><li><div class="v-linee"></div></li>
   
    <li><a onclick="goPage('videos.php')" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    📽️ VIDEOS
    </a>
    </li><li><div class="v-linee"></div></li>
    
    <li><a onclick="goPage('myimages.php')" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    📸 IMAGES
    </a>
    </li><li><div class="v-linee"></div></li>

    <li><a onclick="goPage('gospel-audios.php')" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    ✝️ GOSPEL 
    </a>
    </li><li><div class="v-linee"></div></li>
    <li><a onclick="goPage('bible-verses.php')" style="padding: 5px 5px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
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

<div class="music-box" id="box">
  
   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>USHIMWE by Tonzi Cover By Jessie</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(0)" id="btn0">▶</button>
     <audio id="aud0" src="USHIMWE by Tonzi Cover By Jessie.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>PAPA by Vestine and Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(1)" id="btn1">▶</button>
     <audio id="aud1" src="PAPA by Vestine and Dorcas (Official video 2021)(MP3_70K).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>NZAKOMORA-_Vestine___Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(2)" id="btn2">▶</button>
     <audio id="aud2" src="NZAKOMORA-_Vestine___Dorcas__Official_Video_2022_(360p).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>NDAKOMEYE by GABY KAMANZI.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(3)" id="btn3">▶</button>
     <audio id="aud3" src="NDAKOMEYE by GABY KAMANZI_1724902768347.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Nahawe Ijambo by Vestine and Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(4)" id="btn4">▶</button>
     <audio id="aud4" src="Nahawe Ijambo by Vestine and Dorcas Official Video2020(MP3_70K).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>MANZI_MUSIC_-_ICYO_YAVUZE.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(5)" id="btn5">▶</button>
     <audio id="aud5" src="MANZI_MUSIC_-_ICYO_YAVUZE(480p)_20260301_225934.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Mana_Nduburira_(194_Gushimisha)_by_PaPi_Clever.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(6)" id="btn6">▶</button>
     <audio id="aud6" src="Mana_Nduburira_(194_Gushimisha)_by_PaPi_Clever_(Official_Audio_2018)(360p).m4a"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Joy_in_chaos.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(7)" id="btn7">▶</button>
     <audio id="aud7" src="Joy_in_chaos_extended_lyric_video_with_D6_x_Stanley_Ifenna_(firm_foundation_by_cody_carnes)(240p).m4a"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Israel_MBONYI_-_NZARIRIMBA.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(8)" id="btn8">▶</button>
     <audio id="aud8" src="Israel_MBONYI_-_NZARIRIMBA(128k).mp3"></audio>
   </div>


   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Israel_Mbonyi_-_Number_one.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(9)" id="btn9">▶</button>
     <audio id="aud9" src="Israel_Mbonyi_-_Number_one__2014_(256k).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>ISAHA_-_Vestine_and_Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(10)" id="btn10">▶</button>
     <audio id="aud10" src="ISAHA_-_Vestine_and_Dorcas__Official_Video_2022_(256k).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>IRIBA_-_Vestine_and_Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(11)" id="btn11">▶</button>
     <audio id="aud11" src="IRIBA_-_Vestine_and_Dorcas__Official_Video_2024_(256k).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>IHEMA-_Vestine___Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(12)" id="btn12">▶</button>
     <audio id="aud12" src="IHEMA-_Vestine___Dorcas__Official_Video_2025_(256k).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>EMMY_VOX_-_WARASENZE_UBURA_IKI.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(13)" id="btn13">▶</button>
     <audio id="aud13" src="EMMY_VOX_-_WARASENZE_UBURA_IKI___Official_video_Lyrics_(256k).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>The_Ben_-_ISI.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(14)" id="btn14">▶</button>
     <audio id="aud14" src="The_Ben_-_ISI.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>BIGIZI GENTIL-TUJYANE.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(15)" id="btn15">▶</button>
     <audio id="aud15" src="BIGIZI GENTIL-TUJYANE  (Official Video) --KANDA SUBSCRIBE(MP3_70K).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>ADONAÏ by Vestine and Dorcas.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(16)" id="btn16">▶</button>
     <audio id="aud16" src="ADONAÏ by Vestine and Dorcas official video 2021.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="_N32.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>!Ntacyo nzaba by Meddy & Adrien.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(17)" id="btn17">▶</button>
     <audio id="aud17" src="!Ntacyo nzaba by Meddy & Adrien 2014.mp3"></audio>
   </div>

   



</div>

<script>
  function playMe(n) {
    // body...
    let audios = document.querySelectorAll('[id^="aud"]');
    let btns = document.querySelectorAll('[id^="btn"]');
    let cur = document.getElementById('aud'+n);
    let btn =  document.getElementById('btn'+n);

    //stops others

    audios.forEach((a,i)=>{
      if(i!=n){
        a.pause(); a.currentTime=0; btns[i].innerHTML='▶';
      }
    });

    if(cur.paused){
      cur.play();
      btn.innerHTML='⏸';
    }else{
      cur.pause();
      btn.innerHTML='▶';
    }
    cur.onended=()=>{btn.innerHTML='▶';}
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
