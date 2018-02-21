
var reservations_and_parties_start_hour = 14;
var reservations_and_parties_start_minutes  = 30 ;
var reservations_and_parties_end_hour = 22;
var reservations_and_parties_end_minutes = 0;
var reservations_and_parties_in_party_from = 15;
var reservations_and_parties_in_party_to = 60;

var reservationsAndPartiesModule = angular.module("ReservationsAndParties", []);

reservationsAndPartiesModule.controller("ReservationsAndPartiesCtrl", function ($scope, $http) {

    $scope.buttonDisabled = false;

    $scope.services = [
        {ServiceID: 1, ServiceName: 'Service1'},
        {ServiceID: 2, ServiceName: 'Service2'},
        {ServiceID: 3, ServiceName: 'Service3'}
    ];

    var reservations = this;

    reservations.success = false;

    reservations.partiesOptions = [];

    for (index = reservations_and_parties_in_party_from; index<=reservations_and_parties_in_party_to; index ++){
        reservations.partiesOptions.push(index);
    }

    reservations.months = [
        {name: 'January', value: 1},
        {name: 'February', value: 2},
        {name: 'March', value: 3},
        {name: 'April', value: 4},
        {name: 'May', value: 5},
        {name: 'June', value: 6},
        {name: 'July', value: 7},
        {name: 'August', value: 8},
        {name: 'September', value: 9},
        {name: 'October', value: 10},
        {name: 'November', value: 11},
        {name: 'December', value: 12}
    ];

    reservations.parties = "";

    reservations.dates = [];
    for (var i = 1; i <= 31; i++) {
        var d = new Object();
        d.value = i;
        reservations.dates.push(d);
    }

    reservations.times = [];

    for (var ampm = 0; ampm <= 1; ampm++){
        for (var h = 1; h <= 12; h++) {
            for (var ten = 0; ten < 6; ten++) {
                time = new Object();
                time.hours = h + ampm *12;
                time.minutes = ten *10;
                time.value = h.toString() + ":" + withLeadZero(time.minutes) + " " + ((ampm==0) ? "AM": "PM");
                reservations.times.push(time);
            }
        }
    }


    current_month = new Date().getMonth() +1;
    current_date = new Date().getDate();

    reservations.month = _.findWhere(reservations.months, {value: current_month});

    reservations.date = _.findWhere(reservations.dates, {value: current_date});

    reservations.time = _.find(reservations.times, function(timex) {
        return timex.hours == reservations_and_parties_start_hour
            && timex.minutes >=  reservations_and_parties_start_minutes;
    });


    reservations.submitForm = function(isValid){
        if (!isValid){
            return;
        }

        $scope.buttonDisabled = true;

        $http({
            method: "POST",
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            },
            url: "https://www.spothopperapp.com/api/spots/20287/reservation_requests/add",
            crossDomain: true,
            dataType: 'json',
            data: {
                destination_email: 'koutoubiala@gmail.com',
                email_subject: 'Request for a private party reservation',
                body_text: 'Received private party reservation request from the web site.',
                form_fields: {
                    name : reservations.name,
                    phone_number : reservations.phone,
                    email : reservations.email,
                    in_party: reservations.parties,
                    month: reservations.month.name,
                    date : reservations.date.value,
                    time : reservations.time.value
                }
            }
          }).success(function (data) {
                $scope.buttonDisabled = false;
                reservations.success = true;
                reservations.formSumbited = true;
            }).error(function (data) {
                $scope.buttonDisabled = false;
                reservations.success = false;
                reservations.serverError = "An error occurred when sending request. Please try later.";
            });
    }


    reservations.validateForm = function(){
        if (!reservations.name || !reservations.phone || !reservations.email || !reservations.parties || reservations.parties == ''){
            return false;
        }
        return true;
    }

    function withLeadZero(value){
        if (value == 0) return "00";
        if (value<10) return "0"+value.toString();
        return value.toString();
    }

});

reservationsAndPartiesModule.filter("availableDates",
    function(){
        return function(items,month){
            var filtered = [];
            var number_of_days = 31;
            switch(month.value ){
                case 4:case 6:case 9:case 11:
                    number_of_days = 30; break;
                case 2:
                    number_of_days = 29;
            }

            for (var i=0; i<number_of_days; i++){
                filtered.push(items[i]);
            }
            return filtered;
        }
    }
);


reservationsAndPartiesModule.filter("availableTimes",
    function(){
        return function(items, start_hours, start_minutes, end_hours, end_minutes){
            var filtered = [];
            var number_of_days = 31;
            var start = start_hours*60 + start_minutes;
            var end = end_hours*60 + end_minutes;
            for (var i = 0; i<items.length; i ++){
                var item = items[i];
                var time = item.hours *60 + item.minutes;
                if (start<=time && time <= end){
                    filtered.push(item)
                }
            }
            return filtered;
        }
    }
);

