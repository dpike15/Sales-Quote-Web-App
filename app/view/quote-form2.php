<?php
session_start();
if ( !isset( $_SESSION['username'] ) ) { // make sure user is logged in
    header("location:index.php");
    exit(6);
}
echo '
<label class="large-label">Solution Requirements</label>
<br /> <br />

<form name="quoteForm2">
    <div class="form-group">
        <label>Number of Environments</label>
        <input type="text" class="form-control" name="numberOfEnvironments" ng-model="formData.numberOfEnvironments" ng-disabled="true" title="Auto populated based on Model & Additional Development Environment entered on Step 1">
        <label>Additional HA Servers</label>
        <input type="text" class="form-control" name="haServers" ng-model="formData.haServers" title="How many additional HA Servers are required? 0 if IaaS">
    </div>

    <div class="form-group">
        <label>Number of Global Identity Gateways</label>
        <input type="text" class="form-control" name="globalIdentityGateways" ng-model="formData.globalIdentityGateways" title="Required if IaaS. Recommend minimum of 2 (1 for test, 1 for production)">
        <label>Number of MS Password Filters</label>
        <input type="text" class="form-control" name="passwordFilters" ng-model="formData.passwordFilters" title="MS Password Filter per AD Domain Controller. Enter the number of domain controllers the password will be reset on">
    </div>

    <div class="form-group">
        <label>Password Management</label>
        <br>
        <select name="passwordManagement" ng-model="formData.passwordManagement" class="select-box" title="" ng-change="passwordManagementChange(formData.passwordManagement)">
              <option>YES</option>
              <option>NO</option>
        </select>
        <label>Provisioning</label>
        <select name="provisioning" ng-model="formData.provisioning" class="select-box" title="" ng-change="provisioningChange(formData.provisioning)">
            <option>YES</option>
            <option>NO</option>
        </select>
    </div>

    <div class="form-group">
        <label>HPAM</label>
        <select name="hpam" ng-model="formData.hpam" class="select-box" title="" ng-change="hpamChange(formData.hpam)">
            <option>YES</option>
            <option>NO</option>
        </select>
        <label>Federation</label>
        <select name="federation" ng-model="formData.federation" class="select-box" title="" ng-change="federationChange(formData.federation)">
            <option>YES</option>
            <option>NO</option>
        </select>
    </div>

    <div class="form-group">
        <label>Password Management Workshop</label>
        <select name="passwordManagementWorkshop" ng-model="formData.passwordManagementWorkshop" class="select-box" title="" ng-disabled="formData.passwordManagement == \'NO\'">
            <option>YES</option>
            <option>NO</option>
        </select>
        <label>Provisioning Workshop</label>
        <br>
        <select name="provWorkshop" ng-model="formData.provWorkshop" class="select-box" title="" ng-disabled="formData.provisioning == \'NO\'">
            <option>YES</option>
            <option>NO</option>
        </select>
    </div>

    <div class="form-group">
        <label>HPAM Workshop</label>
        <br>
        <select name="hpamWorkshop" ng-model="formData.hpamWorkshop" class="select-box" title="" ng-disabled="formData.hpam == \'NO\'">
            <option>YES</option>
            <option>NO</option>
        </select>
        <label>Federation Workshop</label>
        <select name="federationWorkshop" ng-model="formData.federationWorkshop" class="select-box" title="" ng-disabled="formData.federation == \'NO\'">
            <option>YES</option>
            <option>NO</option>
        </select>
    </div>
</form>

<a ui-sref="quote.form3" class="btn btn-block btn-primary">
    NEXT <span class="glyphicon glyphicon-circle-arrow-right"></span>
</a>
';
?>