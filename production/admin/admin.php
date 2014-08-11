<?php

    include('inc/security.php');
    include('inc/config.php');
    include('inc/alerts.php');
    include('inc/css.php');
    include('classes/User.php');

    include('header.php');



    echo printAlerts();

?>

    <div class="links">
        <a class="logaut" href="logout.php">logout</a>
        <a class="theme" href="switchcss.php">switch theme</a>
    </div>

<?php
    $user = new User($_SESSION["id"]);
    $types = $user->getTypes();
?>

    <form action="add_dish.php" method="post">
        <select name="type">
            <?php
                
                foreach ($types as $type) {
                    $template = file_get_contents('templates/option.html');
                    $template = str_replace('#name#', $type["name"], $template);
                    $template = str_replace('#id#', $type["id"], $template);
                    echo $template;
                }
            ?>
        </select>
        <input type="text" name="name" value="">
        <textarea name="description"></textarea>
        <input type="submit" value="new Data">
    </form>

<?php
    foreach ($types as $type) {
        $dishes = $user->getMenu($type["name"]);
        echo '<ul>';
        echo $type["name"];
        foreach ($dishes as $dish) {
            $template = file_get_contents('templates/dish.html');
            $template = str_replace('#id#', $dish["id"], $template);
            $template = str_replace('#name#', $dish["name"], $template);
            $template = str_replace('#description#', $dish["description"], $template);
            echo $template;
        }
        echo '</ul>';
    }



    include('footer.php');
?>


