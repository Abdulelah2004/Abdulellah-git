<?php

$grade = "E";
switch ($grade){
  case "A":
    echo "you are awesome";
    break;

    case "B":
        echo "you are Good";
        break;
        
        case "C":
            echo "you are Normal";
            break;

            case "D":
                echo "you are BAD";
                break;

                case "E":
                    echo "you are FAILED";
                    break;

    default:
    echo "the {$grade} you input is not defind";

}
?>