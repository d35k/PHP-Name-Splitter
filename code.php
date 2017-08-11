<?php


function name($value){

	// Soyismi almak için ismi boşluklardan ayırıyoruz
	$lastName = explode(' ', $value);

	//Dizinin son elemanını soyisim'e atıyoruz.
	$lastName = end($lastName);

	//Soyismi isimden çıkartıp ilk isim olarak atıyoruz
	$firstName = str_replace($lastName, '', $value);

	//Dizi olarak geri gönderiyoruz
	return array($firstName, $lastName);
}