<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
    	<?php foreach($category as $cat):?>
    		<div class="col-lg-3">
    			<div style="height: 200px;">
    			<br/>
    			<center><img src="/img/avatar.png" height="80">
    			<h3><?= Html::a($cat->name, ['category/'.$cat->id]) ?></h3></center>
    			</div>
    		</div>
    	<?php endforeach;?>
    </div>
</div>-->

<center><h1><?= Html::encode($this->title) ?></h1></center>
<div class="row">
        
        <?php foreach($category as $cat):?>
            <div class="progItem col-lg-3">
                <div><p></p></div>
                <div><p></p></div>
                <div class="prodImg">
                    <center><img src="/img/avatar.png" height="80">
                    
                </div>
                <div><p></p></div>
                <div style="text-align: center;"><p class="zapodarCatalog"><?= Html::a($cat->name, ['category/'.$cat->id]) ?></p></div>

                
                
            </div>
        <?php endforeach;?>
<div class="col-lg-12"><p></p></div>
<div class="col-lg-12"><p></p></div>
        
    </div>