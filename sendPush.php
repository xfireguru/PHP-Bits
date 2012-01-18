        function sendNotification(){
	
				$url = 'https://api.parse.com/1/push/';
				$fields = array('key' => 'MASTER KEY', 
					'channel' => 'YOUR CHANNEL - IF NECESSARY', 
					'type' => 'android',
					'data' => array('alert' => 'New Message!'));
	
				$fields2 = json_encode($fields);
	
				//open connection
				$ch = curl_init();                                                                      
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                          
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields2);                                                                  
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));    
				curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);                                                                                                                               
				$result = curl_exec($ch);
				
				//echo $result;
	
				//the following lines are commented out, but were used to determine the nature of the error received from Parse.com				
				//print_r(curl_getinfo($ch)); 
				//echo "\n\ncURL error number:" .curl_errno($ch); 
				//echo "\n\ncURL error:" . curl_error($ch); 

        }