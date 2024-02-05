<?php

namespace ronylicha\CheckBoxImages\Actions;

use Filament\Forms\Components\CheckboxList;

class CheckBoxImages extends CheckboxList
{
    protected string $view = 'checkboximages::components.checkbox-button-image';

    protected function setUp(): void
    {
        parent::setUp();
    }
}
