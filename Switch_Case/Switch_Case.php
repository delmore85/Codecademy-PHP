<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
     $i = 0;
     switch ($i):
         case -1:
         case 0:
         case 1:
             echo $i . " is between -1 and 1";
             break;
        case 20:
            echo "This is something else entirely";
            break;
        default:
            echo $i . " is way off base";
            break;
     endswitch;
    ?>
	</body>
</html>