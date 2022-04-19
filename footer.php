
<footer class="bg-dark">
    <div class="container">
        <div class="row"  style="top: 4%;">
            <!--  Footer: top-kolum 1 -->
            <div class="col text-white" >
            <?php dynamic_sidebar("footer-top-left"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->

            </div>
            <!--  Footer: top-kolum 2 -->
            <div class="col text-white" >
            <?php dynamic_sidebar("footer-top-right"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->

            </div>
        </div>
        <div class="row"  style="top: 4%;">
            <!--  Footer: bottom-kolum 1 -->
            <div class="col-12 col-md-6 col-lg-3 text-white" >
            <?php dynamic_sidebar("footer-bottom-colum-1"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
            </div>
            <!--  Footer: bottom-kolum 2 -->  
            <div class="col-12 col-md-6 col-lg-3 text-white" >
            <?php dynamic_sidebar("footer-bottom-colum-2"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
            </div>
                <!--  Footer: bottom-kolum 3 -->
            <div class="col-12 col-md-6 col-lg-3 text-white" >
            <?php dynamic_sidebar("footer-bottom-colum-3"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
            </div>

                <!--  Footer: bottom-kolum 4 -->
            <div class="col-12 col-md-6 col-lg-3 text-white" >
            <?php dynamic_sidebar("footer-bottom-colum-4"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
            </div>
        </div>
    </div>
</footer>


<?php wp_footer();?>
</body>
</html>