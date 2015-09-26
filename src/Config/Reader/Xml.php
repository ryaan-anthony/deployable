<?php
namespace Deployable\Config\Reader;

use XMLReader;
use Zend\Config\Reader\Xml as ZendXml;

class Xml extends ZendXml
{
    /**
     * Process the next inner element.
     *
     * @return mixed
     */
    protected function processNextElement()
    {
        $children = [];
        $text     = '';

        while ($this->reader->read()) {
            if ($this->reader->nodeType === XMLReader::ELEMENT) {
                if ($this->reader->depth === 0) {
                    return $this->processNextElement();
                }

                $attributes = $this->getAttributes();
                $name       = $this->reader->name;

                if ($this->reader->isEmptyElement) {
                    $child = [];
                } else {
                    $child = $this->processNextElement();
                }

                if ($attributes) {
                    if (is_string($child)) {
                        $child = ['_' => $child];
                    }

                    if (! is_array($child)) {
                        $child = [];
                    }

                    $child = array_merge($child, $attributes);
                }

                if (isset($children[$name])) {
                    if (!is_array($children[$name]) || !array_key_exists(0, $children[$name])) {
                        $children[$name] = [$children[$name]];
                    }

                    $children[$name][] = $child;
                } else if($this->reader->depth === 1) {
                    $children[$name] = [$child];
                } else {
                    $children[$name] = $child;
                }
            } elseif ($this->reader->nodeType === XMLReader::END_ELEMENT) {
                break;
            } elseif (in_array($this->reader->nodeType, $this->textNodes)) {
                $text .= $this->reader->value;
            }
        }

        return $children ?: $text;
    }
}
