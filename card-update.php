<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gift Card Page - AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>AirAsia Rewards Catalog</h1>
        <nav>
            <a href="card-list.php">Back to Gift Card List</a>
        </nav>
    </header>
    <main>
        <section class="card-panel">
            <h2>Edit Gift Card Page</h2>
            <form action="card-list.php" method="get">
                <div class="form-group">
                    <label for="card_name">Card Name</label>
                    <input type="text" id="card_name" name="card_name" class="form-control" value="AirAsia $100 Flight Voucher" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="card_type">Card Type</label>
                        <select id="card_type" name="card_type" class="form-control" required>
                            <option value="Travel" selected>Travel</option>
                            <option value="Dining">Dining</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Lifestyle">Lifestyle</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="card_value">Card Value ($)</label>
                        <input type="number" id="card_value" name="card_value" class="form-control" step="0.01" min="0" value="100.00" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="points_required">Points Required</label>
                    <input type="number" id="points_required" name="points_required" class="form-control" min="0" value="10000" required>
                </div>

                <p class="form-note">Note: Card ID is automatically generated.</p>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">Submit Gift Card Changes</button>
                    <a href="card-list.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>