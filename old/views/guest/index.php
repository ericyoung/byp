<!-- HOME VIDEO -->
<div id="home-section">
  <video id="home-video" autoplay loop muted><source src="<?php echo Flight::get('flight.asset_url'); ?>video/concert_bg.mp4" type="video/mp4" /></video>
  <div id="home-video-shade"></div>
</div>

<!-- ARTISTS -->
<div id="artist-section">

	<div id="artist-search">
    <div id="artist-search-left">
      <div id="artist-search-left-sub">
        <div id="arrow-find">
          <img class="noscale" src="<?php echo Flight::get('flight.asset_url'); ?>img/arrow-find.png" alt="" />
        </div>
        <div id="text-find">FIND A<br />TOUR</div>
      </div>
    </div>
    <div id="artist-search-right">
      <select id="Artist-Home">
        <option></option>
        <option value="./tour-detail.asp?id=5224">Soul Trains A Comin' Tour - Black &amp; Gold 80's Party - Starring O'Bryan</option>
				<option value="./tour-detail.asp?id=1125">+44</option>
				<option value="./tour-detail.asp?id=5157">112, Ginuwine, Next, Silk - Ladies Night Out</option>
				<option value="./tour-detail.asp?id=3707">2 Chainz</option>
			  <option value="./tour-detail.asp?id=5196">21 Savage</option>
				<option value="./tour-detail.asp?id=6589">2Cellos</option>
				<option value="./tour-detail.asp?id=5348">3 Doors Down</option>
				<option value="./tour-detail.asp?id=5176">3 Doors Down Acoustic</option>
				<option value="./tour-detail.asp?id=5396">3 Doors Down and Collective Soul</option>
				<option value="./tour-detail.asp?id=2838">3 Guitar Heroes</option>
				<option value="./tour-detail.asp?id=4873">38 Special</option>
        <?php if(isset($tours)) { ?>
          <?php foreach($tours as $tour) { ?>
        <option value="<?php echo Flight::get('flight.base_url'); ?>/tours/tour-name">tour-name</option>
          <?php } ?>
        <?php } ?>
      </select>

      <!-- SELECT2 -->
      <script type="text/javascript">
				$('select#Artist-Home').select2({
					placeholder: 'TOUR NAME',
					escapeMarkup: function (markup) {
						return markup;
					}
				});
				$('select#Artist-Home').on("select2:select", function (e) {
					window.location.href = e.params.data.id;
				});
			</script>

    </div>
  </div>


  <!-- FEATURE SLIDER -->
  <div class="master-slider ms-skin-default" id="slider-artists">

    <!-- COMEDY BANNER -->
    <div class="ms-slide" data-delay="0.1">
        <img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/byp-comedy-banner.jpg" alt="" />
        <div class="ms-info"><a href="./comedy.asp"></a></div>
    </div>

		<!-- FEATURES FROM FOLDER -->

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5248.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5248 BYP-1"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
      <img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5249.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5249"></a></div>
    </div>

    <!-- FESTIVALS BANNER -->
    <div class="ms-slide" data-delay="0.1">
      <img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/byp-festivals-banner.jpg" alt="" />
      <div class="ms-info"><a href="./festivals.asp"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5262.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5262"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
      <img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5384.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5384 BYP-2"></a></div>
    </div>

    <!-- ALBUM BANNER -->
    <div class="ms-slide" data-delay="0.1">
      <img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/byp-album-banner.jpg" alt="" />
      <div class="ms-info"><a href="./album.asp"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5385.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5385"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5389.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5389"></a></div>
    </div>

    <!-- WEB TRAILERS BANNER -->
    <div class="ms-slide" data-delay="0.1">
      <img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/byp-webtrailers-banner.jpg" alt="" />
      <div class="ms-info"><a href="./webtrailers.asp"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5429.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5429 BYP-3"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5430.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5430"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5438.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5438"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5439.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5439 BYP-4"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5461.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5461"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5493.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5493"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/5494.jpg" alt="" />
      <div class="ms-info"><a href="./tour-detail.asp?id=5494 BYP-5"></a></div>
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/fmac.jpg" alt="" />
    </div>

    <div class="ms-slide" data-delay="0.1">
    	<img src="<?php echo Flight::get('flight.asset_url'); ?>img/blank.gif" data-src="<?php echo Flight::get('flight.asset_url'); ?>features/sugarland.jpg" alt="" />
    </div>

    <!--
    <div id="slider-left-overlay"></div>
   	<div id="slider-right-overlay"></div>
    -->
  </div>
  <div id="tagline">SERVING THE LIVE ENTERTAINMENT INDUSTRY FOR OVER <span class="numyears">35</span> YEARS</div>
</div>




<!-- REEL / WORK -->
<div id="reelwork-section">

  <!-- REEL -->
  <a class="anchor" id="reel"></a>
  <div id="reel-container">
    <img id="reel-poster" src="<?php echo Flight::get('flight.asset_url'); ?>img/reel.jpg" alt="" />
    <a id="playbtn" href="https://vimeo.com/272371088"></a>
    <!--<div class="section-header"><div class="sh-rect"><span>REEL</span></div><div class="sh-tri"></div></div>-->
  </div>

  <!-- WORK -->
  <a class="anchor" id="work"></a>
  <div id="work-container">
  	<div id="work-panels">
    	<a class="work-panel" href="<?php echo Flight::get('flight.base_url');; ?>video">
        <div class="img_zoom_container"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/work-video.jpg" alt="" /><img class="sepia-img" style="position:absolute; top:0px; left:0px;" src="<?php echo Flight::get('flight.asset_url'); ?>img/work-video-sepia.jpg" alt="" /></div>
        <div class="work_title">VIDEO</div>
      </a>
      <a class="work-panel" href="<?php echo Flight::get('flight.base_url');; ?>audio">
        <div class="img_zoom_container"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/work-audio.jpg" alt="" /><img class="sepia-img" style="position:absolute; top:0px; left:0px;" src="<?php echo Flight::get('flight.asset_url'); ?>img/work-audio-sepia.jpg" alt="" /></div>
        <div class="work_title">AUDIO</div>
      </a>
      <a class="work-panel" href="<?php echo Flight::get('flight.base_url');; ?>voicetalent">
        <div class="img_zoom_container"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/work-voice.jpg" alt="" /><img class="sepia-img" style="position:absolute; top:0px; left:0px;" src="<?php echo Flight::get('flight.asset_url'); ?>img/work-voice-sepia.jpg" alt="" /></div>
        <div class="work_title">VOICE TALENT</div>
      </a>
      <a class="work-panel" href="<?php echo Flight::get('flight.base_url');; ?>art">
        <div class="img_zoom_container"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/work-art.jpg" alt="" /><img class="sepia-img" style="position:absolute; top:0px; left:0px;" src="<?php echo Flight::get('flight.asset_url'); ?>img/work-art-sepia.jpg" alt="" /></div>
        <div class="work_title">ART</div>
      </a>
      <a class="work-panel" href="<?php echo Flight::get('flight.base_url');; ?>interactive">
        <div class="img_zoom_container"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/work-interactive.jpg" alt="" /><img class="sepia-img" style="position:absolute; top:0px; left:0px;" src="<?php echo Flight::get('flight.asset_url'); ?>img/work-interactive-sepia.jpg" alt="" /></div>
        <div class="work_title">INTERACTIVE</div>
      </a>
      <a class="work-panel" href="<?php echo Flight::get('flight.base_url');; ?>event">
        <div class="img_zoom_container"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/work-events.jpg" alt="" /><img class="sepia-img" style="position:absolute; top:0px; left:0px;" src="<?php echo Flight::get('flight.asset_url'); ?>img/work-events-sepia.jpg" alt="" /></div>
        <div class="work_title">LIVE EVENT</div>
      </a>
      <br class="clear" />
    </div>
    <div class="section-header">
      <div class="sh-rect"><span>WORK</span></div>
      <div class="sh-tri"></div>
    </div>
  </div>
  <br class="clear" />
</div>
