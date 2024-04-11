<!-- GATETE MUGISHA Yves -->
<!-- 222002611 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Webpage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .head {
            background-color: #077287;
            padding: 10px;
            text-align: center;
        }

        .head p {
            color: #fff;
            font-weight: bold;
        }

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
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .article-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .author-info {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
            font-style: italic;
        }

        .author-info p {
            margin: 0;
        }

        .author-info p:first-child {
            margin-bottom: 10px;
        }

        .author-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
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
        <a href="forms.html">Form</a>
        <a href="list.php">List</a>
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
        <h1>Article Title</h1>
        <img src="article-image.jpg" alt="Article Image" class="article-image">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula mauris id sem tincidunt fermentum. Vivamus rutrum augue vel lorem efficitur, non consectetur nisl congue. Nullam viverra, neque ut pulvinar dignissim, enim turpis scelerisque sapien, non fringilla risus est vel est. Donec vel leo nibh. Duis condimentum ultricies eros, at blandit eros sollicitudin ac. Nulla facilisi. Phasellus ut tortor consequat, cursus lectus nec, suscipit ipsum.</p>
        
        <h2>Subheading</h2>
        <p>Aliquam scelerisque felis felis, sit amet commodo mi facilisis et. Duis sed scelerisque velit. Nulla nec elit eu nunc vehicula consectetur id eu eros. Pellentesque in nulla lectus. In hac habitasse platea dictumst. Donec congue, nunc id viverra tristique, velit mi sodales eros, eget bibendum turpis purus vel arcu. Morbi vehicula lacus vel velit posuere, nec elementum sapien finibus. Integer eu orci a lectus efficitur consequat. Vivamus malesuada magna non lectus interdum, eu suscipit justo commodo. Fusce tincidunt, libero non tempor tristique, sapien odio iaculis est, eget congue ex ex eget quam. Sed ac orci est. Curabitur mollis elit vel sapien tincidunt tincidunt.</p>

        <div class="author-info">
            <img src="author-avatar.jpg" alt="Author Avatar">
            <p><strong>GATETE MUGISHA Yves</strong></p>
            <p>Published on January 1, 2024</p>
            <p>Contact: gatetemugishayves@example.com</p>
        </div>
    </div>
</body>
</html>
