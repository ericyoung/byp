  <!-- FOOTER -->
  <div id="footer">
    <div id="footer-left">
      <?php if(isset($show_address)) { ?>
      <div id="address-block">
        <span class="companyname">BILL YOUNG<br />
        PRODUCTIONS</span><br />
        <br />
        <span class="phonenum-desktop">281.240.7400</span><span class="phonenum-mobile"><a href="tel:2812407400">281.240.7400</a></span>&nbsp;&nbsp;|&nbsp;&nbsp;
        <script type="text/javascript">document.write('<n pynff="ogaoynpx" uers="znvygb:olc@olc.pbz">Rznvy</n>'.replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));</script>
        <br /><br /><br />
        <strong>Houston, TX:</strong><br />
        750 Park Two Drive, Sugar Land, TX 77478&nbsp;&nbsp;|&nbsp;&nbsp;<a class="btnblack" href="http://g.co/maps/c8x2y" target="_blank">Map</a><br />
        <br />
        <strong>Los Angeles, CA:</strong><br />
        4370 Tujunga Avenue, Suite 105, Studio City, CA 91604&nbsp;&nbsp;|&nbsp;&nbsp;<a class="btnblack" href="https://www.google.com/maps/place/4370+Tujunga+Ave,+Studio+City,+CA+91604/@34.14992,-118.3808954,17z/data=!3m1!4b1!4m2!3m1!1s0x80c2be1b05e18beb:0x73f67aa9b13b460f?hl=en" target="_blank">Map</a><br />
        <br /><br />
        <ul class="social-bottom">
          <li><a href="https://www.facebook.com/byp" target="_blank"><img class="noscale" src="<?php echo Flight::get('flight.asset_url'); ?>img/icon-facebook-dark.png" alt="" /></a></li>
          <li><a href="https://twitter.com/bypconcerts" target="_blank"><img class="noscale" src="<?php echo Flight::get('flight.asset_url'); ?>img/icon-twitter-dark.png" alt="" /></a></li>
          <li><a href="https://www.instagram.com/bypconcerts/" target="_blank"><img class="noscale" src="<?php echo Flight::get('flight.asset_url'); ?>img/icon-instagram-dark.png" alt="" /></a></li>
          <!--<li><a href="https://www.pinterest.com/billyoungprod" target="_blank"><img class="noscale" src="./img/icon-pinterest-dark.png" alt="" /></a></li>-->
          <br class="clear" />
        </ul>
      </div>
      <?php } ?>
    </div>
    <div id="footer-right">
      <?php if(isset($show_contact)) { ?>
      <div id="contact-block">
        <div class="section-header contact">
          <div class="sh-rect"><span>CONTACT</span></div>
          <div class="sh-tri"></div>
        </div>
        <div id="contact_form">
          <script type="text/javascript">document.write('<sbez vq="sbez1" ehang="freire" zrgubq="CBFG" npgvba="./sbezcebprff.nfc" gnetrg="pbasvezvg">'.replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));</script>
          <input runat="server" type="text" name="Name" id="Name" placeholder="NAME" required/>
          <input runat="server" type="email" name="Email" id="Email" placeholder="EMAIL" required/>
          <textarea runat="server" name="Message" id="Message" rows="5" cols="20" wrap="physical" placeholder="MESSAGE" required></textarea>
          <input id="send-email" runat="server" type="submit" value="LET'S DO THIS >"/>
          <script type="text/javascript">document.write('</sbez>'.replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));</script>
          <iframe name="confirmit"></iframe>
        </div>
        <br class="clear" />
      </div>
      <?php } ?>
    </div>
    <br class="clear" />
  </div>
  <div id="subfooter">
    <p>
      &copy;<script>document.write(new Date().getFullYear())</script> BYP
    </p>
  </div>

  <?php if(isset($animations)) { ?>

  <!-- ANIMATED HEADER -->
  <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url');  ?>js/classie.js"></script>
  <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url');  ?>js/animatedHeader.js"></script>

  <!-- SMOOTH SCROLLING -->
  <script type="text/javascript">
    var myhash;
    function scrollToAnchor(aid){
      var aTag = $("a[id='"+ aid +"']");
      $('html,body').animate({scrollTop: aTag.offset().top},1200, function() {
        if(myhash == "#top") {
          window.location.hash = "";
        } else {
          window.location.hash = myhash;
        }
      });
    }
    $("a.scroller").click(function(e) {
      e.preventDefault();
      var href = $(this).attr('href').replace('#', '')
      scrollToAnchor(href);
      myhash = $(this).attr('href');
    });
  </script>

  <!-- REEL - MAGNIFICPOP -->
  <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url');  ?>js/magnificPop.js"></script>

  <!-- CUSTOM SETTINGS -->
  <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url');  ?>js/custom.js"></script>

  <!-- FEATURED ARTISTS SLIDER -->
  <script type="text/javascript">
    var slider = new MasterSlider();
    slider.control('arrows');
    slider.setup('slider-artists', {
    width:320,
    height:180,
    space:0,
    start:3,
    autoplay:true,
    loop:true,
    speed:6,
    view:'fadeWave',
    layout:'partialview',
    grabCursor:false,
    swipe:false,
    overPause:true,
    centerControls:false
    });
  </script>
  <?php } ?>
  </body>
</html>
