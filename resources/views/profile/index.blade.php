@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <h1 class="mb-3">Profile</h1>
    <p class="text-muted">個人資料 / 履歷內容編輯(Phase 1 先佔位，Phase 4 才接資料表)。</p>

    <form>
        <div class="mb-3">
            <label class="form-label">Display Name</label>
            <input class="form-control" value="Yu-Xiang" disabled>
        </div>
        <button class="btn btn-primary" type="button" disabled>Save (TBD)</button>
    </form>
@endsection
