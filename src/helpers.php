<?php

if (!function_exists('api')) {
    /**
     * Create a new APIResponse instance.
     *
     * @param int    $status
     * @param string $message
     * @param array  $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function api($status = 200, $message = '', $data = [], ...$extraData)
    {
        if (0 === func_num_args()) {
            return app('api.response');
        }

        return app('api.response')->response($status, $message, $data, ...$extraData);
    }
}
