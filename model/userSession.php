<?php 
require_once 'core/init.php';

// Create the Books model 
class UserSession extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
    protected $table = 'user_session';
}
 
