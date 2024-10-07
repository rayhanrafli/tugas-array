<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 200px;
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            margin: 0 0 10px;
        }
        .card p {
            margin: 5px 0;
        }
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

    </style>

<body>
    <?php

$data = [
    [
        "nim" => "001",
        "nama" => "Ahmad",
        "kelas" => "10A",
        "umur" => "20",
        "jenis_kelamin" => "Laki-laki"
    ],
    [
        "nim" => "002",
        "nama" => "Raple",
        "kelas" => "10B",
        "umur" => "19",
        "jenis_kelamin" => "Perempuan"
    ],
    [
        "nim" => "003",
        "nama" => "Roni",
        "kelas" => "11A",
        "umur" => "18",
        "jenis_kelamin" => "Laki-laki"
    ],
    [
        "nim" => "004",
        "nama" => "Dina",
        "kelas" => "11B",
        "umur" => "19",
        "jenis_kelamin" => "Perempuan"
    ],
    [
        "nim" => "005",
        "nama" => "Axel",
        "kelas" => "12A",
        "umur" => "17",
        "jenis_kelamin" => "Laki-laki"
    ]
];


    ?>
    <table>
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Umur</th>
        <th>Jenis kelamin</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo ($row['nim']); ?></td>
            <td><?php echo ($row['nama']); ?></td>
            <td><?php echo ($row['kelas']); ?></td>
            <td><?php echo ($row['umur']); ?></td>
            <td><?php echo ($row['jenis_kelamin']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php foreach ($data as $row): ?>
    <div class="card">
        <h3><?php echo ($row['nim']); ?></h3>
        <p>Nama: <?php echo ($row['nama']); ?></p>
        <p>Kelas: <?php echo ($row['kelas']); ?></p>
        <p>Umur: <?php echo ($row['umur']); ?></p>
        <p>Jenis kelamin: <?php echo ($row['jenis_kelamin']); ?></p>
    </div>
<?php endforeach; ?>
</body>
</html>