<?php
$this->assign('title', 'データ追加')
?>


<div class="container">
<h1>データ追加</h1>

<div class="col-xs-6">

<?php
echo $this->Form->create($new_user);
echo $this->Form->input( 'name', ['label' => ['text' => '名前 (2～30文字)']] );
echo $this->Form->input( 'data1', ['label' => ['text' => 'データ2 (任意)']] );
echo $this->Form->input( 'data2', ['label' => ['text' => 'データ3 (任意)']] );
echo $this->Form->button(__('登録する'), ['class' => 'btn btn-primary']);
echo $this->Html->link('もどる', ['controller' => 'Users', 'action' => 'index'],
                                    ["class"=>"btn btn-light", "role"=>"button" ]);
echo $this->Form->end();
?>

</div>




</div>
