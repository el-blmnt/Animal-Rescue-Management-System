<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>

    </header>

    <main>
        <form action="includes/db.inc.php" method="post">
            <div class="form-floating mb-3">
                <input required type="text" name = "fullname" class="form-control" id="floatingInput" placeholder="Fullname">
                <label for="floatingInput">Fullname</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name = "address" class="form-control" id="floatingInput" placeholder="Address">
                <label for="floatingInput">Address</label>
            </div>

            <div class="form-floating mb-3">
                <input required type="text" name = "contactNo" class="form-control" id="floatingInput" placeholder="fullname">
                <label for="floatingInput">Contact Number</label>
            </div>
        
            <div class="form-floating mb-3">
                <input type="email" name = "emailAddress" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email Address</label>
            </div>

            <div class="form-floating">
                <input type="password" name = "password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            
            <div>
                <button type="submit" name="submit">Signup</button>
            </div>

        </form>

    </main>

    <footer>

    </footer>

    
</body>
</html>