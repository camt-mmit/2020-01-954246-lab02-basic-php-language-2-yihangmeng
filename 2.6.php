<?php

     printf("input size: ");
     fscanf(STDIN,"%d",$n);
     for($a=1;$a<=2*$n-1;$a++)
     {for($b=1;$b<=2*$n-1;$b++)
      {if($a>$n || $b>$n)
        {if($a-$b==$n-1||$a+$b==3*$n-1||$a-$b==1-$n) printf("*"); else  printf(" ");}
        else if($a+$b==$n+1)printf("*"); else  printf(" ");
       }
      printf("\n");
     }