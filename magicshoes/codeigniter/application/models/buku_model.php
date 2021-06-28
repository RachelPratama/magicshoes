<?php
    class Buku_Model extends CI_Model{

        public function isidata(){
            return array(
                array(
                    'judul' => 'Langit',
                    'pengarang' => 'Rokki',
                    'tahun' => '2045'),
                array(
                    'judul' => 'Awan',
                    'pengarang' => 'Rokkii',
                    'tahun' => '2050')
            ) ;
        }
    }
?>