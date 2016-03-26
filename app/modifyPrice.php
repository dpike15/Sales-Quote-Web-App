<div align="right" class="btn-toolbar rightCornerButton">
    <a ng-model="homeButton" href="index.php#/home" class="btn btn-primary">Home</a>
    <a ng-model="logoutButton" href="logout.php" class="btn btn-primary">Log Out</a>
</div>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center">MODIFY PRICING</div>
        <div class="panel-body">
            <form name="modifyPricingForm">
                <div class="form-group">
                    <label>CURRENT SERVICES HOURLY RATE</label>
                    <input type="text" class="form-control" name="currentServicesHourlyRate" ng-model="currentServicesHourlyRate" id="currentServicesHourlyRate">
                    <label>NEW DESIRED SERVICES HOURLY RATE</label>
                    <input type="text" class="form-control" name="newServicesHourlyRate" ng-model="newServicesHourlyRate" id="newServicesHourlyRate">
                </div>
            </form>

            <div align="center">
                <a ui-sref="" class="btn btn-block btn-primary" style="width: 25%;">
                    UPDATE PRICING <span class="glyphicon glyphicon-circle-arrow-right"></span>
                </a>
            </div>

        </div>
    </div>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: DF
 * Date: 3/24/2016
 * Time: 11:27 PM
 */



?>