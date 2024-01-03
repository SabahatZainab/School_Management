@extends('layouts.app')

@section('content')
<!-- Labels on top -->
<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Labels on top</h3>
    </div>
    <div class="block-content block-content-full">
      <div class="row">
        <div class="col-lg-4">
          <p class="fs-sm text-muted">
            An often used layout which is very easy to create with minimal markup
          </p>
        </div>
        <div class="col-lg-8 space-y-5">
          <!-- Form Labels on top - Default Style -->
          <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="example-ltf-email">Email</label>
              <input type="email" class="form-control" id="example-ltf-email" name="example-ltf-email" placeholder="Your Email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-ltf-password">Password</label>
              <input type="password" class="form-control" id="example-ltf-password" name="example-ltf-password" placeholder="Your Password..">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <!-- END Form Labels on top - Default Style -->

          <!-- Form Labels on top - Alternative Style -->
          <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="example-ltf-email2">Email</label>
              <input type="email" class="form-control form-control-alt" id="example-ltf-email2" name="example-ltf-email2" placeholder="Your Email..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-ltf-password2">Password</label>
              <input type="password" class="form-control form-control-alt" id="example-ltf-password2" name="example-ltf-password2" placeholder="Your Password..">
            </div>
            <div class="mb-4">
              <button type="submit" class="btn btn-dark">Login</button>
            </div>
          </form>
          <!-- END Form Labels on top - Alternative Style -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Labels on top -->
@endsection