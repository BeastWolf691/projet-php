<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->
    <title>Liste des chambres</title>
</head>
<body>

<?php
(!empty($room_id_err)) ? 'has-error' : ''; ?>
                <label>Chambres</label>
                <select name="room_id" class="form-control">
                    <option value="">Sélectionnez une chambre</option>

<?php
                    // Fetch rooms from database
                    $sql = "SELECT room_id, room_number FROM rooms";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo "<option value='" . $row['room_id'] . "'>" . $row['room_number'] . "'>" .$row['room_type'] . "'>" . $row['room_price'] . "'>" .$row['room_bed_single_nb'] . "'>" .$row['room_bed_double_nb']."'>" ."</option>";
                            }
                        }
                    }
?>

                </select>

                <span class="help-block"><?php echo $room_id_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($check_in_date_err)) ? 'has-error' : ''; ?>">
                <label>Date d'arrivée</label>
                <input type="date" name="check_in_date" class="form-control" value="<?php echo $check_in_date; ?>">
                <span class="help-block"><?php echo $check_in_date_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($check_out_date_err)) ? 'has-error' : ''; ?>">
                <label>Date de départ</label>
                <input type="date" name="check_out_date" class="form-control" value="<?php echo $check_out_date; ?>">
                <span class="help-block"><?php echo $check_out_date_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="reservation-list.php">Supprimer</a>
            </div>
        </form>
    </div>    
</body>
</html>