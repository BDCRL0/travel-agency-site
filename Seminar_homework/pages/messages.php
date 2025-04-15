<?php
include 'header.php';
include_once("includes/db.php");

// Access control: only for logged-in users
if (!is_logged_in()) {
    echo "<div class='alert alert-danger text-center'>You must be logged in to view messages.</div>";
    include 'footer.php';
    exit;
}

// Fetch messages
$stmt = $dbh->query("SELECT * FROM messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h2>Submitted Messages</h2>

    <?php if (count($messages) === 0): ?>
        <p>No messages found.</p>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>From</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Sent At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $msg): ?>
                    <tr>
                        <td>
                            <?= htmlspecialchars($msg['user_logged_in'] ? $msg['username'] : 'Guest') ?>
                        </td>
                        <td><?= htmlspecialchars($msg['email']) ?></td>
                        <td><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
                        <td><?= date("Y-m-d H:i", strtotime($msg['created_at'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
