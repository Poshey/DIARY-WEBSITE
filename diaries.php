<!DOCTYPE html>
<html>
<head>
    <title>Diary Entries</title>
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
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            background: url(bg.jpg) no-repeat center;
            background-size: cover;
            padding: 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            width: 100%;
            height: 13%;
            position: fixed;
            top: 0;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: 1000; 
        }
        .slogo {
            width: 100px; 
            height: auto; 
        }
        nav ul.links {
            list-style-type: none;
        }
        nav ul.links li {
            display: inline;
            margin-right: 20px; 
        }
        nav ul.links li a {
            text-decoration: none;
            color: #FBFADA; 
        }
        nav ul.links li a:hover {
            text-decoration: underline;
        }
        h2 {

            margin-top: 7%;
            color: white;
            font-size: 50px;

           
        }
        .entries-container {
            display: flex;
            flex-direction: column; 
            align-items: center; 
            gap: 20px;
            width: 100%; 
            max-width: 800px; 
            margin-top: 30px; 
        }
        .entry {
            width: 100%; 
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #FBFADA;
            text-align: left;
        }
        .entry p {
            margin: 10px 0;
        }
        .entry .date {
            font-weight: bold;
        }
        .entry .title {
            color: #333;
            font-size: 18px;
            margin-top: 5px;
        }
        .entry .content {
            color: #666;
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

<h2>Diary Entries</h2>

<div class="entries-container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trois";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT date, title, content FROM diary";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="entry">';
        echo '<p class="date">Date: ' . $row["date"] . '</p>';
        echo '<p class="title">Category: ' . $row["title"] . '</p>';
        echo '<p class="content">Content: ' . $row["content"] . '</p>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div>
</body>
</html>
