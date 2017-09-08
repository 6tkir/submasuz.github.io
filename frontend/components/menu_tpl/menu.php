<?php if($category['parent']==0 && !isset($category['childs'])): ?>
<li><a href="#"><?= $category['title']?></a></li>
   <?php else:?>
    <?php if($category['parent']==0 && isset($category['childs'])): ?>
       <?php $this->count++;?>

       <?php if($this->count==1):?>
            <li class="open"><a href="#"><?= $category['title']?></a>
            <ul>
                <?= $this->getMenuHtml($category['childs']) ?>
            </ul>
            <?php else:?>
            <li class="closed"><a href="#"><?= $category['title']?></a>
                <ul>
                    <?= $this->getMenuHtml($category['childs']) ?>
                </ul>
            </li>
            </li> <?php endif;?>
    <?php else:?>
        <li><a href="<?=\yii\helpers\Url::to(['categories/index','id'=>$category['id']])?>"><?= $category['title']?></a></li>
    <?php endif;?>
<?php endif;?>



