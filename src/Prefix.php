<?php 

/**
 * Class yang digunakan untuk mendefinisikan prefix
 * nomor telepon, yang akan digunakan nantinya
 */

namespace ofi\deteksinohpindonesia; 

class Prefix {
    /** 
     * Mendefinisikan prefix nomor indosat
     */
    
    protected $indosat_prefix = ['0814','0815','0816','0855','0856','0857','0858'];

    /**
     * Mendefinisikan prefix nomor XL
     */

    protected $xl_prefix = ['0817','0818','0819','0859','0878','0877'];

    /**
     * Mendefinisikan prefix nomor axis
     */

    protected $axis_prefix = ['0838','0837','0831','0832'];

    /**
     * Mendefinisikan prefix nomor Telkomsel
     */

    protected $telkomsel_prefix = ['0812','0813','0852','0853','0821','0823','0822','0851'];

    /**
     * Mendefinisikan prefix nomor smartfren
     */

    protected $smartfren_prefix = ['0881','0882','0883','0884','0885','0886','0887','0888']; 

    /**
     * Mendefinisikan prefix nomor three
     */

    protected $three_prefix = ['0896','0897','0898','0899','0895'];

    /**
     * Get Indosat prefix array 
     */
    public function indosatPrefix(): array
    {
        return $this->indosat_prefix;
    }

    /**
     * Get Xl prefix array 
     */
    public function xlPrefix(): array
    {
        return $this->xl_prefix;
    }

    /**
     * Get Axis prefix array 
     */
    public function axisPrefix(): array
    {
        return $this->axis_prefix;
    }

    /**
     * Get Telkomsel prefix array 
     */
    public function telkomselPrefix(): array
    {
        return $this->telkomsel_prefix;
    }

    /**
     * Get Smartfren prefix array 
     */
    public function smartfrenPrefix(): array
    {
        return $this->smartfren_prefix;
    }

    /**
     * Get Three prefix array 
     */
    public function threePrefix(): array
    {
        return $this->three_prefix;
    }
}