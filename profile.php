<?php $page_title = 'Profile';
$active = 'user';
include 'includes/header.php'; ?>
<main class="container section">
    <section class="grid-2">
        <article class="card">
            <h1>Profile</h1>
            <p class="lead">Keep your personal information and learning preferences up to date.</p>
            <ul class="list">
                <li>Name: Jane Doe</li>
                <li>Email: jane@example.com</li>
                <li>Role: Learner</li>
            </ul>
        </article>
        <article class="card">
            <h3>Edit profile</h3>
            <form class="form-grid">
                <label class="label">Full name<input class="input" type="text" value="Jane Doe"></label>
                <label class="label">Email<input class="input" type="email" value="jane@example.com"></label>
                <a class="btn btn-primary" href="#">Save changes</a>
            </form>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>