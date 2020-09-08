<?php 
class tl_page_disable_alias extends \Backend
{
    public function disableAlias()
    {
        if (!$this->User->isAdmin)
        {
            $GLOBALS['TL_DCA']['tl_page']['fields']['alias']['eval']['disabled'] = true;
        }
    }
}