<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$res->bindParam(':login', $login, PDO::PARAM_STR);
$res->bindParam(':pwd', $pwd, PDO::PARAM_STR);

$res->execute();

$article=$res->fetch(PDO::FETCH_OBJ);

if($res->fetch()):?>
<div style="background:rgba(0,255,0,0.5);">Welcome Home</div>
<?php else: ?>
<div style="background:rgba(255,0,0,0.5);">ùerreu login/password</div>
<?php endif;