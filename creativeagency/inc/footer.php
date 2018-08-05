    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="resources/js/lightbox-plus-jquery.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/js/custom.js"></script>

    <div class="footer">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <img src="resources/images/logo.png" class="logoFooter" alt="logo">
                <h2 class="nameLogoFooter">Creative Agency</h2>
            </div>

            <div class="row justify-content-center rowFooterLogos">
                <?php            
                    $files = array();
                    foreach (glob("resources/images/icons/footer/*.png") as $file) {            
                        echo '<img class="iconClient" src="' . $file . '"/>';
                    }
                ?>
            </div>

            <div class="row justify-content-center">
                <p class="copyright">Copyright &copy; 2018 Creative Agency</p>
            </div>

        </div>  
    </div>

</body>
</html>

