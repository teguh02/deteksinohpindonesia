<?php

/**
 * Projek ini merupakan sebuah projek open source
 * yang di buat oleh Teguh Rijanandi
 * 
 * Kontak saya
 * teguhrijanandi02@gmail.com
 */

namespace ofi\deteksinohpindonesia;

use Exception;

// import class prefix
use ofi\deteksinohpindonesia\Prefix;

class Client extends Prefix {

    /**
     * Class yang digunakan untuk deteksi nomor hp 
     */
    
    public function detect($phone_number = null)
    {
        $this->standarisasi($phone_number);

        // deteksi di dalam array indosat
        if(
            $this->searchInArray(
                $phone_number, 
                $this->indosatPrefix()
            )
        ) {
            return ['operator' => 'indosat', 'phone_number' => $phone_number];
        }

        // deteksi di dalam array xl
        if(
            $this->searchInArray(
                $phone_number, 
                $this->xlPrefix()
            )
        ) {
            return ['operator' => 'xl', 'phone_number' => $phone_number];
        }

        // deteksi di dalam array axis
        if(
            $this->searchInArray(
                $phone_number, 
                $this->axisPrefix()
            )
        ) {
            return ['operator' => 'axis', 'phone_number' => $phone_number];
        }

        // deteksi di dalam array telkomsel
        if(
            $this->searchInArray(
                $phone_number, 
                $this->telkomselPrefix()
            )
        ) {
            return ['operator' => 'telkomsel', 'phone_number' => $phone_number];
        }

        // deteksi di dalam array smartfren
        if(
            $this->searchInArray(
                $phone_number, 
                $this->smartfrenPrefix()
            )
        ) {
            return ['operator' => 'smartfren', 'phone_number' => $phone_number];
        }

        // deteksi di dalam array three
        if(
            $this->searchInArray(
                $phone_number, 
                $this->threePrefix()
            )
        ) {
            return ['operator' => 'three', 'phone_number' => $phone_number];
        }

        // jika semua kondisi salah maka return operator kosong
        return ['operator' => null, 'phone_number' => $phone_number];
    }

    /**
     * Mendeteksi apakah nomor telepon ini
     * adalah nomor indosat?
     */

     public function isIndosat($phone_number = null): bool
     {
        $this->standarisasi($phone_number);

        if(
            $this->searchInArray(
                $phone_number, 
                $this->indosatPrefix()
            )
        ) {
            return true;
        }
        
        return false;
     }

     /**
     * Mendeteksi apakah nomor telepon ini
     * adalah nomor xl?
     */

    public function isXl($phone_number = null): bool
    {
       $this->standarisasi($phone_number);

       if(
           $this->searchInArray(
               $phone_number, 
               $this->xlPrefix()
           )
       ) {
           return true;
       }
       
       return false;
    }

    /**
     * Mendeteksi apakah nomor telepon ini
     * adalah nomor Axis?
     */

    public function isAxis($phone_number = null): bool
    {
       $this->standarisasi($phone_number);

       if(
           $this->searchInArray(
               $phone_number, 
               $this->axisPrefix()
           )
       ) {
           return true;
       }
       
       return false;
    }

    /**
     * Mendeteksi apakah nomor telepon ini
     * adalah nomor telkomsel?
     */

    public function isTelkomsel($phone_number = null): bool
    {
       $this->standarisasi($phone_number);

       if(
           $this->searchInArray(
               $phone_number, 
               $this->telkomselPrefix()
           )
       ) {
           return true;
       }
       
       return false;
    }

    /**
     * Mendeteksi apakah nomor telepon ini
     * adalah nomor smartfren?
     */

    public function isSmartfren($phone_number = null): bool
    {
       $this->standarisasi($phone_number);

       if(
           $this->searchInArray(
               $phone_number, 
               $this->smartfrenPrefix()
           )
       ) {
           return true;
       }
       
       return false;
    }

    /**
     * Mendeteksi apakah nomor telepon ini
     * adalah nomor Three?
     */

    public function isThree($phone_number = null): bool
    {
       $this->standarisasi($phone_number);

       if(
           $this->searchInArray(
               $phone_number, 
               $this->threePrefix()
           )
       ) {
           return true;
       }
       
       return false;
    }

    /**
     * Class yang digunakan untuk mendeteksi didalam array
     * prefix
     */
    protected function searchInArray($key = null, $array = [])
    {
        for ($i=0; $i < count($array); $i++) { 
            if (strpos($key, $array[$i]) !== false) {
                return true;
            }
        }
    }

    /**
     * Definisi standarisasi nomor telepon
     * yang diinputkan
     */
    protected function standarisasi($phone_number = null)
    {
        if(empty($phone_number)) {
            throw new Exception("Nomor hp tidak boleh kosong");
        }
        
        if (strpos($phone_number, "+62") !== false) {
            throw new Exception("Awal nomor hp harus 0, tidak boleh mengandung +62");
        }

        if (!is_numeric($phone_number)) {
            throw new Exception("Masukan nomor hp dengan benar");
        }
    }

}   
