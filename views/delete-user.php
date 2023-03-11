<?php
    session_start();

    include "../classes/users.php";

    $user = new User;
    $user_details = $user->getUser($_GET['user_id']); //id from the url
    
    $full_name = $user_details['first_name']. " " .$user_details['last_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>The Company</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
            <div class="ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="profile.php" class="nav-link"><?=$_SESSION['username']?></a></li>
                    <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container" style="padding-top: 80px">
        <div class="card w-25 mx-auto border-0">
            <div class="card-header bg-white border-0">
                <h2 class="text-center text-danger">DELETE USER</h2>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                    <p class="fw-bold mb-0">Are you sure you want to delete "<?= $full_name ?>"?</p>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <a href="../actions/delete-user.php?user_id=<?= $user_details['id'] ?>" class="btn btn-outline-danger w-100">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
</body>
</html>