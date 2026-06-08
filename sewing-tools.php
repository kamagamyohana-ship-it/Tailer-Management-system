<?php
$page_title = 'Sewing Tools';
$active = 'user';
include 'includes/header.php';

$tools = [
    ['name' => 'Needle Set', 'description' => 'Used for hand stitching, hems, and finishing details.'],
    ['name' => 'Fabric Scissors', 'description' => 'For cutting cloth cleanly and accurately.'],
    ['name' => 'Thread Snips', 'description' => 'Small scissors for trimming loose thread ends.'],
    ['name' => 'Measuring Tape', 'description' => 'Important for accurate fitting and body measurements.'],
    ['name' => 'Tailor’s Chalk', 'description' => 'Marks fabric lines and cutting guides temporarily.'],
    ['name' => 'Pins', 'description' => 'Holds fabric pieces together before stitching.'],
    ['name' => 'Pin Cushion', 'description' => 'Keeps pins safe and easy to reach.'],
    ['name' => 'Seam Ripper', 'description' => 'Removes stitches carefully without damaging fabric.'],
    ['name' => 'Iron', 'description' => 'Presses seams and smooths fabric for neat results.'],
    ['name' => 'Ironing Board', 'description' => 'Provides a flat surface for pressing garments.'],
    ['name' => 'Sewing Machine', 'description' => 'Main tool for machine stitching and construction.'],
    ['name' => 'Bobbins', 'description' => 'Holds lower thread for machine sewing.'],
    ['name' => 'Spool of Thread', 'description' => 'Used to match fabric color and stitch style.'],
    ['name' => 'Thimble', 'description' => 'Protects the finger during hand sewing.'],
    ['name' => 'Fabric Marker', 'description' => 'Creates visible guides on cloth for cutting and sewing.'],
    ['name' => 'Rotary Cutter', 'description' => 'Fast and clean cutting for strips and layers of fabric.'],
    ['name' => 'Cutting Mat', 'description' => 'Protects surfaces and helps cut fabric accurately.'],
    ['name' => 'Press Cloth', 'description' => 'Protects fabric while ironing.'],
    ['name' => 'Ruler', 'description' => 'Used for measuring and drawing straight lines.'],
    ['name' => 'Basting Spray', 'description' => 'Temporarily holds fabric pieces before final sewing.'],
];
?>
<main class="container section">
    <section class="card">
        <h1>Sewing Tools</h1>
        <p class="lead">Orodha ya zana muhimu zinazotumika katika ufundi na kutengeneza mavazi.</p>
    </section>
    <section class="grid-3">
        <?php foreach ($tools as $tool): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($tool['name']); ?></h3>
                <p><?php echo htmlspecialchars($tool['description']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>