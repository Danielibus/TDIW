<div id="menu_bg"class="menu_bg">
    <div id="menu_bar"class="menu_bar">
        <div id="menu">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
            <div>
                <ul id="navigation" class="navigation">
                    <?php foreach($array_categorias as $categoria): ?>
                    <li><a  id = "<?php echo $categoria['category_id'] ?>" onclick="changeCategory(id)"><h1><?php echo (htmlentities($categoria['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')); ?></h1></a></li>
                    <?php endforeach; ?>
                </ul> 
            </div>
        </div>
    </div>
</div>