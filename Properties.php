<?php

/**
 * membuat objek di dalam clas menggunakan new namaClassnya kurung buka kurung tutup contoh new NamaClass()
 * Feild/properties/atribut adalah data yang bisa kita sisipkan di dalam object
 * namun sebelum kita bisa memasukan data di field. kita harus mendeklarasikan daa apa aja yang di miliki object tersebut di dalam deklarasi classnya
 * membuat field sama seperti membuat variable, namun di tempatkan di block class, namun di awali dengan kata kunci var
 */

 require_once "data/Person.php";

 $person = new Person();
 $person->name = "Fajri";
 $person->address = "Palembang";
 $person->country = "Indonesia";
 var_dump($person);

 echo "Name    : $person->name" . PHP_EOL;
 echo "Address : $person->address" . PHP_EOL;
 echo "Country : $person->country" . PHP_EOL;
