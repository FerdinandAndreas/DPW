<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Array ke JSON</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: linear-gradient(135deg, #f3e5f0, #e8d5e2);
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #9f196d;
            padding-bottom: 8px;
        }

        h3 {
            color: #9f196d;
            margin-top: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background: #9f196d;
            color: white;
            padding: 10px 14px;
            text-align: left;
        }

        td {
            padding: 9px 14px;
            border-bottom: 1px solid #eee;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #f3e5f0;
        }

        /* JSON Box */
        .json-box {
            background: #1e1e2e;
            color: #cdd6f4;
            border-radius: 10px;
            padding: 20px;
            font-family: "Courier New", monospace;
            font-size: 13px;
            line-height: 1.6;
            overflow-x: auto;
            margin-top: 10px;
            max-height: 400px;
            overflow-y: auto;
        }

        .json-key   { color: #f38ba8; }
        .json-str   { color: #a6e3a1; }
        .json-num   { color: #fab387; }
        .json-brace { color: #cba6f7; }

        /* Info */
        .info-box {
            background: #fff;
            border-left: 4px solid #9f196d;
            border-radius: 6px;
            padding: 14px;
            margin-top: 15px;
            font-size: 13px;
        }

        .stats {
            display: flex;
            gap: 15px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .stat-card {
            background: #9f196d;
            color: white;
            border-radius: 8px;
            padding: 15px 20px;
            flex: 1;
            min-width: 120px;
            text-align: center;
        }

        .stat-card .val {
            font-size: 28px;
            font-weight: bold;
        }

        .stat-card .lbl {
            font-size: 12px;
            opacity: 0.85;
        }

        a {
            color: #9f196d;
            text-decoration: none;
            font-size: 13px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Konversi Array ke JSON</h2>

<?php
$mahasiswa = [
    ["nama"=>"Abelgis", "umur"=>20],
    ["nama"=>"Mayra Ruhandini", "umur"=>21],
    ["nama"=>"Mendysia Anggita Putri", "umur"=>20],
    ["nama"=>"Ummi Fatikhkhurrokhmah", "umur"=>21],
    ["nama"=>"Ayla Nur Ramadhani", "umur"=>19],
    ["nama"=>"Arinda Mardianti", "umur"=>20],
    ["nama"=>"Ayu Dhia Khansa", "umur"=>21],
    ["nama"=>"Reva Adinta Nasyiah", "umur"=>20],
    ["nama"=>"Dinda Aulia", "umur"=>19],
    ["nama"=>"Bintang Nur Aini", "umur"=>20],
    ["nama"=>"Haki Eko Saputra", "umur"=>21],
    ["nama"=>"Adrian Yuanto", "umur"=>22],
    ["nama"=>"Muhammad Faizal Mirsya Al Gibran", "umur"=>21],
    ["nama"=>"Angga Dwi Saputro", "umur"=>22],
    ["nama"=>"Fadhiel Fauzi Firoos", "umur"=>20],
    ["nama"=>"Fauzy Ahmad Muzayyin", "umur"=>21],
    ["nama"=>"Mohammad Saputra Abdul Farid", "umur"=>22],
    ["nama"=>"Aris Musta'in", "umur"=>20],
    ["nama"=>"Ferdinand Andreas Saputra", "umur"=>21],
    ["nama"=>"Shafira Rahmaningtyas", "umur"=>20],
    ["nama"=>"Michelle Milanello", "umur"=>19],
    ["nama"=>"Syafi' Arkan Musthafa", "umur"=>21],
];

$jsonOutput = json_encode($mahasiswa, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

$jumlah = count($mahasiswa);
$totalUmur = array_sum(array_column($mahasiswa, "umur"));
$rataUmur  = round($totalUmur / $jumlah, 1);
$minUmur   = min(array_column($mahasiswa, "umur"));
$maxUmur   = max(array_column($mahasiswa, "umur"));

$decoded = json_decode($jsonOutput, true);
?>

<div class="stats">
    <div class="stat-card"><div class="val"><?php echo $jumlah; ?></div><div class="lbl">Total</div></div>
    <div class="stat-card"><div class="val"><?php echo $rataUmur; ?></div><div class="lbl">Rata-rata</div></div>
    <div class="stat-card"><div class="val"><?php echo $minUmur; ?></div><div class="lbl">Termuda</div></div>
    <div class="stat-card"><div class="val"><?php echo $maxUmur; ?></div><div class="lbl">Tertua</div></div>
</div>

<h3>Data Array</h3>
    <table>
    <thead><tr><th>#</th><th>Nama</th><th>Umur</th></tr></thead>
    <tbody>
    <?php foreach ($mahasiswa as $i => $mhs): ?>
    <tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo htmlspecialchars($mhs["nama"]); ?></td>
    <td><?php echo $mhs["umur"]; ?> tahun</td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

<h3>JSON</h3>
    <div class="json-box"><?php
    $json_pretty = htmlspecialchars($jsonOutput);
    $json_pretty = preg_replace('/"([^"]+)":/', '<span class="json-key">"$1"</span>:', $json_pretty);
    $json_pretty = preg_replace('/: "([^"]*)"/', ': <span class="json-str">"$1"</span>', $json_pretty);
    $json_pretty = preg_replace('/: (\d+)/', ': <span class="json-num">$1</span>', $json_pretty);
    $json_pretty = preg_replace('/([{}\[\]])/', '<span class="json-brace">$1</span>', $json_pretty);
    echo $json_pretty;
    ?></div>

<h3>Decode JSON</h3>
    <table>
    <thead><tr><th>#</th><th>Nama</th><th>Umur</th></tr></thead>
    <tbody>
    <?php foreach (array_slice($decoded, 0, 5) as $i => $item): ?>
    <tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo htmlspecialchars($item["nama"]); ?></td>
    <td><?php echo $item["umur"]; ?> tahun</td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

<div class="info-box">
JSON = format data untuk komunikasi antara server dan client.
</div>

<br>
<a href="session_login.php">← Login</a> |
<a href="galery.php">Galeri</a>

</body>
</html>