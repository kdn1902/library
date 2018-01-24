    <div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Книги библиотеки</h3>
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
                    </tr> 
                  </thead>
                  <tbody>
                          
<?php
	foreach ($books as $book)
	{
		echo "<tr>";
        echo "<td class='hidden-xs'>". $book['book_id']. "</td>";
        echo "<td><a href=/admin/book/" .$book['book_id']. ">" . $book['book_name']. "</a></td>";
        echo "<td>" . $book['author_name']. "</td>";
        echo "<td>" . $book['genre_name']. "</td>";
        echo "<td>" . $book['customer_name']. "</td>";
		echo "</tr>";
	}
?>
         </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                <ul class="pager">
  						<li class="previous <?php echo $current_page <= 1 ? 'disabled' : ''?>"><a class="btn <?php echo $current_page <= 1 ? 'disabled' : '' ?>" href="/<?=intval($current_page-1)?>">Предыдущая</a></li>
  						<li class="next <?php echo $current_page >= $maxpage ? 'disabled' : ''?>"><a class="btn <?php echo $current_page >= $maxpage ? 'disabled' : ''?>  "href="/<?=intval($current_page+1)?>">Следующая</a></li>
				</ul>
                
                </div>
              </div>
            </div>
</div>
</div>
    