<?php
$site = config('Site');
?>
<nav class="navbar navbar-expand navbar-light bg-light mb-3">
  <a class="navbar-brand" href="<?= site_url('peserta') ?>"><?= $site->title ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="<?= site_url('logout') ?>" class="nav-link" tabindex="-1" aria-disabled="true">Log Out</a>
      </li>
    </ul>
  </div>
</nav>