<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des chambres</title>
</head>
<body>

<?php
(!empty($room_id_err)) ? 'has-error' : ''; ?>">
                <label>Chambre</label>
                <select name="room_id" class="form-control">
                    <option value="">Sélectionnez une chambre</option>

<?php
                    // Fetch rooms from database
                    $sql = "SELECT room_id, room_number FROM rooms";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo "<option value='" . $row['room_id'] . "'>" . $row['room_number'] . "</option>";
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