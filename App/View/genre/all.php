    <div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Жанры</h3>
                    <?php if (!empty($message)){
						echo "<h5><font color='blue'>". $message . "</font></h5>";
					}
					else
						if (!empty($error_message)){
						echo "<h5><font color='red'>" . $error_message . "</font></h5>";
					}
					?>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#creategenre">+Новый жанр</button>
                  </div>
                </div>
              </div>
               <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Название жанра</th>
                    </tr> 
                  </thead>
                  <tbody>
                          
<?php
	foreach ($genres as $genre)
	{
		echo "<tr>";
        echo "<td align='center'>";
        echo "<button type='button' class='btn btn-sm btn-primary btn-danger' data-toggle='modal' data-target='#deletegenre' id='deletegenredialog' data-id=".$genre['id']. " data-name=".$genre['name'] .">-Удалить жанр</button>";
        echo "</td>";
        echo "<td class='hidden-xs'>". $genre['id']. "</td>";
        echo "<td>" . $genre['name']. "</td>";
        echo "</tr>";
    }
?>                          
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                </div>
              </div>
            </div>

</div></div>
             <div id="creategenre" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
							<h4 class="modal-title">Добавьте новый жанр</h4>
						</div>
					<form role="form" method="post">
 						<div class="form-group">
  							<label for="genrename">Название жанра</label>
  					<input  class="form-control" name="genrename" placeholder="Введите новое название жанра" type="text" required maxlength="30"/>

  <button type="submit" name="submit" value="creategenre"  class="btn btn-success">Создать</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div></form>
			</div>
			</div>
			</div>
			
             <div id="deletegenre" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
							<h4 class="modal-title">Удалить жанр</h4>
						</div>
					<form role="form" method="post">
 						<div class="form-group">
  					<input  class="form-control" name="genreid"  id="genreid" type="hidden" >
					<input id="showgenrename" readonly />
  <button type="submit" name="submit" value="deletegenre"  class="btn btn-success">Удалить</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div></form>
			</div>
			</div>
			</div>			
</div>
 