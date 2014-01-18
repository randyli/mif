<?php $this->render('common/header'); ?>
<div class="container">
	<?php $this->render('common/top'); ?>
	<div class="row"  style='margin-top:10px;'>
		<div class="row">
		<?php $this->render('common/left_menu'); ?>
  		<div class="col-md-10">
  			<div class="panel panel-default">
  			<div class="panel-heading">用户列表</div>

<table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>

  			<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
			</div>

  		</div>
		</div>
	</div>
</div>
<?php $this->render('common/footer'); ?>