<?php
app()->partial('header', 
  array(
    'breadcrumbs' => array('Home' => ''),
    'body_class' => 'home',
    'title' => 'Home'));
?>
<div id="main-bars">
  <div id="logo-bar">
    <p>Your resource for documents, reports, and photos from the Michigan Department of Natural Resources</p>
  </div>
  <div id="seek-bar">
    <div class="wrapper">
      <form method="get" action="http://cdm15559.contentdm.oclc.org/seeking_michigan/seek_results.php">
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
    <p class="advanced-search"><a href="http://cdm15559.contentdm.oclc.org/seeking_michigan/seek_advanced.php">Advanced Search</a></p>
   </div>
  </div>
  <div id="discover-bar">
    <div class="wrapper">
      <h3>Wildlife Division Reports</h3>
      <p><a href="http://cdm15559.contentdm.oclc.org/seeking_michigan/seek_results.php?CISOROOT=/p15559coll1" title="View Wildlife Division Reports"><img style="max-width: 190px;
max-height: 133px;
border: 1px #AAA solid;
padding: 3px;" src="http://dnr.seekingmichigan.org/wp-content/uploads/2011/02/dnre-deer.jpg" alt="Photo for Wildlife Division Reports" /></a></p>
      <h4><a href="http://cdm15559.contentdm.oclc.org/seeking_michigan/seek_results.php?CISOROOT=/p15559coll1" title="View Wildlife Division Reports">Reports from the Wildlife Division</a></h4>
      <p>A collection of surveys and other material from the Wildlife Division library.</p>
      <p><a href="/discover-collection?collection=p15559coll1" title="Read more">Read more »</a> | <a href="/discover" title="View more collections">View more collections &raquo;</a></p>
      <p class="advanced"><a href="/discover">Browse</a></p>
    </div>
  </div>
</div>
<?php app()->partial('footer', array()); ?>
