<?php


function HttpRequest( $url, $method='get' , $queryParams=[], $params=[], $successParam=true){
   			try{
   
   				$queryStr = '';
   	            if(count($queryParams)){
   	                $queryStr = "?".http_build_query($queryParams);
   	            }
   				
   				$ch = curl_init($url.$queryStr);
   				
   				$headers = array( 'Content-Type: application/json');
   				if($method=='post'){
   					$data_string='';
   					if(count($params)){
   						$data_string = json_encode($params);
   					}
   					array_push($headers, 'Content-Length: ' . strlen($data_string));
   					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                   
   					curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
   				} 
   
   				curl_setopt($ch, CURLOPT_TIMEOUT, 10);
   				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   
   				$result = curl_exec($ch);
   				curl_close($ch);
   
   
   				if($output = json_decode($result)){
   					// print_r($output);
   					if($successParam){
   						if($output->success){
   							return $output->data;
   						}else{
   							throw new Exception("Something went wrong.1");
   						}
   					}else{
   						return $output;
   					}
   				}else{
   					throw new Exception("Something went wrong.2");
   				}
   				return ;
   			}catch(Exception $e){
   				// return $e->getMessage();
   				return [];
   			}
           }
           

           ?>