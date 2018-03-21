<div class="wrapp">
    <form action="admin.index.php" method="post">
        <div class="input-group">
            <span class="input-group-addon">Заголовок</span>
            
            <input type="text" class="form-control title" name="title" placeholder="Название статьи">
        </div><br>
        <div class="input-group">
        <h3>Выбрать полосу</h3>
            <input type="button" class="btn btn-default col-sm-2" style= "box-shadow: none;" value="БЕЛАЯ">
            <input type="button" class="btn btn-default col-sm-2" style="background: black; color:white; box-shadow: none;" value="ЧЕРНАЯ">
        </div> <br>
         
        <div class="input-group">
             <textarea class="form-control textarea" name="publication"  rows="15" placeholder="Что нового?"></textarea><br>
        </div><br>
        <input type="hidden" name="check" value="<?= md5(time());?>"> 
        <input type="submit" class="btn btn-primary">   
        </div>
    </form>
</div>

