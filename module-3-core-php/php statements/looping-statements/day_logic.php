<?php 
if(isset($_POST["sub"]))
{
    $day=$_POST["day"];
    switch($day)
    {
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "Today is Wednesday";
            break;
        case "Thursday":
            echo "Today is Thursday";
            break;
        case "Friday":
            echo "Today is Friday";
            break;
        case "Saturday":
            echo "Today is Saturday";
            break;
        case "Sunday":
            echo "Today is Sunday";
            break;
        default:
            echo "Please select a valid day";
    }
}

?>