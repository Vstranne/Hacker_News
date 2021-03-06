<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1>Login</h1>

    <form action="app/users/login.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="example@email.com" required>
            <small class="form-text text-muted">Please provide your email address.</small>
        </div><!-- /form-group -->

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="*******" required>
            <small class="form-text text-muted">Please provide your password.</small>
        </div><!-- /form-group -->

        <button type="submit" class="btn btn-info">Login</button>
    </form>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>