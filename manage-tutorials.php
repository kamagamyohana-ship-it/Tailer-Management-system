<?php $page_title = 'Manage Tutorials';
$active = 'admin';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: /login.php');
    exit;
}
?>
<main class="container section">
    <section class="card">
        <h1>Manage Tutorials</h1>
        <p class="lead">Create and edit lesson materials for the user section.</p>
    </section>
    <section class="grid-3">
        <article class="card">
            <h3>Threading a machine</h3>
            <p>Status: Published</p>
        </article>
        <article class="card">
            <h3>Sewing a seam</h3>
            <p>Status: Updated</p>
        </article>
        <article class="card">
            <h3>Hemming a dress</h3>
            <p>Status: Draft</p>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>