<?php
// available-rooms.php
require_once "bootstrap.php"; // Include your Doctrine bootstrap file
use Entity\Room;

// Fetch available rooms from the database using Doctrine
$roomRepository = $entityManager->getRepository('Entity\Room');
$availableRooms = $roomRepository->findBy(array('isAvailable' => true));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Rooms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Available Rooms</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($availableRooms as $room): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($room->getRoomNumber()); ?></td>
                        <td><?php echo htmlspecialchars($room->getType()); ?></td>
                        <td><?php echo htmlspecialchars($room->getPrice()); ?></td>
                        <td>
                            <!-- Replace with appropriate action link or button -->
                            <a href="reserve.php?room_id=<?php echo $room->getId(); ?>" class="btn btn-primary">Reserve</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
