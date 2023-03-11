<?php
    session_start();

    include "../classes/users.php";

    $user = new User;
    $user_details = $user->getUser($_GET['user_id']); //id from the url
    

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
        <div class="card w-50 mx-auto border-0">
            <div class="card-header bg-white border-0">
                <h2 class="text-center">EDIT USER</h2>
            </div>
            <div class="card-body">
                <form action="../actions/edit-user.php" method="post">
                    <input type="hidden" name="user_id" value="<?= $user_details['id'] ?>">
                    
                    <!-- copy from REGISTER.PHP -->
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?= $user_details['first_name'] ?>" required autofocus>

                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?= $user_details['last_name'] ?>" required>

                    <label for="username" class="form-label fw-bold">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-5 fw-bold" maxlength="15" value="<?= $user_details['username'] ?>" required>

                    <div class="text-end">
                        <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                        <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>


        
</body>
</html>