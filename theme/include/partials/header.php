<? 
$js_includes = isset($js_includes) ? $js_includes : array();
$breadcrumbs = isset($breadcrumbs) ? $breadcrumbs : array('Home' => '');
$css_includes = isset($css_includes) ? $css_includes : array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?= "$title: Governing Michigan" ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="/stylesheets/screen/main.css" type="text/css" media="screen, projection" />
  <!--[if IE]>
  <link rel="stylesheet" href="/stylesheets/screen/patches/win-ie-all.css" type="text/css" media="screen, projection" />
  <![endif]-->
  <!--[if IE 7]>
  <link rel="stylesheet" href="/stylesheets/screen/patches/win-ie7.css" type="text/css" media="screen, projection" />
  <![endif]-->
  <!--[if lt IE 7]>
  <link rel="stylesheet" href="/stylesheets/screen/patches/win-ie-old.css" type="text/css" media="screen, projection" />
  <script type="text/javascript" src="/javascripts/lib/dd-png.js"></script>
  <![endif]-->
  <? foreach($css_includes as $css): ?>
    <? if(preg_match('/^http:\/\//',$css) > 0): ?>
      <link rel="stylesheet" href="<?= $css ?>" type="text/css" media="screen, projection" />
    <? else: ?>
      <link rel="stylesheet" href="/stylesheets/<?= $css ?>.css" type="text/css" media="screen, projection" />
    <? endif; ?>
  <? endforeach; ?>
  <script type="text/javascript" src="/javascripts/core.js"></script>
  <script type="text/javascript" src="/stylesheets/jquery.min.js"></script>
  <? foreach($js_includes as $js): ?>
    <? if(preg_match('/^http:\/\//',$js) > 0): ?>
      <script type="text/javascript" src="<?= $js ?>"></script>
    <? else: ?>
      <script type="text/javascript" src="/stylesheets/<?= $js ?>.js"></script>
    <? endif; ?>
  <? endforeach; ?>
  <!-- TODO: Add GA for DNR 
    <script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript">
      try { _gat._getTracker("UA-7441223-3")._trackPageview(); } catch(err) {}
    </script> -->
  <? if(FACEBOX == 'display'): ?>
    <? app()->partial('facebox'); ?>
  <? endif; ?>
  <? if(get_class($current_item) == 'Image'): ?>
    <script type="text/javascript">
      $(window).ready(function() {
        dmMonocle(<?= $current_item->width() ?>, <?= $current_item->height() ?>, 
                  <?= $current_item->itnum ?>, "<?= $current_item->alias ?>");
      });
    </script>
  <? endif; ?>
</head>
<body id="www-governingmichigan-gov" <? if(defined($body_class)): ?>class="<?= $body_class ?>"<? endif; ?>>
  <div class="wrapper">
    <div id="header">
      <div class="wrapper">
        <h1><a href="/"><span>Governing Michigan</span></a></h1>
        <ul id="nav">
          <li id="nav-seek"><a href="/seek.php"> Seek</a></li>
          <li id="nav-discover"><a href="/discover.php"> Discover</a></li>
        </ul>
      </div>
    </div>
    <div id="main">
