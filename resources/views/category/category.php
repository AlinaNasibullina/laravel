<h1>Список новостей <?=$categoryName?></h1>

<div>
<?php foreach($categoryNews as $new):?>
<div>
    <a href="news/<?=$new['id']?>"><?=$new['title']?></a>
</div>
<?php endforeach?>
</div>