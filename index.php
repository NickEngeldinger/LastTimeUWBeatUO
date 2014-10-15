<?php
    include("fragments/header.php");
?>
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>LAST TIME UW BEAT UO</h1>
            <h2>
                <?php
                    echo $trivia;
                ?>
                Buffy The Vampire Slayer, Sabrina the Teenage Witch and Dawson's Creek were still on the air
            </h2>
            <button class="btn btn-primary btn-lg share">
                <i class="fa fa-twitter"></i>
                &nbsp;Share this!
            </button>
        </div>
    </header>
    
<?php
    include("fragments/footer.php")
?>   
