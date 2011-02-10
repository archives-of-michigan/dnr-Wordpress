<?php
$title = "Home";
# TODO: $collection = Collection::from_alias('');

app()->partial('header', 
  array(
    'breadcrumbs' => array('Home' => ''),
    'body_class' => 'home',
    'title' => 'Home'));
?>
<div class="wrapper">
  <div id="main-bars">
    <div id="logo-bar">
      <p>Your resource for government documents from the State of Michigan</p>
    </div>
    <div id="seek-bar">
      <div class="wrapper">
        <form method="get" action="http://cdm15559.contentdm.oclc.org/seek_results.php">
        <h3><label for="search-text">Keyword Search.</label></h3>
        <p>Search for DNR documents and photographs.</p>
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
        <h3>Wildlife Division Reports</h3>
        <h4><a href="http://cdm15559.cotentdm.oclc.org/cdm4/browse.php?CISOROOT=/p15559coll1" title="View Wildlife Division Reports">Reports from the Wildlife Division</a></h4>
        <p>A collection of surveys and other material from the Wildlife Division library.</p>
        <p><a href="/discover-collection?collection=p15559coll1" title="Read more">Read more »</a> | <a href="/discover" title="View more collections">View more collections &raquo;</a></p>
        <p class="advanced"><a href="http://cdm15559.cotentdm.oclc.org/cdm4/browse.php?CISOROOT=/p15559coll1">Wildlife Division Reports</a></p>
      </div>
    </div>
  </div>
</div>
<?php app()->partial('footer', array()); ?>
