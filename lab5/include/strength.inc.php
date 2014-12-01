<?php

    function calcPasswordSrength($password)
    {
        $strength = 0;
        $strength += calcStrengthForLength($password);
        $strength += calcStrengthForNumbers($password);
        $strength += calcStrengthForUpReg($password);
        $strength += calcStrengthForLowReg($password);
        $strength += calcOnlyLetters($password);
        $strength += calcOnlyNumbers($password);
        $strength += calcRepeat($password);
        return $strength;
    } 

    function calcStrengthForLength($password)
    {
        return(strlen($password)*4);
    }

    function calcStrengthForNumbers($password)
    {
        $countOfNumbers=0;
        for ($i = 0; $i < strlen($password); $i++)
            if (ctype_digit($password[$i]))
                $countOfNumbers++;
        return($countOfNumbers*4); 
    }
   
    function calcStrengthForUpReg($password)
    {
        $countOfUpper=0;
        for ($i = 0; $i < strlen($password); $i++)
            if (ctype_upper($password[$i]))
                $countOfUpper++;
        return((strlen($password)-$countOfUpper)*2); 
    }

    function calcStrengthForLowReg($password)
    {
        $countOfLower=0;
        for ($i = 0; $i < strlen($password); $i++)
            if (ctype_upper($password[$i]))
                $countOfLower++;
        return((strlen($password)-$countOfLower)*2); 
    }

    function calcOnlyLetters($password)
    {
        if (ctype_alpha($password))
            return (-1*strlen($password));
    }

    function calcOnlyNumbers($password)
    {
        if (ctype_digit($password))
            return (-1*strlen($password));
    }

    function calcRepeat($password)
    {
        $result = 0;
        $arrayLetters = array();
	for ($i = 0; $i < strlen($password); $i++)
            if (in_array($password[$i], $arrayLetters)) 
	    {
                $result -= 2;
            }
            else
            {
                array_push($arrayLetters, $password[$i]);
            }
        return $result;
    }

    