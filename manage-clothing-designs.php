<?php $page_title = 'Manage Clothing Designs';
$active = 'admin';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: /login.php');
    exit;
}
?>
<main class="container section">
    <section class="card">
        <h1>Manage Clothing Designs</h1>
        <p class="lead">Approve, edit, and organize clothing design entries.</p>
    </section>
    <section class="grid-3">
        <article class="card">
            <h3>Modern Shirt</h3>
            <p>Status: Approved</p>
        </article>
        <article class="card">
            <h3>Traditional Dress</h3>
            <p>Status: Pending</p>
        </article>
        <article class="card">
            <h3>Kids Wear</h3>
            <p>Status: Draft</p>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>