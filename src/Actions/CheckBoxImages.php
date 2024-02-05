<?php

namespace ronylicha\CheckBoxImages\Actions;

use Filament\Forms\Components\Checkbox;

class CheckBoxImages extends Checkbox
{
    protected string $view = 'checkboximages::components.checkbox-button-image';

    protected function setUp(): void
    {
        parent::setUp();
    }
}
