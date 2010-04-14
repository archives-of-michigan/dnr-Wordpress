<?
include("config.php");
include('lib/paginator.php');

$search = Search::from_params($_GET);
$collections = dmGetCollectionList();
$results = $search->results();
$search_url = $_SERVER['QUERY_STRING'];

$title = 'Results : Seek &mdash; Seeking Michigan';
$breadcrumbs = array(
  'Home' => SEEKING_MICHIGAN_HOST, 
  'Seek' => 'seek_advanced.php', 
  'Search Results' => '');
define("BODY_CLASS","seek");
include('header.php');
?>
<div id="main-content">
  <div class="wrapper mod">
    <div id="utility-search">
      <form id="global-search" action="seek_results.php" method="get" >
        <input type="hidden" name="CISOROOT" value="all">
        <label for="CISOBOX1" class="hidden">Seek: </label>
        <input type="text" name="CISOBOX1" id="s" value=" " />
        <label for="search-button" class="hidden">Search </label>
        <input type="submit" value=" " id="search-button" name="search-button" />
      </form>
      <p class="advanced-search"><a href="advanced-search.html"><span>Advanced Search</span></a></p>
  	</div>
    <ul id="breadcrumbs">
      <li><a href="#">Home</a> </li>
      <li> &raquo; <a href="<?= SEEKING_MICHIGAN_HOST ?>/seek">Seek</a> </li>
      <li class="here"> &raquo; Seek Results </li>
    </ul>
    <? $search->terms; ?>
    <? if($_GET['CISOBOX1'] && $_GET['CISOBOX1'] != ' '): ?>
      <h1>
        Search Results for:
        <? foreach($search->terms() as $term): ?>
          <? $query_string = preg_replace('/CISOBOX1=[^&]*/',"CISOBOX1=$term",$_SERVER['QUERY_STRING']); ?>
          <a href="seek_results.php?<?= $search->term_search_string($alias,$term) ?>"><?= $term; ?></a>
        <? endforeach; ?>
      </h1>
    <? endif; ?>
    <div class="search-results">
      <div class="wrapper">
    <h2>Collection Results</h2>
    <p class="intro">The results for your search are listed below.  You can narrow your search results by following the links listed for each category.</p>
    <form id="browse-search" action="seek_results.php">
      <input type="hidden" name="CISOOP1" value="any" />
      <input type="hidden" name="CISOFIELD1" value="CISOSEARCHALL" />
      <input type="hidden" name="CISOBOX1" value="<?= $_GET['CISOBOX1']; ?>" />
      <p>
        Browsing <strong><?= $num_records_this_page; ?></strong> items in 
        <select name="CISOROOT">
          <option value="all" <? if($_GET['CISOROOT'] == 'CISOSEARCHALL'): ?>selected="selected"<? endif; ?>>
            All Collections</option>
          <? foreach($collections as $collection): ?>
            <option value="<?= $collection['alias']; ?>" <? if($_GET['CISOROOT'] == $collection['alias']): ?>selected="selected"<? endif; ?>>
              <?= $collection['name']; ?></option>
          <? endforeach; ?>
        </select>
        <input type="image" src="<?= SEEKING_MICHIGAN_HOST ?>/images/search-button.gif" value=" " />  
        Or use <a href="seek_advanced.php">Advanced Search &raquo; </a>
      </p>
    </form>
    <div class="paginate">
      <? include('seek/results_sub.php'); ?>
    </div>
    <? include('seek/results_view.php'); ?>
    <div class="paginate">
      <? include('seek/results_sub.php'); ?>
    </div>
    </div>
  </div>
  </div>
</div>
<? app()->partial('footer'); ?>
