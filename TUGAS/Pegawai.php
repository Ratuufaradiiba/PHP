<?php 
class Pegawai{
    protected $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    const DAFTAR = 'Daftar Pegawai PT Anu';
    
    public function __construct($no, $pegawai, $jbtn, $agama, $status){
        $this->nip = $no;
        $this->nama = $pegawai;
        $this->jabatan = $jbtn;
        $this->agama = $agama;
        $this->status = $status;
    }
    
    public function gapok(){
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
                break;
        }
        return $gapok;
    }
    
    public function tunjab(){ 
       $tunjab = $this->gapok() * 0.2;
       return $tunjab;
    }
    
    public function tunkel(){
        $tunkel = ($this->status == 'Menikah') ? $this->gapok() * 0.1 : 0;
        return $tunkel;
    }

    public function gakot(){
        $gakot = $this->gapok() + $this->tunjab() +$this->tunkel();
        return $gakot;
    }
    
    public function zakatprof(){
      $zakat = ($this->agama == 'Islam' && $this->gakot() >= 6000000) ? $this->gapok() * 0.025 : 0 ;
        return $zakat;
    }

    public function hompey(){
        $hompey = $this->gakot() - $this->zakatprof();
        return $hompey;
    }

    public function mencetak(){
        echo '<h3>'.self::DAFTAR.'</h3>';
        echo ' NIP Pegawai : '.$this->nip;
        echo '<br/> Nama Pegawai : '.$this->nama;
        echo '<br/> Jabatan : '.$this->jabatan;
        echo '<br/> Agama : '.$this->agama;
        echo '<br/> Status : '.$this->status;
        echo '<br/> Gaji Pokok : '.number_format($this->gapok(), 0, ',','.');
        echo '<br/> Tunjangan Jabatan : '.number_format($this->tunjab(), 0, ',','.');
        echo '<br/> Tunjangan Keluarga : '.number_format($this->tunkel(), 0, ',','.');
        echo '<br/> Zakat : '.number_format($this->zakatprof(), 0, ',','.');
        echo '<br/> Gaji Bersih : '.number_format($this->hompey(), 0, ',','.');
    }
}   