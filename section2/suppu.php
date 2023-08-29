<!DOCTYPE html>
<html lang="en-GB">

<?php $thisPage="Suppu Bhoi"; ?>
<?php $thisSection="SECTION 2"; ?>
            
    <head>       
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
            
        <title>Supragya</title>

        <?php include("../php/meta.php"); ?>

    </head>       

    <body>
        
        <header><a href="/">MULTIPAGE PHP WEBSITE</a></header>

        <div class="content-wrap">
        
            <main>
                <h1><?php echo $thisPage ?></h1>
                
                <figure>
                    <img src="/images/SP.jpg">                    
                    <figcaption><em>From the table of 'Chess'</em></figcaption>
                </figure>

                <p>Supragya Kaval born in 2002, Uttarkhand. Suppu graduated Srishti Manipal in 2025. And stayed at home and played chess and guitar all day</p>
                <p>Artem (voller Name Artem Kostyukevich), geboren 1971 in Omsk (Russland), lebt seit 1999 in Deutschland. Er studiert Kinder- und Jugendbuchillustration an der Hochschule für Angewandte Wissenschaften Hamburg. Zuvor hat er in St. Petersburg an der Kunstlehranstalt "W.A.Serow" studiert und an der Pädagogischen Universität "A.I.Herzen" das Fach Darstellende Kunst belegt. Seine Illustrationen wurden unter anderem auf der Kinderbuchmesse in Bologna ausgestellt. Artem lebt mit seiner Familie in Hamburg.</p>

            </main>
        
            <aside>
                <?php include("../php/nav.php"); ?>
                
                <br>
                <hr>
                <p class="s">(This is an extra paragraph in the aside element)</p>
            </aside>
        </div>
        
        <footer><p class="s">Footer text comes here</p></footer>

    </body>
</html>



<!-- REFERENCE PHP CODE: -->
<!--
Declare variables
<?php $thisSection=""; ?>

Echo function w. if statement


Include function
<?php include("php/something.php"); ?>

Add an ID to an element dynamically
<?php if ($thisPage=="Page One") echo " id=\"currentpage\""; ?>
Add this as an attribute within an element

Date
<?php
date_default_timezone_set('Asia/Kolkata');
echo "" . date("Y") ;
?>
-->