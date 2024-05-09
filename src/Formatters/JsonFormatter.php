<?php namespace Evolco\SwaggerDocs\Formatters;

use Evolco\SwaggerDocs\Exceptions\ExtensionNotLoaded;

/**
 * Class JsonFormatter
 * @package Evolco\SwaggerDocs\Formatters
 */
class JsonFormatter extends AbstractFormatter {

    /**
     * @inheritDoc
     * @return string
     * @throws ExtensionNotLoaded
     */
    public function format(): string {
        if (!extension_loaded('json')) {
            throw new ExtensionNotLoaded('JSON extends must be loaded to use the `json` output format');
        }
        return json_encode($this->documentation, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

}
