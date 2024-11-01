<?php

class About {
    public function index($nama = 'Sandhika', $pekerjan = 'Dosen')
    {
        echo "Hallo, nama saya $nama, saya adalah seorang $pekerjan";
    }
    public function page()
    {
        echo 'About/page';
    }
}