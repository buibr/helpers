<?php

function created_json_response(...$arguments): \Illuminate\Http\JsonResponse
{
    $data = ['success' => true];

    foreach ($arguments as $argument => $value) {
        $data = array_merge($data, $value);
    }

    return response()->json($data, 201);
}

function success_json_response(...$arguments): \Illuminate\Http\JsonResponse
{
    $data = ['success' => true];

    foreach ($arguments as $argument => $value) {
        $data = array_merge($data, $value);
    }

    return response()->json($data);
}

function delete_json_success($id, ...$arguments = []): \Illuminate\Http\JsonResponse
{
    $data = ['success' => true, 'id' => $id];

    foreach ($arguments as $argument => $value) {
        $data = array_merge($data, $value);
    }

    return response()->json($data, 204);
}
