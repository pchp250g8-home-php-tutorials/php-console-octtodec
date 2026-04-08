<?php
    const MAX_INT = 2 ** 32 - 1;
    $nDecNum = 0;
    $nOctPower = 1;
    $nMaxOctDigits = floor(log(MAX_INT, 8));
    echo("Input an octal number:\r\n");
    $strLine = chop(fgets(STDIN));
    $nStrLen = strlen($strLine);
    $bIsOctNum = preg_match_all("^[0-7]+$^", $strLine, $m);
    $bRightString =($nStrLen <= $nMaxOctDigits && $bIsOctNum);
    if (!$bRightString) 
    {
        echo("Wrong octal number format!!!\r\n");
        fgetc(STDIN);  
        exit(); 
    }
    for ($i = 0; $i < $nStrLen; $i++)
    {
        $nOctDight = $strLine[$nStrLen - 1 - $i] - '0';
        $nDecNum += ($nOctDight * $nOctPower);
        $nOctPower *= 8;
    }
    printf("The decimal equivalent of the octal number %s is %d\r\n", $strLine, $nDecNum);
    fgetc(STDIN);
?>
