<?php
function denseRanking($leaderboard, $gits_scores) {
    $leaderboard = array_unique($leaderboard); // Menghapus skor yang sama (pemain dengan skor yang sama memiliki peringkat yang sama)
    rsort($leaderboard); // Mengurutkan leaderboard dari besar ke kecil

    $ranking = array();
    $n = count($leaderboard);

    foreach ($gits_scores as $score) {
        // Menggunakan binary search untuk mencari peringkat skor GITS di leaderboard
        $left = 0;
        $right = $n - 1;
        $found = false;

        while ($left <= $right) {
            $mid = $left + floor(($right - $left) / 2);

            if ($leaderboard[$mid] == $score) {
                $found = true;
                break;
            } elseif ($leaderboard[$mid] > $score) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        if ($found) {
            $ranking[] = $mid + 1; // Jika skor GITS ditemukan di leaderboard, tambahkan peringkatnya
        } else {
            $ranking[] = $left + 1; // Jika skor GITS tidak ada di leaderboard, tambahkan peringkat setelah posisi left
        }
    }

    return $ranking;
}

// Contoh penggunaan fungsi dengan data dari contoh soal
$leaderboard = array(100, 100, 50, 40, 40, 20, 10);
$gits_scores = array(5, 25, 50, 120);

$result = denseRanking($leaderboard, $gits_scores);

// Cetak hasil peringkat GITS setiap kali bermain
echo implode(" ", $result); // Output: 6 4 2 1


?>