<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class PageHeader extends Component
{

    public $backurl,$currenturl,$title,$backtitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($backurl,$currenturl,$title,$backtitle)
    {
        $this->backurl=$backurl;
        $this->currenturl=$currenturl;
        $this->title=$title;
        $this->backtitle=$backtitle;
    }

  
    public function render()
    {
        return view('components.common.page-header',[
            'backurl'=>$this->backurl,
            'currenturl'=>$this->currenturl,
            'title'=>$this->title,
            'backtitle'=>$this->backtitle
        ]);
    }
}
