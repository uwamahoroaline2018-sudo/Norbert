<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="slideshow">
    <img src="_N1.jpg" class="slide active">
    
    <img src="_N3.jpg" class="slide">
   
    <img src="_N5.jpg" class="slide">
    <img src="_N6.jpg" class="slide">
    <img src="_N7.jpg" class="slide">
    
    <img src="_N9.jpg" class="slide">
    <img src="_N10.jpg" class="slide">
    
    <img src="_N12.jpg" class="slide">
    <img src="_N13.jpg" class="slide">
    
    <img src="_N15.jpg" class="slide">
    <img src="_N16.jpg" class="slide">
    <img src="_N17.jpg" class="slide">
    <img src="_N18.jpg" class="slide">
    <img src="_N19.jpg" class="slide">
    <img src="_N20.jpg" class="slide">
    <img src="_N21.jpg" class="slide">
    <img src="_N22.jpg" class="slide">
  </div>

  <script>
    let index = 0;
    const slides =  document.querySelectorAll('.slide');

    setInterval(() =>{
      slides[index].classList.remove('active');
      index = (index + 1) % slides.length;
      slides[index].classList.add('active');
    }, 4000);
  </script>

</main>

<div class="v-line"></div>

<aside class="right">

  <div class="lagos">

    <a href="" class="image-link">
      <img src="_NELE.jpg" alt="Fav Producer" >
      <span class="caption">Fav Producer</span>

    </a>

    
    
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
