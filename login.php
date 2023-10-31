<div class="container mt-5">
    <form method="post">
        <div class="mb-3">
            <label for="name">Username</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100" name="submit">Login</button>
        <p class="mt-3 text-secondary text-center">Dont have an account? <a href="index.php?page=register" class="text-primary">Register</a></p>
    </form>
</div>