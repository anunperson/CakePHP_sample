<?php
$this->assign('title', 'トップページ')
?>


<div class="container">
<h1>トップページ</h1>

<p>
    <?= $this->Html->link('データ一覧へ', ['controller' => 'Users', 'action' => 'index'],
                            ["class"=>"btn btn-primary", "role"=>"button" ]) ?>
</p>

</div>
