    <div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Авторы</h3>
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
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#createauthor">+Новый автор</button>
                  </div>
                </div>
              </div>
               <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Имя автора</th>
                    </tr> 
                  </thead>
                  <tbody>
                          
<?php
	foreach ($authors as $author)
	{
		echo "<tr>";
        echo "<td align='center'>";
        echo "<button type='button' class='btn btn-sm btn-primary btn-danger' data-toggle='modal' data-target='#deleteauthor' id='deleteauthordialog' data-id=".$author['id']. " data-name='".$author['name'] ."'>-Удалить автора</button>";
        echo "</td>";
        echo "<td class='hidden-xs'>". $author['id']. "</td>";
        echo "<td>" . $author['name']. "</td>";
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
             <div id="createauthor" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Добавьте нового автора</h4>
						</div>
					<form role="form" method="post">
 						<div class="form-group">
  							<label for="authorname">Автор</label>
  					<input  class="form-control" name="authorname" placeholder="Введите ФИО автора" type="text" required maxlength="30"/>

  <button type="submit" name="submit" value="createauthor"  class="btn btn-success">Создать</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div></form>
			</div>
			</div>
			</div>
			
             <div id="deleteauthor" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Удалить автора</h4>
						</div>
					<form role="form" method="post">
 						<div class="form-group">
  					<input  class="form-control" name="authorid"  id="authorid" type="hidden" >
					<input id="showauthorname" readonly />
  <button type="submit" name="submit" value="deleteauthor"  class="btn btn-success">Удалить</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div></form>
			</div>
			</div>
			</div>			
</div>