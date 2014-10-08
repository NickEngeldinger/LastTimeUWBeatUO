<?php
    include("fragments/header.php");
?>
	<!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Sorry</h1>
            <h3>
            	<?php
            		$query = $_GET['error'];
    				echo $query;
            		#NOT A FAN OF THIS INLINE PHP
            	?>
            </h3>
            <a class="btn" href="local.lasttimeuwbeatuo.com">Try Again</a>
        </div>
    </header>
<?php
    include("fragments/footer.php");
?>