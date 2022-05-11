<?php
  if(!isset($_COOKIE["comply_cookie"])) { ?>
    <div id="cookies">
      <p>
        Unsere Website verwendet Cookies. Wenn Sie fortfahren, gehen wir von Ihrer Zustimmung zur Verwendung von Cookies aus.
        <span id="cookie-accept" class="cookie-accept">
          <button class="primary">Akzeptieren</button>
        </span>
      </p>
    </div>
    <script>
      document.getElementById("cookie-accept").onclick = function(e) {
        days = 182;
        myDate = new Date();
        myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
        document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString();
        document.getElementById("cookies").parentNode.removeChild(elem);
      }
    </script>
<?php } ?>