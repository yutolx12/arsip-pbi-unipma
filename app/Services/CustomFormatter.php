<?php

namespace App\Services;

use Monolog\Formatter\NormalizerFormatter;

class CustomFormatter extends NormalizerFormatter
{
    public function format(array $record): array
    {
        // Format the record using the parent format method
        $result = parent::format($record);

        // Add custom fields
        $result['app_name'] = env('APP_NAME');
        $result['@timestamp'] = $this->normalize($record['datetime']);

        // Convert the result to JSON and then decode back to array
        return json_decode($this->toJson($result) . "\n", true);
    }
}
