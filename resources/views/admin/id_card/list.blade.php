@extends('layouts.admin_layout')

@section('title', 'Id Card List')

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
                                                    <th>Applicant Name</th>
                                                    <th>Father Name</th>
                                                    <th>Res Address</th>
                                                    <th>Place of Practice</th>
                                                    <th>Mobile No</th>
                                                    <th>Phone No</th>
                                                    <th>Email</th>
                                                    <th>Issue Date</th>
                                                    <th>Member Association</th>
                                                    <th>Enrolment Date</th>
                                                    <th>Enrolment No</th>
                                                    <th>Enrolment Year</th>
                                                    <th>Identity Card No</th>
                                                    <th>Pic</th>
                                                    <th>Sign</th>
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
                    "url": "{{ route('admin.id_card.id_cardAjax') }}",
                },
                "columns": [{
                        "data": "sr_no"
                    },
                    {
                        "data": "applicant_name"
                    },
                    {
                        "data": "father_name"
                    },
                    {
                        "data": "res_address"
                    },
                    {
                        "data": "place_of_practice"
                    },
                    {
                        "data": "mobile_no"
                    },
                    {
                        "data": "phone_no"
                    },
                    {
                        "data": "email_address"
                    },
                    {
                        "data": "issue_date"
                    },
                    {
                        "data": "member_association"
                    },
                    {
                        "data": "enrolment_date"
                    },
                    {
                        "data": "enrolment_number"
                    },
                    {
                        "data": "enrolment_year"
                    },
                    {
                        "data": "card_number"
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