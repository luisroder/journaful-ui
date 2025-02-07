<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Journaful - Dein Journaling und Habit Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./style/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <!-- Info Sektion -->
    <section id="info" class="info-section">
        <div class="container">
            <h1>Willkommen bei Journaful</h1>
            <p>Es handelt sich hier um eine Beispielwebsite. Es wird nichts verkauft</p>
        </div>
    </section>

    <!-- Preise Sektion -->
    <?php include 'pricing.php'; ?>

    <!-- Team Sektion -->
    <section id="team" class="bg-light section-padding">
        <div class="container">
            <h2>Unser Team</h2>
            <p>Die kreativen Köpfe hinter Journaful, vereint durch die Leidenschaft für persönliche Entwicklung.</p>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <?php include 'cookies.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>