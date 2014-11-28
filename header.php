<link rel="stylesheet" href="css/style.css">
<div class="header">
    <div style="text-align:left;float: left;width:auto;">
        MyGrader
    </div>
    <div style="text-align: right">
        <?php
        $choice = array('practice', 'contest');
        foreach($choice as $str) {
            echo "<a href=\"$str.php\">$str</a> | ";
        }
        ?>
    </div>
</div>