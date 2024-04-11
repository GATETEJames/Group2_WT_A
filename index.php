<!DOCTYPE html>
<html>
<head>
    <title>Navigation and Flash Cards</title>
    <style>
       /* Resetting default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

/* Head styles */
.head {
  background-color: #077287;
  padding: 10px;
}

.head p {
  color: #fff;
  font-weight: bold;
}

/* Navigation styles */
.head > a {
  display: inline-block;
  margin-right: 10px;
  text-decoration: none;
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
  background-color: #077287;
  transition: background-color 0.3s ease;
}

.head > a:hover {
  background-color: #003d80;
}
.dropdown{
    position: right;
    display: inline-block;
    direction: rtl;
}
.dropdown-contents{
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}
.dropdown-contents a{
color: black;
padding: 12px 18px;
text-decoration: none;
display: block;
}
.dropdown-contents a:hover{
    background-color: #ddd;
}
.dropdown:hover .dropdown-contents{
    display: block;
}
/* Flash card styles */
.flash-card {
  display: inline-block;
  margin: 10px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.flash-card h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.flash-card p {
  color: #333;
}

.flash-card button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.flash-card button:hover {
  background-color: #0056b3;
}

    </style>
</head>
<body>


<div class="head"> 
        <p>group2_A</p>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="Tables.html">Tables</a>
        <a href="forms.html">Form</a>
        <a href="list.html">List</a>
        <a href="images.html">Images</a>
        <a href="audio.html">Audio</a>
        <a href="video.html">Video</a>
        <a href="articles.php">Articles</a>
        <li class="dropdown"><a href="#">settings</a>
            <div class="dropdown-contents">
                <a href="login.html">log out</a>
                
        </div>
    </li><center>
        <form>
             <input type="text" name="search" placeholder="Search...">
        <button type="submit">Search</button>
    </form></center>
</div>

<div>
    <div>
        <?php
        // Display first three flash cards in a horizontal line
        for ($i = 1; $i <= 3; $i++) {
            echo '<div class="flash-card">';
            echo '<h3>Flash Card ' . $i . '</h3>';
            echo '<p>This is a sample flash card. You can add any content here.</p>';
            echo '<button onclick="showMore(\'flash' . $i . '\')">Learn More</button>';
            echo '</div>';
        }
        ?>
    </div>

    <div>
        <?php
        // Display next three flash cards in a horizontal line
        for ($i = 4; $i <= 6; $i++) {
            echo '<div class="flash-card">';
            echo '<h3>Flash Card ' . $i . '</h3>';
            echo '<p>This is a sample flash card. You can add any content here.</p>';
            echo '<button onclick="showMore(\'flash' . $i . '\')">Learn More</button>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<script>
    function showMore(cardId) {
        // Implement logic to show more content for the clicked flash card
        alert("More content for " + cardId);
    }
</script>

</body>
</html>
