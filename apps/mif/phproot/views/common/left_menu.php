<div class="col-md-2">
<ul class="list-group">
  <?php 
  	$menus = Config::getConfig('module', $this->module);
  	foreach($menus['menus'] as $item) {
  		if($this->menu == $item['action']) {
  			echo "<a class='list-group-item active' ";
  		} else {
  			echo "<a class='list-group-item' ";
  		}
  		echo " href='{$item['action']}'>{$item['title']}</a>";;
  	}
  ?>
</ul>
</div>