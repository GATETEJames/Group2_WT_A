<!DOCTYPE html>
<html lang="en">
<head>
    <!--mugisha danny 222008471-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
.container {
    max-width: 600px;
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
/*<!--mugisha danny 222008471-->*/
.contact-methods {
    display: flex;
    justify-content: space-between;
}

.contact-method {
    flex: 1;
    background-color: #f2f2f2;
    border-radius: 5px;
    padding: 20px;
    margin: 0 10px;
}

.contact-method h2 {
    margin-bottom: 10px;
    color: #333;
}

.contact-method p {
    color: #666;
}

    </style>
</head>
<body>
    <!--mugisha danny 222008471-->
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
<div class="container">
    <h1>Contact Us</h1>
    <div class="contact-methods">
        <div class="contact-method">
            <h2>Call Us</h2>
            <p>Phone: 123-456-789</p>
        </div>
        <div class="contact-method">
            <h2>Mail Us</h2>
            <p>Email: group2@gmail.com</p>
        </div>
        <div class="contact-method">
            <h2>Visit Us</h2>
            <p>Address: TUMBA, Huye City, Rwanda</p>
        </div>
    </div>
</div>

</body>
</html>
