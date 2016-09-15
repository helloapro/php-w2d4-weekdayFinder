<?php
    class WeekdayFinder
    {
        function find($inputDate)
        {
            $today = date_create("2016-09-15");
            $interval = date_diff($inputDate,$today);
            $days = $interval->days;
            $weekdayFutureArray = array("Thursday" => 0, "Friday" => 1, "Saturday" => 2 , "Sunday" => 3, "Monday" => 4, "Tuesday" => 5, "Wednesday" => 6);
            $weekdayPastArray = array("Thursday" => 0, "Friday" => 6, "Saturday" => 5 , "Sunday" => 4, "Monday" => 3, "Tuesday" => 2, "Wednesday" => 1);

            $remainder = $days % 7;
            if ($inputDate > $today) {
                $dayOfWeek = array_search($remainder, $weekdayFutureArray, true);
            } elseif ($inputDate < $today) {
                $dayOfWeek = array_search($remainder, $weekdayPastArray, true);
            }

            return $dayOfWeek;
        }
    }
?>
