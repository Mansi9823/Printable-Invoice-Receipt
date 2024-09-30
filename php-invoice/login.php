<?php 
session_start();
if(isset($_SESSION['cashier']) && !empty($_SESSION['cashier'])){
    header("location: home.php");
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['cashier'] = $_POST['cashier'];
    header("location: ./");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Simple Invoice in PHP</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Font and overall page styling */
        body {
            font-family: 'Ubuntu', sans-serif;
            background: linear-gradient(135deg, #007BFF 0%, #6610f2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            color: #fff;
        }

        .card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            color: #343a40;
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 1rem;
            font-weight: 700;
            padding: 10px 30px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Input styling */
        .form-select {
            padding: 10px;
            border-radius: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .form-select:focus {
            border-color: #007bff;
            box-shadow: none;
            outline: none;
        }
    </style>
</head>
<body class="login-page d-flex align-items-center justify-content-center">

    <div class="container">
        <div class="page-title text-center mb-4 text-white">
            <strong>Invoice - Login</strong>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mx-auto">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-body p-4">
                    <h5 class="card-title text-center mb-3">Login to your Account</h5>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="cashier">Please Select a User:</label>
                            <select name="cashier" id="cashier" class="form-select" required>
                                <option value="" disabled selected>-- Select User --</option>
                                <option>Cashier 1</option>
                                <option>Cashier 2</option>
                                <option>Cashier 3</option>
                                <option>Cashier 4</option>
                                <option>Cashier 5</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/js/script.js"></script>
</body>
</html>
