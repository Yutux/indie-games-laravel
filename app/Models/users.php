<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class users extends Model implements Authenticatable 
{
    use HasFactory;

    use BasicAuthenticatable;

    protected $fillable = ['name', 'lastname', 'pseudo', 'email', 'password'];
    public function getAuthPassword()
    {
        return $this->password;
    }
}
