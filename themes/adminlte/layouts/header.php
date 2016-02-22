<?php
use yii\helpers\Html;

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            
                <li class="dropdown user user-menu">
                    <?= Html::a(
                        'Sign out(Admin)', 
                        Url::to(['user/security/logout']), 
                        ['data-method' => 'POST', 'class' => 'hidden-xs']) ;
                    ?>
                    <!-- <a href="#">
                        <span class="hidden-xs"></span>
                    </a> -->
                </li>
            </ul>
        </div>
    </nav>
</header>
