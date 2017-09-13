

<?php include("includes/randomQuotes.php"); ?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Introduction P1</title>
        <meta charset="utf-8" />       
        <link href='css/p1.css' rel='stylesheet'>
        
    </head>
    
    <body>
        <!-- Start Body -->
        <div class="briefBio">

            <h1>Peggy Ostlund</h1>
    
            <img src='images/peg.png' alt='Peg Ostlund'>
    
            <h2>About Me</h2>
            <p>
                Living in the suburbs of Boston, I have been taking web development courses in order to round out my skills.
				My previous professional experience has been with Client Server application development. I live with my husband and 
				pets, and occasionally our two college student children.
            </p>
    
            <h2>Random Quote</h2>
            <blockquote>
				<?php echo $myquote ?> 
            </blockquote>

		</div>

        
        <!-- End Body -->
    </body>
    
</html>