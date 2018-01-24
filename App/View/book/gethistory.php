    <div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">История выдач книги</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                  </div>
                </div>
              </div>
               <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Дата события</th>
                        <th>Событие</th>
                        <th>Название книги</th>
                        <th>Клиент библиотеки</th>
                    </tr> 
                  </thead>
                  <tbody>
                          
<?php
	foreach ($history as $h)
	{
		echo "<tr>";
        echo "<td>" . $h['history_date']. "</td>";
        echo "<td>" . $h['history_action']. "</td>";
        echo "<td>" . $h['book_name']. "</td>";
        echo "<td>" . $h['customer_name']. "</td>";
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
</div>
</div>
    