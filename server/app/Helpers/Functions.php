<?php 

function notFoundResponse($message = null) {
    $response = [
        'status_code' => 404,
        'status' => 'error',
        'data' => [],
        'message' => $message ? $message : "Không tìm thấy"
    ];
    return response()->json($response, $response['status_code']);
}

function deletedResponse($message = null) {
    $response = [
        'status_code' => 204,
        'status' => 'success',
        'data' => [],
        'message' => $message ? $message : "Xóa thành công"
    ];
    return response()->json($response, $response['status_code']);
}

function showResponse($data, $message = null) {

    $response = [
        'status_code' => 200,
        'status' => 'success',
        'data' => $data,
        'message' => $message ? $message : "Lấy thông tin thành công"
    ];
    return response()->json($response, $response['status_code']);
}

function clientErrorResponse($data, $message = null) {
    $response = [
        'status_code' => 422,
        'status' => 'error',
        'data' => $data,
        'message' => $message ? $message : "Lỗi nhập liệu"
    ];
    return response()->json($response, $response['status_code']);
}

function errorLogin($message = null) {
    $response = [
        'status_code' => 401,
        'status' => 'error',
        'data' => [],
        'message' => $message ? $message : "Thông tin đăng nhập không chính xác"
    ];
    return response()->json($response, $response['status_code']);
}

function errorSystem($message = null) {
    $response = [
        'status_code' => 500,
        'status' => 'error',
        'data' => [],
        'message' => $message ? $message : "Lỗi hệ thống"
    ];
    return response()->json($response, $response['status_code']);
}