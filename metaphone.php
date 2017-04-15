<?php
/**
 * Created by IntelliJ IDEA.
 * User: etuncay
 * Date: 15/04/2017
 * Time: 21:13
 */
$one = metaphone("sakarya üniversitesi");
$two = metaphone("skrya unversite"); // BRNKK0FKS
$three = metaphone("unversite sakarya"); // 0KTSWNFL

similar_text($one, $two, $percent1); // 66.666666666667
similar_text($one, $three, $percent2); // 47.058823529412
similar_text($two, $three, $percent3); // 23.529411764706

print $percent1.'--'.$percent2.'--'.$percent3;
