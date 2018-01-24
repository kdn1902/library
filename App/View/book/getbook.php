    <div class="container">
    <form role="form" method="post">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Книги библиотеки</h3>
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
                  </div>
                </div>
              </div>
               <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">ID</th>
                        <th>Название книги</th>
                        <th>Автор книги</th>
                        <th>Жанр книги</th>
                        <th>Выдано</th>
                        <th></th><th></th><th></th>
                    </tr> 
                  </thead>
                  <tbody>
                          
<?php

		$outbook = $book['customer_name'] ?? "Не выдано";
		echo "<tr>";
        echo "<td class='hidden-xs'>". $book['book_id']. "<input type='hidden' name='book_id' value='".$book['book_id']."'</td>";
        echo "<td>" . $book['book_name']. "</td>";
        echo "<td>" . $book['author_name']. "</td>";
        echo "<td>" . $book['genre_name']. "</td>";
        echo "<td>$outbook</td>";
        echo "<td>";
        if(empty($book['customer_name']))
        {
			echo "<button type='button' class='btn btn-sm btn-primary btn-info' data-toggle='modal' data-target='#selectclient'>Выдать книгу</button>";
		}
        else
        {
        	echo "<button type='button' class='btn btn-sm btn-primary btn-info' data-toggle='modal' data-target='#returnbook'>Вернуть книгу</button>";
		}
		echo "</td>";
		echo "<td><button type='button' class='btn btn-sm btn-primary btn-danger' data-toggle='modal' data-target='#deletebook'>Удалить книгу</button></td>";
		echo "<td><button type='button'  class='btn btn-sm btn-primary btn-info' onclick=\"window.location.href='/admin/book/". $book['book_id']."/history'\">История выдач</button></td>";
		echo "</tr>";
?>
         </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                </div>
              </div>
            </div>
</div>
</div>

	<div id="selectclient" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Выбрать клиента</h4>
				</div>
 				<div class="form-group">
 					<select class="selclient" name="selclient">
 					<?php
 						foreach($customers as $customer)
 						{
							echo "<option value=". $customer['id'] .">" .$customer['name']. "</option>";
						}
						?>
					</select>
			<button type="submit"  class="btn btn-success" name="submit" value="outbook">Выдать книгу</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div>
			</div>
			</div>
			</div>
			
		<div id="returnbook" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Вернуть книгу в библиотеку</h4>
				</div>
 				<div class="form-group">
			<button type="submit"  class="btn btn-success" name="submit" value="returnbook">Вернуть книгу в библиотеку</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div>
			</div>
			</div>
			</div>
				
		<div id="deletebook" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Удалить книгу</h4>
				</div>
 				<div class="form-group">
			<button type="submit"  class="btn btn-danger" name="submit" value="deletebook">Удалить книгу</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div>
			</div>
			</div>
			</div>

	</form>
</div>
    