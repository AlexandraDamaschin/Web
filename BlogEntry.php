<div class="w3-card-4 w3-margin w3-white" xmlns:href="http://www.w3.org/1999/xhtml" xmlns:img="">
   <img src="{$imgSrc}" alt="{$imgAlt}" style="width:100%">
    <div class="w3-container">
        <h3><b>{$title}</b></h3>
        <h5>{$description}, <span class="w3-opacity">{$date}</span></h5>
    </div>

    <div class="w3-container">
        <p>{$content}</p>
        <div class="w3-row">
            <div class="w3-col m8 s12">
                <p>
                    <button class="w3-button w3-padding-large w3-white w3-border">
                        <a href="{$href}"><b>{$link}</b></a></button>
                </p>
            </div>
        </div>
    </div>
</div>
<hr>