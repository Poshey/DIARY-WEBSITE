<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Photo Gallery</title>
<style>
    
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  
  background: url(bg.jpg) no-repeat center;
  background-size: cover;
}
    .container {
        
        max-width: 800px;
        margin: 7% auto;
        padding: 20px;
    }
    .photo {
        
        display: inline-block;
        width: calc(50% - 10px);
        
    }
    .photo img {
        width: 100%;
        height: auto;
    }
    .caption {
        color: white;
        font-weight: bold;
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 10px
    }
</style>


</head>






<body>


<header>
    <img class="slogo" src="trois.png" alt="logosmall"> 
    <nav>
        <ul class="links">
        <li><a href="profile.php">PROFILE</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="diaryEnt.php">SUBMIT DIARY</a></li>
            <li><a href="diaries.php">DIARIES</a></li>
            <li><a href="login.php">LOG OUT</a></li>
         </ul>
     </nav>
     
</header>

<div class="container">

    <div class="photo">
        <img src="gallery/photo1.jpg" alt="Photo 1">
        <div class="caption">They are my friends if they call us quadro because when you have a problem they are ready to sympathize with your feelings.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo2.jpg" alt="Photo 2">
        <div class="caption">This picture I have is of me with my family and this picture represents the love and support that I have always received from my family.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo3.jpg" alt="Photo 3">
        <div class="caption">This picture with my bff in the classroom.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo4.jpg" alt="Photo 4">
        <div class="caption">Our memorable moment as part of CITE department</div>
    </div>

    <div class="photo">
        <img src="gallery/photo5.jpg" alt="Photo 5">
        <div class="caption">This is my Auntie taking us to a Japanese Restaurant with yummy sashimis and sushis</div>
    </div>

    <div class="photo">
        <img src="gallery/photo6.jpg" alt="Photo 6">
        <div class="caption">Me and my friend went to an anime convention and worshipped my idol.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo7.jpg" alt="Photo 7">
        <div class="caption">Me with my Family taking a memorable picture after the mass ended.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo8.jpg" alt="Photo 8">
        <div class="caption">My beloved one and only and my everthing, my kabit and all.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo9.jpg" alt="Photo 9">
        <div class="caption">Our bangad family, they call us bangads because we are.</div>
    </div>

    <div class="photo">
        <img src="gallery/photo10.jpg" alt="Photo 10">
        <div class="caption">The time we went to Malico with our motorcycles with the bangad family.</div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <audio controls  src="gallery/aud1.mp3"></audio> <br>
    <p class="caption">This song helps us review in peace.</p>
    <audio controls  src="gallery/aud2.mp3"></audio> <br>
    <p class="caption">This song is very special for Phinma Upang</p>
    <audio controls  src="gallery/aud3.mp3"></audio> <br>
    <p class="caption">The hymn of our school</p>
    


</div>






</body>
</html>
