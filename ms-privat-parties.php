<?php 
/*
Template Name: Private page
*/
get_header('privat'); ?>
<div class="pagecontent">
    <div class="tabnav">
    </div>
    <div class="tabs-container" >

        <div class="scrolling reservations-and-parties" ng-app="ReservationsAndParties" >

            <div class="container" ng-controller="ReservationsAndPartiesCtrl as reservations">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <label>Private parties</label>
                        <p ng-if="!reservations.formSumbited">Book your next party with us!</p>
                        <p ng-if="reservations.formSumbited">Your request has been sent to the restaurant. We will contact you soon.</p>
                        <p ng-if="reservations.serverError">{{reservations.serverError}}</p>
                    </div>
                </div>

                <div class="row reservations-and-parties-form" ng-if="!reservations.formSumbited && !reservations.serverError">
                    <form name="rpForm" ng-submit="reservations.submitForm(rpForm.$valid)" novalidate>
                        <div >
                            <input type="text" ng-model="reservations.name" id="rp-name" placeholder="Name ..."  required/>
                        </div>
                        <div >
                            <input type="text" ng-model="reservations.phone" id="rp-phone" placeholder="Phone number ..."  required/>
                        </div>
                        <div>
                            <input type="email" ng-model="reservations.email" id="rp-email" placeholder="Email ..."  required/>
                        </div>

                        <div >
                            <select
                                ng-model="reservations.parties"
                                id="rp-in-parties"
                                class="in-party wide-select"
                                ng-options="p for p in reservations.partiesOptions"
                                required>
                                <option value=""># in party</option>
                            </select>

                            <select ng-model="reservations.month" ng-options="month.name for month in reservations.months"></select>
                            <select ng-model="reservations.date" ng-options="d.value for d in reservations.dates | availableDates:reservations.month"></select>
                            <select class="wide-select" ng-model="reservations.time" ng-options="t.value for t in reservations.times | availableTimes:14:30:22:0" ></select>
                        </div>
                        <div>
                            <button type="submit" ng-disabled="rpForm.$invalid || buttonDisabled">SUBMIT</button>
                            <p ng-if="buttonDisabled">Your request is being processed, please wait...</p>
                        </div>
                    </form>
                </div>

                <div class="row reservations-and-parties-ok" ng-if="reservations.success">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
