<?php

$a=$_POST['username'];
$b=$_POST['user_update'];
$t=time();
echo '{
  "updates": [
    {
      "user_id": "7",
      "username": "'.$a.'",
      "name": "'.$a.'",
      "profile_pic": "https://wallscript8labs.s3.amazonaws.com/user1_14572474701.png",
      "update_id": "632",
      "user_update": "'.$b.'",
      "created": "'.$t.'"
    }
  ]
}';

?>
