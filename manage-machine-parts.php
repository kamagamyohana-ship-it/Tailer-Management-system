<?php
$page_title = 'Manage Machine Parts';
$active = 'admin';
include 'includes/header.php';

if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? 'user') !== 'admin') {
    header('Location: /login.php');
    exit;
}

$parts = [
    ['name' => 'Needle', 'stock' => '50 pieces'],
    ['name' => 'Bobbin', 'stock' => '40 pieces'],
    ['name' => 'Presser Foot', 'stock' => '25 pieces'],
    ['name' => 'Feed Dogs', 'stock' => '10 sets'],
    ['name' => 'Throat Plate', 'stock' => '12 pieces'],
    ['name' => 'Take-Up Lever', 'stock' => '8 pieces'],
    ['name' => 'Tension Dial', 'stock' => '15 pieces'],
    ['name' => 'Spool Pin', 'stock' => '20 pieces'],
    ['name' => 'Thread Guide', 'stock' => '18 pieces'],
    ['name' => 'Stitch Selector', 'stock' => '6 pieces'],
    ['name' => 'Hand Wheel', 'stock' => '7 pieces'],
    ['name' => 'Foot Pedal', 'stock' => '9 pieces'],
    ['name' => 'Power Switch', 'stock' => '6 pieces'],
    ['name' => 'Light', 'stock' => '10 pieces'],
    ['name' => 'Bobbin Case', 'stock' => '14 pieces'],
    ['name' => 'Needle Plate', 'stock' => '11 pieces'],
    ['name' => 'Reverse Lever', 'stock' => '5 pieces'],
    ['name' => 'Thread Cutter', 'stock' => '16 pieces'],
    ['name' => 'Extension Table', 'stock' => '4 pieces'],
    ['name' => 'Drop Feed', 'stock' => '3 pieces'],
];
?>
<main class="container section">
    <section class="card">
        <h1>Manage Machine Parts</h1>
        <p class="lead">Track part inventory and maintenance for sewing machines.</p>
    </section>
    <section class="grid-3">
        <?php foreach ($parts as $part): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($part['name']); ?></h3>
                <p>Stock: <?php echo htmlspecialchars($part['stock']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>