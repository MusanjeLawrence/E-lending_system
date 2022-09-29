<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAttachment extends Model
{
    use HasFactory;

    

    public function client_detail()
    {
        return $this->belongsTo(ClientDetail::class,'client_id','client_id');
    }
    
    protected $primaryKey = 'client_attachment_id';
    public $timestamps = false;     


}
