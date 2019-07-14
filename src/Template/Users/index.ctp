<?php
$this->assign('title', '一覧')
?>


<div class="container">

<h1>ユーザー一覧</h1>

<!-- ユーザー一覧テーブル -->
<table class="table table-hover">
    <thead>
    <tr>
        <th>ユーザー名</th>
        <th>データ1 (任意)</th>
        <th>データ2 (任意)</th>
        <th>作成日時</th>
    </tr>
    </thead>
    
    <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
        <td class="col-xs-4" >
            <?= $user->name ?>
        </td>
        <td class="col-xs-2">
            <?= $user->data1 ?>
        </td>
        <td class="col-xs-2">
            <?= $user->data2 ?>
        </td>
        <td class="col-xs-2">
            <?= $user->created ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    
    
</table>

<p>
    <?= $this->Html->link('データ追加へ', ['controller' => 'Users', 'action' => 'add'],
                            ["class"=>"btn btn-primary", "role"=>"button" ]) ?>

</p>

</div>