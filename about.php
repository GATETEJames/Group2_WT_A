<!DOCTYPE html>
<html lang="en">
<!-------Yvonne IMANIRAGENA 222010062-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}
.head {
  background-color: #077287;
  padding: 10px;
}

.head p {
  color: #fff;
  font-weight: bold;
}
/*Yvonne IMANIRAGENA 222010062-->

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
/*Yvonne IMANIRAGENA 222010062-->
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
.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.about-content {
    margin-top: 20px;
}

.about-content p {
    margin-bottom: 20px;
    color: #666;
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
        <a href="image.html">Images</a>
        <a href="audio.html">Audio</a>
        <a href="video.html">Video</a>
        <a href="articles.php">Articles</a>
        <li class="dropdown"><a href="#">settings</a>
            <div class="dropdown-contents">
                <a href="login.html">log out</a>
                <!--Yvonne IMANIRAGENA 222010062-->
                
        </div>
    </li><center>
        <form>
             <input type="text" name="search" placeholder="Search...">
        <button type="submit">Search</button>
    </form></center>
</div>
<div class="container">
    <h1>About Us</h1>
    <!--Yvonne IMANIRAGENA 222010062-->
    <div class="about-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor quam nec nulla sollicitudin, nec aliquet sapien tristique. Ut ut lacus id nisi rutrum posuere a et nunc. Integer nec felis ac turpis placerat facilisis.</p>
        <p>Quisque eget ligula a dui efficitur hendrerit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eget consectetur enim. Sed id dui sed libero commodo ultrices. Sed malesuada nulla vitae justo placerat, id malesuada elit finibus.</p>
        <p>Donec rhoncus feugiat enim, in feugiat mauris vehicula id. Mauris aliquam orci ac justo blandit fringilla. Etiam id aliquet dui. Suspendisse vel ex at lacus mattis pretium. In hac habitasse platea dictumst. In congue justo eget justo laoreet, a ultricies turpis rhoncus.</p>
    </div>
</div>

</body>
</html>
