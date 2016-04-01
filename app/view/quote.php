<?php
echo '
<div align="right" class="btn-toolbar rightCornerButton">
    <a ng-model="homeButton" href="index.php#/home" class="btn btn-primary">Home</a>
    <a ng-model="logoutButton" href="logout.php" class="btn btn-primary">Log Out</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div id="form-container">
                <div class="page-header text-center">
                    <h2>Sales Quote Generator</h2>
                    <!-- The links to our nested states using relative paths -->
                    <!-- Add the active class if the state matches ui-sref -->
                    <div id="status-buttons" class="text-center">
                        <a ui-sref-active="active" ui-sref=".form1"><span>1</span>Discovery</a>
                        <a ui-sref-active="active" ui-sref=".form2"><span>2</span>Solution Requirements</a>
                        <a ui-sref-active="active" ui-sref=".form3"><span>3</span>Solution Specifics</a>
                        <a ui-sref-active="active" ui-sref=".form4"><span>4</span>Training</a>
                    </div>
                </div>

                <!-- Use ng-submit to catch the form submission and use our Angular function -->
                <form id="signup-form" ng-submit="processForm()">
                    <!-- Our nested state views will be injected here -->
                    <div id="form-views" ui-view></div>
                </form>
            </div>
        </div>
    </div>
</div>
';
?>