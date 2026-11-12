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
<hr>
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
<br>
<div class="v-line"></div>

 <main class="center">
  <div class="slideshow">
    <img src="_N1.jpg" class="slide active">
    <img src="_N2.jpg" class="slide">
    <img src="_N3.jpg" class="slide">
    <img src="_N4.jpg" class="slide">
    <img src="_N5.jpg" class="slide">
    <img src="_N6.jpg" class="slide">
    <img src="_N7.jpg" class="slide">
    <img src="_N8.jpg" class="slide">
    <img src="_N9.jpg" class="slide">
    <img src="_N10.jpg" class="slide">
    <img src="_N11.jpg" class="slide">
    <img src="_N12.jpg" class="slide">
    <img src="_N13.jpg" class="slide">
    <img src="_N14.jpg" class="slide">
    <img src="_N15.jpg" class="slide">
    <img src="_N16.jpg" class="slide">
    <img src="_N17.jpg" class="slide">
    <img src="_N18.jpg" class="slide">
    <img src="_N19.jpg" class="slide">
    <img src="_N20.jpg" class="slide">
    <img src="_N21.jpg" class="slide">
    <img src="_N22.jpg" class="slide">
    <img src="_N23.jpg" class="slide">
    <img src="_N24.jpg" class="slide">
    <img src="_N25.jpg" class="slide">
    <img src="_N26.jpg" class="slide">
    <img src="_N27.jpg" class="slide">
    <img src="_N28.jpg" class="slide">
    <img src="_N29.jpg" class="slide">
    <img src="_N30.png" class="slide">
    <img src="_N31.jpg" class="slide">
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
        <h3>Also find Me At:</h3>
        <div class="logos">

        <a href="https://www.facebook.com/norbert.1749" target="_blank">
        <img src="fbb.png" class="logoo" alt="Facebook">
        </a>

        <a href="www.instagram.com/iam_noble_01" target="_blank">
        <img src="ig.jpg" class="logoo" alt="Instagram">
        </a>
    
        <a href="https://wa.me/250787164564" target="WhatsApp">
        <img src="tsap.png" class="logoo" alt="Facebook">
        </a>

        <a href="https://www.tiktok.com/@noble_403?_r=1&_t=ZN-9AK4k0YWeaV" target="TikTok">
        <img src="tok.jpg" class="logoo" alt="TikTok">
        </a>

        <a href="www.youtube.com/@norbertrw" target="YouTube">
        <img src="yutube.png" alt="YouTube">
        </a>


        
    

        <br><br>
    
        <img src="call.jpg" alt="Call">: <p>+250788276912</p>
        </div>
        <center>
           <div class="footer-bottom">
    &copy; 2026 Noble. All Rights Reserved.
   </div></center>

     </div>

   </div>
 </footer>

</body>
</html>
