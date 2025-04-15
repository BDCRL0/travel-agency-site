<?php
include 'header.php';
include_once("includes/db.php"); // !!!!


// Form submission logic
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if ($name === '') $errors[] = "Name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if ($message === '') $errors[] = "Message cannot be empty.";

    if (empty($errors)) {
        $stmt = $dbh->prepare("INSERT INTO messages (name, email, message, user_logged_in, username) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $name,
            $email,
            $message,
            is_logged_in() ? 1 : 0,
            is_logged_in() ? $_SESSION['username'] : null
        ]);
        $success = true;
    }
}
?>

<div class="container">
    <h2>Contact Us</h2>

    <?php if ($success): ?>
        <div class="alert alert-success">Thank you! Your message has been sent.</div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $err): ?>
                <p><?= htmlspecialchars($err) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST" id="contactForm" novalidate>
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="<?= $_POST['name'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="<?= $_POST['email'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="5" required><?= $_POST['message'] ?? '' ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>

<script>
    // Basic JS client-side validation
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        const email = this.email.value;
        const name = this.name.value;
        const message = this.message.value;
        if (!name || !email || !message) {
            alert("Please fill in all fields.");
            e.preventDefault();
        }
    });
</script>

<?php include 'footer.php'; ?>
