    </div>
    <div id="footer">
      <div class="wrapper">
        <div class="links">
          <ul class="first">
            <li><a href="/">Home</a></li>
            <li><a href="http://cdm15559.contentdm.oclc.org/seek_advanced.php">Seek</a></li>
            <li><a href="/discover">Discover</a></li>
          </ul>
          <ul class="second">
            <li><a href="/about">About</a></li>
            <li><a href="/resources">Resources</a></li>
            <li><a href="/copyright">Copyright</a></li>
          </ul>
          <p>&copy; 2008-<?= date('Y'); ?> <a href="/">dnr.seekingmichigan.org</a>. All Rights Reserved.  </p>
        </div>
      </div>
    </div>
  </div>
  <? if($hidden_partials): ?>
    <? foreach($hidden_partials as $partial => $locals): ?>
      <div id="<?= $partial ?>" style="display:none">
        <? app()->partial($partial, $locals); ?>
      </div>
    <? endforeach; ?>
  <? endif; ?>
</body>
</html>
