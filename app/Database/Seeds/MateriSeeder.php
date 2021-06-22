<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MateriSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'materi' => '<h3 class="text-center">PENGERTIAN PUBLIC SPEAKING</h3>
				<p style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Belum ada pengertian public speaking yang ‘pas’ dalam Bahasa Indonesia hingga sekarang. Kita masih menyebutnya “public speaking”, sama dengan istilah aslinya dalam bahasa Inggris. Istilah Bahasa Indonesia yang paling sering digunakan untuk mengartikan public speaking adalah “berbicara didepan umum” atau “berbicara di depan publik”. Bahkan public speaking sering pula disebut “pidato”</p>',
				'img' => 'ilustrasi-public-speaking3.jpg'
			],
			[
				'materi' => ' <p style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Kamus Merriam-Webster mengartikan public speaking sebagai “the act or skill of speaking to a usually large groupof people”(Public speaking adalah aksi atau keterampilan berbicarakepada sekelompok besar orang). Menurut David Zarefsky, dalam Public Speaking Strategicfor Success; “Public speaking is a continous communication process in which messages and signals circulate back andforth between speaker and listeners”(Public speaking adalah sebuah proses komunikasi berkelanjutan, di mana pesan dan lambang terus berinteraksi, di antara pembicara dan para pendengarnya).</p>',
				'img' => ''
			],
			[
				'materi' => '  <p style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Public Speaking merupakan sebuah rumpun keluarga Ilmu Komunikasi (Retorika).Retorika adalah seni berkomunikasi secara lisan yang dilakukan olehseseorang kepada sejumlah orang secara langsung bertatap muka. Contohnya:pidato, moderator, MC(Master of Ceremony) danpresentasi.</p>',
				'img' => ''
			],
			[
				'materi' => ' <h3 class="text-center">METODE PUBLIC SPEAKING</h3>
				<ol>
					<li class="font-weight-bold" style="font-size:24px;color:#2d3e50;">IMPROMTU/AD LIBITUM</li>
				</ol>
				<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Metode ini sering disebut metode spontanitas,yakni tidak dilakukan persiapan/pembuatan naskah tertulis terlebih dahulu. Biasanya dilakukan hanya oleh orang yang akan tampil mendadak. Dalam dunia siaran,Ad Libitum artinya berbicara tanpa naskah(script).</p>',
				'img' => ''
			],
			[
				'materi' => ' <p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">Kelebihan metode Impromptu/Ad Libitum :</p>
				<p class="" style="font-size:24px;color:#2d3e50;">1. Dapat mengungkapkan perasaan sebenarnya</p>
				<p class="" style="font-size:24px;color:#2d3e50;">2. Pendapat dan gagasan datang secara spontan</p>
				<p class="" style="font-size:24px;color:#2d3e50;">3. Memungkinkan pembicara terus berpikir</p>',
				'img' => ''
			],
			[
				'materi' => '<p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">Kelemahan metode Impromptu/Ad Libitum :</p>
				<p class="" style="font-size:24px;color:#2d3e50;">1. Dapat menimbulkan kesimpulan yang mentah karena terbatasnya pengetahuan pembicara</p>
				<p class="" style="font-size:24px;color:#2d3e50;">2. Penyampaian tidak lancar, terutama bagi orang yang belum berpengalaman</p>
				<p class="" style="font-size:24px;color:#2d3e50;">3. Gagasan yang disampaikan kurang sistematis</p>
				<p class="" style="font-size:24px;color:#2d3e50;">4. Mudah terkena ‘demam panggung’</p>',
				'img' => ''
			],
			[
				'materi' => '<h3 class="mb-3">2. MANUSCRIPT/READING COMPLETE TEXT/NASKAH</h3>
				<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Metode ini yakni penyampaian pidato dengan cara membaca naskah yang sudah disiapkan. Metode ini biasanya dilakukan oleh pejabat negara atau mereka yang memberi sambutan di acara resmi/formal. Metode ini dilakukan agar tidak terjadi kesalahan, karena setiap kata yang diucapkan dalam acara resmi/formal akan dijadikan figur oleh masyarakat luas dan dikutip oleh media massa.</p>
				',
				'img' => ''
			],
			[
				'materi' => '<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Metode ini mengandalkan kemampuan mengingat. Pembicara harus menguasai susunan bahasa, ide dan gagasan yang terdapat dalam naskah. Metode ini cocok untuk mereka yang memiliki daya ingat tinggi, topik pidatonya menarik dan sederhana serta waktu penyampaiannya tidak terlalu lama. Oleh karena itu bagi pembicara yang tidak memiliki kapasitas daya ingat yang tinggi sebaiknya menghindari metode ini. Jika dilakukan maka pidato tidak akan menarik lagi karena pembicara hanya berkutat dengan kesalahan pembicara sendiri.</p>',
				'img' => ''
			],
			[
				'materi' => '<h3 class="mb-3">3. EXTEMPORE/USING NOTE</h3>
				<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Metode ini merupakan metode terbaik. Metode ini metode yang sangat dianjurkan dalam berpidato karena naskah pidato hanya berupa outline (garis besar) dan pokok penunjang. Garis besar inilah yang akan menjadi
				pedoman untuk mengatur gagasan yang ada dalam pikiran. Jadi metode ini disebut metode penjabaran kerangka yakni teknik berpidato dengan menjabarkan materi pidato yang
				terpola secara lengkap.
				</p>',
				'img' => ''
			],
			[
				'materi' => '<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Metode ini hanya bisa dipakai oleh orang yang sudah berpengalaman, membutuhkan kecakapan dalam berbicara. Apabila tidak cakap maka akan menjadi tidak teratur lagi, ide dan gagasan yang sudah tersusun bisa menjadi kacau atau tak terarah lagi.
				</p>',
				'img' => ''
			],
			[
				'materi' => '<p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">Kelebihan metode   Extempore/Using Note :</p>
				<p class="" style="font-size:24px;color:#2d3e50;">1. Komunikasi dengan pendengar lebih baik</p>
   				<p class="" style="font-size:24px;color:#2d3e50;">2. Pesan atau materi dapat diubah sesuai kebutuhan</p>
   				<p class="" style="font-size:24px;color:#2d3e50;">3. Penyajiannya lebih spontan</p>',
				'img' => ''
			],
			[
				'materi' => ' <p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">Kelemahan metode Extempore/Using Note :</p> 
				<p class="" style="font-size:24px;color:#2d3e50;">1. Persiapan kurang baik jika dibuat terburu-buru</p>
				<p class="" style="font-size:24px;color:#2d3e50;">2. Pemilihan bahasa yang jelek</p>
				<p class="" style="font-size:24px;color:#2d3e50;">3. Kefasihan kurang</p>
				<p class="" style="font-size:24px;color:#2d3e50;">4. Kemungkinan menyimpang dari outline/kerangka</p>
				<p class="" style="font-size:24px;color:#2d3e50;">5. Tidak dapat diterbitkan</p>',
				'img' => ''
			],
			[
				'materi' => ' <h3 class="text-center mb-3">Persiapan Public Speaking</h3>
				<p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">MENTAL</p>                                 <p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Rileks, atasi rasa gugup dengan menarik nafas panjang dan dalam, menggerakkan badan sedikit untuk sekedar melemaskan otot yang kaku, berdiri tegap lalu tersenyumla Tampillah percaya diri dan be yourself...!</p>',
				'img' => 'ilustrasi-public-speaking2.jpg'
			],
			[
				'materi' => ' <p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">FISIK</p>
				<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Jaga mulut dan tenggorokan selalu basah, untuk itu siapkan air putih yang siap diminum jika dibutuhkan
				Jangan makan dan minum yang akan mengganggu organ tubuh, minimal satu jam sebelum tampil misalnya soda, makanan berlemak (yang bisa membuat mual), makanan pedas atau asam</p>',
				'img' => ''
			],
			[
				'materi' => ' <p class="font-weight-bold" style="font-size:24px;color:#2d3e50;">MATERI</p>
				<p class="ml-3" style="text-align: justify;font-size:24px;color:#2d3e50;">&emsp;&emsp;Membaca literatur, menyusun kerangka materi dan yang terpenting adalah kuasai materi.</p>',
				'img' => ''
			],

		];

		$this->db->table('materi')->insertBatch($data);
	}
}
