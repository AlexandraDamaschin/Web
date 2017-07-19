<!DOCTYPE html>
<html>
<title>HTML</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body class="w3-light-grey">

<div class="w3-content">

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
                    for (var i = 0; i < 1; i++) {
                        var html = template;
                        var page = pages[i];
                        html = html.replace('{$imgSrc}', page.getElementsByTagName("imgSrc")[0].childNodes[0].nodeValue);
                        html = html.replace('{$imgAlt}', page.getElementsByTagName("imgAlt")[0].childNodes[0].nodeValue);
                        html = html.replace('{$title}', page.getElementsByTagName("title")[0].childNodes[0].nodeValue);
                        html = html.replace('{$stands}', page.getElementsByTagName("stands")[0].childNodes[0].nodeValue);
                        html = html.replace('{$description}', page.getElementsByTagName("description")[0].childNodes[0].wholeText);
                        html = html.replace('{$text}', page.getElementsByTagName("text")[0].childNodes[0].wholeText);
                        html = html.replace('{$buttonEncode}', page.getElementsByTagName("buttonEncode")[0].childNodes[0].nodeValue);
                        html = html.replace('{$textEncode}', page.getElementsByTagName("textEncode")[0].childNodes[0].nodeValue);
                        html = html.replace('{$buttonDecode}', page.getElementsByTagName("buttonDecode")[0].childNodes[0].nodeValue);
                        html = html.replace('{$textDecode}', page.getElementsByTagName("textDecode")[0].childNodes[0].nodeValue);
                        $(".pages-entries").append(html);
                    }
                });
            </script>

            <!-- END BLOG ENTRIES -->
        </div>
        <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
</div>
<br>

<!-- END w3-content -->

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
        for (var i = 0; i < 1; i++) {
            var html = template;
            var page = pages[i];
            html = html.replace('{$hrefPrev}', page.getElementsByTagName("hrefPrev")[0].childNodes[0].nodeValue);
            html = html.replace('{$prev}', page.getElementsByTagName("prev")[0].childNodes[0].nodeValue);
            html = html.replace('{$hrefNext}', page.getElementsByTagName("hrefNext")[0].childNodes[0].nodeValue);
            html = html.replace('{$next}', page.getElementsByTagName("next")[0].childNodes[0].nodeValue);
            $(".footer-entries").append(html);
        }
    </script>
</footer>

</body>
</html>
