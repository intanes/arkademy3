<?php

$biodata ='{"name" :"intan eryka suhastami", "age" : "22 tahun", 
			"address" : "Makassar sulawesi selatan",
			"hobby": {"1":"menulis","2":"membaca"},"is_married":"0",
			"list scholl" : {"SD" : "Sekolah Dasar Inpres Takalar Kota No.234",
			"SMP":"SMPN 2 Takalar","SMA" : "SMAN 3 Takalar",
			"UNIVERSITAS" : "Universitas Islam Negeri Alauddin Makassar"},
			"skill (level)":{"1":"C++(beginner)","2":"HTML and CSS(beginner)","3":"PHP (beginner)"},
			"interest in coding":"1"}';
echo "<pre>";
print_r(json_decode($biodata));
echo "</pre>";