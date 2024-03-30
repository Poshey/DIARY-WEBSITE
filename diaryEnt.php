<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Diary Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
            min-height: 100vh;
            backdrop-filter: blur(10px);
            background: url(bg.jpg) no-repeat center;
            background-size: cover;
        }
        h2 {
            color: white;
        }
        form {
            margin: 20px auto;
            width: 30%;
        }
        input[type="date"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
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

    
    <form action="diaryEnt.php" method="post">
    <h2>TELL US YOUR STORY</h2><br>
        Date: <input type="date" name="date"><br>
        Category: <input type="text" name="title"><br>
        Content: <br><textarea name="content" rows="5"></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "trois";

        
        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $stmt = $conn->prepare("INSERT INTO diary (date, title, content) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $date, $title, $content);

        
        $date = $_POST['date'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $stmt->execute();

        echo "New entry added successfully";

       
        echo '<script>window.location.href = "diaries.php";</script>';

        $stmt->close();
        $conn->close();
    }
    ?>

</body>
</html>
