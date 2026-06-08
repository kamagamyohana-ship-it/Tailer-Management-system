<?php
$page_title = 'Sewing Machine Parts';
$active = 'user';
include 'includes/header.php';

$parts = [
    ['name' => 'Needle', 'description' => 'Controls stitch quality and fabric penetration.'],
    ['name' => 'Bobbin', 'description' => 'Holds the lower thread and helps form stitches.'],
    ['name' => 'Presser Foot', 'description' => 'Guides fabric as it moves under the needle.'],
    ['name' => 'Feed Dogs', 'description' => 'Pull fabric forward during stitching.'],
    ['name' => 'Throat Plate', 'description' => 'Supports the fabric and covers the needle plate area.'],
    ['name' => 'Take-Up Lever', 'description' => 'Controls thread tension and thread flow.'],
    ['name' => 'Tension Dial', 'description' => 'Adjusts thread tightness for balanced stitches.'],
    ['name' => 'Spool Pin', 'description' => 'Holds the upper thread spool in place.'],
    ['name' => 'Thread Guide', 'description' => 'Directs thread through the machine path.'],
    ['name' => 'Stitch Selector', 'description' => 'Chooses the stitch pattern for the project.'],
    ['name' => 'Hand Wheel', 'description' => 'Moves the needle manually for setup and maintenance.'],
    ['name' => 'Foot Pedal', 'description' => 'Controls the sewing speed.'],
    ['name' => 'Power Switch', 'description' => 'Turns the machine on and off safely.'],
    ['name' => 'Light', 'description' => 'Illuminates the sewing area for accuracy.'],
    ['name' => 'Bobbin Case', 'description' => 'Holds the bobbin and helps maintain stitch quality.'],
    ['name' => 'Needle Plate', 'description' => 'Provides a flat base for the fabric under the needle.'],
    ['name' => 'Reverse Lever', 'description' => 'Lets you sew backward for reinforcing seams.'],
    ['name' => 'Thread Cutter', 'description' => 'Cuts thread neatly at the end of sewing.'],
    ['name' => 'Extension Table', 'description' => 'Adds support for larger fabric pieces.'],
    ['name' => 'Drop Feed', 'description' => 'Allows free-motion quilting and embroidery work.'],
];
?>
<main class="container section">
    <section class="card">
        <h1>Sewing Machine Parts</h1>
        <p class="lead">Orodha ya sehemu muhimu za mashine ya kufuma na matengenezo yake.</p>
    </section>
    <section class="grid-3">
        <?php foreach ($parts as $part): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($part['name']); ?></h3>
                <p><?php echo htmlspecialchars($part['description']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>