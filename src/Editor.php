<?php

namespace Encore\CssEditor;

use Encore\Admin\Form\Field;
use Jxlwqq\CodeMirror\CodeMirror;

class Editor extends Field
{
    protected $mode = 'text/css';

    /**
     * {@inheritdoc}
     */
    protected $view = 'laravel-admin-code-mirror::editor';

    /**
     * {@inheritdoc}
     */
    protected static $css = [
        CodeMirror::ASSETS_PATH . 'lib/codemirror.css',
        CodeMirror::ASSETS_PATH . 'addon/hint/show-hint.css',
    ];

    /**
     * {@inheritdoc}
     */
    protected static $js = [
        CodeMirror::ASSETS_PATH . 'lib/codemirror.js',
        CodeMirror::ASSETS_PATH . 'mode/css/css.js',
        CodeMirror::ASSETS_PATH . 'addon/hint/show-hint.js',
        CodeMirror::ASSETS_PATH . 'addon/hint/css-hint.js',
    ];

    /**
     * Set editor height.
     *
     * @param int $height
     * @return $this
     */
    public function height($height = 10)
    {
        return $this->addVariables(compact('height'));
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $options = array_merge([
            'mode'        => $this->mode,
            'lineNumbers' => true,
            'extraKeys'   => ["Ctrl-Space" => "autocomplete"]
        ],
            CssEditor::config('config', [])
        );

        $options = json_encode($options);

        $this->script = <<<EOT
CodeMirror.fromTextArea(document.getElementById("{$this->id}"), $options);
EOT;

        return parent::render();
    }
}