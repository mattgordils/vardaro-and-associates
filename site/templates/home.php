<div class="top-area" style="background-image: url(<?php echo $page->largeImage()->url() ?>)">
  <img src="http://unsplash.it/750/500" alt="Vardaro & Associates">
</div>

<?php snippet('header') ?>

  <div id="home" class="content">
    <div class="container intro-block">
      <div class="row">
        
        <div class="col-6">
          <img src="http://unsplash.it/750/500" alt="Vardaro & Associates">
        </div>

        <div class="col-6">
          <div class="text">
            <h2 class="large-text">
              <?php echo $page->largeText()->html() ?>
            </h2>
            <?php echo $page->smallText()->kirbytext() ?>
          </div>
        </div>

      </div>
    </div>

    <div class="section services">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h3 class="section-title large-text">Services</h3>
          </div>
          <div class="col-6">
            <?php snippet('services') ?>
          </div>
        </div>
      </div>
    </div>

    <div class="section partners">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h3 class="section-title large-text">Partners</h3>
          </div>
          <div class="col-6">
            <div class="inline-grid break-sm">
              <div class="col-12">
                <hr class="push-bottom">
              </div>
              <div class="col-6 thumbnail">
                <img src="http://unsplash.it/300/300">
                <h6 class="thumbnail-title">Prisco Vardaro</h6>
              </div>
              <div class="col-6 thumbnail">
                <img src="http://unsplash.it/300/300">
                <h6 class="thumbnail-title">Prisco Vardaro</h6>
              </div>
              <div class="col-6 thumbnail">
                <img src="http://unsplash.it/300/300">
                <h6 class="thumbnail-title">Prisco Vardaro</h6>
              </div>
              <div class="col-6 thumbnail">
                <img src="http://unsplash.it/300/300">
                <h6 class="thumbnail-title">Prisco Vardaro</h6>
              </div>
              <div class="col-6 thumbnail">
                <img src="http://unsplash.it/300/300">
                <h6 class="thumbnail-title">Prisco Vardaro</h6>
              </div>
              <div class="col-6 thumbnail">
                <img src="http://unsplash.it/300/300">
                <h6 class="thumbnail-title">Prisco Vardaro</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php snippet('footer') ?>