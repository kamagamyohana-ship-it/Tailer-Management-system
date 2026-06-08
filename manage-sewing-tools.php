<?php
$page_title = 'Manage Sewing Tools';
$active = 'admin';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: /login.php');
    exit;
}

$tools = [
    ['name' => 'Needle Set', 'stock' => '20 units'],
    ['name' => 'Fabric Scissors', 'stock' => '8 units'],
    ['name' => 'Thread Snips', 'stock' => '12 units'],
    ['name' => 'Measuring Tape', 'stock' => '15 units'],
    ['name' => 'Tailor’s Chalk', 'stock' => '25 pieces'],
    ['name' => 'Pins', 'stock' => '30 packets'],
    ['name' => 'Pin Cushion', 'stock' => '10 pieces'],
    ['name' => 'Seam Ripper', 'stock' => '9 pieces'],
    ['name' => 'Iron', 'stock' => '6 units'],
    ['name' => 'Ironing Board', 'stock' => '5 units'],
    ['name' => 'Sewing Machine', 'stock' => '4 units'],
    ['name' => 'Bobbins', 'stock' => '40 pieces'],
    ['name' => 'Spool of Thread', 'stock' => '18 spools'],
    ['name' => 'Thimble', 'stock' => '14 pieces'],
    ['name' => 'Fabric Marker', 'stock' => '11 pieces'],
    ['name' => 'Rotary Cutter', 'stock' => '7 units'],
    ['name' => 'Cutting Mat', 'stock' => '6 units'],
    ['name' => 'Press Cloth', 'stock' => '8 pieces'],
    ['name' => 'Ruler', 'stock' => '13 pieces'],
    ['name' => 'Basting Spray', 'stock' => '10 bottles'],
];
?>
<main class="container section">
    <section class="card">
        <h1>Manage Sewing Tools</h1>
        <p class="lead">Maintain the sewing tools catalog and inventory notes.</p>
    </section>
    <section class="grid-3">
        <?php foreach ($tools as $tool): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($tool['name']); ?></h3>
                <p>Available: <?php echo htmlspecialchars($tool['stock']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>