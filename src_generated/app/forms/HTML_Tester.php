<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use action\Element; 


class HTML_Tester extends AbstractForm
{


    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('HTML_Tester');

        
    }

    /**
     * @event textArea.construct 
     */
    function doTextAreaConstruct(UXEvent $e = null)
    {    
        
    }


    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::setText($this->form('App')->label, uiText($this->edit));
		Element::setText($this->form('App')->browser, uiText($this->textArea));
		app()->showFormAndWait('App');

        
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::setText($this->edit, '');
		Element::setText($this->textArea, '');
		$this->toast('Готово!');

        
    }









}
