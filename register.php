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
        <div class="mb-3">
            <label for="password2">Password</label>
            <input type="password" name="password2" id="password2" class="form-control" placeholder="Verify your password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100" name="submit">Register</button>
        <p class="mt-3 text-secondary text-center">Already have an account? <a href="index.php?page=login" class="text-primary">Login</a></p>
    </form>
</div>