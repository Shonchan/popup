<?php
/* @var $popup Popup */
?>
var style = "<style>"
    + "#modal-wrapper{display:block;top:0;left:0;z-index: 9998;width: 100%;height: 100%;position: absolute;background-color: black;opacity:0.5}"
    + "#modal-dialog{width: 500px;z-index:9999;margin: auto;top:50%;display: block; position:relative; background-color: lightgrey; }"
    + "#modal-dialog h3 {background-color: #0A246A; color: #8a1f11; padding: 10px 50px}"
    + "#modal-dialog .content {background-color: #b9bfce; color: #050100; padding: 20px 50px}"
    + "#modal-dialog .buttons {background-color: #3b3f49; color: #ffffff; padding: 20px 50px}"
    + "#modal-dialog .buttons button {background-color: #11ff1f; color: #ffffff; padding: 20px 50px}"
    + "</style>";
var html = "<div id=\"modal\" style=\"opacity: 0; transition: opacity 2s;\"><div id=\"modal-wrapper\"></div>"
    + "<div id=\"modal-dialog\">"
    +     "<h3><?php echo CHtml::encode($popup->title) ?></h3>"
    +    "<div class=\"content\">"
    +        "<p><?php echo CHtml::encode($popup->content) ?></p>"
    +     "</div>"
    +     "<div class=\"buttons\">"
    +         "<button onclick=\"modal.style.opacity='0';setTimeout(() => {modal.remove();}, 2000);\">Закрыть</button>"
    +     "</div>"
        + "</div></div>";
    document.body.innerHTML += style;
    document.body.innerHTML += html;
    var modal = document.getElementById('modal');
    setTimeout(() => {modal.style.opacity = "1";}, 10);


