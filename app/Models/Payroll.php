<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'empName',
        'monthYear',
        'totalWorkDur',
        'amtPerDur',
        'allow',
        'deduct',
        'gross'
             
    ];


    public function grossPay(){
		$calc = 0;
		
		$calc = ($this->totalWorkDur * $this->amtPerDur) + $this->allow -$this->deduct ;
		return $this->gross = $calc;
		
	}
}
