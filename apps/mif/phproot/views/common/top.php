<div class="row">
    <div class="span12">
      <ul class="nav nav-tabs">
        <?php 
          $modules = Config::getConfig('module');
          foreach ($modules as $key => $m) {
            if($this->module == $key) {
              echo '<li class="active">';
            } else {
              echo '<li>';
            }
            echo "<a href='{$m['action']}'>{$m['title']}</a></li>";
          }
        ?>
      </ul>
    </div>
</div>