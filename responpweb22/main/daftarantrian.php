<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="stylesheet" href="../style/style.css">
    <title>Barbershop</title>
</head>
<body>
    <header>
        <nav>
            <div class="hrfh1">
                <h1>Barbershop</h1>
            </div>
            <div class="list">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="./antrian.html">Form Antrian</a></li>
                    <li><a href="./daftarantrian.php">Daftar Antrian</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="mdaftar">
            <h2>Daftar Antrian</h2>
            <div class="isidaftar">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Pukul</th>
                            <th>Model Potongan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $file = fopen("../data.txt", "r");
                        if ($file) {
                            while (($line = fgets($file)) !== false) {
                                
                                $data = explode(",", $line);
                                $data = array_map('trim', $data);

                                echo "<tr>";
                                echo "<td>{$data[0]}</td>\n";
                                echo "<td>{$data[1]}</td>\n";
                                echo "<td>{$data[2]}</td>\n";
                                echo "<td>{$data[3]}</td>\n";
                                echo "<td>" . (isset($data[4]) ? $data[4] : '-') . "</td>\n";
                                echo "</tr>";
                            }
                            fclose($file);
                        } else {
                            echo "<p>Tidak ada data antrian.</p>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
