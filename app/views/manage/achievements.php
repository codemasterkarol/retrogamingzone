<h2><?php echo $data['title']; ?></h2>
<ul class="achievements">
<?php
    foreach($data['achievements'] as $achievement) {
        echo "<li>";

        // echo $achievement['achievement_title'] . "<br>";
        echo "<img src='" . \helpers\url::get_template_path() . "images/badges/" .
            $achievement['achievement_badge'] . "'><br>";
        echo $achievement['achievement_text'] . "<br>";

        echo "</li>";
    }
?>
</ul>