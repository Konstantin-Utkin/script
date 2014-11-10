<?php
    function printSinHeader($minutes)
    {
        $html = '<table>';
        $html .= "<th>Deg\Min</th>";
        for($j = 0; $j < 60; $j += $minutes)
        {
            $html.='<th> min='.$j.'</th>';
        }
        return $html;
    }

    function calcSin($degrees, $minutes)
    {
         $pi = 3.14159265359;
         return(sin(($degrees + $minutes / 60) * $pi / 180));
         
    }  


    function getSinTableBody($degrees, $minutes)
    {
        $html = '';
        for($i = 0; $i < 360; $i += $degrees)
        {
            $html .= '<tr>';
            $html .= '<td>'.$i.'</td>';
            for($j = 0; $j < 60; $j += $minutes)
            {
                $sin=number_format(calcSin($i, $j), 4);
                $html .= '<td>'.$sin.'</td>';
            }
            $html .= '</tr>';
        }
        return $html;
    }
    
    function closeTable()
    {
        return('</table>');
    }
    