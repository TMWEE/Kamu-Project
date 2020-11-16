<!DOCTYPE html>
<html>

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">

    <title>View Food Items</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 75%;
            }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <div class="seller-dashboard">
        <?php include('nav/view_food_item_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view_order.php" class="card" id="card1" style="display: block;">
                    <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br>0</b></h4>
                    </div>
                </a>
                <a href="view_food_item.php" class="card" id="card2" style="display: block;">
                    <i class="fas fa-cloud-meatball"></i>
                    <div class=" container">
                        <h4><b>Food Items</br>0</b></h4>
                    </div>
                </a>
                <a href="order_history.php" class="card" id="card3" style="display: block;">
                    <i class="fas fa-history"></i>
                    <div class="container">
                        <h4><b>Order Histroy</br>0</b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="content">
        <div table>

            <table id="customers">
                <tr>
                    <th>Item_id</th>
                    <th>Res_id</th>
                    <th>Item_name</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
                <?php
                require_once('../../connection/connect.php');
                $query = $db->query("SELECT * FROM fooditems");
                while ($result = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $result['Item_id'] ?></td>
                        <td><?php echo $result['Res_id'] ?></td>
                        <td><?php echo $result['Item_name'] ?></td>
                        <td><?php echo $result['Details'] ?></td>
                        <td><?php echo $result['Price'] ?></td>
                        <td><?php echo $result['Image'] ?></td>
                    </tr>
                <?php }
                $db->close();
                ?>
            </table>
        </div>
    </div>

    <?php include('foot.php'); ?>
</body>

</html>