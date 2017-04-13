<?php require_once ('header.php'); ?>

<div class="container">
    <div class="email-content">
        <?php
        echo '<h2 class="sub-header"><span>' . $pages[$fileName][$currentLang]["h2_1"] . '</span></h2>';
        echo '<form action="' .
            $pages[$fileName]['form']['action'] . '" method="' .
            $pages[$fileName]['form']['method'] . '">';
            foreach ($form as $key => $value) {
                echo '<label>';
                    echo '<p><span' .
                        (in_array('necess', $value) ? ' class="necess"' : '') . '>' .
                        $value['name'][$currentLang] .
                        '</span></p>';
                    if ($value['inputType'] !== 'textarea') {
                        echo '<input type="' . $value['inputType'] . '"' .
                            (isset($value['name']) ? ' name="' . strtolower($value['name']['en']) . '"' : '') .
                            (isset($value['val']) ? ' value="' . $value['val'][$currentLang] . '"' : '') .
                            (in_array('necess', $value) ? ' required' : '') . '>';
                    } else {
                        echo '<textarea' .
                            (isset($value['name']) ? ' name="' . strtolower($value['name']['en']) . '"' : '') .
                            (in_array('necess', $value) ? ' required' : '') . '>' .
                            (isset($value['val']) ? ' value="' . $value['val'][$currentLang] . '"' : '') . '</textarea>';
                    }
                echo '<label>';
            }
        echo '</form>';
        ?>
    </div>

    <div class="contact-content">
        <?php
        echo '<h2 class="sub-header"><span>' . $pages[$fileName][$currentLang]["h2_2"] . '</span></h2>';
        foreach ($contacts as $key => $contact) {
            echo '<div class="each-contact" style="background-image: url(\'img/contacts/img_' . $key . '.png\');">';
            echo '<p><span>' . $contact['name'][$currentLang] . ': </span>' .
                ((isset($contact['val'][$currentLang])) ? $contact['val'][$currentLang] : $contact['val']) .
                '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php require_once ('footer.php'); ?>
