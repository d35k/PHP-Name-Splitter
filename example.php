<?php

function name($value){

	// Last name'i almak için ismi boşluklardan ayırıyoruz
	$lastName = explode(' ', $value);

	//Dizinin son elemanını soyisim'e atıyoruz.
	$lastName = end($lastName);

	//Soyismi isimden çıkartıp ilk isim olarak atıyoruz
	$firstName = str_replace($lastName, '', $value);

	//Dizi olarak geri gönderiyoruz
	return array($firstName, $lastName);
}


$test1 = name('Göktuğ Hatipoğlu');

// Eğer dizinin elemanları bastırılırsa,

// $test1[0] = 'Göktuğ'
// $test1[1] = 'Hatipoğlu'

// Şeklinde çıktı alınır.

$test2 = name('Ali Mehmet Demir');

// Eğer dizinin elemanları bastırılırsa,

// $test2[0] = 'Ali Mehmet'
// $test2[1] = 'Demir'

// Şeklinde çıktı alınır.


$test3 = name('Veysel Ali Mehmet Demir');

// Eğer dizinin elemanları bastırılırsa,

// $test3[0] = 'Veysel Ali Mehmet'
// $test3[1] = 'Demir'

// Şeklinde çıktı alınır.