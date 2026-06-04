<?php
session_start();

require_once __DIR__ . "/db.php";

if (!isset($_SESSION['visited'])) {
    $conn->exec("INSERT INTO visits () VALUES ()");
    $_SESSION['visited'] = true;
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="/css/style.css?v=1">


<a class="navbar-brand" href="/index.php">222-ski</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav">

    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/lessons.php">Lessons</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cart.php">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact.php">Contact</a>
        </li>
    </ul>

    <ul class="navbar-nav ms-auto">

        <?php if (isset($_SESSION['user'])): ?>

            <li class="nav-item">
                <span class="nav-link">
                    Hello, <?php echo $_SESSION['user']['username']; ?>
                </span>
            </li>

            <?php if ($_SESSION['user']['is_admin'] == 1): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard.php">
                        Admin Panel
                    </a>
                </li>
            <?php endif; ?>

            <li class="nav-item">
                <a class="nav-link" href="/auth/logout.php">
                    Logout
                </a>
            </li>

        <?php else: ?>

            <li class="nav-item">
                <a class="nav-link" href="/auth/login.php">
                    Login
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/auth/register.php">
                    Register
                </a>
            </li>

        <?php endif; ?>

    </ul>

</div>