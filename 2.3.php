<?php
   printf("input size: ");
   fscanf(STDIN,"%d",$n);
   for($a>=0;$a<$n;$a++)
     {for ($b>=0;$b<$n;$b++) 
        {if ($b<=$a) printf("*");
        else printf(" ");
    }printf("\n");
  }