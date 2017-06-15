<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Users list</h1>
    <table class="fiter table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <td><strong>user_id</strong></td>
                <td><strong>user_name</strong></td>
                <td>
                    <strong>user_role</strong>
                    <select class="target">
                        <option value="all">all</option>
                        <option value="student">student</option>
                        <option value="teacher">teacher</option>
                        <option value="admin">admin</option>
                    </select>
                </td>
            </tr>
        </thead>
        <?php foreach ($users as $user): ?>
            <tr data-role="<?= $user->user_role ?>">
                <td><?= $user->user_id  ?></td>
                <td><?= $user->user_name ?></td>
                <td><?= $user->user_role ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>