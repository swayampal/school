<?php
include "../db.php";
$a = "Select payroll_cat_name from payroll_group";
$b = mysqli_query($con,$a);
$c = mysqli_fetch_array($b);
$d = $c["payroll_cat_name"];
// echo "$d";
	$myArray = explode(',', $d);
	
// print_r($myArray);
$tr = "select t2.*,(select sum(t1.amount) from payroll_categrie AS t1 where find_in_set(t1.payroll_cat_code,t2.payroll_cat_name)) as t1_amount from payroll_group t2
";

$rt = mysqli_query($con,$tr);
$new = mysqli_fetch_array($rt);
$gh = $new["t1_amount"];
print_r($gh);



// SELECT SUM(amount) from payroll_categrie WHERE payroll_cat_code IN (SELECT payroll_cat_name FROM payroll_group WHERE payroll_cat_name = payroll_cat_code)


// select SUM(amount) from product_category where product_category_name in $d

// $e = "SELECT sum(amount) as am from payroll_categrie where payroll_cat_code = '$myArray'";
// $f = mysqli_query($con,$e);
// while ($g = mysqli_fetch_array($f)) {
	
// }
// $myString = "9,admin@example.com,8";
 // select SUM(amount) as am from payroll_categrie where payroll_cat_code in (PF,BC,HM,TX)
// select SUM(amount) from payroll_categrie where payroll_cat_code in (PF,BC,TA)
// echo "$myArray";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<?php
include "../db.php";
$a = "Select payroll_cat_name from payroll_group";
$b = mysqli_query($con,$a);
$c = mysqli_fetch_array($b);
$d = $c["payroll_cat_name"];
// echo "$d";
	$myArray = explode(',', $d);
	
// print_r($myArray);
$tr = "select t2.*,(select sum(t1.amount) from payroll_categrie AS t1 where find_in_set(t1.payroll_cat_code,t2.payroll_cat_name)) as t1_amount from payroll_group t2
";

$rt = mysqli_query($con,$tr);
$new = mysqli_fetch_array($rt);
$gh = $new["t1_amount"];
print_r($gh);



// SELECT SUM(amount) from payroll_categrie WHERE payroll_cat_code IN (SELECT payroll_cat_name FROM payroll_group WHERE payroll_cat_name = payroll_cat_code)


// select SUM(amount) from product_category where product_category_name in $d

// $e = "SELECT sum(amount) as am from payroll_categrie where payroll_cat_code = '$myArray'";
// $f = mysqli_query($con,$e);
// while ($g = mysqli_fetch_array($f)) {
	
// }
// $myString = "9,admin@example.com,8";
 // select SUM(amount) as am from payroll_categrie where payroll_cat_code in (PF,BC,HM,TX)
// select SUM(amount) from payroll_categrie where payroll_cat_code in (PF,BC,TA)
// echo "$myArray";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<!-- <form action="" method="POST"> -->
<!-- 	
 <table>
        <tbody>
            <tr>
                <td><div><input type="checkbox"></div></td>
                <td>...</td>
                <td>...</td>
                <td>deducing</td>
                <td>1000</td>
            </tr>
            <tr>
                <td><div><input type="checkbox"></div></td>
                <td>...</td>
                <td>...</td>
                <td>earning</td>
                <td>6000</td>
            </tr>
            <tr>
                <td><div><input type="checkbox"></div></td>
                <td>...</td>
                <td>...</td>
                <td>earning</td>
                <td>3000</td>
            </tr>
            <tr>
                <td><div><input type="checkbox"></div></td>
                <td>...</td>
                <td>...</td>
                <td>earning</td>
                <td>1200</td>
            </tr>
            <tr>
                <td><div><input type="checkbox"></div></td>
                <td>...</td>
                <td>...</td>
                <td>deducing</td>
                <td>1000</td>
            </tr>
        </tbody>
    </table> -->
     <?php
 include "../db.php";
$select_payroll_categries = "SELECT * from payroll_categrie";
$employee_payroll_result = mysqli_query($con,$select_payroll_categries);
?>
 <table id="try">
             <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Categrie name</th>
                                        <th>Categrie code</th>
                                        <th>Categrie Type</th>
                                        <th>Categrie Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                    while ($row = mysqli_fetch_array($employee_payroll_result)) {
                       

                        echo "<tr>
                        <td>
                        <div class='form-check'>
                        <input type='checkbox' name='payroll_group' value=".$row["amount"]." class='form-check-input'>
                        <label class='form-check-label' style='color:#fff;'>".$row["payroll_cat_id"]."</label>
                        </div>
                        </td>
                        <td>".$row["payroll_cat_name"]."</td>
                        <td>".$row["payroll_cat_code"]."</td>
                        <td>".$row["categrie_type"]."</td>
                        <td>".$row["amount"]."</td>
                        <td>
                        <div class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='flaticon-more-button-of-three-dots'></span>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right'>
                        <a class='dropdown-item' href='delete.php?delete_payroll_categrie=".$row["payroll_cat_id"]."'><i class='fas fa-times text-orange-red'></i>Delete</a>
                        <a class='dropdown-item' href='edit_payroll_categrie.php?edit_payroll_categrie=".$row["payroll_cat_id"]."'><i class='fas fa-cogs text-dark-pastel-green'></i>Edit</a>
                        <a class='dropdown-item' href='student_details.php?view_student_id=".$row["payroll_cat_id"]."'><i class='fas fa-redo-alt text-orange-peel'></i>view</a>
                          </div>
                          </div>
                          </td>
                        </tr>";
                    }
                    ?>
                        
                    </tbody>
    </table>
     <button type="button" id="button">Yo</button>
                <!-- <button id="button">save</button> -->
                <p id="result"></p>
<!-- </form> -->
<script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

 <script type="text/javascript">
        $(document).ready(function(){
              $("#button").click(function(){
              	favorite = [];
           $.each($("input[name='payroll_group']:checked"), function(){
                favorite.push($(this).val());
            });
           console.log("My favourite sports are: " + favorite);
            $('#result').html(favorite);
        });
// $(function() {
//      $("#button").click(function() {
//           var total = 0;
//           $("tbody tr").each(function() {
//               if ($(this).find("td")eq(3).text() === "deduction")
//               	total -= parseInt($(this).find("td")eq(4).text());
//               else if ($(this).find("td")eq(3).text() === "earning") 
//               	total += parseInt($(this).find("td")eq(4).text());
//           });
    
//           alert("Total amount is " + total);
//      });
// });
  // $(function() {
  //           $("#button").click(function() {
  //               var total = 0;
                 
  //               $("tbody:first tr").each(function() {
  //                   $.each($("input[name='payroll_group']:checked"), function(){
  //                   if ("deducing" == $(this).children("td").eq(3).text()) total = total - parseInt($(this).children("td").eq(4).text());
  //                   else if ("earning" == $(this).children("td").eq(3).text()) total = total + parseInt($(this).children("td").eq(4).text());
  //               });
  //               });
  //               alert(total);
  //           });
  //       });
   // $(function() {
   //          $("#button").click(function() {
   //              let total = 0;
   //              $("tbody:first tr").each(function() {
   //                  if ($(this).children("td").first().children("div").children("input").is(":checked")) {
   //                      if ("deducing" == $(this).children("td").eq(3).text()) total = total - parseInt($(this).children("td").eq(4).text());
   //                      else if ("earning" == $(this).children("td").eq(3).text()) total = total + parseInt($(this).children("td").eq(4).text());
   //                  }
   //              });
   //              alert(total);
   //          });
   //      });

//    


// 
//     var sum = 0;

//     $("input[type=checkbox]:checked").each(function(){
//       sum += parseInt($(this).attr("rel"));
//     });

//     alert(sum);
// } 
        })
    </script>
    <script type="text/javascript">
    	 $(function() {
            $("#button").click(function() {
                let total = 0;
                $("#try:first tr").each(function() {
                    if ($(this).children("td").first().children("div").children("input").is(":checked")) {
                        if ("dituction" == $(this).children("td").eq(3).text()) total = total - parseInt($(this).children("td").eq(4).text());
                        else if ("earning" == $(this).children("td").eq(3).text()) total = total + parseInt($(this).children("td").eq(4).text());
                    }
                });
                alert(total);
            });
        });
    </script>
</body>
</html>









