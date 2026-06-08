<?php
$page_title = 'Admin Dashboard';
$active = 'admin';
include '../includes/header.php';
?>
<main class="container section">
    <section class="card">
        <h1>Admin Dashboard</h1>
        <p class="lead">Control users, content, reports, and system activity from one place.</p>
    </section>
    <section class="grid-3">
        <article class="card">
            <h3>Manage Users</h3>
            <p>Review and oversee registered users.</p>
            <a class="btn btn-soft" href="/manage-users.php">Open</a>
        </article>
        <article class="card">
            <h3>Reports</h3>
            <p>Access learning activity and performance reports.</p>
            <a class="btn btn-soft" href="/reports.php">Open</a>
        </article>
        <article class="card">
            <h3>Content Management</h3>
            <p>Manage tutorials, tools, parts, and quiz content.</p>
            <a class="btn btn-soft" href="/manage-tutorials.php">Open</a>
        </article>
    </section>
</main>
<?php include '../includes/footer.php'; ?>
