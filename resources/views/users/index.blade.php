@extends('layouts.app')
@include('layouts.partials.datatables_css')
@push('page-styles')
@endpush
@section('content')
    <div id="page-container" class="">
        <main id="main-container">
            <!-- Hero -->
            <div class="content">
                <div
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center text-center text-md-start">
                    <div class="flex-grow-1 mb-1 mb-md-0">
                        <h1 class="h3 fw-bold mb-1">
                            Manage User Accounts
                        </h1>
        
                    </div>
                    <div class="mt-3 mt-md-0 ms-md-3 space-x-1"> 
                            <button type="button" class="btn btn-primary me-1 mb-0"
                                onclick="location.href='{{ url('users/create') }}';">
                                <i class="fa fa-fw fa-plus me-1"></i> Add
                            </button> 
                    </div>
        
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Dynamic Table Full -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Manage Users</h3> 
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter data-table">
                            <thead>
                                <tr> 
                                    <th>SrNo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th> 
                                    <th>Status</th> 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table> 
                    </div>
                </div>
                <!-- END Dynamic Table Full -->
            </div>
        </main>
    </div>
@endsection

@push('page-scripts')
@include('layouts.partials.datatables_scripts')

<script type="text/javascript">
 
    $(function() { 
        var table = $('.data-table').DataTable({
            "serverSide": true,
            processing: true,
            "autoWidth": false,
            searching: false,
            ajax: {
                url: "{{ url('users') }}",
                data: function(d) { }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },  
                {
                    data: 'email',
                    name: 'email'
                }, 
                {
                    data: 'roleName',
                    name: 'roleName'
                }, 
                {
                    data: 'status',
                    name: 'status'
                }, 
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        table.on('draw', function() {
           
        }); 
    });
</script>
  @endpush
