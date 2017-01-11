<!DOCTYPE html>
<html>
<?php include('../overall/overall_header.php'); ?>
<body>
 <center>
         <ul class="countdown">
            <li>
               <span class="days">00</span>
               <p class="days_ref">days</p>
            </li>
            <li class="seperator">:</li>
            <li>
               <span class="hours">00</span>
               <p class="hours_ref">hours</p>
            </li>
            <li class="seperator">:</li>
            <li>
               <span class="minutes">00</span>
               <p class="minutes_ref">minutes</p>
            </li>
            <li class="seperator">:</li>
            <li>
               <span class="seconds">00</span>
               <p class="seconds_ref">seconds</p>
            </li>
         </ul>
      </center>
<script>
    $.fn.downCount = function (options, callback) {
        var settings = $.extend({
                date: null,
                offset: null
            }, options);

        // Save container
        var container = this;

        /**
         * Change client's local date to match offset timezone
         * @return {Object} Fixed Date object.
         */
        var currentDate = function () {
            // get client's current date
            var date = new Date();

            // turn date to utc
            var utc = date.getTime() + (date.getTimezoneOffset() * 60000);

            // set new Date object
            var new_date = new Date(utc + (3600000*settings.offset))

            return new_date;
        };

        /**
         * Main downCount function that calculates everything
         */
var original_date = currentDate();
var target_date = new Date('12/31/2020 12:00:00'); // Count up to this date

function onButtonClick() {
    original_date = currentDate();
}

function countdown () {
        var current_date = currentDate(); // get fixed current date

        // difference of dates
        var difference = current_date - original_date;

        if (current_date >= target_date) {
            // stop timer
            clearInterval(interval);

            if (callback && typeof callback === 'function') callback();

            return;
        }

        // basic math variables
        var _second = 1000,
            _minute = _second * 60,
            _hour = _minute * 60,
            _day = _hour * 24;

        // calculate dates
        var days = Math.floor(difference / _day),
            hours = Math.floor((difference % _day) / _hour),
            minutes = Math.floor((difference % _hour) / _minute),
            seconds = Math.floor((difference % _minute) / _second);

            // fix dates so that it will show two digets
            days = (String(days).length >= 2) ? days : '0' + days;
            hours = (String(hours).length >= 2) ? hours : '0' + hours;
            minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
            seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;
    
            // based on the date change the refrence wording
            var ref_days = (days === 1) ? 'day' : 'days',
                ref_hours = (hours === 1) ? 'hour' : 'hours',
                ref_minutes = (minutes === 1) ? 'minute' : 'minutes',
                ref_seconds = (seconds === 1) ? 'second' : 'seconds';

            // set to DOM
            container.find('.days').text(days);
            container.find('.hours').text(hours);
            container.find('.minutes').text(minutes);
            container.find('.seconds').text(seconds);

            container.find('.days_ref').text(ref_days);
            container.find('.hours_ref').text(ref_hours);
            container.find('.minutes_ref').text(ref_minutes);
            container.find('.seconds_ref').text(ref_seconds);
        };
        
        // start
        var interval = setInterval(countdown, 1000);
    };





$(document).ready(function(){
   $('.countdown').downCount();
});
</script>
<style>
ul.countdown {
   list-style: none;
   margin: 15px 15px;
   padding: 0;
   display: block;
   text-align: center;
}
ul.countdown li {
   display: inline-block;
}
ul.countdown li span {
   font-size: 80px;
   font-weight: 300;
   line-height: 80px;
}
ul.countdown li.seperator {
   font-size: 80px;
   line-height: 70px;
   vertical-align: top;
}
   ul.countdown li p {
   color: #a7abb1;
   font-size: 14px;
}
</style>
</body>
</html>