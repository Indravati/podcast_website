<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="playlist.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <title>Podcast Playlist </title>
    </head>
    <body>
      <h1>SELF HELP</h1>
      <header>
    <!-- <ul>
      <li>Radiolab: Ghosts</li>
      <li>Stuff You Should Know: How Tsunamis Work</li>
      <li>Horror cast</li>
      <li>Serial: Season 1, Episode 1 "The Alibi"</li>
      <li>TED Radio Hour: The Power of Design</li>
      <li>Horror crew</li>
      <li>This American Life: Tell Me I'm Fat</li>
      <li>Hidden Brain: The Art of Friendship</li>
      <li>The Joe Rogan Experience: Elon Musk</li>
      <li>Criminal: Money Tree</li>
    </ul> -->
    <ul>
      <!-- <div class="menu_song"> -->
    <li class="songItem">

    <div class="lefty">
      <span>01</span>
      <img src="img4/1.jpg" alt="">
      <h5>Fighting that "Meh" Feeling of Languishing</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="1"></i>
  </li>

  <li class="songItem" >
    <div class="lefty">
      <span>02</span>
      <img src="img4/2.jpg" alt="">
      <h5>Finding a new Hobby</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="2"></i>
  </li>

  <li class="songItem">
    <div class="lefty">
      <span>03</span>
      <img src="img4/3.jpg" alt="">
      <h5>Ditch The Hedonic Treadmill For Sustainable Success</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="3"></i>
  </li>

  <li class="songItem">
    <div class="lefty">
      <span>04</span>
      <img src="img4/4.jpg" alt="">
      <h5>The Science & Process of Healing from Grief</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="4"></i>
  </li>


  <li class="songItem">
    <div class="lefty">
      <span>05</span>
      <img src="img4/5.jpg" alt="">
      <h5>Overcoming the Lack of Approval and Fear of Judgment </h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="5"></i>
  </li>

  <li class="songItem">
    <div class="lefty">
      <span>06</span>
      <img src="img4/6.jpg" alt="">
      <h5>Five Simple Steps To Reduce Anxiety, Stress and Toxic Thinking</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="6"></i>
  </li>

  <li class="songItem">
    <div class="lefty">
      <span>07</span>
      <img src="img4/7.jpg" alt="">
      <h5>On the antidote to being afraid of the work</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill righty" id="7"></i>
  </li>

  <li class="songItem">
    <div class="lefty">
      <span>08</span>
      <img src="img4/8.jpg" alt="">
      <h5>Owning Yourself - Being fully embodied and unapologetically yourself</h5>
    </div>
      <i class="bi PlaylistPlay  bi-play-circle-fill" id="8"></i>
  </li>
  <!-- </div> -->
</ul>

  <div class="master_play">
    <div class="wave" id="wave">

        <div class="wave1"></div>
        <div class="wave1"></div>
        <div class="wave1"> </div>
    </div>
    <img src="img4/1.jpg" alt="" id="poster_master_play">
    <h5 id="title">Fighting that "Meh" Feeling of Languishing
        <div class="subtitle">Podcast</div>
    </h5>
    <div class="icon">
        <i class="bi shuffle bi-music-note-beamed">next</i>
        <i class="bi bi-skip-start-fill" id="back"></i>
        <i class="bi bi-play-fill" id="masterPlay"></i>
        <i class="bi bi-skip-end-fill" id="next"></i>
        <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
    </div>

    <span id="currentStart"> 0:00 </span>

    <div class="bar">
        <input type="range" id="seek" min="0" max="100">
        <div class="bar2" id="bar2"> </div>
        <div class="dot"> </div>
    </div>
    <span id="currentEnd"> 0.30 </span>
    <div class="vol">
        <i class="bi bi-volume-up-fill" id="vol_icon"></i>
        <input type="range" min="0" max="100" id="vol">
        <div class="vol_bar"> </div>
        <div class="dot" id="vol_dot"> </div>
    
    </div>
</header>
<script src="playlist4.js"></script>



</body>
</html>
  