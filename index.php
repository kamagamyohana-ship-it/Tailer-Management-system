<?php $page_title = 'Home';
$active = 'home';
include 'includes/header.php'; ?>
<main class="container hero">
    <section class="hero-card">
        <div>
            <span class="badge">Sewing • Design • Learning</span>
            <h1>Welcome to the Kushona System</h1>
            <p class="lead">A complete platform for clothing design inspiration, sewing tools, tutorials, quizzes, and
                dashboard management for both users and administrators.</p>
            <div class="button-row">
                <a class="btn btn-primary" href="/register.php">Create account</a>
                <a class="btn btn-secondary" href="/login.php">Login</a>
            </div>
        </div>
        <div class="card">
            <h3>What is included</h3>
            <ul class="list">
                <li>Public home, about, contact, login, register pages</li>
                <li>User dashboard for designs, tools, parts, tutorials, quiz, results, profile</li>
                <li>Admin dashboard for managing users, content, reports</li>
            </ul>
        </div>
    </section>

    <section class="section grid-3">
        <article class="card">
            <h3>For learners</h3>
            <p>Explore sewing tutorials, quiz paths, and progress tracking in one place.</p>
        </article>
        <article class="card">
            <h3>For designers</h3>
            <p>Manage clothing design ideas, tools, and sewing machine parts with a clean dashboard.</p>
        </article>
        <article class="card">
            <h3>For admins</h3>
            <p>Monitor reports, manage content, and oversee users efficiently.</p>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>