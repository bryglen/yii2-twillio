<?php
/**
 * @author Bryan Tan <bryantan16@gmail.com>
 */

namespace bryglen\twillio;

use yii\base\Component;
use yii\base\InvalidConfigException;

class Twillio extends Component
{
    public $sid;
    public $token;

    private $_client = null;

    public function init()
    {
        if (!$this->sid) {
            throw new InvalidConfigException('SID is required');
        }
        if (!$this->token) {
            throw new InvalidConfigException('Token is required');
        }
    }

    public function getClient()
    {
        if ($this->_client === null) {
            $client = new \Services_Twilio($this->sid, $this->token);

            $this->_client = $client;
        }

        return $this->_client;
    }
} 