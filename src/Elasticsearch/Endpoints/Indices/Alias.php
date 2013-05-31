<?php
/**
 * User: zach
 * Date: 05/31/2013
 * Time: 15:31:17 pm
 */

namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Alias
 * @package Elasticsearch\Endpoints\Indices
 */
class Alias extends AbstractEndpoint
{

    /**
     *TODO Validate auto-generated file
     *     Implement per-class specific functions if required

{
  "indices.alias": {
    "documentation": "http://www.elasticsearch.org/guide/reference/api/admin-indices-aliases/",
    "methods": ["GET", "POST"],
    "url": {
      "path": "/_aliases",
      "paths": ["/_aliases", "/{index}/_aliases"],
      "parts": {
        "index": {
          "type" : "list",
          "description" : "A comma-separated list of index names to filter aliases"
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
      "description" : "The definition of `actions` to perform"
    }
  }
}


     */


    /**
     * @return string
     */
    protected function getURI()
    {

        $uri   = '/_aliases';
        $index = $this->index;

        if (isset($index) === true) {
            $uri = "/$index/_aliases";
        }
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
        //TODO Fix Me!
        return 'GET,POST';
    }
}