<?php
namespace DebugkitExtras\Panel;

use DebugKit\DebugPanel;


class ReadConfigurePanel extends DebugPanel
{
    public $plugin = 'DebugkitExtras'; 


    public function shutdown(\Cake\Event\EventInterface $event)
    {
        $this->_data['data'] = \Cake\Core\Configure::read();
    }
}
