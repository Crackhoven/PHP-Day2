<?php

$a = 2;
$b = 7;
$c = 4;
$prod1 = 5;
$prod2 = 63;
$prod3 = 8;
$op1 = "";
$op2 = "";


function calculate($a, $b, $op) {
 
    switch($op) {
        case '+':
            $prod = $a + $b;
            break;
        case '-':
            $prod = $a - $b;
            break;
        case '*':
            $prod = $a * $b;
            break;
        case '/':
            if ($b == 0) {$prod = "&#8734";}
            else {$prod = $a / $b;}
            break;
    }
    
    
    return $prod;
}


extract($_POST);



?>
 <html>

  <head>
    <title>PHP Calculator Version 2.12</title>
  </head>

  <body>

    <h3>PHP Calculator (Version 2.12)</h3>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      a = <input type="text" name="a$a" size="5" value="<?php print $a; ?>" /> op1 =
      <select name="op1">
                <option value="+" <?php if ($op1=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op1=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op1=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op1=='/') echo 'selected="selected"';?>>/</option>
            </select> b = <input type="text" name="b$b" size="5" value="<?php  print $b; ?>" /> op2 =
      <select name="op2">
                <option value="+" <?php if ($op2=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op2=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op2=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op2=='/') echo 'selected="selected"';?>>/</option>
            </select> c = <input type="text" name="c" size="5" value="<?php print $c; ?>" />
      <input type="submit" name="calc" value="Calculate" />
    </form>

   <?php
        if(isset($calc)) {
            if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
               
                if ($op1 == '*' or $op1 == '/') {
                  
                    $prod1 = calculate($a, $b, $op1);
                    $prod2 = calculate($prod1, $c, $op2);
                }
                else if ($op2 == '*' or $op2 == '/') {
                    $prod1 = calculate($b, $c, $op2);
                    $prod2 = calculate($a, $prod1, $op1);
                }
                else {
                    $prod1 = calculate($a, $b, $op1);
                    $prod2 = calculate($prod1, $c, $op2);
                }

               
                echo "<p>$a $op1 $b $op2 $c = $prod2 </p>";
            }
            else {
            
                echo "<p>a, b, and c values are required to be numeric ... 
                         please re-enter values</p>";
            }
        }
    ?>
  </body>

  
  </html>