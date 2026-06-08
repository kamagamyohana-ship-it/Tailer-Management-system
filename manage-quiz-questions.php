<?php $page_title = 'Manage Quiz Questions';
$active = 'admin';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: /login.php');
    exit;
}
?>
<main class="container section">
    <section class="card">
        <h1>Manage Quiz Questions</h1>
        <p class="lead">Add, update, and remove quiz questions for students.</p>
    </section>
    <section class="card">
        <ul class="list">
            <li>Q1: What is a presser foot used for?</li>
            <li>Q2: Why is measuring tape important?</li>
            <li>Q3: What is the function of a bobbin?</li>
        </ul>
    </section>
</main>
<?php include 'includes/footer.php'; ?>