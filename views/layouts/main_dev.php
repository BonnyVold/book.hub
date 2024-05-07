<?php

/**
 * @var $this yii\web\View
 * @var $content string
 */

// use Yii;
use yii\helpers\Html;
use app\assets\MainAsset;

# Register assets
MainAsset::register($this);

?>

<?php $this->beginPage(); ?> 

<html lang="<?= Yii::$app->language ?>" class="h-100">
<head id="header">
  <?php $this->head(); ?>
</head>

<body>
  <?php $this->beginBody(); ?>
  <main id="main" role="main">
    <div class="container-wrap">
      <div class="container">
        <div class="nav nav-container">
          <div class="nav-icon-container">
            <a href='<?= Yii::getAlias('@home'); ?>' id="home-link-icon">
              <img id="main-logo-icon" src="<?= sprintf('%s/%s', Yii::getAlias('@web'), Yii::getAlias('@mainBookIcon')) ?>">
              <?= Yii::$app->params['namePostfix'] ?>
            </a>
          </div>
          <div class="nav-button">
            
          </div>
        </div>
        <?= $content ?>
      </div>
    </div>
  </main>
  <?php $this->endBody(); ?>
</body>
<?php $this->endPage(); ?>
