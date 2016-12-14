<ul class="service-list">
  <?php foreach(page('services')->children()->visible()->limit(100) as $service): ?>
  <li>
    <a href="<?php echo $service->url() ?>">
      <h3 class="title"><?php echo $service->title()->html() ?></h3>
    </a>
  </li>
  <?php endforeach ?>
</ul>
