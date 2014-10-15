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
            </h2>
            <button class="btn btn-primary btn-lg share" data-toggle="modal" data-target="#myModal">FIND OUT NOW!</button>
        </div>
    </header>
    
<?php
    include("fragments/footer.php")
?>   
