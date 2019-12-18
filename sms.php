<?php

 header('Content-Type: text/html;');
 $mobile_no=$_GET['$mobile_no'];
 $total=$_GET['total'];
 $username="DITMP-DMHSBD"; //username of the department
 $password="Test@123"; //password of the department
 $senderid="DMHSBD"; //senderid of the deparment
 //$message="Your Normal message here "; //message content
 $messageUnicode ="कलेक्टर एक्सप्रेस पोर्टल में आपकी शाखा /विभाग की ".$total." टी.एल. पत्र/जनसुनवाई आवेदन लंबित है | उक्त का निराकरण पोर्टल पर दर्ज़ करावें |"; //message content in unicode
 $messageUnicode .= "\r\n ";
 $messageUnicode .= "\r\n (कलेक्टर महोदय द्वारा आदेशित)";
 $mobileno="8889992332"; //if single sms need to be send use mobileno keyword
  //$mobileNos= "9907677712,9009090959"; //if bulk sms need to send use mobileNos as keyword and mobile number seperated by commas as value
 $deptSecureKey= "5848fb82-0192-45f0-8f79-0abc717cf5f5"; //departsecure key for encryption of message...
 $encryp_password=sha1(trim($password));
 
	sendSingleUnicode($username,$encryp_password,$senderid,$messageUnicode,$mobileno,$deptSecureKey);
	
	
	//function to send sms using by making http connection
	 function post_to_url($url, $data) {
	 $fields = '';
	 foreach($data as $key => $value) {
	 $fields .= $key . '=' . urlencode($value) . '&';
	 }
	 rtrim($fields, '&');
	 $post = curl_init();
	 //curl_setopt($post, CURLOPT_SSLVERSION, 5); // uncomment for systems supporting TLSv1.1 only
     curl_setopt($post, CURLOPT_SSLVERSION, 6); // use for systems supporting TLSv1.2 or comment the line
	 curl_setopt($post,CURLOPT_SSL_VERIFYPEER, false);
	 curl_setopt($post, CURLOPT_URL, $url);
	 curl_setopt($post, CURLOPT_POST, count($data));
	 curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
	 curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
	 $result = curl_exec($post); //result from mobile seva server
	 echo $result; //output from server displayed
	 curl_close($post);
	 }

	//function to send unicode sms by making http connection
	 function post_to_url_unicode($url, $data) {
	 $fields = '';
	 foreach($data as $key => $value) {
	 $fields .= $key . '=' . urlencode($value) . '&';
	 }
	 rtrim($fields, '&');
	 
	 $post = curl_init();
	//curl_setopt($post, CURLOPT_SSLVERSION, 5); // uncomment for systems supporting TLSv1.1 only
     curl_setopt($post, CURLOPT_SSLVERSION, 6); // use for systems supporting TLSv1.2 or comment the line
	 curl_setopt($post,CURLOPT_SSL_VERIFYPEER, false);
	 curl_setopt($post, CURLOPT_URL, $url);	 
	 curl_setopt($post, CURLOPT_POST, count($data));
	 curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
	 curl_setopt($post, CURLOPT_HTTPHEADER, array("Content-Type:application/x-www-form-urlencoded"));
	 curl_setopt($post, CURLOPT_HTTPHEADER, array("Content-length:"
	. strlen($fields) ));
	 curl_setopt($post, CURLOPT_HTTPHEADER, array("User-Agent:Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt)"));
	 curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
	 echo $result = curl_exec($post); //result from mobile seva server
	 curl_close($post);
	 }

	 //function to convert unicode text in UTF-8 format
	 function string_to_finalmessage($message){
	 $finalmessage="";
	 $sss = "";
	 for($i=0;$i< mb_strlen($message,"UTF-8");$i++) {
	 $sss=mb_substr($message,$i,1,"utf-8");
	 $a=0;
	 $abc="&#".ordutf8($sss,$a).";";
	 $finalmessage.=$abc;
	 }
	 return $finalmessage;
	 }

	 //function to convet utf8 to html entity
	 function ordutf8($string, &$offset){
	 $code=ord(substr($string, $offset,1));
	 if ($code >= 128)
	 { //otherwise 0xxxxxxx
	 if ($code < 224) $bytesnumber = 2;//110xxxxx
	 else if ($code < 240) $bytesnumber = 3; //1110xxxx
	 else if ($code < 248) $bytesnumber = 4; //11110xxx
	 $codetemp = $code - 192 - ($bytesnumber > 2 ? 32 : 0) -
	($bytesnumber > 3 ? 16 : 0);
	 for ($i = 2; $i <= $bytesnumber; $i++) {
	 $offset ++;
	 $code2 = ord(substr($string, $offset, 1)) - 128;//10xxxxxx
	 $codetemp = $codetemp*64 + $code2;
	 }
	 $code = $codetemp;

	 }
	 return $code;
	 }
 

	 //function to send single unicode sms
	 function sendSingleUnicode($username,$encryp_password,$senderid,$messageUnicode,$mobileno,$deptSecureKey){
	 $finalmessage=string_to_finalmessage(trim($messageUnicode));
	 $key=hash('sha512',trim($username).trim($senderid).trim($finalmessage).trim($deptSecureKey));
	 
	 $data = array(
	 "username" => trim($username),
	 "password" => trim($encryp_password),
	 "senderid" => trim($senderid),
	 "content" => trim($finalmessage),
	 "smsservicetype" =>"unicodemsg",
	 "mobileno" =>trim($mobileno),
	 "key" => trim($key)
	 );

	post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequest",$data); //calling post_to_url_unicode to send single unicode sms
	 }

	 //function to send bulk unicode sms
	 function sendBulkUnicode($username,$encryp_password,$senderid,$messageUnicode,$mobileNos,$deptSecureKey){
	 $finalmessage=string_to_finalmessage(trim($messageUnicode));
	 $key=hash('sha512',trim($username).trim($senderid).trim($finalmessage).trim($deptSecureKey));
	 
	 $data = array(
	 "username" => trim($username),
	 "password" => trim($encryp_password),
	 "senderid" => trim($senderid),
	 "content" => trim($finalmessage),
	 "smsservicetype" =>"unicodemsg",
	 "bulkmobno" =>trim($mobileNos),
	 "key" => trim($key)
	 );
	post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequest",$data); //calling post_to_url_unicode to send bulk unicode sms
	}
	
?>