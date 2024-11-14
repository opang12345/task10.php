<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Account Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
    </style>
</head>

<body>
    <div class="container">
        <div class="form mx-auto">
            <h1 class="text-center">Form Account Bank</h1>
            <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Nomor Rekening</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-credit-card-alt"></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Nomor Customer</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class=><i class="fa fa-address-book" aria-hidden="true"></i></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Saldo Awal</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-th-list" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    require_once 'class_BankAccount.php';

        $ab1 = new BankAccount("010", 5000000, "Messi");
        $ab2 = new BankAccount("070", 10000000, "Ronaldo");
        $ab3 = new BankAccount("123", 2000000, "neymar");

    if (isset($_POST['submit'])) {
        $no_rek = $_POST['no_rek'];
        
        error_reporting(0);
        $account_BankNew = new BankAccount($no_rek,$no_customer,$saldo_awal);

    echo '<div class="table-responsive mt-10">
            <table class="table table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No.Rekening</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Saldo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td>1</td>
                        <td>' . $ab1->nomor . '</td>
                        <td>messi </td>
                        <td> 5000000 </td>

                        
                    </tr>
                    <tr align="center">
                        <td>2</td>
                        <td>' . $ab2->nomor . '</td>
                        <td>ronaldo </td>
                        <td>10000000 </td>
                        
                        
                    </tr>
                    <tr align="center">
                        <td>3</td>
                        <td>' . $ab3->nomor .  '</td>
                        <td>neymar </td>
                        <td>2000000 </td>
                        
                    </tr>
                </tbody>
          </table>
        </div>';
    }
    ?>
</body>

</html>