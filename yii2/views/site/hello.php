<?php
use yii\helpers\Html; ?>

<h1> <?php echo $varinView; ?> </h1> </br>

  <div>
        <?php foreach ($arrayinView as $item): ?>
          <p>
            <a href="view/<?=$item->id?>"><?php echo $item->title ?> </a>
           <!-- Html::checkbox('agree', true, ['label' => 'Я согласен']); -->
            <!-- Html::activeCheckbox($item, 'agree', ['class' => 'agreement'])  -->
          </p>
        <?php endforeach ?>
  </div>
