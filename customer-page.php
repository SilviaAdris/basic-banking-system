<!DOCTYPE html>
<html>
<head lang="en-USA">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="customer-pagee.css">
<title> Banking System</title>
</head>
<body>
            <?php
            $id = $_GET['id'];
            $name = $_GET['name'];
            $currentBalance = $_GET['currentBalance'];
            ?>
    <div class="container">
	    <div class="column">
            <div class="name">
                <p>Name: <?php
                    echo $name;
                ?></p>
            </div>
            <div class="balance">
               <p>Current Balance: <?php
                    echo $currentBalance;
                ?></p>
            </div>
            <form action="transfer.php" method="post">
                <input name="id" type="hidden" value="<?php echo $id ?>">
                <input name="amount" type="number" min="0" required><br><br>
                <input type="submit" value="Transfer">
            </form>
		</div>
    </div>
</body>
</html>