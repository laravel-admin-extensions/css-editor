<?php

namespace Encore\CssEditor;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class CssEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        if (! CssEditor::boot()) {
            return ;
        }

        Admin::booting(function () {
            Form::extend('css', Editor::class);
            Form::extend('scss', Scss::class);
            Form::extend('less', Less::class);
        });
    }
}