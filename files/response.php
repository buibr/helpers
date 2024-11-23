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

function delete_json_success($id): \Illuminate\Http\JsonResponse
{
    return response()->json([
        'success' => true,
        'id'      => $id,
    ], 204);
}
