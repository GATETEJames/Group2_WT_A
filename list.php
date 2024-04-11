<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple List</title>
    <style>
        /* Resetting default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
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
/* List container */
.list-container {
  max-width: 400px;
  margin: 20px auto;
}

/* Simple list */
.simple-list {
  list-style: none;
}

/* List items */
.simple-list li {
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 10px;
}

/* List item hover effect */
.simple-list li:hover {
  background-color: #ddd;
  cursor: pointer;
}

    </style>
</head>
<body>
<div class="head"> 
        <p>group2_A</p>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="tables.php">Tables</a>
        <a href="form.html">Form</a>
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
<div class="list-container">
    <ul class="simple-list">
      GROUP 2 MEMBERS
        <li>Daniel HABIYAREMYE  222007495</li>
        <li>Bonheur ITANGISHAKA 222009138</li>
        <li>Yvette NIYOGITANGAZA  222010460</li>
        <li>Ruth MUHAWENAYO 222007339</li>
        <li>Danny MUGISHA 222008471</li>
        <li>Yvonne IMANIRAGENA  222010062</li>
        <li>Yves GATETE MUGISHA 222002611</li>
        <li>Aliane UMUTONIWASE  222003979</li>
        <li>James GATETE  222002143</li>
        <li>Prince IGIHOZO  222003087</li>
    </ul>
</div>

</body>
</html>
