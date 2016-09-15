<?php
    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase
    {
        function test_weekday()
            {
                $test_Weekday = new WeekdayFinder;
                $inputDate = date_create("1983-05-12");
                $result = $test_Weekday->find($inputDate);
                $this->assertEquals("Thursday", $result);
            }

        function test_apeBirthday()
            {
                $test_Weekday = new WeekdayFinder;
                $inputDate = date_create("1988-04-23");
                $result = $test_Weekday->find($inputDate);
                $this->assertEquals("Saturday", $result);
            }

        function test_tomorrow()
            {
                $test_Weekday = new WeekdayFinder;
                $inputDate = date_create("2016-09-16");
                $result = $test_Weekday->find($inputDate);
                $this->assertEquals("Friday", $result);
            }

        function test_yesterday()
            {
                $test_Weekday = new WeekdayFinder;
                $inputDate = date_create("2016-09-14");
                $result = $test_Weekday->find($inputDate);
                $this->assertEquals("Wednesday", $result);
            }
    }
?>
