<?php
    header("Content-Type: text/plain; charset=utf-8");
    error_reporting(0);
    $program = array(
    '<?php',
    '   header("Content-Type: text/plain"; charset=utf-8);',
    '   error_reporting(0);',
    '   $program = array(',
    '   );',
    '   ',
    '   for($i = 0; $i < 6; $i++){',
    '       echo $program[$i] . "\n";',
    '   }',
    '   for($i = 0; $i < 9; $i++){',
    '       printf("  %" . $program[$i] . " % \n", "\'");',
    '   }',
    '   for($i = 4; $i < 9; $i++){',
    '       echo $program[$i] . "\n";',
    '   }',
    '?>'
    );
    
    for($i = 0; $i < 4; $i++){
        echo $program[$i] . "\n";
    }
    for($i = 0; $i < 16; $i++){
        printf("  % " . $program[$i] . " % \n", "\'");
    }
    for($i = 4; $i < 16; $i++){
        echo $program[$i] . "\n";
    }
?>