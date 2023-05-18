<?php
/**
 * Plugin Name: It's a date
 * Description: Adds the current year to elements with the data-current-year attribute.
 * Version: 0.1.0
 * Author: Daniel Olson
 */

function current_year_plugin_inline_script() {
    ?>
    <script>
        window.addEventListener("DOMContentLoaded", function () {
            // Find the element with the data-current-year attribute
            var element = document.querySelector("[data-current-year]");

            // Get the current year
            var currentYear = new Date().getFullYear();

            // Set the current year as the text content
            element.textContent = currentYear;
        });
    </script>
    <?php
}
add_action( 'wp_footer', 'current_year_plugin_inline_script' );
