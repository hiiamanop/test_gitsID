# test_gitsID
hasil jawaban dari soal test internship MSIB gits.ID


1. Fungsi untuk menyelesaikan rumus A000124 dari Sloane’s OEIS:

Kompleksitas kodingan: O(n)
Penjelasan: Kode menggunakan loop for dengan iterasi sebanyak n kali untuk menghasilkan deret angka berdasarkan rumus A000124. Kompleksitas kodingan untuk fungsi ini adalah O(n), di mana n adalah jumlah angka dalam deret yang dihasilkan.


2. Kompleksitas kodingan dari fungsi denseRanking() adalah sebagai berikut:

      1. Menghapus skor yang sama dari array leaderboard: O(n)
         -> Operasi array_unique() pada array leaderboard memiliki kompleksitas O(n), di mana n adalah jumlah elemen dalam array leaderboard.

      2. Mengurutkan array leaderboard: O(n log n)
         -> Operasi 'rsort()' pada array leaderboard memiliki kompleksitas O(n log n), di mana n adalah jumlah elemen dalam array leaderboard.

      3. Mencari peringkat GITS setiap kali bermain menggunakan binary search: O(m log n)
         -> Looping foreach untuk setiap skor yang didapatkan oleh GITS memiliki kompleksitas O(m), di mana m adalah jumlah skor yang didapatkan oleh GITS.
         -> Setiap iterasi dari binary search memiliki kompleksitas O(log n), di mana n adalah jumlah pemain dalam array leaderboard.

Total kompleksitas kodingan:
O(n) + O(n log n) + O(m log n) = O((m+n) log n)

Kompleksitas kodingan adalah O((m+n) log n), di mana m adalah jumlah skor yang didapatkan oleh GITS, dan n adalah jumlah pemain dalam array leaderboard.


3. Kompleksitas kodingan untuk fungsi isBalancedBracket() yang telah diberikan adalah O(n), di mana n adalah panjang dari rangkaian karakter input.

Penjelasan kompleksitas kodingan:

1. Fungsi ini melewati setiap karakter dalam rangkaian input satu per satu dengan menggunakan loop for dari awal hingga akhir rangkaian karakter. Operasi lain dalam fungsi ini, seperti operasi pada tumpukan (stack) atau pencarian elemen dalam array, memiliki kompleksitas waktu konstan.
3. Jumlah operasi yang dilakukan oleh fungsi isBalancedBracket() tergantung pada panjang rangkaian karakter input, yaitu sebanyak n kali (panjang rangkaian karakter).
4. Oleh karena itu, kompleksitas kodingan untuk fungsi ini adalah O(n), yang berarti waktu yang diperlukan untuk mengeksekusi fungsi ini akan tumbuh sebanding dengan panjang rangkaian karakter inputnya.
