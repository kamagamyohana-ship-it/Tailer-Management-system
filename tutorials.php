<?php
$page_title = 'Tutorials';
$active = 'user';
include 'includes/header.php';

$questions = [
    ['q' => '1. What is the main purpose of a sewing machine needle?', 'a' => 'To carry the upper thread through the fabric and form stitches.'],
    ['q' => '2. What does the presser foot do?', 'a' => 'It holds the fabric in place as it moves under the needle.'],
    ['q' => '3. What is a bobbin used for?', 'a' => 'It holds the lower thread that forms stitches with the upper thread.'],
    ['q' => '4. Why is measuring tape important in sewing?', 'a' => 'It helps you measure fabric accurately before cutting.'],
    ['q' => '5. What is seam allowance?', 'a' => 'The extra fabric left between the edge and the stitch line.'],
    ['q' => '6. Why should you iron fabric before cutting?', 'a' => 'To remove wrinkles and make accurate cutting easier.'],
    ['q' => '7. What is a straight stitch used for?', 'a' => 'It is used for basic seams and simple stitching.'],
    ['q' => '8. What is a zigzag stitch used for?', 'a' => 'It helps prevent fabric edges from fraying and is useful for stretch fabrics.'],
    ['q' => '9. Why should you use sharp scissors for fabric?', 'a' => 'Sharp scissors make clean cuts and reduce fabric damage.'],
    ['q' => '10. What is the purpose of pins in sewing?', 'a' => 'They hold pieces of fabric together before stitching.'],
    ['q' => '11. What is the difference between a seam and a hem?', 'a' => 'A seam joins two pieces together, while a hem finishes an edge.'],
    ['q' => '12. Why is it important to test a stitch on scrap fabric?', 'a' => 'To check tension, length, and thread balance before sewing the real piece.'],
    ['q' => '13. What does the stitch length control?', 'a' => 'It controls how long each stitch is.'],
    ['q' => '14. What does stitch width control?', 'a' => 'It controls how wide zigzag or decorative stitches are.'],
    ['q' => '15. Why do we use a seam ripper?', 'a' => 'To remove stitches carefully when correcting mistakes.'],
    ['q' => '16. What is a dart used for?', 'a' => 'To shape fabric to fit the body.'],
    ['q' => '17. What is interfacing?', 'a' => 'A stiff fabric used to strengthen and support garment pieces.'],
    ['q' => '18. Why is fabric grain important?', 'a' => 'It affects how the garment hangs and stretches.'],
    ['q' => '19. What is a pattern piece?', 'a' => 'A template used to cut fabric pieces for sewing.'],
    ['q' => '20. What does “right side” mean?', 'a' => 'The front or outer side of the fabric that will be visible.'],
    ['q' => '21. What does “wrong side” mean?', 'a' => 'The inside or back side of the fabric.'],
    ['q' => '22. Why should you backstitch at the start and end of a seam?', 'a' => 'To secure the stitches so they do not unravel.'],
    ['q' => '23. What is a gather?', 'a' => 'A technique of drawing fabric together to make it fuller.'],
    ['q' => '24. Why is a thimble useful?', 'a' => 'It protects the finger when pushing a needle by hand.'],
    ['q' => '25. What is the purpose of a rotary cutter?', 'a' => 'It cuts fabric quickly and accurately with a circular blade.'],
    ['q' => '26. What is a sleeve?', 'a' => 'The part of a garment that covers the arm.'],
    ['q' => '27. What is a collar in clothing design?', 'a' => 'The band around the neck of a garment.'],
    ['q' => '28. What is the role of a serger?', 'a' => 'It trims and finishes seams neatly, often with overlock stitches.'],
    ['q' => '29. Why should you match fabric patterns before sewing?', 'a' => 'To make seams line up neatly and look professional.'],
    ['q' => '30. What is a hem allowance?', 'a' => 'The extra fabric folded and stitched to create a finished edge.'],
    ['q' => '31. Why are dressmaker pins better than regular pins for fabric?', 'a' => 'They are sharper and easier to use with delicate cloth.'],
    ['q' => '32. What is a lapel?', 'a' => 'The folded front part of a jacket or coat.'],
    ['q' => '33. Why is tension important on a sewing machine?', 'a' => 'It affects how tight or loose the stitches are.'],
    ['q' => '34. What is a waistband?', 'a' => 'The band that holds the top of trousers, skirts, or shorts.'],
    ['q' => '35. What is a pleat?', 'a' => 'A folded section of fabric used for style or fullness.'],
    ['q' => '36. Why should you use the correct needle size?', 'a' => 'Different fabrics need different needles to avoid skipped stitches or damage.'],
    ['q' => '37. What is basting?', 'a' => 'A temporary long stitch used to hold fabric in place before final sewing.'],
    ['q' => '38. What does “press” mean in sewing?', 'a' => 'To smooth fabric with an iron, not just to move it.'],
    ['q' => '39. Why is it helpful to mark fabric before cutting?', 'a' => 'It helps you place pieces correctly and avoid mistakes.'],
    ['q' => '40. What is a lining?', 'a' => 'A second layer of fabric added inside a garment for finish or comfort.'],
    ['q' => '41. What is the function of a foot pedal?', 'a' => 'It controls the sewing speed of the machine.'],
    ['q' => '42. Why do we need to clean a sewing machine?', 'a' => 'Dust and lint can affect stitching and machine performance.'],
    ['q' => '43. What is the purpose of a needle plate?', 'a' => 'It supports the fabric under the needle and guides the feed dogs.'],
    ['q' => '44. What are feed dogs?', 'a' => 'Teeth under the needle plate that move the fabric forward.'],
    ['q' => '45. Why should you avoid pulling fabric while sewing?', 'a' => 'It can stretch the fabric and make stitches uneven.'],
    ['q' => '46. What is a yoke in clothing?', 'a' => 'A fitted section at the shoulder or waist of a garment.'],
    ['q' => '47. What is the role of a zipper foot?', 'a' => 'It helps sew close to zippers and other narrow areas.'],
    ['q' => '48. Why is it important to choose the right fabric for a pattern?', 'a' => 'The fabric affects fit, stretch, drape, and ease of sewing.'],
    ['q' => '49. What does “ease” mean in garment sewing?', 'a' => 'The extra room in a garment for comfort and movement.'],
    ['q' => '50. What is the best habit after finishing a sewing project?', 'a' => 'Inspect the stitches, trim threads, and press the garment for a neat finish.'],
];
?>
<main class="container section">
    <section class="card">
        <h1>Tutorials</h1>
        <p class="lead">Seti ya maswali 50 kuhusu ufundi wa kushona na majibu yake kwa ufahamu wa haraka.</p>
    </section>
    <section class="card">
        <?php foreach ($questions as $item): ?>
            <article class="card" style="margin-bottom: 12px;">
                <h3><?php echo htmlspecialchars($item['q']); ?></h3>
                <p><strong>Jibu:</strong> <?php echo htmlspecialchars($item['a']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>