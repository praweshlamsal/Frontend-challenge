<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<?php include"common/header.php" ?>

<body style="height: 100%;">
 <section style="height:100%;overflow:hidden;">
    <?php include"common/nav.php" ?>
    <section class="home">
     <div class="content">
       <div class="content-box">
         <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
         <h6> Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</h6>
       </div>
     </div>
     <div class="point-down">
       <div class="pointer">
       <i class="fa fa-angle-down fa-3x" aria-hidden="true"></i>
       </div>
     </div>
     <div class="overlay"></div>
    </section>
 </section>
 <section class="music-player">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <div class='music-card playing'>
          
          <div class='image'></div>
          
          <div class='wave'></div>
          <div class='wave'></div>
          <div class='wave'></div>
          
          <div class='info'>
            <h2 class='title'>Chup Lag</h2>
            <div class='artist'>Laure</div>
          </div>
          
          <i class="fa fa-pause trigger" aria-hidden="true"></i>
          <i class="fa fa-play trigger" aria-hidden="true"></i>
        </div>
        </div>
        <div class="col-md-8">
          <div class="image-collection" id="images1">
            <div class="item">
              <img src="img/laurespicture/img1.jpg" alt="">
              <!-- <div class="overlay-gallery"></div> -->
            </div>
            <div class="item">
              <img src="img/laurespicture/img2.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img9.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img4.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img5.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img6.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img7.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img8.jpg" alt="">
            </div>
            <div class="item">
              <img src="img/laurespicture/img10.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="direction"></div>
 </section>
 <section class="video">
  <div class="wrapper">
   <div class="video-title">
     <div class="title-bar">
     <div class="title-name">
     <h1>LATEST RELEASES</h1>
     </div>
     </div>
   </div>
   <div class="laptop">
     <!-- <img src="img/laptop.jpg" alt=""> -->
       <div class="video-content">
          <iframe src="https://www.youtube.com/embed/WPlY7K_MOJo" frameborder="0" allowfullscreen></iframe>
        </div>
   </div>
   </div>
   <div class="direction"></div>
 </section>
 <section class="follow">
   <div class="follow-collection" id="images2">
     <div class="follow-item">
        <!-- <img src="img/laurespicture/img1.jpg" alt=""> -->
        <div class="follow-item-content">
        <h3>YOUTUBE</h3>
        </div>
     </div>
     <div class="follow-item">
        <!-- <img src="img/laurespicture/img2.jpg" alt=""> -->
        <div class="follow-item-content">
        <h3>INSTAGRAM</h3>
        </div>
     </div>
     <div class="follow-item">
        <!-- <img src="img/laurespicture/img4.jpg" alt=""> -->
        <div class="follow-item-content">
        <h3>SOUNDCLOUD</h3>
        </div>
     </div>
     <div class="follow-item">
        <!-- <img src="img/laurespicture/img5.jpg" alt=""> -->
        <div class="follow-item-content">
        <h3>FACEBOOK</h3>
        </div>
     </div>
   </div>
 </section>
 <section class="bio">
   <div class="bio-details">
     <div class="bio-pic">
       <!-- <img src="img/laurespicture/img12.jpg" alt=""> -->
       <div class="bio-overlay">
         <div class="bio-content">
           <div class="bio-title" align="center">
             <h2>Ashish Rana</h2>
             <h3><i>LAURE</i></h3>
           </div>
         </div>
       </div>
     </div>
     <div class="bio-text">
        <div class="bio-description" align="center">
        <h4>BIOGRAPHY</h4>
       <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she has arrived heaven. </p>
       </div>
     </div>
   </div>
 </section>
 <section class="concert">
   <video poster="#" id="bgvid" playsinline autoplay muted loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<!-- <source src="bg.webm" type="video/webm"> -->
<source src="video/bg.mp4" type="video/mp4">
</video>
<div class="time-wrapper">
      <div class="video-title">
           <div class="title-bar">
           <div class="title-name">
           <h1>CONCERT</h1>
           </div>
           </div>
      </div>
      <div class="in-tab">
         <div class="tab-wrapper">
            <button class="tablinks1" onclick="opentab(event,'past')">PAST EVENTS</button>
            <button class="tablinks1" id="defaultOpen" onclick="opentab(event,'upcoming')">UPCOMING EVENTS</button>
          </div> 
      </div>
       <div class="wrapping content" id="past">
        <?php for($i=0;$i<4;$i++):?>
          <div class="concert-wrapper">
         <div class="concert-content" align="center">
           <div class="date">
             <h1>21</h1>
           </div>
           <div class="month">
             <h3>JUNE</h3>
           </div>
           <div class="location">
             <h3>JHAPA</h3>
           </div>
           <div class="concert-detail">
             Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
         </div>
       </div>
      </div> 
        <?php endfor;?>
     </div>  
     <div class="wrapping content" id="upcoming">
        <?php for($i=0;$i<4;$i++):?>
          <div class="concert-wrapper">
         <div class="concert-content" align="center">
           <div class="date">
             <h1>21</h1>
           </div>
           <div class="month">
             <h3>JUNE</h3>
           </div>
           <div class="location">
             <h3>JHAPA</h3>
           </div>
           <div class="concert-detail">
             Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
         </div>
       </div>
      </div> 
        <?php endfor;?>
     </div>  
 </div>
 </section>
 <?php include"common/footer.php" ?>
<?php include"common/below.php" ?>
</body>

</html>
