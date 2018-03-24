<div class="wrapp">
    <form action="admin.index.php" method="post">
        <div class="input-group">
            <span class="input-group-addon">Заголовок</span>
            
            <input type="text" class="form-control title" id="title" name="title" placeholder="Название статьи">
        </div><br>
        <div class="input-group">
        <h3>Выбрать полосу</h3><p>В разработке пока кнопка не работает</p>
            <input type="button" id = "white" class="btn btn-default col-sm-2" style= "box-shadow: none; margin-right:1em;" value="БЕЛАЯ">
            <!-- <input type="button" id = "black" class="btn btn-default col-sm-2" style="background: black; color:white; box-shadow: none;" value="ЧЕРНАЯ"> -->
        </div> <br>
         
        <div class="input-group">
             <textarea class="form-control textarea" id="publ" name="publication"  rows="15" placeholder="Что нового?"></textarea><br>
        </div><br>
        <input type="hidden" id="check" value="<?= md5(time());?>"> 
        <input type="button" id="subm" class="btn btn-primary" value="Отправить">   
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    line = "";
    $("#white").click(function(){
        line = "white";
        // alert(line);
    });
    $("#subm").click(function(){
       $.post(
            "/adminPanel/tobd.php",
           {
            title: $("#title").val(),
            publication: $("#publ").val(),
            check: line
           },
           onAjaxSuccess
           
       );
    });
    function onAjaxSuccess(data)
    {
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
       alert(data);
        if (data==""){
            alert("ЗАполните все поля");
        }
        else{
            $("#publ").val('');
            $("#title").val('');
            alert('Пост опубликован');

        }  
    }

</script>

