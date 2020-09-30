<?php
do{
    printf("input menu number( quit when menu=3): ");
    fscanf(STDIN, "%d", $menu);
    if ($menu==1)
        { printf("input price %%discount:");
        fscanf(STDIN,"%d%d",$a,$b);
        $b=$a*$b*0.01;
        $c=$a-$b;
        printf("price %d, discount %d.2,net price  %.2f",$a,$b,$c);}
    if($menu==2)
        {printf("input numbers(number1,number2):");
        fscanf(STDIN,"%d%d",$c,$d);
        if ($c>$d) printf("$c greater $d");
        else if($c< $d) printf( "$c less than $d"); 
        else printf( "$c equal $d");}
        if($menu!=1&&$menu!=2&&$menu!=3) printf("invalid menu number!!! ");
    }
     while ($menu!=3);