<?php namespace Evolco\SwaggerDocs\Formatters;

use Evolco\SwaggerDocs\Exceptions\ExtensionNotLoaded;

/**
 * Class YamlFormatter
 * @package Evolco\SwaggerDocs\Formatters
 */
class YamlFormatter extends AbstractFormatter {

    /**
     * @inheritDoc
     * @return string
     * @throws ExtensionNotLoaded
     */
    public function format(): string {
        if (!extension_loaded('yaml')) {
            throw new ExtensionNotLoaded('YAML extends must be loaded to use the `yaml` output format');
        }
        return yaml_emit($this->documentation);
    }

}
