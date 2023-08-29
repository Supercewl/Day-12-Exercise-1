<nav>
    <p>POSTS:</p>
    <!-- section 1 menu-->
    <a class="sectiontitle"<?php if ($thisSection=="SECTION 1") echo "id=\"curremtsection\""; ?>>Section 1</a>
    <ul>
        <li><a href="/section1/artem.php" <?php if ($thisPage=="Artem Kostyekevich") echo "id=\"currentpage\""; ?>>Artem Kostyukevich</a></li>
        <li><a href="/section1/suppu.php" <?php if ($thisPage=="Suppu Pahadi") echo "id=\"currentpage\""; ?>>Suppu Pahadi</a></li>
        <li><a href="/section1/raghav.php" <?php if ($thisPage=="Raghav Chicha") echo "id=\"currentpage\""; ?>>Raghav Otaku</a></li>
        

    </ul>
    
    <!-- section 2 menu-->
    <a class="sectiontitle">Section 2</a>
    <ul>
    <li><a href="/section2/artem.php" <?php if ($thisPage=="Artem Kostyekevich") echo "id=\"currentpage\""; ?>>Artem Kostyukevich</a></li>
        <li><a href="/section2/suppu.php" <?php if ($thisPage=="Suppu Pahadi") echo "id=\"currentpage\""; ?>>Suppu Pahadi</a></li>
        <li><a href="/section2/raghav.php" <?php if ($thisPage=="Raghav Chicha") echo "id=\"currentpage\""; ?>>Raghav Otaku</a></li>
    </ul>         

    <a href="">About</a>

</nav>