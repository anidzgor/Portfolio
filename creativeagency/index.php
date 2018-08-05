<?php include('inc/header.php') ?>

    <?php include('inc/slider.php'); ?>

    <?php include('information.php') ?>

    <div class="sectionWelcome pb-5">
        <div class="container">
            <div class="row">
                <p class="welcome-title">Witamy</p>
            </div>
            <div class="row">
                <hr class="lineHr">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <?php
                     $files = array();
                     foreach (glob("resources/images/icons/welcome/*.png") as $file)          
                         $files[] = $file;

                    $index = 0;
                    foreach($welcome as $key => $value) {
                        echo '<div class="col-xs-6 col-md-3 singleOffer">
                        <img src="' . $files[$index] . '">
                        <h1 class="offer-title">' . $key . '</h1>
                        <p class="offer-description">' . $value . '</p>
                            <button type="button" class="btn btn-offer">Czytaj więcej</button>
                        </div>';
                        $index++;
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="ourProjects">

        <div class="container">
            <div class="row">
                <p class="welcome-title">Nasze projekty</p>
            </div>
            <div class="row">
                <hr class="lineHr">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-xs-6 col-md-4 boxProject">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/1.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-xs-6 col-md-4 boxProject">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/2.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-xs-6 col-md-4 boxProject">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/3.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-xs-6 col-md-4 boxProject">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/4.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-xs-6 col-md-4 boxProject">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/5.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-xs-6 col-md-4 boxProject">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/6.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>                          
                
            </div>
        </div>
    </div>

    <div class="cooperate">

        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-xs-6 col-md-4 text-center">
                    <div class="row">
                        <p class="welcome-title">Współpraca</p>
                    </div>
                    <div class="row">
                        <hr class="lineHr">
                    </div>
                    <p class="cooperate-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button type="button" class="btn btn-project btn-cooperate">Projekty</button>
                </div>

                <div class="col-xs-6 col-md-4 cooperateImage">
                    <a href="#">
                        <div class="projectImage">
                            <img src="resources/images/projects/1.jpg">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="oursClients">
        <div class="container">
            <div class="row">
                <p class="welcome-title">Nasi klienci</p>
            </div>
            <div class="row">
                <hr class="lineHr">
            </div>
        </div>

        <div class="logosClients">
            <div class="container-fluid">
                <div class="row justify-content-center mt-1 mb-5">
                    <?php            
                        $files = array();
                        foreach (glob("resources/images/icons/clients/*.png") as $file) {            
                            echo '<img class="iconClient" src="' . $file . '"/>';
                        }
                    ?>     
                </div>
            </div>
        </div>
    </div>

    <div class="aboutUs">

        <div class="container">
            <div class="row">
                <p class="welcome-title">O nas</p>
            </div>
            <div class="row">
                <hr class="lineHr">
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="resources/images/people/1.jpg" class="img-fluid personImage">
                    <p class="descriptionPeople text-center">Paula Stevens</p>
                    <p class="rolePeople text-center">UX Designer</p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="resources/images/people/2.jpg" class="img-fluid personImage">
                    <p class="descriptionPeople text-center">Paul Michaels</p>
                    <p class="rolePeople text-center">Web Developer</p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="resources/images/people/3.jpg" class="img-fluid personImage">
                    <p class="descriptionPeople text-center">Michael Black</p>
                    <p class="rolePeople text-center">Manager</p>
                </div>
                
            </div>
        </div>
    </div>

<?php include('inc/footer.php') ?>
