<?php
$page_title = 'Clothing Designs';
$active = 'user';
include 'includes/header.php';

$designs = [
    ['name' => 'Modern Shirt', 'description' => 'Minimal style with clean cuts and a casual finish.'],
    ['name' => 'Traditional Dress', 'description' => 'Classic pattern with elegant stitching details.'],
    ['name' => 'Kids Wear', 'description' => 'Simple and practical design for beginner projects.'],
    ['name' => 'African Kaftan', 'description' => 'Loose-fitting, stylish, and great for cultural events.'],
    ['name' => 'Tailored Blouse', 'description' => 'Neat collar and fitted waist for a smart look.'],
    ['name' => 'Skirt with Pleats', 'description' => 'Classic pleats for movement and elegance.'],
    ['name' => 'A-Line Dress', 'description' => 'Flattering shape that suits many body types.'],
    ['name' => 'Casual T-Shirt', 'description' => 'Easy to sew and ideal for beginner learners.'],
    ['name' => 'Straight-Leg Trouser', 'description' => 'Simple lines and comfortable fit for daily wear.'],
    ['name' => 'Layered Jacket', 'description' => 'Stylish outerwear with practical pockets.'],
    ['name' => 'Short Sleeve Top', 'description' => 'Fresh and easy design for warm weather.'],
    ['name' => 'Long Gown', 'description' => 'Elegant flowing design with a polished finish.'],
    ['name' => 'Patchwork Skirt', 'description' => 'Creative design using mixed fabric pieces.'],
    ['name' => 'Wrap Dress', 'description' => 'Flexible and flattering for many sizes.'],
    ['name' => 'Classic Shirt Dress', 'description' => 'Smart design for work and casual occasions.'],
    ['name' => 'Cropped Jacket', 'description' => 'Modern style with clean shaping.'],
    ['name' => 'Satin Evening Dress', 'description' => 'Smooth fabric and elegant drape for formal use.'],
    ['name' => 'Denim Overalls', 'description' => 'Friendly and practical design for everyday wear.'],
    ['name' => 'Beach Cover-Up', 'description' => 'Light fabric and open design for comfort.'],
    ['name' => 'Formal Blazer', 'description' => 'Sharp tailoring with professional finish.'],
    ['name' => 'Ruffled Skirt', 'description' => 'Soft and playful look with layered ruffles.'],
    ['name' => 'Simple Hoodie', 'description' => 'Comfortable and easy to customize.'],
    ['name' => 'Flared Trouser', 'description' => 'Relaxed style with a retro feel.'],
    ['name' => 'Princess Dress', 'description' => 'Graceful design for celebrations and events.'],
    ['name' => 'Utility Jumpsuit', 'description' => 'Functional design with pockets and strong seams.'],
    ['name' => 'Loose Summer Dress', 'description' => 'Breathable and light for hot weather.'],
    ['name' => 'Polo Shirt', 'description' => 'Classic and easy to sew in different fabrics.'],
    ['name' => 'Wide-Leg Pants', 'description' => 'Modern and stylish with flowing shape.'],
    ['name' => 'Lace Top', 'description' => 'Delicate design with fine finishing.'],
    ['name' => 'Sewing Apron', 'description' => 'Practical protective design for workshop use.'],
    ['name' => 'Festival Dress', 'description' => 'Bold color mix and decorative details.'],
];
?>
<main class="container section">
    <section class="card">
        <h1>Clothing Designs</h1>
        <p class="lead">Orodha ya miundo 30 ya mavazi ya kufundisha na kuiga kwa wanafunzi.</p>
    </section>
    <section class="grid-3">
        <?php foreach ($designs as $design): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($design['name']); ?></h3>
                <p><?php echo htmlspecialchars($design['description']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>