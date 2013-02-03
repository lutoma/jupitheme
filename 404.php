<?php
        get_header();

        echo "<article>";
        echo "<h2  class=\"post-title\"><a href=\"\">404 - Was hast du bitte getan?</a></h2>";
        echo "<div class=\"content\"><p><img src=\"";
                        bloginfo('template_directory');
        echo "/img/404.jpg\" alt=\"Pony: „Huh — What are you doin'?“\" /></p></div>";
        echo "</article>";
        echo "<br class=\"clear\" />";

        get_footer();
?>