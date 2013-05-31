<?php
/**
 * User: zach
 * Date: 05/31/2013
 * Time: 15:31:17 pm
 */

namespace Elasticsearch\Endpoints\Indices\Alias;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Put
 * @package Elasticsearch\Endpoints\Indices\Alias
 */
class Put extends AbstractEndpoint
{

    /**
     *TODO Validate auto-generated file
     *     Implement per-class specific functions if required

{
  "indices.alias.put": {
    "documentation": "http://www.elasticsearch.org/guide/reference/api/admin-indices-aliases/",
    "methods": ["PUT"],
    "url": {
      "path": "/{index}/_alias/{name}",
      "paths": ["/{index}/_alias/{name}", "/_alias/{name}", "/{index}/_alias", "/_alias"],
      "parts": {
        "index": {
          "type" : "string",
          "required" : true,
          "description" : "The name of the index with an alias"
        },
        "name": {
          "type" : "string",
          "required" : true,
          "description" : "The name of the alias to be created or updated"
        }
      },
      "params": {
        "timeout": {
          "type" : "time",
          "description" : "Explicit timestamp for the document"
        }
      }
    },
    "body": {
      "description" : "The settings for the alias, such as `routing` or `filter`"
    }
  }
}


     */


    /**
     * @return string
     */
    protected function getURI()
    {

        if (isset($index) !== true) {
            throw new Exceptions\BadMethodCallException(
                'index is required for Put'
            );
        }

        if (isset($name) !== true) {
            throw new Exceptions\BadMethodCallException(
                'name is required for Put'
            );
        }

        $uri   = '/{index}/_alias/{name}';
        $index = $this->index;
        $name = $this->name;

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'timeout',
        );
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'PUT';
    }
}