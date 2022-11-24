@extends('layouts.admin_layout')

@section('title', 'Insurance List')

@section('content')

    <div class="content-header">
    </div>

    <section class="content ">

        <div class="container-fluid">

            <div class="row">

                @include('validation_message.validation_message')

                <div class="col-sm-12">

                    <div class="card bg-white user-detail-wrap">

                        {{-- <div class="card-header  bg-white">

                            <h4 class=""> List <span class="float-end"><a href="{{ route('admin.college.create') }}"
                                        class="btn btn-primary">Add</a></span></h4>

                        </div> --}}

                        <div class="card-body account-setting-wrap">

                            <div class="col-12">

                                <div class="row">

                                    <div class="table-responsive11 listing-table">

                                        <table class="table table-bordered table-striped w-100" id="size_table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Fund Type</th>
                                                    <th>Applicant Name</th>
                                                    <th>Bar Association</th>
                                                    <th>Enrolment No</th>
                                                    <th>Enrolment Year</th>
                                                    <th>Date of Birth</th>
                                                    <th>Pic</th>
                                                    <th>Sign</th>
                                                    <th>Enrolment Certificate</th>
                                                    <th>Residence Certificate</th>
                                                    {{-- <th>Action</th> --}}
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

    </section>

@stop

@section('scripts')

    <script>
        jQuery(document).ready(function() {

            jQuery('#size_table').DataTable({

                "responsive": false,
                scrollX: true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('admin.insurance.insuranceAjax') }}",
                },
                "columns": [{
                        "data": "sr_no"
                    },
                    {
                        "data": "fund_type"
                    },
                    {
                        "data": "applicant_name"
                    },
                    {
                        "data": "bar_association"
                    },
                    {
                        "data": "enrolment_no"
                    },
                    {
                        "data": "enrolment_year"
                    },
                    {
                        "data": "date_of_birth"
                    },
                    { "orderable": false, "data": "profile_pic",
                        render: function ( data ) {
                            return '<img src='+data+' width="100px">' ;
                        }
                    },
                    { "orderable": false, "data": "sign",
                        render: function ( data ) {
                            return '<img src='+data+' width="100px">' ;
                        }
                    },
                    { "orderable": false, "data": "enrolment_certificate",
                        render: function ( data ) {
                            return '<img src='+data+' width="100px">' ;
                        }
                    },
                    { "orderable": false, "data": "residence_certificate",
                        render: function ( data ) {
                            return '<img src='+data+' width="100px">' ;
                        }
                    },
                    // { "orderable": false, "data": "action",
                    // render: function(data, type, row, meta) {

                    //     var status = row['status'] == 1 ? "checked" : "";

                    //     html = `<ul class="p-0">` +
                    //         `<li class="list-inline-item">` +

                    //         `<a href=""` +

                    //         `class="info-btn1 openRemark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-url="`+row.remarks_url+`">` +

                    //         `Verify` +

                    //         `</a>` +

                    //         `</li>`;


                    //     return html + `</ul>`;
                    //     }
                    // },
                ],
                // "dom": 'lBfrtip',
                // "buttons": [        
                //     {
                //         extend: 'csv',
                //         exportOptions: {
                //             columns: [ 1, 2, 3]
                //         },
                //     },

                //     {
                //         extend: 'pdf',
                //         exportOptions: {
                //             columns: [ 1, 2, 3],
                //             alignment: 'center',
                //         },
                //     },

                //     {
                //         extend: 'print',
                //         exportOptions: {
                //             columns: [ 1, 2, 3]
                //         }
                //     },       
                // ],
                "lengthMenu": [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                "sPaginationType": "full_numbers",
            });

            $(document).on('click', '.openRemark', function() {
                // alert('okok');
                $('#exampleModal').show();
            });

        });
    </script>

@endsection
