@extends('layouts.admin_layout')

@section('title', 'University List')

@section('content')

    <div class="content-header">
    </div>

    <section class="content ">

        <div class="container-fluid">

            <div class="row">

                @include('validation_message.validation_message')

                <div class="col-sm-12">

                    <div class="card bg-white user-detail-wrap">

                        <div class="card-header  bg-white">

                            <h4 class=""> List <span class="float-end"><a href="{{ route('admin.university.create') }}"
                                        class="btn btn-primary">Add</a></span></h4>

                        </div>

                        <div class="card-body account-setting-wrap">

                            <div class="col-12">

                                <div class="row">

                                    <div class="table-responsive listing-table">

                                        <table class="table table-bordered table-striped w-100" id="size_table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>University Name</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
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

                "responsive": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('admin.university.universityAjax') }}",
                },
                "columns": [{
                        "data": "sr_no"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "action"
                    },
                ],
                "columnDefs": [

                    {
                        "targets": 3,
                        render: function(data, type, row, meta) {


                            html = `<ul class="p-0">` +
                                `<li class="list-inline-item">` +

                                `<a href="` + row.edit + `"` +

                                `class="info-btn">` +

                                `<i class="fa fa-edit"></i>` +

                                `</a>` +

                                `</li>` + 

                                `<li class="list-inline-item">

                                    <div style="position: relative;" data-table=""

                                    data-id="`+row.id+`"

                                    data-status=" `+row.send_mail+`"

                                    class=" update_status "

                                    data-url="`+row.send_mail+`"

                                    data-title="Are you sure want to send the email?" data-icon=""

                                    data-success="Email send successfully!"

                                    data-cancel="Email send cancel!" title="Send Email">

                                    <label>

                                    Send Mail

                                    </label>

                                    </div>

                                    </li>`;


                            return html + `</ul>`;
                        }
                    }
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

        });
    </script>

@endsection
