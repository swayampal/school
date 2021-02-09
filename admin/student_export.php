<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
     <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <?php
    include "db.php";

$select_payroll_categries = "SELECT * from payroll_categrie";
$employee_payroll_result = mysqli_query($con,$select_payroll_categries);
    ?>
    <form class="form-horizontal" action="trynew.php" method="post" name="upload_excel" enctype="multipart/form-data">
     <table id="tblCustomers" cellspacing="0" cellpadding="0">
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
    <br />
    

    <input type="button" value="Export csv" name="csv" />
 </form>
 <input type="button" id="btnExport" value="Export" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        });
    </script>
</body>
</html>

