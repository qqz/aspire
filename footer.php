        <script>

            let mainNav = document.getElementById("main-navigation");
            let navBarToggle = document.getElementById("js-navbar-toggle");

            navBarToggle.addEventListener("click", function() {
                mainNav.classList.toggle("active");
            });

        </script>
        <footer>
            <div id="wordpress-blurb">proudly powered by <a href="http://wordpress.org/">WordPress</a>. Like this theme? Download it <a href="https://github.com/qqz/aspire">here</a>.</div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>