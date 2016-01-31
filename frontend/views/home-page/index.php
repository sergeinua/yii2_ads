<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'Газета Даром!';
?>
<div class="banner_grid">
    <?php foreach ($banners as $banner) { ?>
    <img class="position_<?= $banner->position ?>" src="images/<?= $banner->file_name ?>">
    <?php } ?>
</div>