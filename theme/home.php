<?php
$title = "Home";
$breadcrumbs = array('Home' => '');
# TODO: $collection = Collection::from_alias('');

app()->partial('header', 
  array('body_class' => 'discover',
    'breadcrumbs' => $breadcrumbs, 
    'css_includes' => $css_includes,
    'js_includes' => $js_includes,
    'title' => 'Home',
    'current_item' => $current_item));
?>
<div id="logo-bar">
  <p>Your resource for government documents from the State of Michigan</p>
</div>
<div id="seek-bar">
  <div class="wrapper">
    <form method="get" action="http://cdm15559.contentdm.oclc.org/seek_results.php">
    <h3><label for="search-text">Keyword Search.</label></h3>
    <h4>Lorem Ipsum Dolor.</h4>
    <p>Lambio delictu ando factisi lomar. Lorem ipsum dolor sit amet collecti ambio delictu ando factisi lomar gallardo.</p>
    <p>Quandicum ergo sum ad liricus.</p>      
    <input type="hidden" name="CISOOP1" value="any" />
    <input type="hidden" name="CISOFIELD1" value="CISOSEARCHALL" />
    <input type="hidden" name="CISOROOT" value="all" />
    <input type="text" name="CISOBOX1" id="search-text" value="" />
    <!--[if lt IE 7]><br /><![endif]-->
    <label for="search-button" class="hidden">Search</label>
    <input type="image" src="/images/x.gif" id="search-button" name="search-button" value=" " />
  </form>
  <p class="advanced-search"><a href="/seek">Advanced Search</a></p>
 </div>
</div>
<div id="discover-bar">
  <div class="wrapper">
    <h3>COLLECTION NAME </h3>
    <h4><a href="seek_results.php?alias=collection" title="View COLLECTION NAME">COLLECTION BYLINE</a></h4>
    <p>COLLECTION DESCRIPTION</p>
    <p><a href="seek_results.php?alias=collection" title="Read more">Read more »</a> | <a href="/discover.php" title="View more collections">View more collections &raquo;</a></p>
    <p class="advanced"><a href="seek_results.php?alias=collection">COLLECTION NAME</a></p>
  </div>
</div>
