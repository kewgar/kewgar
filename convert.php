<?php


		if (isset($_POST['user_id'])) 
		{
		    $user_id = $_POST['user_id'];
		} 
		else 
		{
		    $user_id = 29;
		}
		chdir('/var/www/html/kewgar');
		$create = 'if not exist "dataset" mkdir "dataset"';
		exec($create,$output);

		chdir('/var/www/html/kewgar/dataset');
		$create2 = 'if not exist "'.$user_id.'" mkdir "'.$user_id.'"';
		exec($create2,$output);

		// $copy1 = 'copy "C:\Users\kewgar\AppData\Roaming\kewgar dataset\s1.csv" "C:\Program Files\Weka-3-8\dataset\"'.$user_id.'"\s1.csv"';
		// exec($copy1,$output1);
		// $copy2 = 'copy "C:\Users\kewgar\AppData\Roaming\kewgar dataset\s2.csv" "C:\Program Files\Weka-3-8\dataset\"'.$user_id.'"\s2.csv"';
		// exec($copy2,$output2);
		// $copy3 = 'copy "C:\Users\kewgar\AppData\Roaming\kewgar dataset\s3.csv" "C:\Program Files\Weka-3-8\dataset\"'.$user_id.'"\s3.csv"';
		// exec($copy3,$output3);
		// $copy4 = 'copy "C:\Users\kewgar\AppData\Roaming\kewgar dataset\s4.csv" "C:\Program Files\Weka-3-8\dataset\"'.$user_id.'"\s4.csv"';
		// exec($copy4,$output4);


		// chdir('C:\Program Files\Weka-3-8');
		//$output3 = shell_exec('dir');

		//$cmd2 = "java -cp weka.jar weka.classifiers.functions.MultilayerPerceptron -t data/s1.csv ";
		//$cmd2 = "java -cp weka.jar weka.core.converters.CSVLoader -t data/s1.csv > filename.arff";
		$conv1 = "java -cp weka.jar weka.core.converters.CSVLoader dataset/".$user_id."/s1.csv > dataset/".$user_id."/s1.arff ";
		exec($conv1,$output5);
		$conv2 = "java -cp weka.jar weka.core.converters.CSVLoader dataset/".$user_id."/s2.csv > dataset/".$user_id."/s2.arff ";
		exec($conv2,$output6);
		$conv3 = "java -cp weka.jar weka.core.converters.CSVLoader dataset/".$user_id."/s3.csv > dataset/".$user_id."/s3.arff ";
		exec($conv3,$output7);
		$conv4 = "java -cp weka.jar weka.core.converters.CSVLoader dataset/".$user_id."/s4.csv > dataset/".$user_id."/s4.arff ";
		exec($conv4,$output8);



?>