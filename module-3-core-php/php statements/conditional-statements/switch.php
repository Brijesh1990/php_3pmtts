<?php 
$grade="D";
switch($grade)
{
    case 'A':
        echo "<h1>You are Topper students &#9786</h1>";
        break;

        case 'B':
            echo "<h1>You are average students &#9786</h1>";
            break;

            case 'C':
                echo "<h1>You are failed students &#9785</h1>";
                break;

                default:

                echo "<h1>Your gradee is npot found please contact with admin</h1>";
                break;
            
    
            
}


?>