<!DOCTYPE html>
<html>
<head>
	<title>News</title>
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
  <div class="wrapper">
  <h3 class='title'>Новости</h3>
  <div class="news__wrapper">
    <?php foreach ($vars[3] as $key=>$news) : ?>
      <a class="news" href="<?= 'view.php?id='.($key)+(5*($vars[2]-1))?>">
        <?php $date = gmdate("d-m-Y", $news['idate']) ?>
        <div class="date"><?php echo $date; ?></div>
        <div class="new_in_news">
          <h4>
	          <?php echo $news['title']; ?>
          </h4>
          <p>
            <?php echo $news['announce']; ?>
          </p>
          </div>
        </a>
    <?php endforeach ?>
  </div>
  <div>
    <h3 class='title'>Страницы</h3>
    <?php for ($i = 1; $i <= $vars[0]; $i++) : ?>
      <a <?php echo (!array_key_exists('page', $_GET) && $i==1) ? "class='active_page button'" : (array_key_exists('page', $_GET) && ($i == $_GET['page']) ? "class='active_page button'" : "class='button'") ; ?> href="<?= 'news.php?page='.$i?>" ><?php echo $i; ?></a>
    <?php endfor ?>
  </div>
  </div>
</body>
</html>


