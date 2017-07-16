<!DOCTYPE html>
<html>
<title>Web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stickystylesheet.css">
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
        <div class="w3-card-4 w3-margin w3-white blog-entries pages-entries">
            <!-- Blog entry -->
            <?php
            ob_start();
            include('PageEntry.php');
            $pageTemplateEntry = ob_get_clean();

            ob_start();
            include('dataPage.xml');
            $pageData = ob_get_clean();
            ?>
            <script>
                $(function () {
                    var xml = <?php echo json_encode($pageData);?>;
                    var template = <?php echo(json_encode($pageTemplateEntry));?>;
                    var parser = new DOMParser();
                    var xmlDoc = parser.parseFromString(xml, "text/xml");

                    var pages = xmlDoc.getElementsByTagName("page");
                    for (var i = 3; i < 4; i++) {
                        var html = template;
                        var page = pages[i];
                        html = html.replace('{$imgSrc}', page.getElementsByTagName("imgSrc")[0].childNodes[0].nodeValue);
                        html = html.replace('{$imgAlt}', page.getElementsByTagName("imgAlt")[0].childNodes[0].nodeValue);
                        html = html.replace('{$title}', page.getElementsByTagName("title")[0].childNodes[0].nodeValue);
                        html = html.replace('{$stands}', page.getElementsByTagName("stands")[0].childNodes[0].nodeValue);
                        html = html.replace('{$description}', page.getElementsByTagName("description")[0].childNodes[0].nodeValue);
                        html = html.replace('{$date}', page.getElementsByTagName("date")[0].childNodes[0].nodeValue);
                        html = html.replace('{$text}', page.getElementsByTagName("text")[0].childNodes[0].nodeValue);
                        $(".pages-entries").append(html);
                    }

                });
            </script>
        </div>
            <!-- sticky notes -->
            <ul id="listasticky">
                <li class="blueM elementsticky"><a href=""><h20>#titanic {</h20><p class="aliniere">float : none;<br><br> }</p></a></li>
                <li class="yellowM elementsticky"><a href="" ><h20>#wife {</h20><p class="aliniere">right: 100%; <br>margin: 0;<br><br> }</p></a></li>
                <li class="greenM elementsticky"><a href="" ><h20>#tower-of-pisa {</h20><p class="aliniere">font-style:italic;<br> }</p></a></li>
                <li class="purpleM elementsticky"><a href="" ><h20>.ninja {</h20><p class="aliniere">color:black;<br>visibility:hidden;<br>animation-duration:0.00005s; }</p></a></li>
                <li class="pinkM elementsticky"><a href="" ><h20>Title #5</h20><p class="aliniere">Text Content #5</p></a></li>
                <li class="greenM elementsticky"><a href="" ><h20>Title #6</h20><p class="aliniere">Text Content #6</p></a></li>
                <li class="blueM elementsticky"><a href="" ><h20>Title #7</h20><p class="aliniere">Text Content #7</p></a></li>
                <li class="orangeM elementsticky"><a href="" ><h20>Title #8</h20><p class="aliniere">Text Content #8</p></a></li>
            </ul>
            <!-- end sticky notes -->

            <!-- END BLOG ENTRIES -->
        </div>
        <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
<!--</div><br>-->
<!---->
<!--<!-- END w3-content -->
<!--</div>-->
</div>
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top footer-entries">
    <?php
    ob_start();
    include('FooterEntry.php');
    $footerTemplateEntry = ob_get_clean();

    ob_start();
    include('dataFooter.xml');
    $footerData = ob_get_clean();
    ?>

    <script>
        var xml = <?php echo json_encode($footerData);?>;
        var template = <?php echo(json_encode($footerTemplateEntry));?>;
        var parser = new DOMParser();
        var xmlDoc = parser.parseFromString(xml, "text/xml");

        var pages = xmlDoc.getElementsByTagName("page");
        for (var i =3; i < 4; i++) {
            var html = template;
            var page = pages[i];
            html = html.replace('{$hrefPrev}', page.getElementsByTagName("hrefPrev")[0].childNodes[0].nodeValue);
            html = html.replace('{$prev}',  page.getElementsByTagName("prev")[0].childNodes[0].nodeValue);
            html = html.replace('{$hrefNext}',  page.getElementsByTagName("hrefNext")[0].childNodes[0].nodeValue);
            html = html.replace('{$next}',  page.getElementsByTagName("next")[0].childNodes[0].nodeValue);
            $(".footer-entries").append(html);
        }
    </script>
</footer>
</body>
</html>
