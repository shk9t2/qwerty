<?php require(dirname(__DIR__).'/header.php');?>
    <div class="card mt-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?=$article->getName();?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?=$article->getAuthorId()->getNickName();?></h6>
      <p class="card-text"><?=$article->getText();?></p>
      <a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/edit/<?=$article->getId();?>" class="btn btn-primary">Edit Article</a>
      <a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/delete/<?=$article->getId();?>" class="btn btn-warning">Delete Article</a>
    </div>
  </div>
<?php 
    require(dirname(__DIR__).'/footer.php'); 
?>