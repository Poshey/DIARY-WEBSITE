<?php
session_start();
include('config.php');

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM profile WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $full_name = $row['Full Name'];
        $address = $row['Address'];
        $course = $row['Course'];
        $bio = $row['BIO'];
        $video_url = $row['Video'];
    } else {
        $full_name = "Not available";
        $address = "Not available";
        $course = "Not available";
        $bio = "Not available";
        $video_url = "https://www.youtube.com/embed/dQw4w9WgXcQ"; 
    }
} else {
    
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Profile</title>




</head>



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




<body>
    <div class="video-container">
        <iframe width="560" height="315" src="<?php echo $video_url; ?>" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="information">
        <h2><?php echo $full_name; ?></h2>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
        <p><strong>Bio:</strong> <?php echo $bio; ?></p>
        <audio controls autoplay src="mine.mp3"></audio>
    </div>


</body>


</html>
