<?php
    $mystr = "ASCII is an easy way for computers to work with strings\n";

    if (ord($mystr{1}) == 83) {
        print "The second letter in the string is S\n";
    } else {
        print "The second letter is not S\n";
    }

    $letter = chr(109);

    print "ASCII number 109 is equivalent to $letter\n";

    echo "<br><br><br>";
//ENKRIPSI START
    $key = 12;
    echo "<br>isi $ key : ";
    echo $key;
    $tes = '11111';
    echo "<br>isi $ tes : ";
    echo $tes;
    echo "<br>panjang $ tes : ";
    echo strlen($tes);
    echo "<br>isites : ";
    $isites = strlen($tes);
    echo $isites;
    echo "<br>";
    echo "<br>";

    echo "isi dipecah<br>";
    for($i=0 ; $i< $isites ; $i++)
    {
    	$pecah[$i] = substr($tes, $i, 1);
    	echo $pecah[$i]."<br>";
    }
	echo "<br>";

    echo "isi diASCII<br>";
    for($i=0 ; $i< $isites ; $i++)
    {
    	$pecahascii[$i] = ord($pecah[$i]{0}) ;
    	echo $pecahascii[$i]."<br>";
    }
    echo "<br>";

    echo "isi diASCII ditambah Key<br>";
	for($i=0 ; $i< $isites ; $i++)
    {
    	$pecahascii[$i] = $pecahascii[$i] + $key ;
    	if($pecahascii[$i] > 255)
    	{
    		$pecahascii[$i] = $pecahascii[$i] - 255;
    	}
    	echo $pecahascii[$i]."<br>";
    }
	echo "<br>";

    echo "isi diASCII ditambah Key diubah CHAR<br>";
    for($i=0 ; $i< $isites ; $i++)
    {
    	$hasilarray[$i] = chr($pecahascii[$i]);
    	echo $hasilarray[$i]."<br>";
    }
	echo "<br>";

    echo "HASILNYA isi diASCII ditambah Key diubah CHAR<br>";
    $hasil = '';
    for($i=0 ; $i< $isites ; $i++)
    {
    	$hasil = $hasil .= $hasilarray[$i];
    	echo $hasil."<br>";
    }
//ENKRIPSI STOP


echo "<br><br><br><br>";


//DEKRIPSI START
    echo $hasil;
    $key = 12;
    echo "<br>isi $ key : ";
    echo $key;
    echo "<br>";

    echo "isi dipecah<br>";
    for($i=0 ; $i< $isites ; $i++)
    {
    	$pecah[$i] = substr($hasil, $i, 1);
    	echo $pecah[$i]."<br>";
    }
	echo "<br>";

    echo "isi diASCII<br>";
    for($i=0 ; $i< $isites ; $i++)
    {
    	$pecahascii[$i] = ord($pecah[$i]{0}) ;
    	echo $pecahascii[$i]."<br>";
    }
    echo "<br>";

    echo "isi diASCII dikurang Key<br>";
	for($i=0 ; $i< $isites ; $i++)
    {
    	$pecahascii[$i] = $pecahascii[$i] - $key ;
    	if($pecahascii[$i] < 0)
    	{
    		$pecahascii[$i] = $pecahascii[$i] + 255;
    	}
    	echo $pecahascii[$i]."<br>";
    }
	echo "<br>";

    echo "isi diASCII dikurang Key diubah CHAR<br>";
    for($i=0 ; $i< $isites ; $i++)
    {
    	$hasilarray[$i] = chr($pecahascii[$i]);
    	echo $hasilarray[$i]."<br>";
    }
	echo "<br>";
	
	echo "HASILNYA isi diASCII dikurang Key diubah CHAR<br>";
    $hasil = '';
    for($i=0 ; $i< $isites ; $i++)
    {
    	$hasil = $hasil .= $hasilarray[$i];
    	echo $hasil."<br>";
    }
?>