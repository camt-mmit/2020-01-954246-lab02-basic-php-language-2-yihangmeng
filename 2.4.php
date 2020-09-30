<?php
  printf("input size: ");
   fscanf(STDIN,"%d",$n);
   for($a>=0;$a<$n;$a++)
     {
    for ($b=$n;$b>=0;$b--) 
    {if ($b<=$a) printf("*");
    else printf(" ");
         }printf("\n");    
    }