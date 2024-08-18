<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use action\Media; 


class music extends AbstractForm
{


    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('music');

        
    }

    /**
     * @event button6.click 
     */
    function doButton6Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::stop('1');
		Media::stop('2');
		Media::stop('3');
		Media::stop('4');
		Media::open('res://.data/audio/DVRST, Игорь Скляр, Atomic Heart — Я уеду в Комарово Komarovo (DVRST Phonk Remix) (www.lightaudio.ru).mp3', true, '1');

        
    }

    /**
     * @event button7.click 
     */
    function doButton7Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::pause('1');

        
    }

    /**
     * @event button8.click 
     */
    function doButton8Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::stop('1');
		Media::stop('2');
		Media::stop('3');
		Media::stop('4');
		Media::open('res://.data/audio/Geometry Dash — Космос (www.lightaudio.ru).mp3', true, '2');

        
    }

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::pause('2');

        
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::stop('1');
		Media::stop('2');
		Media::stop('3');
		Media::stop('4');
		Media::open('res://.data/audio/shadowraze — sunder (www.lightaudio.ru).mp3', true, '3');

        
    }

    /**
     * @event button9.click 
     */
    function doButton9Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::pause('3');

        
    }








}
