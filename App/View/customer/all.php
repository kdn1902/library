    <div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Клиенты библиотеки</h3>
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
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#createcustomer">+Новый клиент</button>
                  </div>
                </div>
              </div>
               <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>ФИО клиента</th>
                    </tr> 
                  </thead>
                  <tbody>
                          
<?php
	foreach ($customers as $customer)
	{
		echo "<tr>";
        echo "<td align='center'>";
        echo "<button type='button' class='btn btn-sm btn-primary btn-danger' data-toggle='modal' data-target='#deletecustomer' id='deletecustomerdialog' data-id=".$customer['id']. " data-name='".$customer['name'] ."'>-Удалить клиента</button>";
        echo "</td>";
        echo "<td class='hidden-xs'>". $customer['id']. "</td>";
        echo "<td>" . $customer['name']. "</td>";
        echo "</tr>";
    }
?>                          
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                <ul class="pager">
  						<li class="previous <?php echo $current_page <= 1 ? 'disabled' : ''?>"><a class="btn <?php echo $current_page <= 1 ? 'disabled' : '' ?>" href="/admin/customers/<?=intval($current_page-1)?>">Предыдущая</a></li>
  						<li class="next <?php echo $current_page >= $maxpage ? 'disabled' : ''?>"><a class="btn <?php echo $current_page >= $maxpage ? 'disabled' : ''?>  "href="/admin/customers/<?=intval($current_page+1)?>">Следующая</a></li>
				</ul>
                
                </div>
              </div>
            </div>

</div></div>
             <div id="createcustomer" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Добавьте нового клиента</h4>
						</div>
					<form role="form" method="post">
 						<div class="form-group">
  							<label for="customername">Клиент</label>
  					<input  class="form-control" name="customername" placeholder="Введите ФИО клиента" type="text" required maxlength="30"/>

  <button type="submit" name="submit" value="createcustomer"  class="btn btn-success">Создать</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div></form>
			</div>
			</div>
			</div>
			
             <div id="deletecustomer" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"><button class="close" type="button" data-dismiss="modal">X</button>
							<h4 class="modal-title">Удалить клиента</h4>
						</div>
					<form role="form" method="post">
 						<div class="form-group">
  					<input  class="form-control" name="customerid"  id="customerid" type="hidden" >
					<input id="showcustomername" readonly />
  <button type="submit" name="submit" value="deletecustomer"  class="btn btn-success">Удалить</button>
			<button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
			</div></form>
			</div>
			</div>
			</div>			
</div>

    