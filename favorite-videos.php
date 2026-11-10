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
    
   
    <a  onclick="logout()" style="padding: 7px 40px;border-radius: 7px;border: none;font-weight: bold;font-style: italic;cursor: pointer;">
    
      Logout
    </a>

    <script>
      function logout(){
        if (confirm("Are you want to logout?")) {
          localStorage.clear();
          sessionStorage.clear();
          window.location.href = "first.php";
        }
      }
    </script>

  </ul>
    </nav>
</header>
<br>
<hr>

<center><h1 style="font-size: 30px;font-family: Arial;font-weight: bold;">Press to watch One of my favorite Video songs here</h1></center>
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
