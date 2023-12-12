<?php
include("../../app/Controller.php");
$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->saveReview($_POST['name'], $_POST['review']);
}

$reviews = $controller->getReviews();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Users</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold text-center my-5">Add Reviews</h1>
        
        <!-- Form Section -->
        <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <!-- Name Input -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Your Name">
            </div>
            <!-- Review Input -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="review">
                    Review
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="review" name="review" placeholder="Enter your review"></textarea>
            </div>
            <!-- Buttons -->
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Send
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="../Dashboard.php">
                    Back to Dashboard
                </a>
            </div>
        </form>

        <!-- Reviews Display Section -->
        <h1 class="text-2xl font-bold text-center my-5">All Review</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <?php
            foreach ($reviews as $review) { ?>
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($review['name']) ?></h3>
                    <p><?= htmlspecialchars($review['review']) ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>


