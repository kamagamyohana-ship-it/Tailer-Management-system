<?php
$page_title = 'Contact';
$active = 'contact';
include 'includes/header.php';

$messagesFile = __DIR__ . '/messages.json';
$message = '';
$messageType = 'small-note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $text = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $text === '') {
        $message = 'Tafadhali jaza jina, email na ujumbe wako kabla ya kutuma.';
        $messageType = 'small-note';
    } elseif (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Anwani ya email si sahihi. Tumia email halali.';
        $messageType = 'small-note';
    } else {
        $messages = file_exists($messagesFile) ? json_decode(file_get_contents($messagesFile), true) : [];
        $messages = is_array($messages) ? $messages : [];

        $messages[] = [
            'name' => $name,
            'email' => $email,
            'message' => $text,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        file_put_contents($messagesFile, json_encode($messages, JSON_PRETTY_PRINT));
        $message = 'Ujumbe wako umetumwa na umepelekwa moja kwa moja kwenye admin.';
        $messageType = 'small-note';

        header('Location: /contact.php?sent=1');
        exit;
    }
}
?>
<main class="container section">
    <section class="grid-2">
        <article class="card">
            <h1>Contact Us</h1>
            <p class="lead">If you need support, onboarding help, or content updates, use the details below.</p>
            <p class="small-note">This system is configured to use 0741246712 as the primary contact number for message
                notifications.</p>
            <ul class="list">
                <li>Email: support@kushona.local</li>
                <li>Phone: 0741246712</li>
                <li>Address: Dar es Salaam, Tanzania</li>
            </ul>
        </article>
        <article class="card">
            <h3>Send a message</h3>
            <p class="small-note">Messages sent from this form are directed to the support number 0741246712.</p>
            <p class="<?php echo $messageType; ?>"><?php echo htmlspecialchars($message); ?></p>
            <form class="form-grid" method="post" action="/contact.php">
                <label class="label">Name<input class="input" type="text" name="name" placeholder="Your name"
                        required></label>
                <label class="label">Email<input class="input" type="email" name="email" placeholder="you@example.com"
                        required></label>
                <label class="label">Message<textarea class="textarea" name="message"
                        placeholder="Tell us how we can help." required></textarea></label>
                <button class="btn btn-primary" type="submit">Send message</button>
            </form>
        </article>
    </section>
</main>
<?php include 'includes/footer.php'; ?>