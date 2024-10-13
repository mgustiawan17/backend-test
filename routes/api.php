<?php

use App\Actions\SamplePermissionApi;
use App\Actions\SampleRoleApi;
use App\Actions\SampleUserApi;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\SubFoldersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/folders', [FoldersController::class, 'index']);
Route::get('/subfolders', [SubFoldersController::class, 'index']);
Route::get('/subfolders/{id}', [SubFoldersController::class, 'getBFolderId']);
Route::get('/files/{id}', [FilesController::class, 'getSubfolderId']);
