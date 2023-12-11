<?php
require_once __DIR__ . '/../../app/Controller.php';
$controller = new Controller();

// Cek jika formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_name']) && isset($_POST['review_text'])) {
    // Panggil fungsi addReview dengan data yang diinputkan pengguna
    $controller->addReview($_POST['user_name'], $_POST['review_text']);
    // Redirect ke halaman yang sama untuk mencegah resubmission formulir
    header("Location: review-users.php");
    exit;
}

// Mendapatkan review untuk ditampilkan
$reviews = $controller->displayReviews();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Users</title>
    <!-- Tambahkan CSS Anda di sini -->
</head>
<body>
    <h1>Tambahkan Review Anda</h1>
    <form method="post">
        Nama: <input type="text" name="user_name" required>
        Review: <textarea name="review_text" required></textarea>
        <button type="submit">Tambah Review</button>
    </form>

    <h2>Review Pengguna</h2>
    <?php if (empty($reviews)): ?>
        <p>Tidak ada review.</p>
    <?php else: ?>
        <?php foreach ($reviews as $review): ?>
            <div class="review">
                <strong><?= htmlspecialchars($review['user_name']) ?>:</strong>
                <p><?= nl2br(htmlspecialchars($review['review_text'])) ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
