<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
          <title>BOOTSTRAP DASHBOARD</title>
</head>
<body>
    
    <table class="table">
            <thead>
                    <tr>
                        <?php foreach ($hotels as $hotel => $random) {
                            ?>
                            <th scope="col">
                            <?php echo print_r(array_keys($hotel)); ?>
                            </th>
                        <?php } ?>
                    </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($hotels as $hotel) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $hotel['name']; ?>
                    </th>
                    <td>
                        <?php echo $hotel['description']; ?>
                    </td>
                    <td>
                        <?php 
                            if (!$hotel['parking']){
                                echo "No parking";
                            } else {
                                echo "Yes";
                            } 
                        ?>
                    </td>
                    <td>
                        <?php echo $hotel['vote']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center']; ?>
                    </td>
                </tr>
                
                <?php } ?>
            </tbody>
    </table>

</body>
</html>