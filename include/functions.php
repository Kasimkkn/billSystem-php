<?php 
include("config.php");
if (isset($_POST['table'])) {
  $table = $_POST['table'];

  // for products table 
  if($table=='products')
  {
    $sql = "SELECT * FROM $table";

    $result = mysqli_query($connection, $sql);
    if ($result->num_rows > 0) 
    {
      $output = '';
  
      // Fetch table data
      while ($row = mysqli_fetch_assoc($result))
      {
          $output .= '<tr>';
          foreach ($row as $value) {
            $output .= '<td>' . $value . '</td>';
  
          }
            $output .='<td> 
            <button class="btn btn-dark btn-sm" onclick="updateProduct(
                      ${products.product_id},
                      ${products.category},
                      ${products.sub_category},
                      ${products.name},
                      ${products.price},
                      ${products.stocks}
                      )">Update</button>
                  <button class="btn btn-dark btn-sm" onclick="deleteProduct(${products.product_id})">Delete</button>
              </td>';  
  
          // Add a "Download" button for each row
          $output .= '<td class="d-flex">';
          $output .= '<form action="download.php" method="post">';
          $output .= '<input type="hidden" name="table" value="' . $table . '">';
          foreach ($row as $col => $value) {
            $output .= '<input type="hidden" name="' . $col . '" value="' . $value . '">';
          }
          $output .= '<button type="submit" class="btn btn-dark m-2">Download</button>';
          $output .= '</form>';
          $output .= '</td>';   
          $output .= '</tr>';
      }
    }
  
      echo $output;
    
  } 
  else 
  {
    echo 'No data found.';
  }
  
  
  // for customer table

  if($table=='customer')
  {
    $sql = "SELECT c.customer_id,c.cname,p.name,c.address from $table c INNER JOIN products p ON c.product_id=p.product_id";

    $result = mysqli_query($connection, $sql);
    {
      if ($result->num_rows > 0) 
      $output = '';
  
      // Fetch table data
      while ($row = mysqli_fetch_assoc($result))
      {
          $output .= '<tr>';
          foreach ($row as $value) {
            $output .= '<td>' . $value . '</td>';
  
          }
            $output .='<td> 
            <button class="btn btn-dark btn-sm" onclick="updateProduct(
                      ${customer.customer_id},
                      ${customer.customer_name},
                      ${customer.product_name},
                      ${customer.},
                      )">Update</button>
                  <button class="btn btn-dark btn-sm" onclick="deleteProduct(${products.product_id})">Delete</button>
              </td>';  
  
          // Add a "Download" button for each row
          $output .= '<td class="d-flex">';
          $output .= '<form action="download.php" method="post">';
          $output .= '<input type="hidden" name="table" value="' . $table . '">';
          foreach ($row as $col => $value) {
            $output .= '<input type="hidden" name="' . $col . '" value="' . $value . '">';
          }
          $output .= '<button type="submit" class="btn btn-dark m-2">Download</button>';
          $output .= '</form>';
          $output .= '</td>';   
          $output .= '</tr>';
      }
    }
  
      echo $output;
    
  } 
  else 
  {
    echo 'No data found.';
  }
  

  // for bills/sales table
  if($table=='bills')
  {
    $sql = "SELECT b.id,p.name,c.cname,b.address FROM $table b JOIN products p,customer c WHERE b.product_id=p.product_id AND b.customer_id=c.customer_id ORDER BY b.id;
    ";

    $result = mysqli_query($connection, $sql);
    if ($result->num_rows > 0) 
    {
      $output = '';
  
      // Fetch table data
      while ($row = mysqli_fetch_assoc($result))
      {
          $output .= '<tr>';
          foreach ($row as $value) {
            $output .= '<td>' . $value . '</td>';
  
          }
            $output .='<td> 
            <button class="btn btn-dark btn-sm" onclick="updateProduct(
                      ${customer.id},
                      ${customer.product_name},
                      ${customer.customer_name},
                      ${customer.address},
                      )">Update</button>
                  <button class="btn btn-dark btn-sm" onclick="deleteProduct(${products.product_id})">Delete</button>
              </td>';  
  
          // Add a "Download" button for each row
          $output .= '<td class="d-flex">';
          $output .= '<form action="download.php" method="post">';
          $output .= '<input type="hidden" name="table" value="' . $table . '">';
          foreach ($row as $col => $value) {
            $output .= '<input type="hidden" name="' . $col . '" value="' . $value . '">';
          }
          $output .= '<button type="submit" class="btn btn-dark m-2">Download</button>';
          $output .= '</form>';
          $output .= '</td>';   
          $output .= '</tr>';
      }
    }
  
      echo $output;
    
  } 
  else 
  {
    echo 'No data found.';
  }

  }

  $connection->close();

?>