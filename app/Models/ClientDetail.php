<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDetail extends Model
{
    use HasFactory;

   

    public function client_attachments(){
        return $this->hasMany(ClientAttachment::class, 'client_id','client_id');
    }



    
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
       ];
       
    protected $table = 'client_details';
    protected $primaryKey = 'client_id';
    public $timestamps = false;   
}
