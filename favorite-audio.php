<!DOCTYPE html>
<html>
<head>
	<title>
		Noble
	</title>
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body bgcolor="#669999">
<header><br><br>


 <nav>


  <ul>
    <li><a onclick="home()" style="padding: 7px 40px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    
      HOME
    </a>
    <script>
      function home(){
          window.location.href = "home.php";
        }
      
    </script></li>
    <li>
    

  </ul>
    </nav>
</header>
<br>
<hr>
<div class="layout">

<aside class="left">


<div class="lagos">

    <a href="favorite-videos.php" class="image-link">
      <img src="mp4.jpg" alt="Fav Videos">
      <span class="caption">Fav Videos</span>

    </a>

    <a href="favorite-images.php" class="image-link">
      <img src="imge.jpg" alt="Fav Images">
      <span class="caption">Fav Images</span>
    </a>
    
    <a href="favorite-audio.php" class="image-link">
      <img src="mus.png" alt="Fav Music">
      <span class="caption">Fav Musics</span>
    </a>

    <a href="https://www.tiktok.com/@noble_403?_r=1&_t=ZN-9AK4k0YWeaV" class="image-link" >
      <img src="tok.jpg" alt="TikTok Account">
      <span class="caption">TikTok Shorts</span>
    </a>

    
  </div>

</aside>

<div class="v-line"></div>

 <main class="center">

<div class="music-box" id="box">
  
   <div class="m-row">
     <img src="1.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>ElementEleéeh-TOMBÉ</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(0)" id="btn0">P</button>
     <audio id="aud0" src="ElementEleéeh-TOMBÉ.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="chr.jpeg">
     <div style="flex: 1; overflow: hidden;">
       <b>Chriss_Eazy_-_CHOCOLATE__Official_Video_(720p).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(1)" id="btn1">P</button>
     <audio id="aud1" src="Chriss_Eazy_-_CHOCOLATE__Official_Video_(720p).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="ee.png">
     <div style="flex: 1; overflow: hidden;">
       <b>Element_Eleéeh_-_AYAYAAH_Ft_Bien,_Joshua_Baraka__Lyric_Video_(720p)</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(2)" id="btn2">P</button>
     <audio id="aud2" src="Element_Eleéeh_-_AYAYAAH_Ft_Bien,_Joshua_Baraka__Lyric_Video_(720p).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="4.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Element_Eleéeh_-_MAASO__Official_Music_Video.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(3)" id="btn3">P</button>
     <audio id="aud3" src="Element_Eleéeh_-_MAASO__Official_Music_Video.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="3.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Element_Eleéeh_-_MiLELE__Official_Music_Video_(720p).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(4)" id="btn4">P</button>
     <audio id="aud4" src="Element_Eleéeh_-_MiLELE__Official_Music_Video_(720p).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="6.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Chriss_Eazy_,_Kevin_Kade___The_Ben_-_FOLOMiANA___Official_Video__(256k).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(5)" id="btn5">P</button>
     <audio id="aud5" src="Chriss_Eazy_,_Kevin_Kade___The_Ben_-_FOLOMiANA___Official_Video__(256k).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="8.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Element_Eleéeh_-_Kashe__Visualizer_(720p).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(6)" id="btn6">P</button>
     <audio id="aud6" src="Element_Eleéeh_-_Kashe__Visualizer_(720p).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="ee.png">
     <div style="flex: 1; overflow: hidden;">
       <b>Christopher_Muneza_-_Pasadena__Official_Video_(256k).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(7)" id="btn7">P</button>
     <audio id="aud7" src="Christopher_Muneza_-_Pasadena__Official_Video_(256k).mp3"></audio>
   </div>


   <div class="m-row">
     <img src="5.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>YAGO - Suwejo (Official Music Video)(720P_HD).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(9)" id="btn9">P</button>
     <audio id="aud9" src="YAGO - Suwejo (Official Music Video)(720P_HD) (1).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="chr.jpeg">
     <div style="flex: 1; overflow: hidden;">
       <b>AMASHU - Chriss Eazy (Official Video)(MP3_70K).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(10)" id="btn10">P</button>
     <audio id="aud10" src="AMASHU - Chriss Eazy (Official Video)(MP3_70K).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="2.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Ariel_Wayz_-_La_Vida_Loca_(Official_Video).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(11)" id="btn11">P</button>
     <audio id="aud11" src="Ariel_Wayz_-_La_Vida_Loca_(Official_Video).mp3"></audio>
   </div>

   <div class="m-row">
     <img src="1.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>ArielWayz-YouShouldKnow(OfficialMusicVideo).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(12)" id="btn12">P</button>
     <audio id="aud12" src="ArielWayz-YouShouldKnow(OfficialMusicVideo)_1715483914765.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="1.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>BIEN_X_ALIKIBA_-_FINALE__Lyrics_(480p)_20260525_181432.mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(13)" id="btn13">P</button>
     <audio id="aud13" src="BIEN_X_ALIKIBA_-_FINALE__Lyrics_(480p)_20260525_181432.mp3"></audio>
   </div>

   <div class="m-row">
     <img src="1.jpg">
     <div style="flex: 1; overflow: hidden;">
       <b>Bruce_Melodie_-_Bado_(Official_Video)(256k).mp3</b><small>&lt;unknown&gt;</small>
     </div>
     <button class="m-btn" onclick="playMe(14)" id="btn14">P</button>
     <audio id="aud14" src="Bruce_Melodie_-_Bado_(Official_Video)(256k).mp3"></audio>
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
        a.pause(); a.currentTime=0; btns[i].innerHTML='PLaY';
      }
    });

    if(cur.paused){
      cur.play();
      btn.innerHTML='PLaYING';
    }else{
      cur.pause();
      btn.innerHTML='P';
    }
    cur.onended=()=>{btn.innerHTML='P';}
  }
</script>


</main>

<div class="v-line"></div>

<aside class="right">

  <div class="slideshow">
    <img src="_N1.jpg" class="slide active">
    <img src="_N2.jpg" class="slide">
    <img src="_N3.jpg" class="slide">
</div>

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
        <h3>Follow Me</h3>
        <div class="logos">

        <a href="https://www.facebook.com/norbert.1749" target="_blank">
        <img src="fbb.png" class="logoo" alt="Facebook">
        </a>

        <a href="" target="_blank">
        <img src="ig.jpg" class="logoo" alt="Instagram">
        </a>
    
        <a href="https://wa.me/250787164564" target="WhatsApp">
        <img src="5.jpg" class="logoo" alt="Facebook">
        </a>

        <a href="https://www.tiktok.com/@noble_403?_r=1&_t=ZN-9AK4k0YWeaV" target="TikTok">
        <img src="tok.jpg" class="logoo" alt="TikTok">
        </a>

        <a href="" target="YouTube">
        <img src="yutube.png" alt="YouTube">
        </a>

        </div>
     </div>

   </div>
   <div class="footer-bottom">
    &copy; 2026 Noble. All Rights Reserved.
   </div>
 </footer>

</body>
</html>
