<?php require_once ('header.php'); ?>

<div class="container">
    <div class="shop-content">
        <?php
        echo '<h2 id="shop" class="sub-header"><span>' . $pages[$fileName][$currentLang]["h2_1"] . '</span></h2>';
        $maxIntoBlock = 4;
        foreach ($list as $key => $product) {
            if ($key < $maxIntoBlock) {
                echo '<div'
                    . (($checkForInfo = isset($product[0])) ? ' class="' . $product[0] . '"': '')
                    . '>';
                if ($checkForInfo) {
                    echo '<div class="div-info">' . $product[0] . '</div>';
                }
                echo '<img src="img/products/img_' . $key . '.jpg">';
                echo '<a href="">' . $product['name'][$currentLang] . '</a>';
                echo '<p><span>' . $product['newPrice'] . '</span> ' . $product['price'] . '</p>';
                echo '</div>';
            } else {
                // не выводить больше допустимого максимального количества элементов
            }
        }
        ?>
    </div>

    <div class="blog-content">
        <?php
        echo '<h2 id="blog" class="sub-header"><span>' . $pages[$fileName][$currentLang]["h2_2"] . '</span></h2>';
        $maxIntoBlock = 3;
        foreach ($list as $key => $product) {
            if ($key < $maxIntoBlock) {
                echo '<div>';
                if (isset($product['dateBlog'])) {
                    echo '<div class="div-info">' . $product['dateBlog'] . '</div>';
                }
                echo '<img src="img/products/img_' . $key . '.jpg">';
                echo '<p>' . $product['name'][$currentLang] . '</p>';
                echo '<a href="">' . $pages[$fileName][$currentLang]['linkMore'] . '</a>';
                echo '</div>';
            } else {
                // ...
            }
        }
        ?>
    </div>
</div>

<?php require_once ('footer.php'); ?>
