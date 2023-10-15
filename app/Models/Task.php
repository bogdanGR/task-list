<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // can be used for mass assigment (create, update static methods)
    protected $fillable = ['title', 'description', 'long_description'];

    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
    // opposite of fillable
    //protected $guarded = ['passsword'];

//    public $id;
//    public $title;
//    public $description;
//    public $long_description;
}
