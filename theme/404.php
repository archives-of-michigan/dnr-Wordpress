<?
app()->partial('header', 
  array(
    'breadcrumbs' => array('Page not found' => ''),
    'body_class' => 'seek',
    'title' => 'Not Found'));
?>
<div id="main-content">
	<div class="wrapper">
    <h2 class="center">The resource you are seeking is not here.</h2>
    <p>Try using the search field in the upper right corner to find what you are looking for.  It's possible 
      that someone has given you an incorrect URL or the resource you are looking for no longer exists.</p>
	</div>
</div>
<?php app()->partial('footer', array()); ?>
