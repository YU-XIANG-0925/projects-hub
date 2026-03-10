@extends('layouts.app')

@section('title', 'BMI Calculator')

@section('content')
  <h1 class="mb-3">BMI Calculator</h1>
  <p class="text-muted">這是一個 Blade 練習頁 (之後可拆 JS/CSS)。</p>

  <div class="card">
    <div class="card-body">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">身高 (cm)</label>
          <input id="height" class="form-control" type="number" min="1" placeholder="170">
        </div>
        <div class="col-md-6">
          <label class="form-label">體重 (kg)</label>
          <input id="weight" class="form-control" type="number" min="1" placeholder="65">
        </div>
      </div>

      <div class="d-flex gap-2 mt-3">
        <button id="calc" class="btn btn-primary" type="button">計算</button>
        <button id="reset" class="btn btn-outline-secondary" type="button">重設</button>
      </div>

      <hr class="my-4">
      <div>
        <div class="text-muted small">結果</div>
        <div class="fs-4 fw-bold" id="result">--</div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      var h = document.getElementById("height");
      var w = document.getElementById("weight");
      var out = document.getElementById("result");
      document.getElementById("calc").addEventListener("click", function () {
        var hc = parseFloat(h.value);
        var wk = parseFloat(w.value);
        if (!hc || !wk) {
          out.textContent = "請輸入身高與體重";
          return;
        }
        var m = hc / 100.0;
        var bmi = wk / (m * m);
        out.textContent = bmi.toFixed(1);
      });
      document.getElementById("reset").addEventListener("click", function () {
        h.value = "";
        w.value = "";
        out.textContent = "--";
      });
    })();
  </script>
@endsection
