<!DOCTYPE html>
<html>
<title>Web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="w3-light-grey">

<div class="w3-content" >

    <!-- Header -->
    <?php include "Header.php"; ?>


    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry HTML -->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="img/desktop.png" alt="desktop" style="width:100%">
                <div class="w3-container">
<!--                    <h3><b>HTML</b></h3>-->
<!--                    <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>-->
<!--here should show json-->
                <!-- json Start -->
                <script>
                    var list =[{name:'HTML'}, {name:'XML'}, {name:'JSON'},{name:'CSS'},{ name:'jiji2'}];
                    var htmlStart =
                        ' <div class="w3-card-4 w3-margin w3-white">'+
                        ' <img src="img/desktop.png" alt="desktop" style="width:100%">  <div class="w3-container">';
//                    var htmlEnd= '<span>Sed mattis nunc</span></li>';
                    console.log('aaaaaaaaaaaaaa');
                    for (var i=0;i<list.length;i++)
                    {
                        var html= htmlStart + list[i].name;
                        $(".we-ul").append(html);
                        console.log('fghjkhubgfvcdxb');
                    }

                </script>
                <!-- json  End -->
              </div>
                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageHTML.php"><b>READ MORE »</b></a></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Blog entry  XML-->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="img/xml.jpg" alt="Xml" style="width:100%">
                <div class="w3-container">
                    <h3><b>XML</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageXML.php"><b>READ MORE »</b></a></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->

            <!-- Blog entry  JSON-->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="img/xml.jpg" alt="Xml" style="width:100%">
                <div class="w3-container">
                    <h3><b>JSON</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageJSON.php"><b>READ MORE »</b></a></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->

            <!-- Blog entry  SASS-->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="img/xml.jpg" alt="Xml" style="width:100%">
                <div class="w3-container">
                    <h3><b>SASS</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageSASS.php"><b>READ MORE »</b></a></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->

            <!-- Blog entry  CSS-->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="img/xml.jpg" alt="Xml" style="width:100%">
                <div class="w3-container">
                    <h3><b>CSS</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><a href="PageCSS.php"><b>READ MORE »</b></a></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- Introduction menu -->
        <div class="w3-col l4">
            <!-- About Authors -->
            <div class="w3-card-2 w3-margin w3-margin-top">
                <img src="img/authors.jpg" alt="body" style="width:100%">
                <div class="w3-container w3-padding">
                <h4>About Authors</h4>
                </div>
                <div class="w3-container w3-white">
                    <h4><b>Alexandra</b></h4>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.<br></p>
                    <h4><b>Catalina</b></h4>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog</p>
                </div>
            </div><hr>

            <!-- Posts -->
            <div class="w3-card-2 w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>

                <ul class="w3-ul w3-hoverable w3-white">
<!--                    <li class="w3-padding-16">-->
<!--                        <img src="img/desktop2.png" alt="desktop" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large">HTML</span><br>-->
<!--                        <span>Sed mattis nunc</span>-->
<!--                    </li>-->
<!---->
<!--                    <li class="w3-padding-16">-->
<!--                        <img src="img/xml2.jpg" alt="Xml" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large">Xml</span><br>-->
<!--                        <span>Praes tinci sed</span>-->
<!--                    </li>-->
<!--                    <li class="w3-padding-16">-->
<!--                        <img src="img/json2_logo-555px.png" alt="JSON" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large">JSON</span><br>-->
<!--                        <span>Ultricies congue</span>-->
<!--                    </li>-->
<!--                    <li class="w3-padding-16 w3-hide-medium w3-hide-small">-->
<!--                        <img src="img/css.jpg" alt="css" class="w3-left w3-margin-right" style="width:50px">-->
<!--                        <span class="w3-large">CSS</span><br>-->
<!--                        <span>Lorem ipsum dipsum</span>-->
<!--                    </li>-->
                </ul>

            </div>
            <hr>
            <!-- json Start -->
            <script>
                var list =[{name:'HTML'}, {name:'XML'}, {name:'JSON'},{name:'CSS'},{ name:'jiji2'}]; <!-- doesn`t` work -->
                var htmlStart =
                    '<li class="w3-padding-16">'+
                    '<img src="img/desktop2.png" alt="desktop" class="w3-left w3-margin-right" style="width:50px">';
                var htmlEnd= '<span>Sed mattis nunc</span></li>';
                console.log('aaaaaaaaaaaaaa');
                for (var i=0;i<list.length;i++)
                {
                    var html= htmlStart + list[i].name+ htmlEnd;
                    $(".we-ul").append(html);
                    console.log('fghjkhubgfvcdxb');
                }

            </script>
            <!-- json  End -->

            <!-- Labels / tags -->
            <div class="w3-card-2 w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                    <p><span class="w3-tag w3-light-grey w3-margin-bottom">HTML</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">footer</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Web</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">link</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">tag</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">JSON</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">XML</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">img</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">HTTP</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">header</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">css</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">body</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">SASS</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">www</span>
                    </p>
                </div>
            </div>

            <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
    </div><br>

    <!-- END w3-content -->
</div>
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
    <p>&copy; 2017 by Alexandra Damaschin & Catalina Avram</p>
</footer>
</body>
</html>
