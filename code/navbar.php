<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">StudentApp</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
          <li class="nav-item"><a class="nav-link" href="users.php">Manage Users</a></li>
        <?php endif; ?>
      </ul>
      <span class="navbar-text me-3">
        Logged in as: <strong><?= htmlspecialchars($_SESSION['username'] ?? '') ?></strong> (<?= htmlspecialchars($_SESSION['role'] ?? '') ?>)
      </span>
      <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </div>
</nav>
