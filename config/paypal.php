<?php
return array(
 
'client_id' =>'AVh-2am1vYkEbsVPKn7JeGSteywweRrTSfoTXdUYnYZx-v4O84lHRAyZVfy7NDrLztgm8wkumb73yRSZ',
'secret' => 'ELyuCZJp5415fuDDj_HYxpINtt_orb6O63XSATb6OKyVDeP4p9l1G2msE1YRtRQI2t_wJ6VAKSrKQiTF',

'settings' => array(

'mode' => 'sandbox',


'http.ConnectionTimeOut' => 1000,

 //Whether want to log to a file

'log.LogEnabled' => true,

//Specify the file that want to write on

'log.FileName' => storage_path() . '/logs/paypal.log',

//Available option 'FINE', 'INFO', 'WARN' or 'ERROR'

//Logging is most verbose in the 'FINE' level and decreases as you
//proceed towards ERROR

'log.LogLevel' => 'FINE'
),
);