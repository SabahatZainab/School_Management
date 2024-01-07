@extends('layouts.app')
@section('content')

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Update User</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12 space-y-5">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!} --}}
                    <form id="users_form" enctype="multipart/form-data">


                        <input type="hidden" name='id' id='id' value="{{ $user->id }}">
                        <div class = "row g-4">
                            <div class="col-4">
                                <label for="input42" class="col-sm-4 col-form-label">Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control"
                                    value='{{ $user->name ?? '' }}'>
                            </div>
                            <div class="col-4">
                                <label for="input43" class="col-sm-4 col-form-label">Email</label>
                                <input type="email" name="email" placeholder="Enter  Address" class="form-control"
                                    value='{{ $user->email ?? '' }}'>
                            </div>
                            <div class="col-4">
                                <label for="input45" class="col-sm-4 col-form-label">Password</label>
                                <input type="password" name="password" placeholder="Choose Password" class="form-control"
                                    value=''>
                            </div>
                            <div class="col-4">
                                <label for="input45" class="col-sm-4 col-form-label">Confirm</label>
                                <input type="password" name="confirm-passwor" placeholder="Confirm Password"
                                    class="form-control" value=''>
                            </div>
                            <div class="col-4">
                                <label for="input45" class="col-sm-4 col-form-label">Role</label>
                                {{--   {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control select2','multiple')) !!} --}}
                                <select name="roles[]" class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role }}"
                                            {{ in_array($role, $userRole) ? 'selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-alt-primary px-4">Update</button>
                                <a class="btn btn-alt-danger px-4" href="{{ route('users.index') }}">Back</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('page-scripts')
    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <script>
        $(function() {
            //Submit Form
            $("#users_form").validate({
                errorElement: 'span',
                rules: {
                    name: {
                        required: true,
                        maxlength: 100,
                        alphanumeric: true,
                    },
                    'roles[]': {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    /*   password: {
                          required: true,
                          minlength: 6,
                          maxlength: 15,
                      },
                      confirm_password: {
                          minlength: 6,
                          maxlength: 15,
                          equalTo: "#password"
                      }, */
                },
                messages: {
                    confirm_password: {
                        equalTo: "Confirm Password should be same as Password",
                    },
                },
                submitHandler: function(form) {
                    $('#processing-spinner').show();
                    var form_id = "users_form";
                    var form_data = getAllFieldsInFormDataFormat(form_id);
                    form_data.append("id", $("#id").val());

                    axios.post(
                            "{{ url('users/update') }}",
                            form_data
                        ).then(function(response) {
                            const obj = response.data;
                            console.log(obj);
                            if (obj.success == true) {
                                successSweetAlert(obj.message);
                                $("#id").val(obj.data.id);
                                setTimeout(function() {
                                    window.location.href = "{{ url('users') }}"
                                }, 1000);
                            } else {

                                somethingWentWrongSweetAlert(obj.message);
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                            if (error.response.status == 403) {
                                somethingWentWrongSweetAlert(error.response.data.message);
                                setTimeout(function() {
                                    window.location.href = "{{ url('users') }}"
                                }, 1000);
                            }
                            msg = error.response.data.message;
                            var errorMessage = jsonErrorMessage(msg);
                            somethingWentWrongSweetAlert(msg);
                        });
                }
            });
            jQuery.validator.addMethod("alphanumeric", function(value, element) {
                return this.optional(element) || /[a-zA-Z]/.test(value) && /^[\w\s\-._]+$/i.test(value)
            }, "This field name format is invalid");

            function jsonErrorMessage(value) {
                if (value.includes('{')) {
                    message = value.split('{');
                    split_message = message[1].split('"');
                    real_message = '';
                    for (i = 3; i <= split_message.length; i += 4) {
                        real_message += split_message[i] + "\n";
                    }
                    return real_message;
                }

                return value;
            }
            $("#password, #confirm_password").keyup(function() {
                const str = $(this).val();

                var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

                if (format.test(str)) {
                    customeWarningAlert("Special characters not allowed.");
                }
                if (str != "") {
                    $(this).val(str.replace(/[^a-zA-Z0-9]/g, ""));
                }
            });
        });
    </script>
@endpush
