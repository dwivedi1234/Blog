@extends('admin.layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
     
    </div>

    

    <h2>Latest 10 Blogs</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
            <th scope="col">Header</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1,001</td>
            <td>random</td>
            <td>data</td>
            <td>placeholder</td>
            <td>text</td>
          </tr>
          <tr>
            <td>1,002</td>
            <td>placeholder</td>
            <td>irrelevant</td>
            <td>visual</td>
            <td>layout</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>data</td>
            <td>rich</td>
            <td>dashboard</td>
            <td>tabular</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>information</td>
            <td>placeholder</td>
            <td>illustrative</td>
            <td>data</td>
          </tr>
          <tr>
            <td>1,004</td>
            <td>text</td>
            <td>random</td>
            <td>layout</td>
            <td>dashboard</td>
          </tr>
          <tr>
            <td>1,005</td>
            <td>dashboard</td>
            <td>irrelevant</td>
            <td>text</td>
            <td>placeholder</td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </main>
@endsection
