
<?php 

 function form_create($action, $inputs = [])
 {

 	$formulaire = form_open($action);
 	
 	foreach ($inputs as $key => $value) 
 	{
 		switch($value)
 		{
 			case "text":

 				$formulaire .= "<div class='form_group'>";

 				$data=[
 					"class"=>"form-control",
 					"name"=>$key,
 					"placeholder"=>$key,
 					'value' => set_value($key)
 			     ];

 				$formulaire.= form_input($data);

 				$formulaire.=form_error($key, '<div  class="alert alert-danger">','</div>');
 		
 				$formulaire.= "</div>";


 				break;


 			case "textarea":

 				$formulaire.= "<div class='form_group'>";

 				$data=[
 					"class"=>"form-control",
 					"name"=>$key,
 					"placeholder"=>$key,
 					'value' => set_value($key)
 			     ];

 				$formulaire.= form_textarea($data);

 				$formulaire.=form_error($key, '<div  class="alert alert-danger">','</div>');
 		
 				$formulaire .="</div>";

 				break;


 			case "submit":

 				$formulaire.= form_submit($key, $key, "class='btn btn-primary'");

 				break;


 		}


 		/*if ($value == "text")
 		{
 			$formulaire = form_input($key);
 		}
 		else if  ($value == "textarea")
 		{
 			$formulaire = form_textarea($key);
 		}
 		else if  ($value == "submit")
 		{
 			$formulaire = form_submit($key);
 		}*/
 	}



	$formulaire.= form_close();

	return $formulaire;

}