<?php
header('Content-Type: application/json');
header("Accept:application/json");

  const bd__host = "localhost";
  const bd__user = "root";
  const bd__ppassword = "root";
  const bd__name = "test";
$status = array();
  /*SQL speed
      select < insert < delete < update
  */

// +++++++++++++++++++++++++++++++++++++++++++
   function find_by_exist_user_key($key)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
        return false;};
    $sql = "SELECT * FROM `user_table` WHERE `user_key` = '".$key."'";
    $result = $link->query($sql);
    $result = $result->fetch_assoc();
    $link->close();
    if (!$result) return 0;
    else return 1;
  }
// +++++++++++++++++++++++++++++++++++++++++++
   function find_by_exist_product_by_id($product_id)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    return false;};
    $sql = "SELECT * FROM `product_table` WHERE `product_id` = '".$product_id."'";
    $result = $link->query($sql);
    $result = $result->fetch_assoc();
    $link->close();
    if (!$result) return 0;
    else return 1;
  }
// +++++++++++++++++++++++++++++++++++++++++++
   function add_product_by_id($product_id)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
        return false; };
    $sql = "INSERT INTO `product_table` (`product_id`, `product_name`) VALUES ('".$product_id."','".$product_id."')";
    if ($link->query($sql) === TRUE) {
      $link->close();
      return 1;
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
      $link->close();
      return 0;
    }
  }
// +++++++++++++++++++++++++++++++++++++++++++
   function update_product_by_id($product_id)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    return false;
    }
    $sql = "UPDATE `product_table` SET `product_id`='".$product_id."' ,`product_name`='".$product_id."' WHERE `product_id`='".$product_id."'";
    if (mysqli_query($link, $sql)) {
      $link->close();
      return 1;
    } else {
      echo "Error updating record: " . mysqli_error($link);
      $link->close();
      return 0;
    }

  }
// +++++++++++++++++++++++++++++++++++++++++++
   function find_by_exist_product_price($price_table_region,$price_table_product)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    return false;
    }
    $sql = "SELECT * FROM `price_table` WHERE `price_table_region`='".$price_table_region."' AND `price_table_product`='".$price_table_product."' LIMIT 1";
    $result = $link->query($sql);
    $result = $result->fetch_assoc();
    $link->close();
    if (!$result) return 0;
    else return 1;
  }

   function add_product_price($price_table_region,$price_table_product,$price_table_price_purchase,$price_table_price_selling,$price_table_price_discount)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    return false;
    }
    $sql = "INSERT INTO `price_table` (`price_table_region`, `price_table_product`, `price_table_price_purchase`, `price_table_price_selling`, `price_table_price_discount`) VALUES ('".$price_table_region."','".$price_table_product."','".$price_table_price_purchase."','".$price_table_price_selling."','".$price_table_price_discount."')";
    if ($link->query($sql) === TRUE) {
      $link->close();
      return 1;
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
      $link->close();
      return 0;
    }
  }
// +++++++++++++++++++++++++++++++++++++++++++
   function update_product_price($price_table_region,$price_table_product,$price_table_price_purchase,$price_table_price_selling,$price_table_price_discount)
  {
    $link = mysqli_connect( bd__host,bd__user,bd__ppassword, bd__name);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    return false;
    }
    $sql = "UPDATE `price_table` SET `price_table_price_purchase`='".$price_table_price_purchase."',`price_table_price_selling`='".$price_table_price_selling."',`price_table_price_discount`='".$price_table_price_discount."' WHERE `price_table_region` = '".$price_table_region."' AND `price_table_product`= '".$price_table_product."'";
      if (mysqli_query($link, $sql)) {
      $link->close();
      return 1;
    } else {
      echo "Error updating record: " . mysqli_error($link);
      $link->close();
      return 0;
    }

  }
// +++++++++++++++++++++++++++++++++++++++++++
  function prepare_values_​​for_query_to_int($i)
  {
      $int = intval($i);
      if (empty($int)) return false;
      else return $int;
  }
// +++++++++++++++++++++++++++++++++++++++++++
  function prepare_values_​​for_query_to_string($s)
  {
    $s = str_replace('"', '', $s);
    $s = str_replace('`', '', $s);
    $s = str_replace("'", "", $s);
    return $s;
  }
  // доп функция проверки типов
  function validate_prod_type($product_id)
    {
      if (!$product_id) return 0;
      if (gettype($product_id) == 'integer') return 1;
      else if (gettype($product_id) == 'double') return 1;
      else return false;
    }

 if (!isset($_POST["submit"])) exit();
else if (!isset($_POST['key'])) exit();
else if (!find_by_exist_user_key($_POST['key'])) exit();
else if (isset($_POST['JSON_Data'])) {
      //обработчик проверки типа файла
      $decodedArray;
      $jsonArray=file_get_contents($_POST['JSON_Data']);
      $decodedArray=json_decode($jsonArray,true);
      //если не массив то прекратить
      if (!is_array($decodedArray)) exit();
      // Ограничение в 1000 товаров
      else if (count($decodedArray)<=1000)
          foreach ($decodedArray as $key => $value) {
              //$value['product_id'] это ид продукта в json.
              $p_id = prepare_values_​​for_query_to_int($value['product_id']);
              if (!find_by_exist_product_by_id($p_id))
              {
                add_product_by_id($p_id);
                array_push($status,"prod_added");}
              else {update_product_by_id($p_id);
                array_push($status,"prod_update");};
              if ($value['prices']){
                foreach ($value['prices'] as $vsp => $vspv)
                  {
                //$vsp ключ регион
                  if (!find_by_exist_product_price(prepare_values_​​for_query_to_int($vsp),$p_id))
                  {
                    add_product_price($vsp,$p_id,prepare_values_​​for_query_to_string($vspv['price_purchase']),prepare_values_​​for_query_to_string($vspv['price_selling']),prepare_values_​​for_query_to_string($vspv['price_discount']));
                    array_push($status,"prod_price_added");
                  }
                  else
                  {
                    update_product_price(prepare_values_​​for_query_to_int($vsp),$p_id,prepare_values_​​for_query_to_string($vspv['price_purchase']),prepare_values_​​for_query_to_string($vspv['price_selling']),prepare_values_​​for_query_to_string($vspv['price_discount']));
                    array_push($status,"prod_price_update");
                  }
                  }
                } else exit();

            }
              // если нет ценников тогда прекращаем
        else exit();

}

echo count($status);
echo json_encode( $status );
//echo json_encode( $decodedArray );

?>
