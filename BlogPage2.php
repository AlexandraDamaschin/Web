﻿<!DOCTYPE html>
<html> 
<title>Web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body class="w3-light-grey">

<div class="w3-content" >

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32">
        <?php include "Header.php"; ?>
    </header>

    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
            <!-- ENTRIES IN XML  -->
            <div class="w3-col l8 s12 blog-entries">
                <!-- Blog entry -->
<!--JSON CODE-->
                <?php
                ob_start();
                include('BlogEntry.php');
                $blogTemplateEntry = ob_get_clean();

                ob_start();
                include('data.xml');
                $blogData = ob_get_clean();
                ?>
                <script>
                    var xml = <?php echo json_encode($blogData);?>;
                    var template = <?php echo(json_encode($blogTemplateEntry));?>;
                    var parser = new DOMParser();
                    var xmlDoc = parser.parseFromString(xml, "text/xml");

                    var pages = xmlDoc.getElementsByTagName("page");
                    for (var i = 2; i < 5; i++) {
                        var html = template;
                        var page = pages[i];
                        html = html.replace('{$title}', page.getElementsByTagName("title")[0].childNodes[0].nodeValue);
                        html = html.replace('{$date}',  page.getElementsByTagName("date")[0].childNodes[0].nodeValue);
                        html = html.replace('{$description}',  page.getElementsByTagName("description")[0].childNodes[0].nodeValue);
                        html = html.replace('{$href}',  page.getElementsByTagName("href")[0].childNodes[0].nodeValue);
                        html = html.replace('{$link}',  page.getElementsByTagName("link")[0].childNodes[0].nodeValue);
                        html = html.replace('{$imgSrc}',  page.getElementsByTagName("imgSrc")[0].childNodes[0].nodeValue);
                        html = html.replace('{$imgAlt}',  page.getElementsByTagName("imgAlt")[0].childNodes[0].nodeValue);
                        html = html.replace('{$content}',  page.getElementsByTagName("content")[0].childNodes[0].wholeText);
                        $(".blog-entries").append(html);
                    }
                </script>
<!--            <!-- Blog entry -->
<!--                HTML CODE-->
<!--            <div class="w3-card-4 w3-margin w3-white">-->
<!--                <img src="img/json.png" alt="desktop" style="width:100%">-->
<!--                <div class="w3-container">-->
<!--                    <h3><b>JSON</b></h3>-->
<!--                    <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>-->
<!--                </div>-->
<!--                <div class="w3-container">-->
<!--                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed-->
<!--                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
<!--                    <div class="w3-row">-->
<!--                        <div class="w3-col m8 s12">-->
<!--                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageJSON.php"><b>READ MORE »</b></a></button></p>-->
<!--                        </div>-->
<!--                        <div class="w3-col m4 w3-hide-small">-->
<!--                            <p><span class="w3-padding-large w3-right"><a href="PageJSON.php"><b>Comments</b></a> <span class="w3-tag">0</span></span></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <hr>-->

<!--            <!-- Blog entry -->
<!--            <div class="w3-card-4 w3-margin w3-white">-->
<!--                <img src="img/blue.jpg" alt="blue" style="width:100%">-->
<!--                <div class="w3-container">-->
<!--                    <h3><b>CSS</b></h3>-->
<!--                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>-->
<!--                </div>-->

<!--                <div class="w3-container">-->
<!--                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed-->
<!--                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
<!--                    <div class="w3-row">-->
<!--                        <div class="w3-col m8 s12">-->
<!--                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageCSS.php"><b>READ MORE »</b></a></button></p>-->
<!--                        </div>-->
<!--                        <div class="w3-col m4 w3-hide-small">-->
<!--                            <p><span class="w3-padding-large w3-right"><a href="PageCSS.php"><b>Comments</b> </a><span class="w3-badge">2</span></span></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            -->
<!--            <!-- Blog entry -->
<!--            <div class="w3-card-4 w3-margin w3-white">-->
<!--                <img src="img/sass.png" alt="Xml" style="width:100%">-->
<!--                <div class="w3-container">-->
<!--                    <h3><b>SASS</b></h3>-->
<!--                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>-->
<!--                </div>-->
<!---->
<!--                <div class="w3-container">-->
<!--                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed-->
<!--                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
<!--                    <div class="w3-row">-->
<!--                        <div class="w3-col m8 s12">-->
<!--                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageSASS.php"><b>READ MORE »</b></a></button></p>-->
<!--                        </div>-->
<!--                        <div class="w3-col m4 w3-hide-small">-->
<!--                            <p><span class="w3-padding-large w3-right"><a href="PageSASS.php"><b>Comments</b> </a><span class="w3-badge">2</span></span></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- Introduction menu -->
        <div class="w3-col l4">
            <!-- About Card -->
<!--            HTML CODE-->
            <div class="w3-card-2 w3-margin w3-margin-top">
                <img src="img/about-authors.jpg" alt="body" style="width:100%">
                <div class="w3-container w3-padding">
                <h4>About Authors</h4>
                </div>
                <div class="w3-container w3-white">
                    <h4><b>Alexandra</b></h4>
                    <p>Engineering student :)<br> damaschin.alexandra.maria<br>@gmail.com</p>
                    <h4><b>Catalina</b></h4>
                    <p>Engineering student :)<br> maria.avram@ulbsibiu.ro</p>
                </div>
            </div><hr>

           <!-- Posts -->
            <div class="w3-card-2 w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
<!--                    <li class="w3-padding-16">-->
<!--                        -->
<!--                        <img src="img/desktop-petite.png" alt="desktop" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large"><a href="PageHTML.php">HTML</a></span><br>-->
<!--                        <span>Sed mattis nunc</span>-->
<!--                        -->
<!--                    </li>-->
<!--                        -->
<!--                    <li class="w3-padding-16">-->
<!--                        <img src="img/xml-petite.jpg" alt="Xml" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large"><a href="PageXML.php">Xml</a></span><br>-->
<!--                        <span>Praes tinci sed</span>-->
<!--                    </li>-->
<!--                    <li class="w3-padding-16">-->
<!--                        <img src="img/json-petite.png" alt="JSON" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large"><a href="PageJSON.php">JSON</a></span><br>-->
<!--                        <span>Ultricies congue</span>-->
<!--                    </li>-->
<!--                    <li class="w3-padding-16 w3-hide-medium w3-hide-small">-->
<!--                        <img src="img/blue-petite.jpg" alt="css" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large"><a href="PageCSS.php">CSS</a></span><br>-->
<!--                        <span>Lorem ipsum dipsum</span>-->
<!--                    </li>-->
                </ul>
                <!-- JSON CODE -->
                <script>
                    var list =
                        [   {name: 'HTML', href: '/Practica/PageHTML.php', img:'/Practica/img/html-small.png', alt:'html small'},
                            {name: 'XML', href: '/PracticaPageXML.php',img:'/Practica/img/xml-small.jpg', alt:'xml small'},
                            {name: 'JSON', href: '/PracticaPageJSON.php',img:'/Practica/img/json-small.png', alt:'json small'},
                            {name: 'CSS', href: '/PracticaPageCSS.php',img:'/Practica/img/css-small.jpg', alt:'css small'}];
                    var template = '<li class="w3-padding-16 w3-hide-medium w3-hide-small">' +
                        ' <img src="{$img}" alt="{$alt}" class="w3-left w3-margin-right" style="width:50px">' +
                        ' <span class="w3-large"><a href="{$href}">{$name}</a></span><br>' +
                        '<span>{$text}</span>' +
                        ' </li>';

                    for (var i = 0; i <5; i++) {
                        var html = template;
                        var entry = list[i];
                        html = html.replace('{$name}', entry.name);
                        html = html.replace('{$href}', entry.href);
                        html = html.replace('{$img}', entry.img);
                        html = html.replace('{$alt}', entry.alt);
                        html = html.replace('{$text}', entry.alt);
                        $(".w3-ul").append(html);
                    }
                </script>
            </div>
            <hr>

            <!-- Labels / tags -->
            <div class="w3-card-2 w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                    <p><span class="w3-tag w3-light-grey w3-margin-bottom "><a href="PageHTML.php">HTML</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageHTML.php">footer</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageHTML.php">Web</a></span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageJson.php">link</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageJSON.php.">tag</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageJSON.php">JSON</a></span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageSASS.php">XML</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageSASS.php">img</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageSASS.php">SASS</a></span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageHTML.php">header</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageCSS.php">css</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageHTML.php">body</a></span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageSASS.php">SASS</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href="PageHTML.php">www</a></span>
                    </p>
                </div>
            </div>

            <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
    </div><br>

    <!-- END w3-content -->
</div>
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top w3-footer-buttom">
<!--    JSON CODE-->
    <script>
        var list =
            [{ hrefPrev:'Blog.php', prev:'Previous', hrefNext:'BlogPage2.php', next:'Next'}];
        var template =
            '<button class="w3-button w3-black w3-padding-large w3-margin-bottom">' +
            '<a href="{$hrefPrev}"<b>{$prev}</b></a></button>'+'&nbsp'
            +'<button class="w3-button w3-disabled w3-black w3-padding-large w3-margin-bottom">' +
            '<a href="{$hrefNext}"<b>{$next}</b></a></button>'
            +'<p>&copy; 2017 by Alexandra Damaschin & Catalina Avram</p>';
        for (var i = 0; i <1; i++) {
            var html = template;
            var entry = list[i];
            html = html.replace('{$hrefPrev}', entry.hrefPrev);
            html = html.replace('{$prev}', entry.prev);
            html = html.replace('{$hrefNext}', entry.hrefNext);
            html = html.replace('{$next}', entry.next);
            $(".w3-footer-buttom").append(html);
        }
    </script>
</footer>
</body>
</html>
