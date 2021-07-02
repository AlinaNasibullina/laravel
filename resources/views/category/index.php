<h1>Список категорий</h1>
<ul>
<?php foreach ($categoryList as $category):?>
    <li><a href="category/<?=$category?>"><?=$category?></a></li>
<?php endforeach; ?>
</ul>
