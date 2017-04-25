<?php

namespace App;

use App\Events\PostWasPublished;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['active','votes','title','body'];

    public function archive()
    {
        $this->update(['active' => false]);
    }

    public function activate()
    {
        $this->update(['active' => true]);
    }

    protected $events = [
        'created' => PostWasPublished::class
    ];
}
