<footer>
    <div class="container">
        <?php
        define("YEAR_COPYRIGHT", 2017);
        $isNeedCopy = '';
        if (YEAR_COPYRIGHT != date('Y')) {
            $isNeedCopy = " - " . date('Y');
        }
        echo "<div class='copyright'>Copyright © " . YEAR_COPYRIGHT . $isNeedCopy . " Nature Shop. " . $footer[$currentLang] . "</div>";
        ?>
        <ul class="soc">
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo '<li style="background: url(\'' . $footer['link'] . $i . '.png\');"><a href=""></a></li>';
            }
            ?>
        </ul>
    </div>
</footer>
</body>
</html>
