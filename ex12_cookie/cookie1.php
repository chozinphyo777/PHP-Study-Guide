<?php
setcookie('phone','0998765432',time()+ 30); //set cookie  sec 30
//setcookie('phone','0998765432',time()+ (60 * 30)); //30 min ( default 30 minute)
//setcookie('phone','0998765432',time()+ (60 * 60)); //1 hr
//setcookie('phone','0998765432',time()+ (60 * 60 * 24)); //1 day
//setcookie('phone','0998765432',time()+ (60 * 60 * 24 * 365)); //1 yr 
//setcookie('phone','0998765432',time() + (60 * 60 * 24 * 365 * 10)); // 10 yrs
echo "cookie create success";
?>