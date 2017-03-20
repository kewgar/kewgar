<?php

// chdir('C:\Program Files\Weka-3-8');
//$output3 = shell_exec('dir');
//echo "<pre>$output3</pre>";
	
	if (isset($_POST['user_id'])) 
	{
	    $user_id = $_POST['user_id'];
	} 
	else 
	{
	    $user_id = 29;
	}

	// $cmd = "start cmd /c java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t data/testcvs.arff -d model/test.model ^> sswp.txt";

	//$cmd2 = "java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t data/s1.arff ";
	$anas1 = "java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t dataset/".$user_id."/s1.arff ";
	exec($anas1,$output1);

	$anas2 = "java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t dataset/".$user_id."/s2.arff ";
	exec($anas2,$output2);

	$anas3 = "java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t dataset/".$user_id."/s3.arff ";
	exec($anas3,$output3);

	$anas4 = "java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t dataset/".$user_id."/s4.arff ";
	exec($anas4,$output4);

	$j = 0;	
	$z = 0;
	$x =0;
	$sad = 0;


	for($i=0;$i<sizeof($output1);$i++) //get data from weka report in cmd  s1
	{

		
		$a = strpos($output1[$i], 'Threshold');
		if ($a !== false)
		{
			?><br><?php

			$th_s1[$j] = substr($output1[$i], 13); 

			$j++;

		}

		$b = strpos($output1[$i], 'Node');
		$bb = strpos($output1[$i], 'Sigmoid Node');
		$bbb = strpos($output1[$i], 'Linear Node 0');

		$hee1 = strpos($output1[$i], 'Node 1');
		$hee2 = strpos($output1[$i], 'Node 2');
		$hee3 = strpos($output1[$i], 'Node 3');


		if (($hee1 !== false || $hee2 !== false || $hee3 !== false) && $z < 3)
		{

			//echo 'ควยไรโยม'."<br>";
			$node_s1[$z] = substr($output1[$i],10); 
			//echo 'Node is '.$z.' '.$node[$z]."<br>";		
			$z++;
			


		} 

		$c = strpos($output1[$i], 'Attrib time');
		if ($c !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$atti_s1[$x] = substr($output1[$i],16); 
			//echo 'Time is '.$atti[$x]."<br>";		
			//$z++;
			//$x++;
		}

		$geta1 = strpos($output1[$i], 'Attrib a1');
		if ($geta1 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a1_s1[$x] = substr($output1[$i],13); 
			//echo 'A1 is '.$a1[$x]."<br>";		
			//$z++;	
		}

		$geta2 = strpos($output1[$i], 'Attrib a2');
		if ($geta2 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a2_s1[$x] = substr($output1[$i],13); 
			//echo 'A2 is '.$a2[$x]."<br>";		
			//$z++;	
		}

		$geta3 = strpos($output1[$i], 'Attrib a3');
		if ($geta3 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a3_s1[$x] = substr($output1[$i],13); 
			//echo 'A3 is '.$a3[$x]."<br>";		
			//$z++;	
		}

		$geta4 = strpos($output1[$i], 'Attrib a4');
		if ($geta4 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a4_s1[$x] = substr($output1[$i],13); 
			//echo 'A4 is '.$a4[$x]."<br>";		
			//$z++;	
			$x++;
		}
		//echo substr($output1[$i], 9);
	}  // end analy data s1


	$j = 0;	
	$z = 0;
	$x =0;
	$sad = 0;
	for($i=0;$i<sizeof($output2);$i++) //get data from weka report in cmd  S2
	{

		
		$a = strpos($output2[$i], 'Threshold');
		if ($a !== false)
		{
			?><br><?php

			$th_s2[$j] = substr($output2[$i], 13); 

			$j++;

		}

		$b = strpos($output2[$i], 'Node');
		$bb = strpos($output2[$i], 'Sigmoid Node');
		$bbb = strpos($output2[$i], 'Linear Node 0');

		$hee1 = strpos($output2[$i], 'Node 1');
		$hee2 = strpos($output2[$i], 'Node 2');
		$hee3 = strpos($output2[$i], 'Node 3');


		if (($hee1 !== false || $hee2 !== false || $hee3 !== false) && $z < 3)
		{

			//echo 'ควยไรโยม'."<br>";
			$node_s2[$z] = substr($output2[$i],10); 
			//echo 'Node is '.$z.' '.$node[$z]."<br>";		
			$z++;
			


		} 

		$c = strpos($output2[$i], 'Attrib time');
		if ($c !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$atti_s2[$x] = substr($output2[$i],16); 
			//echo 'Time is '.$atti[$x]."<br>";		
			//$z++;
			//$x++;
		}

		$geta1 = strpos($output2[$i], 'Attrib a1');
		if ($geta1 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a1_s2[$x] = substr($output2[$i],13); 
			//echo 'A1 is '.$a1[$x]."<br>";		
			//$z++;	
		}

		$geta2 = strpos($output2[$i], 'Attrib a2');
		if ($geta2 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a2_s2[$x] = substr($output2[$i],13); 
			//echo 'A2 is '.$a2[$x]."<br>";		
			//$z++;	
		}

		$geta3 = strpos($output2[$i], 'Attrib a3');
		if ($geta3 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a3_s2[$x] = substr($output2[$i],13); 
			//echo 'A3 is '.$a3[$x]."<br>";		
			//$z++;	
		}

		$geta4 = strpos($output2[$i], 'Attrib a4');
		if ($geta4 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a4_s2[$x] = substr($output2[$i],13); 
			//echo 'A4 is '.$a4[$x]."<br>";		
			//$z++;	
			$x++;
		}
		//echo substr($output2[$i], 9);
	} // end analy data s2



	$j = 0;	
	$z = 0;
	$x =0;
	$sad = 0;
	for($i=0;$i<sizeof($output3);$i++) //get data from weka report in cmd  S3
	{

		
		$a = strpos($output3[$i], 'Threshold');
		if ($a !== false)
		{
			?><br><?php

			$th_s3[$j] = substr($output3[$i], 13); 

			$j++;

		}

		$b = strpos($output3[$i], 'Node');
		$bb = strpos($output3[$i], 'Sigmoid Node');
		$bbb = strpos($output3[$i], 'Linear Node 0');

		$hee1 = strpos($output3[$i], 'Node 1');
		$hee2 = strpos($output3[$i], 'Node 2');
		$hee3 = strpos($output3[$i], 'Node 3');


		if (($hee1 !== false || $hee2 !== false || $hee3 !== false) && $z < 3)
		{

			//echo 'ควยไรโยม'."<br>";
			$node_s3[$z] = substr($output3[$i],10); 
			//echo 'Node is '.$z.' '.$node[$z]."<br>";		
			$z++;
			


		} 

		$c = strpos($output3[$i], 'Attrib time');
		if ($c !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$atti_s3[$x] = substr($output3[$i],16); 
			//echo 'Time is '.$atti[$x]."<br>";		
			//$z++;
			//$x++;
		}

		$geta1 = strpos($output3[$i], 'Attrib a1');
		if ($geta1 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a1_s3[$x] = substr($output3[$i],13); 
			//echo 'A1 is '.$a1[$x]."<br>";		
			//$z++;	
		}

		$geta2 = strpos($output3[$i], 'Attrib a2');
		if ($geta2 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a2_s3[$x] = substr($output3[$i],13); 
			//echo 'A2 is '.$a2[$x]."<br>";		
			//$z++;	
		}

		$geta3 = strpos($output3[$i], 'Attrib a3');
		if ($geta3 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a3_s3[$x] = substr($output3[$i],13); 
			//echo 'A3 is '.$a3[$x]."<br>";		
			//$z++;	
		}

		$geta4 = strpos($output3[$i], 'Attrib a4');
		if ($geta4 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a4_s3[$x] = substr($output3[$i],13); 
			//echo 'A4 is '.$a4[$x]."<br>";		
			//$z++;	
			$x++;
		}
		//echo substr($output3[$i], 9);
	} // end analy data s3



	$j = 0;	
	$z = 0;
	$x =0;
	$sad = 0;
	for($i=0;$i<sizeof($output4);$i++) //get data from weka report in cmd  S4
	{

		
		$a = strpos($output4[$i], 'Threshold');
		if ($a !== false)
		{
			?><br><?php

			$th_s4[$j] = substr($output4[$i], 13); 

			$j++;

		}

		$b = strpos($output4[$i], 'Node');
		$bb = strpos($output4[$i], 'Sigmoid Node');
		$bbb = strpos($output4[$i], 'Linear Node 0');

		$hee1 = strpos($output4[$i], 'Node 1');
		$hee2 = strpos($output4[$i], 'Node 2');
		$hee3 = strpos($output4[$i], 'Node 3');


		if (($hee1 !== false || $hee2 !== false || $hee3 !== false) && $z < 3)
		{

			//echo 'ควยไรโยม'."<br>";
			$node_s4[$z] = substr($output4[$i],10); 
			//echo 'Node is '.$z.' '.$node[$z]."<br>";		
			$z++;
			


		} 

		$c = strpos($output4[$i], 'Attrib time');
		if ($c !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$atti_s4[$x] = substr($output4[$i],16); 
			//echo 'Time is '.$atti[$x]."<br>";		
			//$z++;
			//$x++;
		}

		$geta1 = strpos($output4[$i], 'Attrib a1');
		if ($geta1 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a1_s4[$x] = substr($output4[$i],13); 
			//echo 'A1 is '.$a1[$x]."<br>";		
			//$z++;	
		}

		$geta2 = strpos($output4[$i], 'Attrib a2');
		if ($geta2 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a2_s4[$x] = substr($output4[$i],13); 
			//echo 'A2 is '.$a2[$x]."<br>";		
			//$z++;	
		}

		$geta3 = strpos($output4[$i], 'Attrib a3');
		if ($geta3 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a3_s4[$x] = substr($output4[$i],13); 
			//echo 'A3 is '.$a3[$x]."<br>";		
			//$z++;	
		}

		$geta4 = strpos($output4[$i], 'Attrib a4');
		if ($geta4 !== false)
		{
			//echo 'ควยไรโยม'."<br>";
			$a4_s4[$x] = substr($output4[$i],13); 
			//echo 'A4 is '.$a4[$x]."<br>";		
			//$z++;	
			$x++;
		}
		//echo substr($output4[$i], 9);
	} // end analy data s4




/*
	echo 'This is report from guu'."<br>";

	$size = $j+$z+$x; 
	$j = 0;	
	

	$kuy = 0;

			echo 'Threshold '.$j.' is '.$th[$j]."<br>";
			$j++;
			//$z = 0;

			for($z=0;$z<3;$z++)
			{
				echo 'Node is '.$z.' '.$node[$z]."<br>";	
			}
	echo "<br>";
	for($x=0;$x<$z;$x++) //get data from weka report in cmd
	{

			echo "<br>";
			echo 'Threshold '.($x+1).' is '.$th[$x+1]."<br>";
			echo 'Time is '.$atti[$x]."<br>";		
			
			echo 'A1 is '.$a1[$x]."<br>";		
			
			echo 'A2 is '.$a2[$x]."<br>";		
			
			echo 'A3 is '.$a3[$x]."<br>";		
			
			echo 'A4 is '.$a4[$x]."<br>";		

	}

	*/
	if (isset($_POST['a1'])) 
	{
	    $a1 = $_POST['a1'];
	} 
	else 
	{
	    $a1 = 2;
	}

	if (isset($_POST['a2'])) 
	{
	    $a2 = $_POST['a2'];
	} 
	else 
	{
	    $a2 = 2;
	}

	if (isset($_POST['a3'])) 
	{
	    $a3 = $_POST['a3'];
	} 
	else 
	{
	    $a3 = 2;
	}

	if (isset($_POST['a4'])) 
	{
	    $a4 = $_POST['a4'];
	} 
	else 
	{
	    $a4 = 2;
	}

	
	
	 
	
  

	//test data
	$time = 2;
	/*$a1 = 2;
	$a2 = 2;
	$a3 = 2;
	$a4 = 2;
	$s1 = 0;
	$s2 = 1;
	$s3 = 1;
	$s4 = 0; */
?>
	<select>
	  <option value="1">1-2 ชั่วโมง</option>
	  <option value="2">2-3 ชั่วโม</option>
	  <option value="3">3-4 ชั่วโม</option>
	  <option value="4">4-5 ชั่วโม</option>
	  <option value="5">6 ชั่วโมง ขึ้นไป</option>
	</select>

	<select>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	</select>

	<select>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	</select>

	<select>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	</select>

	<select>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	</select>

	
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testweka";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	$sql_findid = "SELECT max(pre_id) max_id FROM predict";
	$result_id = $conn->query($sql_findid);
	$row = $result_id->fetch_assoc();
	$max_id = $row["max_id"];
	if(is_null($max_id )|| $max_id == 0)
	{
		$max_id = 1;
		//echo "kuy";
	}
	else
	{
		$max_id = $max_id +1;
		//echo "hee";
	}
	$loop = 5-$time;

	for($i=0;$i<=$loop;$i++)
	{
	$sql = "SELECT * FROM symptom";
	$sql2 = "SELECT max(time) maxtime,max(a1) maxa1,max(a2) maxa2,max(a3) maxa3,max(a4) maxa4,min(time) mintime,min(a1) mina1,min(a2) mina2,min(a3) mina3,max(a4) mina4,min(s1) mins1,max(s1) maxs1 ,min(s2) mins2,max(s2) maxs2 ,min(s3) mins3,max(s3) maxs3 ,min(s4) mins4,max(s4) maxs4 FROM symptom";

	$result = $conn->query($sql2);

	if ($result->num_rows > 0) //get max and min every attribute 
	{
    // output data of each row
	    while($row = $result->fetch_assoc()) 
	    {
	        //echo "time: " . $row["time"]."<br>";
	        //echo $row["maxtime"]."<br>". $row["maxa1"]."<br>". $row["maxa2"]."<br>". $row["maxa3"]."<br>". $row["maxa4"]."<br>";
	        $maxtime = $row["maxtime"]; $maxa1 = $row["maxa1"]; $maxa2 = $row["maxa2"]; $maxa3 = $row["maxa3"]; $maxa4 = $row["maxa4"]; 
	        $mintime = $row["mintime"]; $mina1 = $row["mina1"]; $mina2 = $row["mina2"]; $mina3 = $row["mina3"]; $mina4 = $row["mina4"];
	        $maxs1 = $row["maxs1"];  $maxs2 = $row["maxs2"];  $maxs3 = $row["maxs3"];  $maxs4 = $row["maxs4"];
	        $mins1 = $row["mins4"];  $mins2 = $row["mins2"];  $mins3 = $row["mins3"];  $mins4 = $row["mins4"];
	    }
	} 

	else 
	{
   		echo "0 results";
	}


	//Norm data s1

	//norm time
	$rangetime = ($maxtime - $mintime)/2;
	$basetime = ($maxtime + $mintime)/2;
	$normtime = ($time - $basetime)/$rangetime;
	echo "time ".$normtime;

	//norm a1
	$rangea1 = ($maxa1 - $mina1)/2;
	$basea1 = ($maxa1 + $mina1)/2;
	if($rangea1 == 0)
	{
		$rangea1 = 0.01;
	}
	$norma1 = ($a1 - $basea1)/$rangea1;
	//echo number_format((float)$norma1, 2, '.', ''); 

	echo "a1".$norma1;

	//norm a2
	$rangea2 = ($maxa2 - $mina2)/2;
	$basea2 = ($maxa2 + $mina2)/2;
	if($rangea2 == 0)
	{
		$rangea2 = 0.01;
	}
	$norma2 = ($a2 - $basea2)/$rangea2;

	echo "a2".$norma2;

	//norm a3
	$rangea3 = ($maxa3 - $mina3)/2;
	$basea3 = ($maxa3 + $mina3)/2;
	if($rangea3 == 0)
	{
		$rangea3 = 0.01;
	}
	$norma3 = ($a3 - $basea3)/$rangea3;

	echo "a3".$norma3;

	//norm a4
	$rangea4 = ($maxa4 - $mina4)/2;
	$basea4 = ($maxa4 + $mina4)/2;
	if($rangea4 == 0)
	{
		$rangea4 = 0.01;
	}
	$norma4 = ($a4 - $basea4)/$rangea4;
	echo "a4".$norma4;

	//norm s1
	$ranges1 = ($maxs1 - $mins1)/2;
	$bases1 = ($maxs1 + $mins1)/2;	
	if($ranges1 == 0)
	{
		$ranges1 = 0.01;
	}
	$norms1 = ($s1 - $bases1)/$ranges1;
	
	//echo "s1".$norms1;


	//norm s2
	$ranges2 = ($maxs2 - $mins2)/2;
	$bases2 = ($maxs2 + $mins2)/2;
	
	if($ranges2 == 0)
	{
		$ranges2 = 0.01;
	}
	$norms2 = ($s2 - $bases2)/$ranges2;


	//norm s3
	$ranges3 = ($maxs3 - $mins3)/2;
	$bases3 = ($maxs3 + $mins3)/2;
	if($ranges3 == 0)
	{
		$ranges3 = 0.01;
	}
	$norms3 = ($s3 - $bases3)/$ranges3;

	//norm s4
	$ranges4 = ($maxs4 - $mins4)/2;
	$bases4 = ($maxs4 + $mins4)/2;
	
	if($ranges4 == 0)
	{
		$ranges4 = 0.01;
	}
	$norms4 = ($s4 - $bases4)/$ranges4;



	//calcurate hidden layer s1
	//f1 x1 = (norm_atti[i] * weight_atti[i]) + ... - therhold[i]
	$x1 = ($normtime*$atti_s1[0])+($norma1*$a1_s1[0])+($norma2*$a2_s1[0])+($norma3*$a3_s1[0])+($norma4*$a4_s1[0])+$th_s1[1];
	echo "<br>"."x1 is ".$x1;
	$normx1 = 1/(1+(exp($x1*-1)));
	echo "<br>"."x1 NORM is ".$normx1;

	$x2 = ($normtime*$atti_s1[1])+($norma1*$a1_s1[1])+($norma2*$a2_s1[1])+($norma3*$a3_s1[1])+($norma4*$a4_s1[1])+$th_s1[2];
	echo "<br>"."x2 is ".$x2;
	$normx2 = 1/(1+(exp($x2*-1)));
	echo "<br>"."x2 NORM is ".$normx2;

	$x3 = ($normtime*$atti_s1[2])+($norma1*$a1_s1[2])+($norma2*$a2_s1[2])+($norma3*$a3_s1[2])+($norma4*$a4_s1[2])+$th_s1[3];
	echo "<br>"."x3 is ".$x3;
	$normx3 = 1/(1+(exp($x3*-1)));
	echo "<br>"."x3 NORM is ".$normx3;

	$x0 = ($normx1*$node_s1[0])+($normx2*$node_s1[1])+($normx3*$node_s1[2])+$th_s1[0];
	echo "<br>"."x0 is ".$x0;


	//predict s1
	$pred_s1 = $x0 * $ranges1 + $bases1;
	echo "<br>"."s1 is ".$pred_s1;


	//calcurate hidden layer s2
	//f1 x1 = (norm_atti[i] * weight_atti[i]) + ... - therhold[i]
	$x1 = ($normtime*$atti_s2[0])+($norma1*$a1_s2[0])+($norma2*$a2_s2[0])+($norma3*$a3_s2[0])+($norma4*$a4_s2[0])+$th_s2[1];
	echo "<br>"."x1 is ".$x1;
	$normx1 = 1/(1+(exp($x1*-1)));
	echo "<br>"."x1 NORM is ".$normx1;

	$x2 = ($normtime*$atti_s2[1])+($norma1*$a1_s2[1])+($norma2*$a2_s2[1])+($norma3*$a3_s2[1])+($norma4*$a4_s2[1])+$th_s2[2];
	echo "<br>"."x2 is ".$x2;
	$normx2 = 1/(1+(exp($x2*-1)));
	echo "<br>"."x2 NORM is ".$normx2;

	$x3 = ($normtime*$atti_s2[2])+($norma1*$a1_s2[2])+($norma2*$a2_s2[2])+($norma3*$a3_s2[2])+($norma4*$a4_s2[2])+$th_s2[3];
	echo "<br>"."x3 is ".$x3;
	$normx3 = 1/(1+(exp($x3*-1)));
	echo "<br>"."x3 NORM is ".$normx3;

	$x0 = ($normx1*$node_s2[0])+($normx2*$node_s2[1])+($normx3*$node_s2[2])+$th_s2[0];
	echo "<br>"."x0 is ".$x0;


	//predict s2
	$pred_s2 = $x0 * $ranges2 + $bases2;
	echo "<br>"."s2 is ".$pred_s2;

		//calcurate hidden layer s3
	//f1 x1 = (norm_atti[i] * weight_atti[i]) + ... - therhold[i]
	$x1 = ($normtime*$atti_s3[0])+($norma1*$a1_s3[0])+($norma2*$a2_s3[0])+($norma3*$a3_s3[0])+($norma4*$a4_s3[0])+$th_s3[1];
	echo "<br>"."x1 is ".$x1;
	$normx1 = 1/(1+(exp($x1*-1)));
	echo "<br>"."x1 NORM is ".$normx1;

	$x2 = ($normtime*$atti_s3[1])+($norma1*$a1_s3[1])+($norma2*$a2_s3[1])+($norma3*$a3_s3[1])+($norma4*$a4_s3[1])+$th_s3[2];
	echo "<br>"."x2 is ".$x2;
	$normx2 = 1/(1+(exp($x2*-1)));
	echo "<br>"."x2 NORM is ".$normx2;

	$x3 = ($normtime*$atti_s3[2])+($norma1*$a1_s3[2])+($norma2*$a2_s3[2])+($norma3*$a3_s3[2])+($norma4*$a4_s3[2])+$th_s3[3];
	echo "<br>"."x3 is ".$x3;
	$normx3 = 1/(1+(exp($x3*-1)));
	echo "<br>"."x3 NORM is ".$normx3;

	$x0 = ($normx1*$node_s3[0])+($normx2*$node_s3[1])+($normx3*$node_s3[2])+$th_s3[0];
	echo "<br>"."x0 is ".$x0;


	//predict s3
	$pred_s3 = $x0 * $ranges3 + $bases3;
	echo "<br>"."s3 is ".$pred_s3;


	//calcurate hidden layer s4
	//f1 x1 = (norm_atti[i] * weight_atti[i]) + ... - therhold[i]
	$x1 = ($normtime*$atti_s4[0])+($norma1*$a1_s4[0])+($norma2*$a2_s4[0])+($norma3*$a3_s4[0])+($norma4*$a4_s4[0])+$th_s4[1];
	echo "<br>"."x1 is ".$x1;
	$normx1 = 1/(1+(exp($x1*-1)));
	echo "<br>"."x1 NORM is ".$normx1;

	$x2 = ($normtime*$atti_s4[1])+($norma1*$a1_s4[1])+($norma2*$a2_s4[1])+($norma3*$a3_s4[1])+($norma4*$a4_s4[1])+$th_s4[2];
	echo "<br>"."x2 is ".$x2;
	$normx2 = 1/(1+(exp($x2*-1)));
	echo "<br>"."x2 NORM is ".$normx2;

	$x3 = ($normtime*$atti_s4[2])+($norma1*$a1_s4[2])+($norma2*$a2_s4[2])+($norma3*$a3_s4[2])+($norma4*$a4_s4[2])+$th_s4[3];
	echo "<br>"."x3 is ".$x3;
	$normx3 = 1/(1+(exp($x3*-1)));
	echo "<br>"."x3 NORM is ".$normx3;

	$x0 = ($normx1*$node_s4[0])+($normx2*$node_s4[1])+($normx3*$node_s4[2])+$th_s4[0];
	echo "<br>"."x0 is ".$x0;


	//predict s4
	$pred_s4 = $x0 * $ranges4 + $bases4;
	echo "<br>"."s4 is ".$pred_s4;
	
	
	$sql_savepredict = "INSERT INTO predict (pre_id,pre_time, s1, s2,s3,s4,user_id)
	VALUES ('$max_id','$time', '$pred_s1', '$pred_s2', '$pred_s3', '$pred_s4','$user_id')";

	if ($conn->query($sql_savepredict) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql_savepredict . "<br>" . $conn->error;
	}
	$time++;
	}

	

$conn->close();


	

?>


