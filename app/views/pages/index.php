<?php require __DIR__ . '/../inc/header.php';?>
<h1><?php echo $data['title']; ?></h1>
<?php foreach ($data['posts'] as $post) {?>
  <h2><?php echo $post->title; ?></h2>
<?php } ?>
<?php require __DIR__ . '/../inc/footer.php';?>