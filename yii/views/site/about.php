<?php

/* @var $this yii\web\View */
namespace app\models;
use app\models\Users;
use Yii;
use yii\base\Model;
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

        //$users = Users::find()->orderBy('user_name')->all();
        //$users = Users::findOne('5');
        //var_dump($users);

        <h1>Users</h1>
    <ul>
        <?php
        $users = Users::find()->orderBy('user_name')->all();
        foreach ($users as $user): ?>
    <li>
        <?= Html::encode("{$user->user_id} ({$user->user_name})") ?>:
        <?= $user->user_role ?>
    </li>
    <?php endforeach; ?>
    </ul>
</div>
