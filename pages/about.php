<?php
$page_title = "About Us";
$active_about = "active";
include('../partials/header.php'); ?>

<!-- contact -->
<div class="contact-agile">
 <div class="faq">
  <h4 class="latest-text w3_latest_text">About Us</h4>
  <div class="container">
   <h2>One Movies</h2>
   <div id="about">
    <div class="row">
     <p> Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design</p>
     <h4><b>Design by </b><a href="//w3layouts.com/" target="_blank">W3layouts</a> .</h4>
     <h4><b>Developed by </b> <a href="//bit.ly/35y9nxq" target="_blank">Younes Mahmoud</a></h4>
    </div>
    <div class="row about-younes">
     <div class="col-sm-4 col-md-4">
      <img src="/partials/images/younes-mahmoud.jpg" alt="younes-mahmoud" class="younes-mahmoud">

     </div>
     <div class="col-sm-8 col-md-8">
      <h3>Hi</h3>
      <p>
       My Name is Younes Mahmoud. I'm from Egypt. <br>
       I have B.Sc in Computer Science at 2019 from Faculty of Science at Sohag University. <br>
       I started my career as a php web developer at upwork.<br>
       And all people know me that I'm an enthusiast and an accurate man .<br><br>

       I have skills in :
       <ul>

        <li> <b>web design:</b> HTML5,CSS3,Bootstrap, Js and Jquery.</li>
        <li> <b>web development: </b> MySql, PHP and Laravel framework.</li>
        <li> <b>others :</b> git & github and linux.</li>
       </ul>
      </p>
      <div class="social-younes"> <a href="mailto:youns3510@gmail.com">Gmail</a> | <a href="//bit.ly/35y9nxq">Github</a> | <a href="https://www.upwork.com/freelancers/~01880919d0a2fcd4b5?viewMode=1" target="_blank" rel="noopener noreferrer">Upwork</a>
      </div>
     </div>
    </div>
    <hr>
    <div class="struct">

     <h3>Structure</h3>
     <div class="row">
      <div class="col-sm-6 col-md-6">
     
       <ul>
        <li>
         <b class="heading">Admin Panel:</b>
         <ul class="heading-ul">
          /dashboard/
          <li>controllers/
           <ul>
            <li>movieController.php </li>
           </ul>
          </li>
          <li>includes/
           <ul>
            <li>dist/ </li>
            <li>plugins/</li>
            <li>config_paging.php</li>
            <li>pagination.php</li>
            <li>db.php</li>
            <li>footer.php</li>
            <li>header.php</li>
            <li>star_rating.php</li>

           </ul>
          </li>
          <li>pages/
           <ul>
            <li>movies/
             <ul>
              <li>index.php</li>
              <li>upload.php</li>
              <li>edit.php</li>
              <li>delete.php</li>
             </ul>
            </li>

            <li>404.php</li>
            <li>login.php</li>
            <li>logout.php</li>
            <li>search.php</li>

           </ul>
          </li>
          <li>index.php</li>
          <li>.htaccess</li>
         </ul>
        </li>


       </ul>
      <small>- admin can upload,edit,delete and view all movies. <br>
        - admin can search for a movie</small>
      </div>
      <div class="col-sm-6 col-md-6">

       <ul>
        <li><b class="heading">User Interface:</b>

         <ul class="heading-ul">
          <li>/pages/
           <ul>
            <li>404.php</li>
            <li>about.php</li>
            <li>contact.php</li>
            <li>genres.php</li>
            <li>list.php</li>
            <li>search.php</li>
            <li> single.php</li>
           </ul>
          </li>
          <li>/partials/
           <ul>
            <li>css/</li>
            <li>js/</li>
            <li>uploads/</li>
            <li>config_paging.php</li>
            <li>pagination.php</li>
            <li>footer.php</li>
            <li>header.php</li>
           </ul>
          </li>
          <li>/.htaccess</li>
          <li>/constants.php</li>
          <li>/index.php</li>
          <li>/Mail/
           <ul>
            <li>functions.php</li>
            <li>footer.php</li>
            <li>header.php</li>
            <li> send.php</li>
            <li>thanks.php</li>
           </ul>
          </li>
         </ul>
        </li>
       </ul>
      </div>
     </div>


    </div>


   </div>
  </div>
 </div>
</div>

<!-- //contact -->
<?php 
include('../partials/footer.php'); ?>