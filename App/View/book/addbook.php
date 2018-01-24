<script>
var authors =  <?php echo $authors?>;
</script>
  
    <div class="container">
    <div class="row">
   
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Добавление книги</h3>
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
                <form method="post">
      <div class="form-group">
        <label for="name">Введите название книги:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Введите название книги" required>
      </div>
      <div class="form-group">
        <label for="author">Начните набирать фамилию автора книги</label>
		<input type="text" name="author" class="form-control" data-provide="typeahead" id="author" placeholder="Введите автора книги" required autocomplete="off">
        <input type="hidden" id="authorhidden" name="authorhidden">
      </div>
      <div class="form-group">
        <label for="genre">Выберите из списка жанр книги:</label>
        <select  class="form-control" id="genre" name="genre">
        <?php
        foreach ($genres as $genre)
        {
			echo "<option value = " . $genre['id'] . ">" . $genre['name'] . "</option>";
		}
        ?>
        </select>
      </div>

      <button type="submit" name="submit" class="btn btn-default" value="savebook">Сохранить</button>
    </form>
              </div>
              <div class="panel-footer">
                <div class="row">
                
                </div>
              </div>
            </div>
</div>
</div>
    