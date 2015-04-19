<?php

namespace Algad\Facebook\Models;

use Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];
    // A unique code
    public $settingsCode = 'algad_facebook_settings';
    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

}
