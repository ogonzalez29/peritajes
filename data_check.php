<?php
//// define variables array and set to empty values
global $dateErr;
global $nameErr;
global $last_nameErr;
global $nameErr1;
global $last_nameErr1;
global $idErr;
global $phoneErr;
global $emailErr;
global $makeErr;
global $lineErr;
global $modelErr;
global $mileageErr;
global $licenseErr;
global $matrix1Err;
global $matrix2Err;
global $matrix3Err;
global $matrix4Err;
global $matrix5Err;
global $matrix6Err;
global $matrix7Err;
global $matrix8Err;
global $comment1Err;
global $comment2Err;
global $priceErr;
global $timeErr;
global $validityTimeErr;
global $searchErr;

$errors = array('$dateErr' => "", 
                '$nameErr' => "", 
                '$last_nameErr' => "", 
                '$nameErr1' => "", 
                '$last_nameErr1' => "",
                '$idErr' => "",
                '$phoneErr' => "",
                '$emailErr' => "",
                '$makeErr' => "",
                '$lineErr' => "", 
                '$modelErr' => "", 
                '$mileageErr' => "",
                '$licenseErr' => "",
                '$matrix1Err' => "",
                '$comment1Err' =>"",
                '$comment2Err' =>"",
                '$priceErr' =>"",
                '$timeErr' =>"",
                '$validityTimeErr' =>"");

// $orderErr = $nameErr = $last_nameErr = $emailErr = $genderErr = $websiteErr = "";
$month = $day = $year = $firstname = $lastname = $idnumber = $phone = $email = $make = $model = $license = $mileage =  $firstname1 = $lastname1 =  $comment1 = $comment2 = $price = $time = $validityTime = "";

//search input text field and error in search.php file
$search ="";
$searchErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["month"]) || empty($_POST["day"]) || empty($_POST["year"])){
    $dateErr = "* Fecha requerida";
  }

  $errors = array($dateErr);

  if (empty($_POST["firstname1"])) {
    $nameErr1 = "* Nombre requerido";
  } else {
    $firstname1 = test_input($_POST["firstname1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ]*$/",$firstname1)) {
      $nameErr1 = "* Solo letras sin espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $nameErr1);

  if (empty($_POST["lastname1"])) {
    $last_nameErr1 = "* Apellido requerido";
  } else {
    $lastname1 = test_input($_POST["lastname1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ]*$/",$lastname1)) {
      $last_nameErr1 = "* Solo letras sin espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $last_nameErr1);

  if (empty($_POST["firstname"])) {
    $nameErr = "* Nombre requerido";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ ]*$/",$firstname)) {
      $nameErr = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $nameErr);

  if (empty($_POST["lastname"])) {
    $last_nameErr = "* Apellido requerido";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Záéíóúñ ]*$/",$lastname)) {
      $last_nameErr = "* Solo letras y espacios en blanco permitidos"; 
    }
  }

  array_push($errors, $last_nameErr);

  if (empty($_POST["idnumber"])) {
    $idErr = "* Cédula requerida";
  } else {
    $idnumber = test_input($_POST["idnumber"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9]*$/",$idnumber)) {
      $idErr = "* Solo números permitidos sin espacios, comas ni puntos"; 
    }
  }

  array_push($errors, $idErr);

  if (empty($_POST["phone"])) {
    $phoneErr = "* Teléfono requerido";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $phoneErr);

  if (empty($_POST["email"])) {
    $emailErr = "Email requerido";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email incorrecto"; 
    }
  }

  array_push($errors, $emailErr);

  if (@$_POST['cat'] == "") {
    $makeErr = "* Marca del vehículo requerida";
  }

  array_push($errors, $makeErr);

    if (empty($_POST['subcat'])){
    $lineErr = "* Línea del vehículo requerida";
  }

  array_push($errors, $lineErr);

  if (empty($_POST["model"])) {
    $modelErr = "* Modelo del vehículo requerido";
  } else {
    $model = test_input($_POST["model"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9 ]*$/",$model)) {
      $modelErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $modelErr);


  if (empty($_POST["license"])) {
      $licenseErr = "* Placa del vehículo requerida";
    } else {
      $license = test_input($_POST["license"]);
      // check if order only contains numbers and no whitespaces
      if (!preg_match("/^[0-9A-Z ]*$/",$license)) {
        $licenseErr = "* Solo letras en mayúscula y números sin espacios permitidos"; 
      }
    }

    array_push($errors, $licenseErr);

  if (empty($_POST["mileage"])) {
      $mileageErr = "* Kilometraje del vehículo requerido";
    } else {
      $mileage = test_input($_POST["mileage"]);
      // check if mileage only contains numbers and no whitespaces
      if (!preg_match("/^[0-9 ]*$/",$mileage)) {
        $mileageErr = "* Solo números sin espacios permitidos"; 
      }
      // check if mileage value already exists in database for the same license to avoid duplicate
      else {
        require_once('duplicate1_query.php');
      }
    }

    array_push($errors, $mileageErr);

  //Check if all items have an option selected (change number as needed)
  if (!isset($_POST['matrix_1'])) {
    $matrix1Err = "* Se debe seleccionar una opción por ítem";
  } elseif (count($_POST['matrix_1'])<17){
    $matrix1Err = "* Se debe seleccionar una opción por ítem";
  }

  array_push($errors, $matrix1Err);

  if (empty($_POST["comment1"])) {
      $comment1 = "";
    } else {
      $comment1 = test_input($_POST["comment1"]);
      // check if comment1 only contains numbers, letters and whitespaces
      if (!preg_match("/^[0-9a-zA-Záéíóúñ,.;:$() ]*$/",$comment1)) {
        $comment1Err = "* Solo números, letras y espacios permitidos"; 
      }
    }

     array_push($errors, $comment1Err);

  if (empty($_POST["comment2"])) {
      $comment2 = "";
    } else {
      $comment2 = test_input($_POST["comment2"]);
      // check if comment1 only contains numbers, letters and whitespaces
      if (!preg_match("/^[0-9a-zA-Záéíóúñ,.;:$() ]*$/",$comment2)) {
        $comment2Err = "* Solo números, letras y espacios permitidos"; 
      }
    }

    array_push($errors, $comment2Err);


  //Data check for search.php file

  if (empty($_POST['cons'])){
    $searchErr = "* Ingrese un criterio de búsqueda";
  } else{
    $search = test_input($_POST['cons']);
    // check if search value only contains numbers, letters or whitespaces
    if(!preg_match("/^[0-9a-zA-Záéíóúñ ]*$/", $search)){
      $searchErr = "* Solo números, letras y espacios permitidos";
    }
  }

  if (empty($_POST["price"])) {
    $priceErr = "* Costo de la reparación requerido";
  } else {
    $price = test_input($_POST["price"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9]*$/",$price)) {
      $priceErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $priceErr);

  if (empty($_POST["time"])) {
    $priceErr = "* Tiempo de reparación requerido";
  } else {
    $time = test_input($_POST["time"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9]*$/",$time)) {
      $timeErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $timeErr);

  if (empty($_POST["validity-time"])) {
    $validityTimeErr = "* Validez de la cotización requerida";
  } else {
    $validityTime = test_input($_POST["validity-time"]);
    // check if order only contains numbers and no whitespaces
    if (!preg_match("/^[0-9]*$/",$validityTime)) {
      $validityTimeErr = "* Solo números sin espacios permitidos"; 
    }
  }

  array_push($errors, $validityTimeErr);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>