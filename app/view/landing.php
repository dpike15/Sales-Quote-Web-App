<?php
session_start();
if (!isset($_SESSION['username'])) { // make sure user is logged in
    header("location:index.php");
    exit(5);
}
echo '
<div align="right" class="btn-toolbar rightCornerButton">
    <a ng-model="logoutButton" href="logout.php" class="btn btn-primary">Log Out</a>
</div>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center">WHAT WOULD YOU LIKE TO DO?</div>
        <div class="panel-body">
            <div class="row col-lg-4 col-lg-offset-4">
                <a ui-sref="quote.form1" class="btn btn-block btn-primary">
                                               Generate New Quote <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>
                <br />
                <a ui-sref="searchQuote" class="btn btn-block btn-primary">
                         View Existing Quotes <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>
                <br />';
if ($_SESSION['admin'] == 'true') { // make sure user is admin
    echo '<a ui-sref="portal" class="btn btn-block btn-primary">
	     Admin Portal <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>';
}
echo '    </div>
        </div>
    </div>
</div>';
?>