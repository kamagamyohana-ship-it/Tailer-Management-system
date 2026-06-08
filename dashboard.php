<?php
$page_title = 'User Dashboard';
$active = 'user';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') === 'admin') {
    header('Location: /login.php');
    exit;
}
?>
<main class="container section">
    <section class="card">
        <h1>User Dashboard</h1>
        <p class="lead">Track your sewing learning journey, design ideas, tools, tutorials, and quiz results from one
            place.</p>
    </section>
    <section class="card">
        <h3>Quick Menu</h3>
        <div class="button-row">
            <a class="btn btn-soft" href="/clothing-designs.php">Clothing Designs</a>
            <a class="btn btn-soft" href="/sewing-tools.php">Sewing Tools</a>
            <a class="btn btn-soft" href="/sewing-machine-parts.php">Machine Parts</a>
            <a class="btn btn-soft" href="/tutorials.php">Tutorials</a>
            <a class="btn btn-soft" href="/quiz.php">Quiz</a>
            <a class="btn btn-soft" href="/results.php">Results</a>
        </div>
    </section>
    <section class="stat-grid">
        <article class="stat-box">
            <h3>3</h3>
            <p>Active designs</p>
        </article>
        <article class="stat-box">
            <h3>12</h3>
            <p>Tools in use</p>
        </article>
        <article class="stat-box">
            <h3>8</h3>
            <p>Tutorials viewed</p>
        </article>
        <article class="stat-box">
            <h3>86%</h3>
            <p>Quiz score</p>
        </article>
    </section>
    <section class="grid-3">
        <article class="card">
            <h3>Clothing Designs</h3>
            <p>Browse and save design ideas for your next project.</p><a class="btn btn-soft"
                href="/clothing-designs.php">Open</a>
        </article>
        <article class="card">
            <h3>Sewing Tools</h3>
            <p>Manage list of tools and sewing accessories you use.</p><a class="btn btn-soft"
                href="/sewing-tools.php">Open</a>
        </article>
        <article class="card">
            <h3>Sewing Machine Parts</h3>
            <p>Review parts, maintenance notes, and machine care.</p><a class="btn btn-soft"
                href="/sewing-machine-parts.php">Open</a>
        </article>
        <article class="card">
            <h3>Tutorials</h3>
            <p>Access step-by-step sewing lessons and show guides.</p><a class="btn btn-soft"
                href="/tutorials.php">Open</a>
        </article>
        <article class="card">
            <h3>Quiz</h3>
            <p>Take quizzes to test your learning and earn progress.</p><a class="btn btn-soft"
                href="/quiz.php">Open</a>
        </article>
        <article class="card">
            <h3>Results</h3>
            <p>View progress summaries and quiz outcomes.</p><a class="btn btn-soft" href="/results.php">Open</a>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>