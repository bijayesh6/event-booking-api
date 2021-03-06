<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class EtCustomers extends Model 
{    
    protected $table = 'et_customers';
    protected $fillable = [
        'unique_code',
				'boxoffice_id',
        'email',
        'phone',
        'firstname',
        'lastname',
        'email_verify',
        'image'
    ];    
    
}