<?php

namespace Zuora\Test\Exception;


use Zuora\Exception\ApiException;
use Zuora\Http\Response;

class ApiExceptionTest extends \PHPUnit_Framework_TestCase {

    protected $error_data = '{
  "success": false,
  "processId": "3F7EA3FD706C7E7C",
  "reasons":  [
    {
      "code": 53100020,
      "message": " {com.zuora.constraints.either_or_both}"
    },
    {
      "code": 53100320,
      "message": "\'termType\' value should be one of: TERMED, EVERGREEN"
    }
  ]
}';

    public function testApiExceptionToString()
    {
        $response = new Response();
        $response->setData(json_decode($this->error_data, true));

        $exception = new ApiException($response);

        $this->assertEquals($exception->getProcessId(), '3F7EA3FD706C7E7C');

        $this->assertCount(2, $exception->getReasons());

        foreach ($exception->getReasons() as $reason) {
            $this->assertTrue(in_array($reason->getCode(), array(53100020, 53100320)));
        }

        $string = $exception->__toString();
        $this->assertContains('3F7EA3FD706C7E7C', $string);

        foreach ($exception->getReasons() as $reason) {
            $this->assertContains((string) $reason->getCode(), $string);
            $this->assertContains($reason->getMessage(), $string);
        }
    }

} 