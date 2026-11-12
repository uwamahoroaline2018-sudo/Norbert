<!DOCTYPE html>
<html>
<head>
  <title>
    Noble
  </title>
  <link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
<header>
<br><br>
  <nav>


  <ul class="menuu">
    <li><a onclick="home()" style="padding: 7px 40px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    HOME
    </a>
    <script>
      function home(){
          window.location.href = "home.php";
        }
    </script></li>
   <div class="v-linee"></div>
    <li><a onclick="audio()" style="padding: 7px 40px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    AUDIOS
    </a>

    <script>
      function audio(){
          window.location.href = "favorite-audio.php";
        }
    </script></li>
   <div class="v-linee"></div>
    <li><a onclick="video()" style="padding: 7px 40px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    VIDEOS
    </a>
    <script>
      function video(){
          window.location.href = "favorite-videos.php";
        }
    </script></li>
    <div class="v-linee"></div>
    <li><a onclick="imag()" style="padding: 7px 40px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    IMAGES
    </a>
    <script>
      function imag(){
          window.location.href = "favorite-images.php";
        }
    </script></li>
    </ul>

    
    </nav>

</header>
<br>
<hr>

<center><h1 style="font-size: 30px;font-family: Arial;font-weight: bold;">Press to watch One of my favorite Video songs here</h1></center>
<div class="layout">

<aside class="left">


<div class="lagos">

        <a href="https://www.facebook.com/norbert.1749" target="_blank">
        <img src="fbb.png" class="logoo" alt="Facebook">
        </a>
            <br><br>
        <a href="www.instagram.com/iam_noble_01" target="_blank">
        <img src="ig.jpg" class="logoo" alt="Instagram">
        </a>
          <br><br>
          
        <a href="https://wa.me/250787164564" target="WhatsApp">
        <img src="tsap.png" class="logoo" alt="Facebook">
        </a><br><br>

        <a href="https://www.tiktok.com/@noble_403?_r=1&_t=ZN-9AK4k0YWeaV" target="TikTok">
        <img src="tok.jpg" class="logoo" alt="TikTok">
        </a><br><br>

        <a href="www.youtube.com/@norbertrw" target="YouTube">
        <img src="yutube.png" alt="YouTube">
        </a>
    

    
  </div>

</aside>

<div class="v-line"></div>

 <main class="center">


<div class="vid-wrap">
  <video id="mainPlayer" controls></video>
  <div class="vid-list" id="vidList">
    <div class="vid-item" onclick="playVideo(this, 'Nasara_by_Meddy__[Official_Video](720p).mp4')">Nasara_by_Meddy__[Official_Video]<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Holy_Spirit_By_Meddy_[Official_Video](720p).mp4')">Holy_Spirit_By_Meddy_[Official_Video]<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Meddy_-_Niyo_Ndirimbo_ft_Adrien_Misigaro__Official_Video_(720p).mp4')">Meddy_-_Niyo_Ndirimbo_ft_Adrien_Misigaro__Official_Video_(720p)<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Diamond_Platnumz_-_Ntampata_Wapi__Official_Video_HD_(720p).mp4')">Diamond_Platnumz_-_Ntampata_Wapi__Official_Video<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Marioo___Element_Eleéeh_-_Njozi__Official_Music_Video_(720p).mp4')">Marioo___Element_Eleéeh_-_Njozi__Official_Music_Video<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Ni_Yesu___Buravan__official_Music_Video_(720p).mp4')">Ni_Yesu___Buravan__official_Music_Video_(720p)<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Nkwite_Nde_By_Adrien_ft_The_Ben_[Official_Video](720p).mp4')">Nkwite_Nde_By_Adrien_ft_The_Ben_[Official_Video]<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Ntacyo_Nzaba_by_Adrien_ft_Meddy__Official_Video_(720p).mp4')">Ntacyo_Nzaba_by_Adrien_ft_Meddy__Official_Video_(720p)<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'See_u_again👋🏻.mp4')">See_u_again👋🏻<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Shaffy_-_Sèrela__Official_Music_Video_(720p).mp4')">Shaffy_-_Sèrela__Official_Music_Video_(720p)<span>PLaY</span></div>

    <div class="vid-item" onclick="playVideo(this, 'Utah_Nice_ft._Chriss_Eazy_-_MY_MiND__Official_Video_(720p).mp4')">Utah_Nice_ft._Chriss_Eazy_-_MY_MiND__Official_Video<span>PLaY</span></div>

  </div>
</div>









 

<script>
  function playVideo(el, src){
    let player = document.getElementById('mainPlayer');
    let items = document.querySelectorAll('.vid-item');

    items.forEach(i=>{ i.classList.remove('active'); i.querySelector('span').innerHTML='PLaY';});

    el.classList.add('active');
    el.querySelector('span').innerHTML='PLaYING/Pause';

    if(player.src.endsWith(src) && !player.paused)
    {
      player.paused();
      el.querySelector('span').innerHTML='PLaY';
    }else{
      player.src = src;
      player.classList.add('show');
      player.play();
    }

    player.onended = ()=>{
      el.querySelector('span').innerHTML='PLaY';
      el.classList.remove('active');
    }
  }
</script>
</main>



<div class="v-line"></div>

<aside class="right">

  <div class="lagos">

    <h1>N</h1><br><br>
    <h1>O</h1><br><br>
    <h1>B</h1><br><br>
    <h1>L</h1><br><br>
    <h1>E</h1><br><br>


    
    
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
